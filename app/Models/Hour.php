<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Hour
 *
 * @property int $id
 * @property int $giorno
 * @property string $oraMattinoInizio
 * @property string $oraMattinoFine
 * @property string|null $oraPomeriggioInizio
 * @property string|null $oraPomeriggioFine
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $giornosettimana
 * @method static \Illuminate\Database\Eloquent\Builder|Hour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hour query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hour whereGiorno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hour whereOraMattinoFine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hour whereOraMattinoInizio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hour whereOraPomeriggioFine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hour whereOraPomeriggioInizio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hour whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $giornosettimanabreve
 */
class Hour extends Model
{
    use HasFactory;

    protected $table = 'houres';
    protected $guarded = [];

    public function getGiornosettimanaAttribute()
    {
        $giorno = '';
        switch ($this->giorno) {
            case 1:
                $giorno = 'Lunedì';
                break;
            case 2:
                $giorno = 'Martedì';
                break;
            case 3:
                $giorno = 'Mercoledì';
                break;
            case 4:
                $giorno = 'Giovedì';
                break;
            case 5:
                $giorno = 'Venerdì';
                break;
            case 6:
                $giorno = 'Sabato';
                break;
        }

        return $giorno;
    }

    public function getGiornosettimanabreveAttribute()
    {
        $giorno = '';
        switch ($this->giorno) {
            case 1:
                $giorno = 'LU';
                break;
            case 2:
                $giorno = 'MA';
                break;
            case 3:
                $giorno = 'ME';
                break;
            case 4:
                $giorno = 'GI';
                break;
            case 5:
                $giorno = 'VE';
                break;
            case 6:
                $giorno = 'SA';
                break;
        }

        return $giorno;
    }
}
