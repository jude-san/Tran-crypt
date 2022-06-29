<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //use guarded[] insteaded
    protected $fillable = [
        'user_id',
        'address',
        'programme',
        'major',
        'cellphone',
        'application_type',
        'doa',
        'doc',
        'index_number'
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
