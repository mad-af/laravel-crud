<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $guarded = ['id', 'created_at', 'updated_at'];                                    //Data yang TIDAK di perbolehkan di isi
    protected $fillable = ['name',  'email', 'jurusan'];                                        //Data yang di perbolehkan di isi
}
