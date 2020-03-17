<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reward
 * 
 * @property int $rewards_id
 * @property string $rewards_name
 * @property string $rewards_type
 * @property string $rewards_point
 * @property string $rewards_picture
 * @property string $rewards_description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Reward extends Model
{
	protected $table = 'rewards';
	protected $primaryKey = 'rewards_id';

	protected $fillable = [
		'rewards_name',
		'rewards_type',
		'rewards_point',
		'rewards_picture',
		'rewards_description'
	];
}
