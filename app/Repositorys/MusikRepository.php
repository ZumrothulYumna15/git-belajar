<?php
namespace App\Repositorys;

use App\Models\Musik;

class MusikRepository extends Musik
{
    public static function allMusik()
    {
        return self::all();
    }

    public function musik(){
        return self::all();
    }
}