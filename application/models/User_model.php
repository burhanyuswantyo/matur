<?php

class User_model extends CI_Model
{
    public function getUser($id)
    {
        if ($id == null) {
            return $this->db->get('user')->result_array();
        } else {
            return $this->db->get_where('user', array('id' => $id))->row_array();
        }
    }

    public function insert()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi'),
            'foto' => $this->input->post('foto')
        ];

        $this->db->insert('user', $data);
    }

    public function update($id)
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi'),
            'foto' => $this->input->post('foto')
        ];

        $this->db->update('user', $data, ['id' => $id]);
    }

    public function delete($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
}
