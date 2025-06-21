<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Geef aan welke velden massaal ingevuld mogen worden
    protected $fillable = ['name', 'description', 'price', 'stock', 'image'];

    // Optioneel: Geef aan welke velden verborgen moeten zijn bij serialisatie
    protected $hidden = ['created_at', 'updated_at'];

    // Optioneel: Geef aan welke velden als datums moeten worden behandeld
    protected $dates = ['created_at', 'updated_at'];
}
