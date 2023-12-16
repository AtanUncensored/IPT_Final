<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rgm extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'branch',
        'salary',
        'contact_number'
    ];

    public function managers() {
        return $this->hasMany(Manager::class);
    }

    public function crews() {
        return $this->hasMany(Crew::class);
    }


    public static function list() 
    {
        $rgms = Rgm::orderByRaw('full_name')->get();
        $list = [];
        foreach ($rgms as $rgm) {
            $list[$rgm->id]  = $rgm->full_name;
        }

        return $list;
    }


}
