<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Incident extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'criticality',
        'type',
        'status'
    ];

    protected function status(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => filter_var($value, FILTER_VALIDATE_BOOLEAN),
            get: fn ($value) => filter_var($value, FILTER_VALIDATE_BOOLEAN),
        );
    }

    protected function active(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $attributes['status'] ? "Ativo" : "Inativo"
        );
    }
}
