<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Participante
 * 
 * @property int $id
 * @property int $id_profecion
 * @property string|null $nombre_artista
 * @property string|null $nombre_artistico
 * 
 * @property Profecione $profecione
 * @property Collection|Evento[] $eventos
 * @property Grupo $grupo
 *
 * @package App\Models
 */
class Participante extends Model
{
	protected $table = 'participantes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_profecion' => 'int'
	];

	protected $fillable = [
		'id',
		'id_profecion',
		'nombre_artista',
		'nombre_artistico'
	];

	public function profecione()
	{
		return $this->hasOne(Profecione::class, 'id_participante', 'id');
	}

	public function eventos()
	{
		return $this->hasMany(Evento::class, 'id_participantes', 'id');
	}

	public function grupo()
	{
		return $this->hasOne(Grupo::class, 'id_participante', 'id');
	}
}
