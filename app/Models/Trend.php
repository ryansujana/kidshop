<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trend extends Model
{
	use HasFactory;

	public function produks()
	{
		return $this->hasMany(Produk::class, 'trend_id', 'id');
	}
}
