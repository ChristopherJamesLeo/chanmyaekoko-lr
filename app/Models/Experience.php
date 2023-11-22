<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = "experiences";

    protected $primaryKey = "id";

    protected $fillable = [
        "company",
        "position",
        "duration",
        "description",
        "slug",
        "status_id",
    ];
    
    public function status(){
        return $this -> belongsTo(Status::class);
    }
}
