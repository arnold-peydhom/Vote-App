<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Participant
 * 
 * @property int $id
 * @property string $nom
 * @property string $login
 * @property string $pwd
 * @property string $email
 * @property string $etat
 * @property string|null $tel
 * @property int $age
 * @property string $sexe
 * @property string $status
 * @property int $id_region
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Region $region
 *
 * @package App\Models
 */
class Participant extends Model
{
	protected $table = 'participant';

	protected $casts = [
		'age' => 'int',
		'id_region' => 'int'
	];

	protected $fillable = [
		'nom',
		'login',
		'pwd',
		'email',
		'etat',
		'tel',
		'age',
		'sexe',
		'status',
		'id_region'
	];

	public function region()
	{
		return $this->belongsTo(Region::class, 'id_region');
	}
}
