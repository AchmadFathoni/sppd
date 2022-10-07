<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomatif extends Model
{
    use HasFactory;

    public static function validate($request)
    {
        $request->validate([
            "kegiatan" => "required",
            "tujuan" => "required",
            "berangkat" => "required|date",
            "kembali" => "required|date",
            "keterangan" => "required",
            "golongan" => "required|numeric|min:1|max:4",
            "status" => "required|exists:statuses,id",
            "NIP_PPK" => "required|exists:pegawais,NIP",
        ]);
    }
}
