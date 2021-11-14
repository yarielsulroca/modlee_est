<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grupo
 * 
 * @property int $id
 * @property int|null $id_participante
 * @property int|null $id_profecion
 * @property string|null $nombre
 * @property string|null $descripcion
 * 
 * @property Participante|null $participante
 * @property Profecione|null $profecione
 *
 * @package App\Models
 */
class Grupo extends Model
{
	protected $table = 'grupos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_participante' => 'int',
		'id_profecion' => 'int'
	];

	protected $fillable = [
		'id',
		'id_participante',
		'id_profecion',
		'nombre',
		'descripcion'
	];

	public function participante()
	{
		return $this->belongsTo(Participante::class, 'id_participante', 'id');
	}

	public function profecione()
	{
		return $this->belongsTo(Profecione::class, 'id_profecion', 'id');
	}
}
