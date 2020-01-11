<?php

class Laporan_model extends CI_Model
{
    public function getLaporan($type, $status, $status2)
    {
        if ($type == 1) {
            $query = "SELECT `laporan`.`id`, `laporan`.`deskripsi`, `laporan`.`gambar`, `laporan`.`status_id`, `kategori`.`kategori`, `user`.`nim`, `user`.`nama`
                    FROM `laporan` JOIN `user`
                    ON `laporan`.`user_id` = `user`.`id`
                    JOIN `kategori`
                    ON `laporan`.`kategori_id` = `kategori`.`id`
                    WHERE `laporan`.`status_id` = $status
                    ORDER BY `laporan`.`id` DESC";
        } else {
            $query = "SELECT `laporan`.`id`, `laporan`.`deskripsi`, `laporan`.`gambar`, `laporan`.`status_id`, `kategori`.`kategori`, `user`.`nim`, `user`.`nama`
                    FROM `laporan` JOIN `user`
                    ON `laporan`.`user_id` = `user`.`id`
                    JOIN `kategori`
                    ON `laporan`.`kategori_id` = `kategori`.`id`
                    WHERE `laporan`.`status_id` = $status
                    OR `laporan`.`status_id` = $status2
                    ORDER BY `laporan`.`id` DESC";
        }


        return $this->db->query($query)->result_array();
    }

    public function getAllLaporan()
    {
        $query = "SELECT `laporan`.`id`, `laporan`.`deskripsi`, `laporan`.`date_created`, `laporan`.`gambar`, `laporan`.`status_id`, `kategori`.`kategori`, `user`.`nim`, `user`.`nama`
                    FROM `laporan` JOIN `user`
                    ON `laporan`.`user_id` = `user`.`id`
                    JOIN `kategori`
                    ON `laporan`.`kategori_id` = `kategori`.`id`
                    ORDER BY `laporan`.`id` DESC";

        return $this->db->query($query)->result_array();
    }

    public function getCount($type, $status, $status2)
    {
        if ($type == 1) {
            $this->db->where('status_id', $status);
        } else {

            $this->db->where('status_id', $status);
            $this->db->or_where('status_id', $status2);
        }
        return $this->db->get('laporan')->num_rows();
    }

    public function update($id, $status_id)
    {
        $data = array('status_id' => $status_id);

        $this->db->where('id', $id);
        $this->db->update('laporan', $data);
    }

    public function delete($id)
    {
        $this->db->delete('laporan', ['id' => $id]);
    }
}
