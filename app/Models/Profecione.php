<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profecione
 * 
 * @property int $id
 * @property int $id_participante
 * @property string|null $profecion
 * @property string|null $descripcion
 * 
 * @property Participante $participante
 * @property Grupo $grupo
 *
 * @package App\Models
 */
class Profecione extends Model
{
	protected $table = 'profeciones';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_participante' => 'int'
	];

	protected $fillable = [
		'id',
		'id_participante',
		'profecion',
		'descripcion'
	];

	public function participante()
	{
		return $this->hasOne(Participante::class, 'id_profecion', 'id');
	}

	public function grupo()
	{
		return $this->hasOne(Grupo::class, 'id_profecion', 'id');
	}
}
