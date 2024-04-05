<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    /**
     * table name
     */
    protected $table = "dosen";

    /**
     * allow field
     */
    protected $allowedFields = [
        'kode_dosen',
        'nama_dosen',
        'status_dosen'
    ];

}