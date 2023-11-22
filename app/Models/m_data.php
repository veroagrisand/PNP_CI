<?php

namespace App\Models;

use CodeIgniter\Model;

class m_data extends Model
{
    protected $table = 'satuan';

    public function getBiodata()
    {
        return $this->findAll();
}
}