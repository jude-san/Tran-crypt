<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;

    protected $table = "applications";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'address',
        'programme',
        'major',
        'cellphone',
        'application_type',
        'doa',
        'doc',

    //use guarded[] insteaded
    ];  


}
