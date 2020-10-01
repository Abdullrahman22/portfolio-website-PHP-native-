<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fileable = [ "name" , "slug" , "date" , "img" , "desc" , "link" ];
    protected $hidden = [ "created_at" , "updated_at" ] ;
}
