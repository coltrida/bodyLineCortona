<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Models\Course
 *
 * @property int $id
 * @property string $nome
 * @property string $descrizione
 * @property int|null $trainer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Trainer|null $trainer
 * @method static \Illuminate\Database\Eloquent\Builder|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereDescrizione($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereTrainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Calendar[] $calendars
 * @property-read int|null $calendars_count
 */
class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function calendars()
    {
        return $this->hasMany(Calendar::class);
    }

    public function getUppernameAttribute()
    {
        return Str::upper($this->nome);
    }
}
