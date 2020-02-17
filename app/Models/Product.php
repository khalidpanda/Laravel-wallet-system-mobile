<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $product_id
 * @property string $product_name
 * @property string $product_sku
 * @property string $product_price
 * @property string $product_status
 * @property string $product_quantity
 * @property string $product_special_price
 * @property string $product_colour
 * @property string $product_description
 * @property int $product_discount
 * @property string $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	protected $primaryKey = 'product_id';

	protected $casts = [
		'product_discount' => 'int'
	];

	protected $fillable = [
		'product_name',
		'product_sku',
		'product_price',
		'product_status',
		'product_quantity',
		'product_special_price',
		'product_colour',
		'product_description',
		'product_discount'
	];
}
