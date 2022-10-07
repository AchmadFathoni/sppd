<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;


    {
        $request->validate([
            "NIP" => "required|numeric|digit:18",
            "nama" => "required",
            "golongan" => "required|numeric|min:1|max:4"
        ]);
    }
}
