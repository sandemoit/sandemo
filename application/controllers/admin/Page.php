<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Page_model');
        $this->load->model('Setting_model');
        $this->load->model('Karir_model');
    }

    public function blog()
    {
        $data['title'] = 'Blog';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['blog'] = $this->Page_model->get_blog();

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('page/blog', $data);
        $this->load->view('template_auth/footer');
    }

    public function addBlog()
    {
        $data['title'] = 'Tambah Blog';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kblog'] = $this->Page_model->get_kategori_blog();

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('page/add_blog', $data);
        $this->load->view('template_auth/footer');
    }

    public function doAddBlog()
    {
        // upload file
        $config['upload_path']          = './assets/frontend/img/blog/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 2048;
        $config['file_name']           = uniqid();

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
            redirect('admin/page/AddBlog');
        }

        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('isi', 'Isi Konten', 'trim|required|min_length[20]');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please fill in all required fields.</div>');
            redirect('admin/page/AddBlog');
        }

        $slug_r = $this->input->post('slug', true);

        // Memeriksa apakah slug kosong
        if (empty($slug_r)) {
            $title = $this->input->post('title', true);
            $slug = strtolower($title);
            $slug = str_replace(' ', '-', $slug);
        } else {
            $slug_l = strtolower($slug_r);
            $slug_f = str_replace(' ', '-', $slug_l);
            $slug = $slug_f;
        }

        // ads
        $content = $this->input->post('isi', true);
        $ads_code = '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3971040661867794"
        crossorigin="anonymous"></script>
        <ins class="adsbygoogle"
        style="display:block; text-align:center;"
        data-ad-layout="in-article"
        data-ad-format="fluid"
        data-ad-client="ca-pub-3971040661867794"
        data-ad-slot="9577430246"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';
        $second_paragraph_pos = strpos($content, '</p>', strpos($content, '<p>') + 1);
        $content_with_ads = substr_replace($content, $ads_code, $second_paragraph_pos + 4, 0);

        // Compress image and create thumbnail
        $uploadData = $this->upload->data();
        $thumbnailPath = './assets/frontend/img/blog/thumbnail/';
        $thumbnailName = $config['file_name'] . $uploadData['file_ext'];
        $thumbnailFullPath = $thumbnailPath . $thumbnailName;
        $this->createThumbnail($uploadData['full_path'], $thumbnailFullPath);

        $data = [
            'title'        => $this->input->post('title', true),
            'isi'          => $content_with_ads,
            'meta'         => $this->input->post('meta', true),
            'slug'         => $slug,
            'id_kategori'  => $this->input->post('kategori', true),
            'date_created' => time(),
            'author'       => $this->input->post('author', true),
            'gambar'       => $thumbnailName,
        ];
        $this->Page_model->add_blog($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success added/uploaded blog!</div>');
        redirect('admin/page/blog');
    }

    private function createThumbnail($sourcePath, $destinationPath)
    {
        $config['image_library']  = 'gd2';
        $config['source_image']   = $sourcePath;
        $config['new_image']      = $destinationPath;
        $config['maintain_ratio'] = true;
        $config['width']          = 500;
        $config['height']         = null;

        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
    }

    public function editBlog($id)
    {
        $data['title'] = 'Edit Blog';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kategori'] = $this->Page_model->get_kategori($id)->result_array();
        $data['blog'] = $this->Page_model->get_blog($id)->result()[0];
        $data['id'] = $id;

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('page/edit_blog', $data);
        $this->load->view('template_auth/footer');
    }

    public function doEditBlog()
    {
        $id = $this->input->post('id');
        // upload file
        if (!empty($_FILES)) {
            $config['upload_path']          = './assets/frontend/img/blog/';
            $config['allowed_types']        = '*';
            $config['file_name']           = date('dmYhis') . '.jpg';
            $file_name = $config['file_name'];

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $error . '</div>');
            } else {
                $this->upload->data();
            }
            // get exist file name
            $blog = $this->Page_model->get_blog(null, null, $id)->result()[0];
            $old_file = $blog->gambar;
            // remove old file
            unlink('./assets/frontend/img/blog/' . $old_file);
        } else {
            $blog = $this->Page_model->get_blog(null, null, $id)->result()[0];
            $file_name = $blog->gambar;
        }

        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('content', 'Isi Konten', 'trim|required|min_length[20]');
        $this->form_validation->set_rules('slug', 'Slug', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');

        $data = [
            'title' => $this->input->post('title'),
            'isi' => $this->input->post('content'),
            'meta' => $this->input->post('meta'),
            'slug' => $this->input->post('slug'),
            'gambar' => $file_name,
            'id_kategori' => $this->input->post('kategori'),
        ];
        $this->Page_model->edit_blog($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Selamat! blog berhasil tambah/upload...</div>
        ');
        redirect('admin/page/blog');
    }

    public function deleteBlog($id)
    {
        $where = array('id' => $id);

        // Get blog data to obtain the image filename
        $blog = $this->Page_model->get_blog(null, null, $id)->result()[0];

        if ($blog) {
            $imagePath = FCPATH . 'assets/frontend/img/blog/' . $blog->gambar;
            $thumbnailPath = FCPATH . 'assets/frontend/img/blog/thumbnail/' . $blog->gambar;

            // Delete image file
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Delete thumbnail file
            if (file_exists($thumbnailPath)) {
                unlink($thumbnailPath);
            }
        }

        $this->Page_model->delete_blog($where, 'blog');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success delete article!</div>');
        redirect('admin/page/blog');
    }

    public function portfolio()
    {
        $data['title'] = 'Portfolio';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['portfolio'] = $this->Page_model->get_portfolio();
        $data['kportfolio'] = $this->Page_model->get_kategoriPortfolio();

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('page/portfolio', $data);
        $this->load->view('template_auth/footer');
    }

    public function addPortfolio()
    {
        $data['title'] = 'Tambah portfolio';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kategori_portfolio'] = $this->Page_model->get_kategoriPortfolio();
        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('page/add_portfolio', $data);
        $this->load->view('template_auth/footer');
    }

    public function doAddPortfolio()
    {
        // upload file
        $config['upload_path']          = './assets/frontend/img/portfolio/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 2048;
        $config['file_name']           = uniqid();

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
            redirect('admin/page/AddPortfolio');
        }

        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('date', 'Date', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please fill in all required fields.</div>');
            redirect('admin/page/AddPortfolio');
        }

        // Compress image and create thumbnail
        $uploadData = $this->upload->data();

        // Save portfolio data to database
        $data = [
            'title'       => $this->input->post('title'),
            'client'      => $this->input->post('client'),
            'date'        => $this->input->post('date'),
            'id_kategori' => $this->input->post('kategori'),
            'image'       => $uploadData['file_name'],
        ];

        $this->Page_model->add_portfolio($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success added/uploaded portfolio!</div>');
        redirect('admin/page/portfolio');
    }

    public function editPortfolio()
    {
        $id = $this->input->post('id');
        $data['title'] = 'Edit portfolio';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kategori_portfolio'] = $this->Page_model->get_kategoriPortfolio();
        $data['portfolio'] = $this->Page_model->get_portfolio($id)->result()[0];
        $data = [
            'title' => $this->input->post('title'),
            'deskripsi' => $this->input->post('deskripsi'),
            'link_demo' => $this->input->post('link_demo'),
            'client' => $this->input->post('client'),
            'id_kategori' => $this->input->post('id_kategori')
        ];
        $this->Page_model->edit_portfolio($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Success edit portfolio!</div>
        ');
        redirect('admin/page/portfolio');
    }

    public function deletePortfolio($id)
    {
        $where = array('id' => $id);
        $this->Page_model->delete_portfolio($where, 'portfolio');
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success delete portfolio!</div>');
        redirect('admin/page/portfolio');
    }

    // Balas pesan client menggunakan WAGW
    public function pesan()
    {
        $data['title'] = 'Pesan Kontak';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pesan'] = $this->db->get('kontak')->result_array();
        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('page/pesan_kontak', $data);
        $this->load->view('template_auth/footer');
    }

    public function doBalas()
    {
        // Validate input
        $message = trim($this->input->post('pesan'));
        $whatsapp = trim($this->input->post('whatsapp'));
        $idMessage = intval($this->input->post('idPesan'));
        if (empty($message) || empty($whatsapp) || $idMessage <= 0) {
            // Return an error response
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Error! empty message</div>');
            redirect($_SERVER['HTTP_REFERER']);
        }

        // Send the message
        $isSuccess = $this->send_message($whatsapp, $message);

        if ($isSuccess) {
            // Update the database
            $adminName = $this->session->userdata('email');
            $this->db->set([
                'aksi' => 1,
                'balasan' => $message,
                'id_admin' => $adminName
            ])->where('id', $idMessage)->update('kontak');

            // Set flash data and redirect
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Berhasil mengirim balasan</div>');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            // Return an error response
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Failed to send message</div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    // sendMessage
    public function sendMessage()
    {
        $data['title'] = 'Send Message';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontak'] = $this->db->get('kontak')->result_array();
        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('page/send_message', $data);
        $this->load->view('template_auth/footer');
    }

    public function doSendMessage()
    {
        // Validate input
        $message = $this->input->post('pesan');
        $whatsapp = $this->input->post('whatsapp');

        if (empty($message) || empty($whatsapp) || $whatsapp <= 0) {
            // Return an error response
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Error! empty message</div>');
            redirect($_SERVER['HTTP_REFERER']);
        }

        if ($whatsapp === 'all') {
            // Get all kontaks from the database
            $kontaks = $this->db->get('kontak')->result_array();

            // Send the message to each kontak
            foreach ($kontaks as $kontak) {
                $isSuccess = $this->send_message($kontak['whatsapp'], $message);

                if ($isSuccess) {
                    // Update the database
                    $adminName = $this->session->userdata('email');
                    $this->db->set([
                        'aksi' => 1,
                        'balasan' => $message,
                        'id_admin' => $adminName
                    ])->where('whatsapp', $kontak['whatsapp'])->update('kontak');

                    // Set flash data and redirect
                    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Berhasil mengirim pesan ke semua kontak</div>');
                    redirect($_SERVER['HTTP_REFERER']);
                } else {
                    // Return an error response
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Gagal mengirim pesan</div>');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
        } else {
            // Send the message to the selected kontak
            $isSuccess = $this->send_message($whatsapp, $message);

            if ($isSuccess) {
                // Update the database
                $adminName = $this->session->userdata('email');
                $this->db->set([
                    'aksi' => 1,
                    'balasan' => $message,
                    'id_admin' => $adminName
                ])->where('whatsapp', $whatsapp)->update('kontak');

                // Set flash data and redirect
                $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Berhasil mengirim pesan</div>');
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                // Return an error response
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Gagal mengirim pesan</div>');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }

    // wa gateway
    private function send_message($whatsapp, $message)
    {
        $integrasi = $this->Setting_model->integrasi();
        $key = $integrasi['wagw'];
        $url = $integrasi['url_api'];
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $whatsapp,
                'message' => $message,
            ),
            CURLOPT_HTTPHEADER => array(
                "Authorization: $key"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    // karir
    public function karir()
    {
        $data['title'] = 'karir';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karir'] = $this->Karir_model->get_all_karir();

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('karir/index', $data);
        $this->load->view('template_auth/footer');
    }

    public function addkarir()
    {
        $data['title'] = 'Tambah karir';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('karir/add_karir', $data);
        $this->load->view('template_auth/footer');
    }

    public function doAddkarir()
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');

        // Generate kode job secara acak
        $code_job = str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT);

        $data = [
            'code_job' => $code_job,
            'name_job' => $this->input->post('name_job', true),
            'location_job' => $this->input->post('location_job', true),
            'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan', true),
            'description' => $this->input->post('description', true),
            'date_job' => date("Y-m-d"),
            'limit_job' => $this->input->post('limit_job', true),
        ];

        $this->db->insert('karir', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Success added karir!</div>
            ');
        redirect('admin/page/karir');
    }

    public function editkarir($id)
    {
        $data['title'] = 'Edit karir';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karir'] = $this->Karir_model->get_karir_by_id($id);
        $data['id'] = $id;

        $this->form_validation->set_rules('name_job', 'Job Name', 'trim|required');
        $this->form_validation->set_rules('location_job', 'Location', 'trim|required');
        $this->form_validation->set_rules('jenis_pekerjaan', 'Jenis pekerjaan', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('limit_job', 'Job Limit', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('karir/edit_karir', $data);
            $this->load->view('template_auth/footer');
        } else {
            $newData = [
                'name_job' => $this->input->post('name_job', true),
                'location_job' => $this->input->post('location_job', true),
                'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan', true),
                'description' => $this->input->post('description', true),
                'date_job' => date("Y-m-d"),
                'limit_job' => $this->input->post('limit_job', true),
            ];

            $this->db->set($newData);
            $this->db->where('id', $id);
            $this->db->update('karir');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Selamat! karir berhasil di edit...</div>
        ');
            redirect('admin/page/karir');
        }
    }


    public function deletekarir($id)
    {
        $this->db->delete('karir', array('id' => $id));
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success delete karir!</div>');
        redirect('admin/page/karir');
    }
}
