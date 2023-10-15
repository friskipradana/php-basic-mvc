<?php
class Mahasiswa_model
{
    private $table = "mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllMahasiswa()
    {
        $this->db->query("SELECT* FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id)
    {
        $this->db->query("SELECT* FROM " . $this->table . " WHERE id=:id");
        $this->db->bind('id', $id, $id);
        return $this->db->single();
    }
    public function tambahMahasiswa($data)
    {

        $nama = $data['nama'];
        $nrp = $data['nrp'];
        $email = $data['email'];
        $jurusan = $data['jurusan'];


        $query = "INSERT INTO " . $this->table . " VALUES (0, '$nama', '$nrp', '$email', '$jurusan')";

        $this->db->query($query);


        // problem binding
        // $this->db->bind('nama', $data['nama']);
        // $this->db->bind('nrp', $data['nrp']);
        // $this->db->bind('email', $data['email']);
        // $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function hapusMahasiswa($id)
    {
        $this->db->query("DELETE FROM " . $this->table . " WHERE id=:id");
        $this->db->bind('id', $id, $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function UbahMahasiswa($data)
    {

        $id = $data['id'];
        $nama = $data['nama'];
        $nrp = $data['nrp'];
        $email = $data['email'];
        $jurusan = $data['jurusan'];

        $query = "UPDATE " . $this->table . " 
        SET 
        nama ='$nama' , 
        nrp ='$nrp' , 
        email ='$email' , 
        jurusan ='$jurusan'
        WHERE
        id=:id";

        $this->db->query($query);
        $this->db->bind('id', $data['id'], $data['id']);

        // problem binding
        // $this->db->bind('nama', $data['nama']);
        // $this->db->bind('nrp', $data['nrp']);
        // $this->db->bind('email', $data['email']);
        // $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT* FROM mahasiswa WHERE nama LIKE '%$keyword%'";
        $this->db->query($query);

        // problem binding
        // $this->db->bind('keyword', "%$keyword%", $keyword);

        return $this->db->resultSet();
    }
}
