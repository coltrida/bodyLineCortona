<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function stristr;

/**
 * App\Models\Trainer
 *
 * @property int $id
 * @property string $nome
 * @property string $cognome
 * @property string|null $foto
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereCognome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $descrizione
 * @method static \Illuminate\Database\Eloquent\Builder|Trainer whereDescrizione($value)
 */
class Trainer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getPathAttribute(){
        return 'storage/trainers/'.$this->foto;
    }
}
