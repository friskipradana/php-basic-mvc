<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data["title"] = "Mahasiswa";
        $data["url"] = "http://localhost";
        $data["mhs"] = $this->model("Mahasiswa_model")->getAllMahasiswa();

        $this->view("templates/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/script");
        $this->view("templates/footer");
    }
    public function detail($id)
    {
        $data["title"] = "Detail Mahasiswa";
        $data["url"] = "http://localhost";
        $data["mhs"] = $this->model("Mahasiswa_model")->getMahasiswaById($id);

        $this->view("templates/header", $data);
        $this->view("mahasiswa/detail", $data);
        $this->view("templates/script");
        $this->view("templates/footer");
    }
    public function tambah()
    {
        if ($this->model("Mahasiswa_model")->tambahMahasiswa($_POST) > 0) {
            Flasher::setFlash("berhasil", "ditambahkan", "success");
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        } else {
            Flasher::setFlash("gagal", "menambahkan", "error");
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model("Mahasiswa_model")->hapusMahasiswa($id) > 0) {
            Flasher::setFlash("berhasil", "dihapus", "success");
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        } else {
            Flasher::setFlash("gagal", "dihapus", "error");
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }
    public function getubah()
    {
        echo json_encode($this->model("Mahasiswa_model")->getMahasiswaById($_POST['data']['id']));
    }
    public function ubah()
    {
        if ($this->model("Mahasiswa_model")->UbahMahasiswa($_POST) > 0) {
            Flasher::setFlash("berhasil", "ubah", "success");
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        } else {
            Flasher::setFlash("gagal", "ubah", "error");
            header("Location: " . BASEURL . "/mahasiswa");
            exit;
        }
    }
    public function cari()
    {
        $data["title"] = "Mahasiswa";
        $data["url"] = "http://localhost";
        $data["mhs"] = $this->model("Mahasiswa_model")->cariDataMahasiswa();

        $this->view("templates/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/script");
        $this->view("templates/footer");
    }
}
