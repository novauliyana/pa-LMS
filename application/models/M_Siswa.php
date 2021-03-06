<?php

class M_Siswa extends CI_Model
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    public function tampil_data()
    {
        $id = $this->session->userdata('id_user');
        $this->db->where('id_user', $id);
        $query = $this->db->get('user')->result();
        return $query;
    }

    public function _data()
    {

        $query = $this->db->get('siswa')->result();
        return $query;
    }


    public function kelas()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('presensi', 'siswa.nis = presensi.nis ');
        $this->db->join('mapel', 'presensi.id_mapel = mapel.id_mapel');
        $this->db->where('siswa.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function jml_siswa()
    {
        return $this->db->query("SELECT COUNT(nis) as count from siswa JOIN presensi USING (nis) JOIN mapel USING (id_mapel) WHERE id_mapel=10141")->result_array();
    }

    public function get_materi()
    {
        return $this->db->query("SELECT * FROM materi")->result_array();
    }
}
