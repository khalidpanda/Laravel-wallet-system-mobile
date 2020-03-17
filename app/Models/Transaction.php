<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 * 
 * @property int $trans_id
 * @property string $user_id
 * @property string $trans_value
 * @property string $trans_type
 * @property Carbon $timestamp
 *
 * @package App\Models
 */
class Transaction extends Model
{
	protected $table = 'transactions';
	protected $primaryKey = 'trans_id';
	public $timestamps = false;

	protected $dates = [
		'timestamp'
	];

	protected $fillable = [
		'user_id',
		'trans_value',
		'trans_type',
		'timestamp'
	];
}
