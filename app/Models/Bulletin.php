<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bulletin
 * 
 * @property int $id
 * @property string $couleur
 * @property string|null $photo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Bulletin extends Model
{
	protected $table = 'bulletin';

	protected $fillable = [
		'couleur',
		'photo'
	];
}
