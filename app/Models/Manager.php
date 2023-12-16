<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = ['rgm_id', 'full_name', 'email', 'station', 'contact_number', 'salary'];

    public function rgm() {
        return $this->belongsTo(Rgm::class);
    } 

    public function crews() {
        return $this->hasMany(Crew::class);
    }

    public static function list() 
    {
        $managers = Manager::orderByRaw('full_name')->get();
        $list = [];
        foreach ($managers as $manager) {
            $list[$manager->id]  = $manager->full_name;
        }

        return $list;
    }

}
