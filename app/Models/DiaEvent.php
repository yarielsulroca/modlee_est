<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DiaEvent
 * 
 * @property int $id
 * @property int $id_evento
 * 
 * @property Evento $evento
 *
 * @package App\Models
 */
class DiaEvent extends Model
{
	protected $table = 'dia_events';
	public $timestamps = false;

	protected $casts = [
		'id_evento' => 'int'
	];

	protected $fillable = [
		'id_evento'
	];

	public function evento()
	{
		return $this->belongsTo(Evento::class, 'id_evento');
	}
}
