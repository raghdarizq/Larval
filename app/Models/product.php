<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class product extends Model
{
    use HasFactory;
    use SoftDeletes;
	protected $table="products";
	protected $fillable=
    [
	'NoTasnifAlmuntajat',
	'Productquantity',
	'Productquantitytype',
	'SupplierNo',
	'ProductsStatus',
	'ImgPro',
	'storeNo',
	'productname',
	];
}