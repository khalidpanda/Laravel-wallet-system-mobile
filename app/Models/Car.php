<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Car
 * 
 * @property int $cars_id
 * @property string $cars_name
 * @property string $cars_class
 * @property string $cars_year
 * @property string $cars_logo
 * @property string $cars_picture
 * @property string $cars_price
 * @property string $cars_features
 * @property string $cars_description
 * @property string $cars_rating
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Car extends Model
{
	protected $table = 'cars';
	protected $primaryKey = 'cars_id';

	protected $fillable = [
		'cars_name',
		'cars_class',
		'cars_year',
		'cars_logo',
		'cars_picture',
		'cars_price',
		'cars_features',
		'cars_description',
		'cars_rating'
	];
}
