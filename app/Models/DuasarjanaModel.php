<?php

namespace App\Models;

use CodeIgniter\Model;

class DuasarjanaModel extends Model
{
    protected $table = "duasarjana";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["id","nik","nama","nokk", "tempatLahir","tanggalLahir",	"alamat","kecamatan", "usia","jeniskartu",
    "universitas", "fakultas", "prodi","akreditasiprodi", "semester", "ips1","ips2","ips3","ips4","ips5", "ips6","ips7","ips8","ukt", "noHP", "nim",
    "kepalakel", "ibu","supermohon", "suketaktif", "kk", "buktijalur","ktp","ktm","khs","supertidakbeasiswa","buktiukt","sertifiakreditasi",
    "supertdkbekerja","nilaus","buktiditerimapt","rekening","status","catatan","kelengkapan"
];
}
