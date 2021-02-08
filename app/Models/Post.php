<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    
    protected  $table ="entradas_blog";
    public $timestamps = false;
    /*
    public function __construct($id,$userName,$title,$message,$dateOfCreation){
        $this->$id=$id;
        $this->$userName=$userName;
        $this->$title=$title;
        $this->$message=$message;
        $this->$dateOfCreation=$dateOfCreation;
    }*/
}
