<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 * 
 * @property int $id
 * @property int $id_provincia
 * @property string $nombre
 * 
 * @property Provincia $provincia
 * @property Collection|Evento[] $eventos
 *
 * @package App\Models
 */
class Municipio extends Model
{
	protected $table = 'municipios';
	public $timestamps = false;

	protected $casts = [
		'id_provincia' => 'int'
	];

	protected $fillable = [
		'id_provincia',
		'nombre'
	];

	public function provincia()
	{
		return $this->belongsTo(Provincia::class, 'id_provincia');
	}

	public function eventos()
	{
		return $this->hasMany(Evento::class, 'id_munucipio');
	}
}
