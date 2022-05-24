<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class suppliers extends Model
{
    use HasFactory;
    use SoftDeletes;
	protected $table="suppliers";
	protected $fillable=
    [
	'Suppliername',
	'address',
	'Mobilenumber',
    'Nots',
    'Supplierimg'
	];
}
