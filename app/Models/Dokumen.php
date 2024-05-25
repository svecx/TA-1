<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
        protected $fillable = [
            'judul_dokumen',
            'deskripsi_dokumen',
            'kategori_dokumen',
            'tanggal_dokumen',
            'dokumen_file',
            'tags',
        ];

}
