<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasakhirModel extends Model
{
    protected $table = "tugasakhir";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["id","nik","nama","nokk", "alamat",
    "universitas", "fakultas", "prodi", "semester", "noHP", "nim",
    "kk","kepalakel","supermohon","suketaktif","suketta","ktm","kpm","sktm","kk","ktp","supertidakbeasiswa","rekening"
    ,"status","catatan","kelengkapan"
];
}
