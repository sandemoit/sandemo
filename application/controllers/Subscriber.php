<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Subscriber extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('About_model');
    $this->load->model('Setting_model');
    $this->load->model('Signup_model');
  }

  public function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');

    $email = $this->input->post('email', true);
    $data = [
      'email' => $email,
      'nama' => $this->input->post('nama', true)
    ];

    if ($this->form_validation->run() == true) {
      // Memeriksa apakah data tidak kosong
      if (!empty($data)) {
        $this->db->insert('subscriber', $data);
        $this->send_email($email);

        // Tampilkan pesan sukses dan kembali ke halaman utama
        $this->session->set_flashdata('success', 'Data Anda berhasil didaftarkan!');
      } else {
        // Tampilkan pesan error jika data kosong
        $this->session->set_flashdata('error', 'Data Anda gagal didaftarkan!');
      }
    } else {
      $this->session->set_flashdata('warning', 'Data harus di isi semua!');
    }
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function download()
  {
    $data['pimpinan'] = $this->About_model->get_dataUser();
    $data['brand'] = $this->Setting_model->get_brand();
    $data['setting'] = $this->Setting_model->get_setting();
    $data['title'] = 'Download file gratis';
    $this->load->view('frontend/layouts/header', $data);
    $this->load->view('frontend/download');
    $this->load->view('frontend/layouts/footer');
  }

  public function do_download()
  {
    $response = array();

    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('whatsapp', 'Whatsapp', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');

    if ($this->form_validation->run() == false) {
      $validation_errors = validation_errors();
      $response = array('success' => false, 'message' => $validation_errors);
    } else {
      $penerima = $this->input->post('email', true);
      $name = $this->input->post('name', true);
      $no_wa = $this->input->post('whatsapp', true);
      $email = $this->input->post('email', true);

      $subscriber = [
        'email' => $email,
        'nama' => $name,
      ];

      $no_wa = substr_replace($no_wa, '62', 0, 1); // mengubah "08" menjadi "62"
      $no_wa = str_replace('-', '', $no_wa); // menghapus karakter "-" (opsional)

      $save = [
        'whatsapp' => $no_wa,
        'email' => $penerima,
        'name' => $name,
        'subject' => 'Download file',
        'pesan' => 'Download file',
      ];

      $this->db->insert('subscriber', $subscriber);
      $this->db->insert('kontak', $save);

      $this->send_email($penerima);
      // Kirim respons JSON ke JavaScript
      $response = array('success' => true, 'message' => 'Berhasil mengirimkan ke email!');
    }
    header('Content-Type: application/json');
    echo json_encode($response); // Cetak respons JSON ke konsol

  }

  private function send_email($penerima)
  {
    // PHPMailer object
    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host     = EMAIL_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = EMAIL_ALAMAT;
    $mail->Password = EMAIL_PASSWORD;
    $mail->Port     = EMAIL_PORT;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    //Recipients
    $mail->setFrom(EMAIL_ALAMAT, EMAIL_NAMA);
    $mail->addAddress($penerima);     //Add a recipient
    $mail->addReplyTo('infosandemo@gmail.com', 'Information Sandemo IT');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');

    //Content
    $mail->isHTML(true);  //Set email format to HTML
    $mail->Subject = 'Selamat Datang di Sandemo IT!';
    $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        
        <head>
          <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Thank you for subscribing</title>
          <!--[if mso]><style type="text/css">body, table, td, a { font-family: Arial, Helvetica, sans-serif !important; }</style><![endif]-->
        </head>
        
        <body style="font-family: Helvetica, Arial, sans-serif; margin: 0px; padding: 0px; background-color: #ffffff;">
          <table role="presentation"
            style="width: 100%; border-collapse: collapse; border: 0px; border-spacing: 0px; font-family: Arial, Helvetica, sans-serif; background-color: rgb(239, 239, 239);">
            <tbody>
              <tr>
                <td align="center" style="padding: 1rem 2rem; vertical-align: top; width: 100%;">
                  <table role="presentation" style="max-width: 600px; border-collapse: collapse; border: 0px; border-spacing: 0px; text-align: left;">
                    <tbody>
                      <tr>
                        <td style="padding: 40px 0px 0px;">
                          <div style="text-align: center;">
                            <div style="padding-bottom: 20px;"><a href="https://www.sandemoindoteknologi.co.id/"><img src="https://www.sandemoindoteknologi.co.id/assets/frontend/img/logo/sandemo.webp"
                                alt="PT. Sandemo Indo Teknologi" style="width: 189px;"></a></div>
                          </div>
                          <div style="padding: 20px; background-color: rgb(255, 255, 255);">
                            <div style="color: rgb(0, 0, 0); text-align: left;">
                              <h1 style="margin: 1rem 0">Hai Para Pelanggan Setia Sandemo IT!</h1>
                              <p style="padding-bottom: 16px">Kami senang sekali melihat Anda bergabung dengan Sandemo IT Newsletter! Ini adalah tempat
                                terbaik untuk mendapatkan berita teknologi terbaru, tips, dan penawaran khusus dari kami.</p>
                              <p style="padding-bottom: 16px">Dengan berlangganan newsletter kami, Anda akan selalu mendapatkan informasi terkini secara
                                langsung di kotak masuk email Anda berupa promosi dan diskon menarik lainnya pada layanan Sandemo IT.</p>
                              <p style="padding-bottom: 16px">Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami. Kami selalu
                                siap mendengar Anda.</p>
                              <p style="padding-bottom: 16px">Terima kasih telah menjadi bagian dari komunitas Sandemo IT. Jangan lewatkan edisi
                                newsletter berikutnya!</p>
                              <p style="padding-bottom: 16px">Salam,<br><em>Tim Sandemo IT</em></p>
                            </div>
                          </div>
                          <div style="padding-top: 20px; color: rgb(153, 153, 153); text-align: center;">
                            <p style="padding-bottom: 16px">Copyright © 2023, PT. Sandemo Indo Teknologi. All rights reserved.<br>Powered by <a
                                href="https://sandemoindoteknologi.co.id" target="_blank" style="color: inherit; text-decoration: underline">Sandemo
                                IT</a></p>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </body>
        
        </html>';

    // Send email
    if (!$mail->send()) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'
        . $mail->ErrorInfo . '</div>
            ');
      redirect($_SERVER['HTTP_REFERER']);
    } else {
      return true;
    }
  }
}
