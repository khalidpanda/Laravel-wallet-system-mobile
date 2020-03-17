<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 * 
 * @property int $noti_id
 * @property string $noti_name
 * @property string $noti_desc
 * @property string $noti_status
 * @property Carbon $noti_timestamp
 *
 * @package App\Models
 */
class Notification extends Model
{
	protected $table = 'notifications';
	protected $primaryKey = 'noti_id';
	public $timestamps = false;

	protected $dates = [
		'noti_timestamp'
	];

	protected $fillable = [
		'noti_name',
		'noti_desc',
		'noti_status',
		'noti_timestamp'
	];
}
