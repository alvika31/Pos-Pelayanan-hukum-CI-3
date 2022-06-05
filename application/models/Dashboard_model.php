<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard_model extends CI_Model
{
    public function addUser($data)
    {
        $result = $this->db->insert('user', $data);
        return $result;
    }
    public function del($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete(' user');
    }
    public function getIdUser($id_user)
    {
        return $this->db->get_where('user', ['id_user' => $id_user])
            ->row_array();
    }
    public function updateUser($data, $id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
    }
    public function addKategori($data)
    {
        $result = $this->db->insert('kategori_konsultasi', $data);
        return $result;
    }
    public function delKategori($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori_konsultasi');
    }
    public function getIdKategori($id_kategori)
    {
        return $this->db->get_where('kategori_konsultasi', ['id_kategori' => $id_kategori])
            ->row_array();
    }
    public function getKonsultasi()
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->join('kategori_konsultasi', 'kategori_konsultasi.id_kategori = konsultasi.id_kategori');
        $this->db->order_by("id_konsultasi", "desc");
        $query = $this->db->get();
        return $query;
    }
    public function getKonsultasiByid($id_konsultasi)
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->join('kategori_konsultasi', 'kategori_konsultasi.id_kategori = konsultasi.id_kategori');
        $this->db->where('konsultasi.id_konsultasi', $id_konsultasi);
        $query = $this->db->get();
        return $query;
    }
    public function getKonsultasiByid2($id_konsultasi)
    {
        $this->db->select('*');
        $this->db->from('jawab_konsultasi');
        $this->db->join('konsultasi', 'jawab_konsultasi.id_konsultasi = konsultasi.id_konsultasi');
        $this->db->where('jawab_konsultasi.id_konsultasi', $id_konsultasi);
        $query = $this->db->get();
        return $query;
    }
    public function hitungJumlahAsset()
    {
        $query = $this->db->get('konsultasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function updateJawaban($data, $id_jawab_konsultasi, $id_konsultasi)
    {
        $this->db->where('id_jawab_konsultasi', $id_jawab_konsultasi);
        $this->db->where('id_konsultasi', $id_konsultasi);
        $this->db->update('jawab_konsultasi', $data);
    }
    public function delKonsultasi($id)
    {
        $this->db->delete('konsultasi', array('id_konsultasi' => $id));
        $this->db->delete('jawab_konsultasi', array('id_konsultasi' => $id));
    }
    public function hitungJumlahUser()
    {
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungJumlahPelayanan()
    {
        $query = $this->db->get('kategori_konsultasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function konsulNotAnswer()
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->join('kategori_konsultasi', 'kategori_konsultasi.id_kategori = konsultasi.id_kategori');
        $this->db->where('status_konsultasi', 0);
        $this->db->order_by("id_konsultasi", "desc");
        $query = $this->db->get();
        return $query;
    }
    public function konsulYesAnswer()
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->join('kategori_konsultasi', 'kategori_konsultasi.id_kategori = konsultasi.id_kategori');
        $this->db->where('status_konsultasi', 1);
        $this->db->order_by("id_konsultasi", "desc");
        $query = $this->db->get();
        return $query;
    }
}
