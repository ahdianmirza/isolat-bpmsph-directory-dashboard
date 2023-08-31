<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('mitra', 'like', '%' . $search . '%')
                        ->orWhere('kode_isolat', 'like', '%' . $search . '%')
                        ->orWhere('jenis', 'like', '%' . $search . '%')
                        ->orWhere('tahun', 'like', '%' . $search . '%')
                        ->orWhere('keterangan', 'like', '%' . $search . '%');
        });
    }

    public function rak() {
        return $this->belongsTo(Rak::class);
    }
}