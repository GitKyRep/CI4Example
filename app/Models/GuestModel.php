<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'guest';

    public function getGuest($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id])->getRowArray();
        }
    }

    public function insertGuest($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateGuest($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteGuest($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}
