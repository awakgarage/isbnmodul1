<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/userguide3/general/urls.html
   */
  public function index()
  {
    // // Validasi form input
    // $this->form_validation->set_rules('email', 'Email', 'trim|required');
    // $this->form_validation->set_rules('password', 'Password', 'trim|required');

    // if ($this->form_validation->run() == false) {
    //   $this->load->view('auth/headerLogin');
    //   $this->load->view('auth/login');
    //   $this->load->view('auth/footerLogin');
    // } else {
    //   // Ambil data dari form login
    //   $email = $this->input->post('email');
    //   $password = $this->input->post('password');

    //   // Panggil model untuk mendapatkan data pengguna berdasarkan email
    //   $result = $this->Auth_model->getData($email, $password);

    //   if ($result->num_rows() > 0) {
    //     // Jika data pengguna ditemukan
    //     $user = $result->row_array();
    //     // Verifikasi password
    //     if (password_verify($password, $user['password'])) {
    //       // Buat session pengguna
    //       $data_ses = array(
    //         'username' => $user['username'],
    //         'name' => $user['name'],
    //         'email' => $user['email'],
    //         'role' => $user['role']
    //       );
    //       $this->session->set_userdata($data_ses);

    //       // Redirect sesuai peran pengguna
    //       if ($user['role'] == 'admin') {
    //         redirect('Dashboard');
    //       } else {
    //         redirect('Dashboard'); // Ganti 'other_page' dengan halaman yang sesuai untuk pengguna non-admin
    //       }
    //     } else {
    //       // Jika password tidak cocok
    //       $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry, your password is wrong.</div>');
    //       redirect('Auth');
    //     }
    //   } else {
    //     // Jika pengguna tidak ditemukan
    //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry, your username or password is wrong.</div>');
    //     redirect('Auth');
    //   }
    // }

    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    
    if ($this->form_validation->run() == false) {
        $this->load->view('auth/headerLogin');
        $this->load->view('auth/login');
        $this->load->view('auth/footerLogin');
    } else {
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
    
        if ($user) {
            if (password_verify($password, $user["password"])) {
                $data = [
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                redirect('Dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" id="dangerAlert">Password salah!!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" id="dangerAlert">Email atau Password salah!!</div>');
            redirect('Auth');
        }
    }    
  }

  //fungsi untuk logout
  public function logout()
  {

    $this->session->unset_userdata('admin');
    $this->session->unset_userdata('role');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Keluar</div>');
    redirect('Auth');
  }

  public function register()
  {
    // Pastikan hanya POST request yang diterima untuk proses registrasi
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      // Validasi form inputan
      $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
      $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required|trim');
      $this->form_validation->set_rules('nip', 'NIP', 'required|trim|is_unique[penulis.nip]');
      $this->form_validation->set_rules('nohp', 'No Hp', 'required|trim|is_unique[penulis.noHp]');
      $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', array(
        'is_unique' => 'This email has already been registered.'
      ));
      $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]');
      $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');

      // Jalankan validasi
      if ($this->form_validation->run() == false) {
        // Jika validasi gagal, tampilkan form registrasi kembali dengan pesan error
        $this->load->view('auth/headerLogin');
        $this->load->view('auth/register');
        $this->load->view('auth/footerLogin');
      } else {
        // Jika validasi berhasil, ambil data dari form
        $username = $this->input->post('username');
        $namalengkap = $this->input->post('namalengkap');
        $nip = $this->input->post('nip');
        $nohp = $this->input->post('noHp');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $password = $this->input->post('password1');

        // Panggil model untuk menyimpan data registrasi
        $this->load->model('Auth_model');
        $register_data = array(
          'username' => $username,
          'email' => $email,
          'password' => password_hash($password, PASSWORD_DEFAULT), // Hash password sebelum disimpan
          'role' => 'penulis' // Atur role sesuai kebutuhan
          // Anda dapat menambahkan kolom lain yang perlu disimpan dalam tabel pengguna
        );

        // Panggil method dalam model untuk menyimpan data
        $register_result = $this->Auth_model->registerUser($register_data);
        
        $profile = array(
          'namaLengkap' => $namalengkap,
          'nip' => $nip,
          'alamat' => $alamat,
          'noHp' => $nohp,
          'userID' => $register_result
        );
        $this->db->insert('penulis', $profile);


        if ($register_result) {
          // Jika registrasi berhasil, arahkan ke halaman login

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registration successful! Please log in.</div>');
          redirect('Auth'); // Ganti 'Auth' dengan URL login Anda
        } else {
          // Jika registrasi gagal, tampilkan pesan error
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Registration failed. Please try again later.</div>');
          redirect('Auth/register'); // Ganti 'Auth/register' dengan URL registrasi Anda
        }
      }
    } else {
      // Jika bukan POST request, tampilkan halaman registrasi kosong
      $this->load->view('auth/headerLogin');
      $this->load->view('auth/register');
      $this->load->view('auth/footerLogin');
    }
  }
}
