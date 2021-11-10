<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        echo "Halo ini adalah controller Siswa <a href='" . route_to('profil') . "'>Link ke routing profil</a>";
    }

    public function profil()
    {
        echo 'Ini adlaah method profil di controller Siswa';
    }

    public function dataSiswa($nama, $usia)
    {
        echo "Nama Siswa adalah $nama, usia $usia";
    }

    public function siswaDataId($id)
    {
        echo "Ini adalah method dnegan namas siswaDataId dengan ID $id";
    }

    public function siswaDataName($name)
    {
        echo "Ini adalah method dengan nama siswaDataName dengan Name $name";
    }
}