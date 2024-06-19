<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function departments()
    {
        return $this->hasOne(Department::class);
    }
    public function colleges()
    {
        return $this->hasOne(College::class);
    }
}
