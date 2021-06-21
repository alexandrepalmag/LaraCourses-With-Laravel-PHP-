<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function list()
    {
        return (object)[
            "Name" => "Alexandre",
            "tel" => "12345678"
        ];
    }

    use HasFactory;
}
