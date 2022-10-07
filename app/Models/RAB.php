<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAB extends Model
{
    use HasFactory;

    public static function validate($request)
    {
        $request->validate([
            "nomatif" => "required|exists:nomatifs,kegiatan",
            "tipe" => "required|exists:sub__r_a_b_s,id",
            "keterangan" => "required",
            "jumlah_1" => "required|numeric|min:1",
            "unit_1" => "required",
            "jumlah_2" => "required|numeric|min:1",
            "unit_2" => "required",
            "harga" => "required|numeric|min:1",
        ]);
    }
}
