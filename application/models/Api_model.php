<?php

class Api_model extends CI_Model
{
    public function login($nim, $password)
    {
        $this->db->where('nim', $nim);
        $this->db->where('password', $password);

        return $this->db->get('user')->row_array();
    }

    public function getLaporan($user_id = null, $status_id = null, $id = null)
    {
        $query = "SELECT `laporan`.`id`, `laporan`.`deskripsi`, `laporan`.`gambar`, `kategori`.`kategori`, `status`.`status`, `status`.`icon`
                    FROM `laporan`
                    JOIN `kategori`
                    ON `laporan`.`kategori_id` = `kategori`.`id`
                    JOIN `status`
                    ON `laporan`.`status_id` = `status`.`id`
                    ORDER BY `laporan`.`id` DESC";

        $query2 = "SELECT `laporan`.`id`, `laporan`.`deskripsi`, `laporan`.`gambar`, `kategori`.`kategori`, `status`.`status`, `status`.`icon`
                    FROM `laporan`
                    JOIN `kategori`
                    ON `laporan`.`kategori_id` = `kategori`.`id`
                    JOIN `status`
                    ON `laporan`.`status_id` = `status`.`id`
                    WHERE `laporan`.`user_id` = $user_id
                    ORDER BY `laporan`.`id` DESC";

        $query3 = "SELECT `laporan`.`id`, `laporan`.`deskripsi`, `laporan`.`gambar`, `kategori`.`kategori`, `status`.`status`, `status`.`icon`
                    FROM `laporan`
                    JOIN `kategori`
                    ON `laporan`.`kategori_id` = `kategori`.`id`
                    JOIN `status`
                    ON `laporan`.`status_id` = `status`.`id`
                    WHERE `laporan`.`status_id` = $status_id
                    ORDER BY `laporan`.`id` DESC";

        if ($user_id == null && $status_id == null) {
            return $this->db->query($query)->result_array();
        } elseif ($user_id != null && $status_id == null) {
            return $this->db->query($query2)->result_array();
        } elseif ($user_id == null && $status_id != null) {
            return $this->db->query($query3)->result_array();
        } else {
            return $this->db->query($query3)->result_array();
        }
    }

    public function delete($id)
    {
        $this->db->delete('laporan', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert('laporan', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $id)
    {
        $this->db->update('laporan', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getKategori()
    {
        return $this->db->get('kategori')->result_array();
    }
}
