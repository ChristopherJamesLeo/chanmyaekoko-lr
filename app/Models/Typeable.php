<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeable extends Model
{
    use HasFactory;

    protected $table = "typeables";

    protected $primaryKey = "id";

    protected $fillable = [
        "type_id",
        "user_id",
        "typeable_id",
        "typeable_type"
    ];
}
