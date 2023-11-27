<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $table = "links";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",
        "link",
        "status_id"
    ];

    public function status(){
        return $this -> belongsTo(Status::class);
    }
}
