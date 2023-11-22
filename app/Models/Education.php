<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = "education";

    protected $primaryKey = "id";

    protected $fillable = [
        "institude",
        "degree",
        "subject",
        "slug",
        "user_id",
        "status_id"
    ];

    public function status(){
        return $this -> belongsTo(Status::class);
    }
}
