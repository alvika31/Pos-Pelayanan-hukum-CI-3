<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->library('form_validation');
        $data['total_asset'] = $this->Dashboard_model->hitungJumlahAsset();
        date_default_timezone_set("Asia/jakarta");
        if (!$this->session->userdata('username')) redirect('auth/login');
    }
    public function index()
    {
        $data = [
            'total_asset' => $this->Dashboard_model->hitungJumlahAsset(),
            'title' => 'Halaman Home',
            'user' => $this->Dashboard_model->hitungJumlahUser(),
            'pelayanan' => $this->Dashboard_model->hitungJumlahPelayanan(),
            'konsulnot' => $this->Dashboard_model->konsulNotAnswer()->result(),
            'konsulyes' => $this->Dashboard_model->konsulYesAnswer()->result()
        ];
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/sidebar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('dashboard/footer', $data);
    }
    public function list_user()
    {
        $data = [
            'total_asset' => $this->Dashboard_model->hitungJumlahAsset(),
            'title' => 'Halaman List User',
            'user' => $this->db->get('user')->result()
        ];
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/sidebar', $data);
        $this->load->view('dashboard/list_user', $data);
        $this->load->view('dashboard/footer', $data);
    }
    public function register()
    {
        $data = [
            'total_asset' => $this->Dashboard_model->hitungJumlahAsset(),
            'title' => 'Halaman Register'
        ];
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/sidebar', $data);
        $this->load->view('dashboard/register');
        $this->load->view('dashboard/footer', $data);
    }

    public function add()
    {

        if ($this->input->post('save')) {
            $config = array(
                array(
                    'field' => 'first_name',
                    'label' => 'First Name',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'last_name',
                    'label' => 'Last Name',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'confirm_password',
                    'label' => 'Konfirmasi Password',
                    'rules' => 'trim|required|matches[password]',
                    "errors" => array(
                        'is_unique' => 'Password Tidak Sama',
                    ),
                ),
            );

            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('error', 'User Gagal ditambahkan');
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/sidebar');
                $this->load->view('dashboard/register');
                $this->load->view('dashboard/footer');
            } else {
                $data = [
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password'))
                ];
                $this->Dashboard_model->addUser($data);
                $this->session->set_flashdata('success', 'User Berhasil ditambahkan');
                redirect('dashboard/register');
            }
        }
    }

    public function delete()
    {
        $id = $this->input->post('id_user'); //get data from ajax(post)
        $del = $this->Dashboard_model->del($id);
    }
    public function edit_user($id_user)
    {
        $data = [
            'total_asset' => $this->Dashboard_model->hitungJumlahAsset(),
            'title' => 'Halaman Edit User',
            'user' => $this->Dashboard_model->getIdUser($id_user),
        ];
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/edit_user', $data);
        $this->load->view('dashboard/footer');
    }
    public function updateUser()
    {

        $data = [

            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email')
        ];

        $id_user = $this->input->post('id_user');
        $result = $this->Dashboard_model->updateUser($data, $id_user);

        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'User Berhasil diedit');
            redirect('dashboard/list_user');
        } else {
            $this->session->set_flashdata('error', 'User Gagal diedit');
            redirect('dashboard/list_user');
        }
    }

    public function addPelayanan()
    {
        $data = [
            'total_asset' => $this->Dashboard_model->hitungJumlahAsset(),
            'title' => 'Halaman Tambah Pelayanan'
        ];
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/add_pelayanan', $data);
        $this->load->view('dashboard/footer');
    }
    public function do_addPelayanan()
    {
        $config['upload_path']          = './upload_kategori/';
        $config['allowed_types']        = 'gif|jpg|JPG|png|PNG|jpeg|JPEG';
        $config['max_size']             = 5000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('icon_kategori')) {
            $this->session->set_flashdata('pesanGagal', '<div class="alert alert-danger" role="alert">
            <strong style="color:white">Data Gagal ditambahkan!</strong>
        </div>');
            redirect('dashboard');
        } else {

            $image = $this->upload->data();
            $image = $image['file_name'];

            $data = array(
                'nama_kategori' => $this->input->post('nama_kategori'),
                'deskripsi_kategori' => $this->input->post('deskripsi_kategori'),
                'icon_kategori' => $image
            );
            $this->Dashboard_model->addKategori($data);
            $this->session->set_flashdata('success', 'Kategori Pelayanan Berhasil ditambahkan');
            redirect('dashboard/addPelayanan');
        }
    }
    public function listkategoripelayanan()
    {
        $data = [
            'total_asset' => $this->Dashboard_model->hitungJumlahAsset(),
            'title' => 'Halaman List Pelayanan',
            'kategori' => $this->db->get('kategori_konsultasi')->result()
        ];
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/list_pelayanan', $data);
        $this->load->view('dashboard/footer');
    }
    public function deleteKategori()
    {
        $id = $this->input->post('id_kategori'); //get data from ajax(post)
        $del = $this->Dashboard_model->delKategori($id);
    }

    public function edit_pelayanan($id_kategori)
    {
        $data = [
            'total_asset' => $this->Dashboard_model->hitungJumlahAsset(),
            'title' => 'Halaman Edit User',
            'kategori' => $this->Dashboard_model->getIdKategori($id_kategori),
        ];
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/edit_kategori', $data);
        $this->load->view('dashboard/footer');
    }
    public function do_editPelayanan()
    {
        $id_kategori = $this->input->post('id_kategori');
        $config['upload_path']          = './upload_kategori/';
        $config['allowed_types']        = 'gif|jpg|png|PNG|jpeg';
        $config['max_size']             = 5000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('icon_kategori')) {
            $id_kategori = $this->input->post('id_kategori');
            $nama_kategori = $this->input->post('nama_kategori');
            $deskripsi_kategori = $this->input->post('deskripsi_kategori');

            $data = [
                'nama_kategori' => $nama_kategori,
                'deskripsi_kategori' => $deskripsi_kategori
            ];

            $this->db->where('id_kategori', $id_kategori);
            $this->db->update('kategori_konsultasi', $data);
            $this->session->set_flashdata('success', 'Pelayanan Berhasil diedit');
            redirect('dashboard/listkategoripelayanan');
        } else {
            $image = $this->upload->data();
            $image = $image['file_name'];

            $id_kategori = $this->input->post('id_kategori');
            $nama_kategori = $this->input->post('nama_kategori');
            $deskripsi_kategori = $this->input->post('deskripsi_kategori');

            $data = [
                'nama_kategori' => $nama_kategori,
                'deskripsi_kategori' => $deskripsi_kategori,
                'icon_kategori' => $image
            ];

            $this->db->where('id_kategori', $id_kategori);
            $this->db->update('kategori_konsultasi', $data);
            $this->session->set_flashdata('error', 'Pelayanan Gagal diedit');
            redirect('dashboard/listkategoripelayanan');
        }
    }
    public function konsultasicostumer()
    {
        $data = [
            'total_asset' => $this->Dashboard_model->hitungJumlahAsset(),
            'title' => 'Halaman List Konsultasi Costumer',
            'konsul' => $this->Dashboard_model->getKonsultasi()->result()
        ];
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/list_konsultasi_costumer', $data);
        $this->load->view('dashboard/footer');
    }
    public function detail_konsul($id_konsultasi)
    {
        $data = [
            'total_asset' => $this->Dashboard_model->hitungJumlahAsset(),
            'title' => 'Halaman Detail Konsultasi User',
            'konsultasi' => $this->Dashboard_model->getKonsultasiByid($id_konsultasi)->row_array(),
            'konsultasi2' => $this->Dashboard_model->getKonsultasiByid2($id_konsultasi)->row_array(),
        ];
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/sidebar');
        $this->load->view('dashboard/detail_konsultasi', $data);
        $this->load->view('dashboard/footer');
    }
    public function add_jawab()
    {
        if ($this->input->post('kirim')) {

            $data = [
                'id_user' => $this->session->id_user,
                'id_konsultasi' => $this->input->post('id_konsultasi'),
                'isi_jawab' => $this->input->post('isi_jawab'),
                'show_jawab' => $this->input->post('show_jawab'),
                'tgl_jawab' => date('Y-m-d'),
                'jam_jawab' => date('H:i:s')
            ];

            $id_konsultasi = $this->input->post('id_konsultasi');

            $data2 = [
                'status_konsultasi' => 1
            ];

            $this->db->where('id_konsultasi', $id_konsultasi);
            $this->db->update('konsultasi', $data2);

            $result = $this->db->insert('jawab_konsultasi', $data);
            if ($result = TRUE) {
                $this->session->set_flashdata('success', 'Jawaban Berhasil diedit');
                redirect('dashboard/konsultasicostumer/');
            } else {
                $this->session->set_flashdata('error', 'Jawaban Gagal diedit');
                redirect('dashboard/konsultasicostumer/');
            }
        }
    }
    public function edit_jawab()
    {
        $data = [
            'isi_jawab' => $this->input->post('isi_jawab'),
            'show_jawab' => $this->input->post('show_jawab'),
            'tgl_jawab' => date('Y-m-d'),
            'jam_jawab' => date('H:i:s')
        ];

        $id_jawab_konsultasi = $this->input->post('id_jawab_konsultasi');
        $id_konsultasi = $this->input->post('id_konsultasi');
        $result = $this->Dashboard_model->updateJawaban($data, $id_jawab_konsultasi, $id_konsultasi);

        if ($result = TRUE) {
            $this->session->set_flashdata('success', 'Jawaban Berhasil diedit');
            redirect('dashboard/konsultasicostumer/');
        } else {
            $this->session->set_flashdata('error', 'Jawaban Gagal diedit');
            redirect('dashboard/konsultasicostumer/');
        }
    }

    public function deleteKonsul()
    {
        $id = $this->input->post('id_konsultasi');
        $del = $this->Dashboard_model->delKonsultasi($id);
    }
}
