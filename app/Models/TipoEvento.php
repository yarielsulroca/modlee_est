<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoEvento
 * 
 * @property int $id
 * @property string $tipo
 * @property string|null $descripcion
 * 
 * @property Evento $evento
 * @property Collection|Evento[] $eventos
 *
 * @package App\Models
 */
class TipoEvento extends Model
{
	protected $table = 'tipo_evento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'tipo',
		'descripcion'
	];

	public function evento()
	{
		return $this->belongsTo(Evento::class, 'id', 'id_tipo_evento');
	}

	public function eventos()
	{
		return $this->hasMany(Evento::class, 'id_tipo_evento', 'id');
	}
}
