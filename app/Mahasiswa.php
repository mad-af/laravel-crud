<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';          //untuk memprotect name yang tidak mengikuti default <jamak 's'>
}
