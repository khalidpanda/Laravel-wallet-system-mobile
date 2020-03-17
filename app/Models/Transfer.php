<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transfer
 * 
 * @property int $transfers_id
 * @property string $sender_id
 * @property string $receiver_id
 * @property string $transfers_amount
 * @property Carbon $transfers_timestamp
 *
 * @package App\Models
 */
class Transfer extends Model
{
	protected $table = 'transfers';
	protected $primaryKey = 'transfers_id';
	public $timestamps = false;

	protected $dates = [
		'transfers_timestamp'
	];

	protected $fillable = [
		'sender_id',
		'receiver_id',
		'transfers_amount',
		'transfers_timestamp'
	];
}
