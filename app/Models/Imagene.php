<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Imagene
 * 
 * @property int $id
 * @property boolean|null $principal
 * @property boolean|null $sec1
 * @property boolean|null $sec2
 * @property boolean|null $sec3
 * @property boolean|null $sec4
 * @property boolean|null $sec5
 * @property boolean|null $sec6
 * @property boolean|null $sec7
 * @property boolean|null $sec8
 * @property boolean|null $sec9
 * @property boolean|null $sec10
 * 
 * @property Evento $evento
 * @property Collection|Evento[] $eventos
 *
 * @package App\Models
 */
class Imagene extends Model
{
	protected $table = 'imagenes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'principal' => 'boolean',
		'sec1' => 'boolean',
		'sec2' => 'boolean',
		'sec3' => 'boolean',
		'sec4' => 'boolean',
		'sec5' => 'boolean',
		'sec6' => 'boolean',
		'sec7' => 'boolean',
		'sec8' => 'boolean',
		'sec9' => 'boolean',
		'sec10' => 'boolean'
	];

	protected $fillable = [
		'id',
		'principal',
		'sec1',
		'sec2',
		'sec3',
		'sec4',
		'sec5',
		'sec6',
		'sec7',
		'sec8',
		'sec9',
		'sec10'
	];

	public function evento()
	{
		return $this->belongsTo(Evento::class, 'id', 'id_img');
	}

	public function eventos()
	{
		return $this->hasMany(Evento::class, 'id_img', 'id');
	}
}
