<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CarRent
 * 
 * @property int $car_rents_id
 * @property string $car_id
 * @property string $rent_date
 * @property string $rent_time
 * @property string $rent_driver
 * @property string $rent_bodyguard
 * @property Carbon $rent_timestamp
 *
 * @package App\Models
 */
class CarRent extends Model
{
	protected $table = 'car_rents';
	protected $primaryKey = 'car_rents_id';
	public $timestamps = false;

	protected $dates = [
		'rent_timestamp'
	];

	protected $fillable = [
		'car_id',
		'rent_date',
		'rent_time',
		'rent_driver',
		'rent_bodyguard',
		'rent_timestamp'
	];
}
