<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPortfolio extends Model
{
    use HasFactory;

    protected $table = "portfolios";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",
        "kind",
        "image",
        "slug",
        "status_id",
        "description"
    ];


    public function status(){
        return $this -> belongsTo(Status::class);
    }


    public function types(){
        return $this -> morphToMany(Type::class,"typeable");
    }

}
