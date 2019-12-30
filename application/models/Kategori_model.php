<?php

class Kategori_model extends CI_Model
{
    public function getKategori($id)
    {
        if ($id == null) {
            return $this->db->get('kategori')->result_array();
        } else {
            return $this->db->get_where('kategori', array('id' => $id))->row_array();
        }
    }

    public function insert()
    {
        $data = [
            'kategori' => $this->input->post('kategori')
        ];

        $this->db->insert('kategori', $data);
    }

    public function update($id)
    {
        $data = [
            'kategori' => $this->input->post('kategori')
        ];

        $this->db->update('kategori', $data, ['id' => $id]);
    }

    public function delete($id)
    {
        $this->db->delete('kategori', ['id' => $id]);
    }
}
