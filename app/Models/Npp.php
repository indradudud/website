<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Npp extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    // protected $fillable = [
    //     'no_agenda',
    //     'no_npp',
    //     'tanggal_terima',
    //     'nama_pja',
    //     'no_nde',
    //     'tanggal_nde',
    //     'verifikator'
    // ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'no_npp'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
