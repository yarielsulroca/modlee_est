<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 * 
 * @property int $id
 * @property int $id_tipo_evento
 * @property int $id_munucipio
 * @property int $id_participantes
 * @property int|null $id_img
 * @property string|null $nombre
 * @property int|null $descripcio
 * @property int $nivel
 * @property int $activo
 * @property Carbon $hora_inicio
 * @property Carbon|null $duracion
 * @property string|null $direccion
 * @property float|null $clasificacion
 * 
 * @property Imagene $imagene
 * @property Municipio $municipio
 * @property Participante $participante
 * @property TipoEvento $tipo_evento
 * @property Collection|DiaEvent[] $dia_events
 *
 * @package App\Models
 */
class Evento extends Model
{
	protected $table = 'eventos';
	public $timestamps = false;

	protected $casts = [
		'id_tipo_evento' => 'int',
		'id_munucipio' => 'int',
		'id_participantes' => 'int',
		'id_img' => 'int',
		'descripcio' => 'int',
		'nivel' => 'int',
		'activo' => 'int',
		'clasificacion' => 'float'
	];

	protected $dates = [
		'hora_inicio',
		'duracion'
	];

	protected $fillable = [
		'id_tipo_evento',
		'id_munucipio',
		'id_participantes',
		'id_img',
		'nombre',
		'descripcio',
		'nivel',
		'activo',
		'hora_inicio',
		'duracion',
		'direccion',
		'clasificacion'
	];

	public function imagene()
	{
		return $this->hasOne(Imagene::class, 'id', 'id_img');
	}

	public function municipio()
	{
		return $this->belongsTo(Municipio::class, 'id_munucipio');
	}

	public function participante()
	{
		return $this->belongsTo(Participante::class, 'id_participantes', 'id');
	}

	public function tipo_evento()
	{
		return $this->hasOne(TipoEvento::class, 'id', 'id_tipo_evento');
	}

	public function dia_events()
	{
		return $this->hasMany(DiaEvent::class, 'id_evento');
	}
}
