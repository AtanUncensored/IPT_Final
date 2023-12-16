<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;

    protected $fillable = ['manager_id','rgm_id', 'full_name', 'address', 'salary', 'station','contact_number',];

    public function rgm() {
        return $this->belongsTo(Rgm::class);
    }

    public function manager() {
        return $this->belongsTo(Manager::class);
    }
}

