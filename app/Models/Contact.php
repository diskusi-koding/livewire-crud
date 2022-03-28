<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*menambahkan sebuah accessor untuk mengambil nama lengkap dari model ini.*/
    public function namaLengkap(): Attribute
    {
        return new Attribute(
            get: function () {
                return "{$this->nama_depan} {$this->nama_belakang}";
            }
        );
    }
}
