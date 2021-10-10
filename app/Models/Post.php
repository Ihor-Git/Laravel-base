<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $guarded = []; //первый способ разрешить внесение изменений вбазу данных
    //protected $guarded = false; //второй способ
    //protected $fillable = ['title', 'content']; //третий способ - указ. абс. все знач. или те кот. нужно изменить

}
