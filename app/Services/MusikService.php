<?php
namespace App\Services;

use App\Repositorys\MusikRepository;

class MusikService
{
    public static function allMusik()
    {
        $data = MusikRepository::allMusik();
        foreach($data as $row){
        $row->keterangan_new = "Music POP";
        }

        return $data;
    }
}