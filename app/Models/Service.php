<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = "services";
    protected $primaryKey = "id";
    protected $fillable = [
        "name",
        "slug",
        "status_id",
        "image"
    ];

    public function status(){
        return $this -> belongsTo(Status::class);
    }

}
