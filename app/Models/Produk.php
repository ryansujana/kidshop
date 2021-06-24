<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
	use HasFactory;

	public function trend()
	{
		return $this->belongsTo(Trend::class, 'trend_id', 'id');
	}

	public function pesanan_details()
	{
		return $this->hasMany(PesananDetail::class, 'produk_id', 'id');
	}
}
