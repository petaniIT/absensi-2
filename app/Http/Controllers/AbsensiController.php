<?php

namespace App\Http\Controllers;

use App\DaftarHadir;
use App\Kegiatan;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    //
    public function index()
    {
        $data = DaftarHadir::get();
        return view('absen.list', ['data' => $data]);
    }

    public function add($id_kegiatan)
    {
        $kegiatan = Kegiatan::find($id_kegiatan);
        return view('absen.create', ['kegiatan' => $kegiatan]);
    }

    public function absen(Request $request)
    {
        $table = new DaftarHadir();
        $table->nama = $request->nama;
        $table->nip = $request->nip;
        $table->jenis_kelamin = $request->jenis_kelamin;
        $table->unit_or_lembaga = $request->unit_or_lembaga;
        $table->jabatan = $request->jabatan;
        $table->golongan = $request->golongan;
        $table->no_hp = $request->no_hp;
        $table->rdk = $request->rdk == '1' ? True : False;
        $table->no_rek = $request->no_rek;
        $table->kegiatan_id = $request->kegiatan_id;

        // ttd
        $folderPath = public_path('upload/');

        $image_parts = explode(";base64,", $request->signed);

        $image_type_aux = explode("image/", $image_parts[0]);

        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);

        $file = $folderPath . uniqid() . '.' . $image_type;
        file_put_contents($file, $image_base64);

        $table->ttd_url = $request->ttd_url;
        if ($table->save()) {
            # code...
            return "data saved";
        }
    }
}
