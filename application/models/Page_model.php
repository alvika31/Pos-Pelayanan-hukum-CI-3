<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Page_model extends CI_Model
{
    public function addPos($data)
    {
        $result = $this->db->insert('konsultasi', $data);
        return $result;
    }
    public function getKonsul()
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->join('kategori_konsultasi', 'kategori_konsultasi.id_kategori = konsultasi.id_kategori');
        $this->db->order_by("id_konsultasi", "desc");
        $this->db->where('status_konsultasi', 1);
        $query = $this->db->get();
        return $query;
    }
    public function getIdkonsul($id_konsultasi)
    {
        $this->db->select('*');
        $this->db->from('jawab_konsultasi');
        $this->db->join('konsultasi', 'jawab_konsultasi.id_konsultasi = konsultasi.id_konsultasi');
        $this->db->where('jawab_konsultasi.id_konsultasi', $id_konsultasi);
        $query = $this->db->get();
        return $query;
    }
    public function getIdkategori($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->join('kategori_konsultasi', 'kategori_konsultasi.id_kategori = konsultasi.id_kategori');
        $this->db->where('kategori_konsultasi.id_kategori', $id_kategori);
        $this->db->where('status_konsultasi', 1);
        $query = $this->db->get();
        return $query;
    }
    public function getIdkategoriT($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('kategori_konsultasi');
        $query = $this->db->get();
        return $query;
    }
}
