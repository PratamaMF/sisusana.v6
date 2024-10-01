<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grup extends Model
{
    use HasFactory;
    protected $table = 'tgrup';

    public function detail_absensi(): HasMany
    {
        return $this->hasMany(Pertanyaan::class);
    }
}
