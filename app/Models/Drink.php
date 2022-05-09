<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model{
    use HasFactory;

    public function customers(){
        return $this->BelongsToMany(User::class);
    }


}
