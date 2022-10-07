<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personil extends Model
{
    use HasFactory;
    public static function validate($request)
    {
        $request->validate([
            "nomatif" => "required|exists:nomatifs,kegiatan",
            "pegawai" => "required|exists:pegawais,NIP",
        ]);
    }
}
