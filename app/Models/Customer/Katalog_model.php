<?php

namespace App\Models\Customer;

use CodeIgniter\Model;

class Katalog_model extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function get_user($email)
    {

        return $this->db->table('user')->getwhere(['email' => $email])->getRowArray();
    }

    public function get_laptop_bisnis($bisnis)
    {
        return $this->db->table('laptop')->limit(4)
            ->join('multiple', 'multiple.id_upload = laptop.id_upload')
            ->where('nama_tipe', $bisnis)
            ->where('sampul', 1)
            ->where('jumlah !=', 0)
            ->get()
            ->getResultArray();
    }

    public function get_laptop_gaming($gaming)
    {

        return $this->db->table('laptop')->limit(4)
            ->join('multiple', 'multiple.id_upload = laptop.id_upload')
            ->where('nama_tipe', $gaming)
            ->where('sampul', 1)
            ->where('jumlah !=', 0)
            ->get()
            ->getResultArray();
    }

    public function get_laptop_multimedia($multimedia)
    {

        return $this->db->table('laptop')->limit(4)
            ->join('multiple', 'multiple.id_upload = laptop.id_upload')
            ->where('nama_tipe', $multimedia)
            ->where('sampul', 1)
            ->where('jumlah !=', 0)
            ->get()
            ->getResultArray();
    }

    public function get_laptop_ultra($ultra)
    {

        return $this->db->table('laptop')->limit(4)
            ->join('multiple', 'multiple.id_upload = laptop.id_upload')
            ->where('nama_tipe', $ultra)
            ->where('sampul', 1)
            ->where('jumlah !=', 0)
            ->get()
            ->getResultArray();
    }
}
