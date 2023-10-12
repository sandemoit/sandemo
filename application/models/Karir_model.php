<?php
class Karir_model extends CI_Model
{
    public function get_all_karir()
    {
        $this->db->select('*');
        $this->db->order_by('date_job', 'desc');
        $query = $this->db->get('karir');
        return $query->result_array();
    }

    public function get_karir_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('karir');
        return $query->row_array();
    }

    public function get_karir_details($name_job)
    {
        $this->db->where('name_job', $name_job);
        $query = $this->db->get('karir');
        return $query->row_array();
    }

    public function get_kandidat()
    {
        $query = "SELECT *
        FROM `karir` JOIN `kandidat`
        ON `karir`.`id` = `kandidat`.`id_job`
        ORDER BY `kandidat`.`time` DESC"; // Mengurutkan berdasarkan kolom 'tanggal' secara menurun (terbaru)

        return $this->db->query($query)->result_array();
    }

    public function get_no_wa_by_id($id)
    {
        $this->db->select('whatsapp');
        $this->db->from('kandidat');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->row_array();

        return $result['whatsapp'];
    }
}
