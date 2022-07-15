<?php

namespace App\Models;

use CodeIgniter\Model;

class wargaModel extends Model
{
    protected $table = 'warga';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik', 'nama', 'kelamin', 'alamat', 'no_rumah', 'status'];
}
