<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Kontak extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Setting_model');
  }

  public function index()
  {
    $data['home'] = $this->Setting_model->get_setting();
    $data['setting'] = $this->Setting_model->get_setting();
    $data['title'] = 'Kontak';

    $this->load->view('frontend/layouts/header', $data);
    $this->load->view('frontend/kontak');
    $this->load->view('frontend/layouts/footer', $data);
  }

  public function send()
  {
    // validate form data
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('whatsapp', 'WhatsApp', 'trim|required|numeric');
    $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
    $this->form_validation->set_rules('pesan', 'Message', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      // handle form validation errors
      $this->session->set_flashdata('error', validation_errors());
      redirect('kontak');
    } else {
      $name = trim($this->input->post('name', true));
      $email = trim($this->input->post('email', true));
      $no_wa = trim($this->input->post('whatsapp', true));
      $subject = trim($this->input->post('subject', true));
      $pesan = trim($this->input->post('pesan', true));

      $no_wa = substr_replace($no_wa, '62', 0, 1); // mengubah "08" menjadi "62"
      $no_wa = str_replace('-', '', $no_wa); // menghapus karakter "-" (opsional)

      // insert db kontak
      $save = [
        'name' => $name,
        'email' => $email,
        'whatsapp' => $no_wa,
        'subject' => $subject,
        'pesan' => $pesan,
        'aksi' => 0
      ];
      // insert db subscriber
      $sub = [
        'nama' => $name,
        'email' => $email
      ];
      $this->db->insert('kontak', $save);

      // insert db subscriber email
      $this->load->model('Signup_model');
      $this->db->insert('subscriber', $sub);

      // send message using cURL
      $response = $this->send_message($no_wa, "Terima kasih $name telah membicarakan proyek kepada kami. Kami sangat berharap dapat bekerja sama dengan Anda dalam mewujudkan proyek ini. Silakan tunggu balasan dari tim support kami untuk langkah selanjutnya.\n\n-sit");
      $this->send_email($email, $subject);

      // handle cURL response
      if (strpos($response, 'OK') !== FALSE) {
        $this->session->set_flashdata('error', 'Gagal mengirim pesan.');
      } else {
        $this->session->set_flashdata('success', 'Pesan berhasil terkirim.');
      }

      redirect('kontak');
    }
  }

  private function send_message($no_wa, $message)
  {
    $token = $this->Setting_model->integrasi();
    $ch = curl_init();
    $data = array(
      'recipient_type' => 'individual',
      'to' => $no_wa,
      'type' => 'text',
      'text' => array(
        'body' => $message
      )
    );
    $json_data = json_encode($data);

    curl_setopt_array($ch, array(
      CURLOPT_URL => $token['url_api'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => $json_data,
      CURLOPT_HTTPHEADER => array(
        'Authorization: ' . $token['wagw']
      ),
    ));

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
      // handle cURL error
      $response = curl_error($ch);
    }

    curl_close($ch);

    return $response;
  }

  private function send_email($email, $subject)
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
    $mail->addAddress($email);     //Add a recipient
    $mail->addReplyTo('infosandemo@gmail.com', 'Information Sandemo IT');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
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
                              <h1 style="margin: 1rem 0">Hai Calon Client Sandemo IT,</h1>
                              <p style="padding-bottom: 16px">Terima kasih telah membicarakan proyek kepada kami. Kami sangat berharap dapat bekerja sama dengan Anda dalam mewujudkan proyek ini. Silakan tunggu balasan dari tim support kami untuk langkah selanjutnya.</p>
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

  public function sendwa() //WhatsApp redirect
  {
    // Mengambil nomor HP (nohp) dari database
    $this->db->select('nohp');
    $query = $this->db->get('setting');
    if ($query->num_rows() > 0) {
      $row = $query->row();
      $nowa = $row->nohp;
    }

    $name = urlencode($this->input->post('name', true));
    $email = urlencode($this->input->post('email', true));
    $subject = urlencode('Consultation');
    $pesan = urlencode($this->input->post('pesan', true));

    $this->load->model('Signup_model');
    $dataemail = str_replace('%40', '@', $email);
    $this->Signup_model->save_email($dataemail);

    $message = "Name: " . urlencode($name) . "%0ASubject: " . urlencode($subject) . "%0APesan: " . urlencode($pesan);
    $url = 'https://api.whatsapp.com/send?phone=' . $nowa . '&text=' . $message;

    // Send data using cURL and redirect using HTTP header
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_exec($ch);
    curl_close($ch);

    header("Location: $url");
  }
}
