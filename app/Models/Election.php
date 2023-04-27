<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Election
 * 
 * @property int $id
 * @property Carbon $date
 * @property string $label
 * @property string $description
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Election extends Model
{
	protected $table = 'election';

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'date',
		'label',
		'description',
		'status'
	];
}
