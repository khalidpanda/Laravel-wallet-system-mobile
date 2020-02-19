<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserRole
 * 
 * @property int $user_roles_id
 * @property string $modules
 * @property string $edit
 * @property string $view
 * @property string $user_id
 *
 * @package App\Models
 */
class UserRole extends Model
{
	protected $table = 'user_roles';
	protected $primaryKey = 'user_roles_id';
	public $timestamps = false;

	protected $fillable = [
		'modules',
		'edit',
		'view',
		'user_id'
	];
}
