<?php

class Laporan_model extends CI_Model
{
    public function getLaporan($id = null)
    {
        $query = "SELECT `l`.`id`, `l`.`deskripsi`, `l`.`gambar`, `k`.`kategori`, `s`.`status`, `s`.`icon`
                    FROM `laporan` `l`
                    JOIN `kategori` `k`
                    ON `l`.`kategori_id` = `k`.`id`
                    JOIN `status` `s`
                    ON `l`.`status_id` = `s`.`id`
                    ";

        $query2 = "SELECT `l`.`id`, `l`.`deskripsi`, `l`.`gambar`, `k`.`kategori`, `s`.`status`, `s`.`icon`
                    FROM `laporan` `l`
                    JOIN `kategori` `k`
                    ON `l`.`kategori_id` = `k`.`id`
                    JOIN `status` `s`
                    ON `l`.`status_id` = `s`.`id`
                    WHERE `l`.`id` = $id
                    ";

        if ($id === null) {
            return $this->db->query($query)->result_array();
        } else {
            return $this->db->query($query2)->result_array();
        }
    }

    public function delete($id)
    {
        $this->db->delete('laporan', ['id' => $id]);
        return $this->db->affected_rows();
    }
}
