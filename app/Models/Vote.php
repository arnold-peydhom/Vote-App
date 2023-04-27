<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vote
 * 
 * @property int $id
 * @property Carbon $date
 * @property int $election_id
 * @property int $bulletin_id
 * @property int $participant_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Vote extends Model
{
	protected $table = 'vote';

	protected $casts = [
		'date' => 'datetime',
		'election_id' => 'int',
		'bulletin_id' => 'int',
		'participant_id' => 'int'
	];

	protected $fillable = [
		'date',
		'election_id',
		'bulletin_id',
		'participant_id'
	];
}
