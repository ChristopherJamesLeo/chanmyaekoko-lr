<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = "skills";
    protected $primaryKey = "id";
    protected $fillable = [
        "subject",
        "type",
        "level",
        "slug",
        "status_id"
    ];

    public function status(){
        return $this -> belongsTo(Status::class);
    }
}
