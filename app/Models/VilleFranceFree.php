<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VilleFranceFree extends Model
{
    use HasFactory;

    protected $table = 'villes_france_free';

    // Si ta table n’a pas de colonnes created_at / updated_at :
    public $timestamps = false;

    protected $primaryKey = 'ville_id';

    protected $fillable = [
        'ville_departement',
        'ville_slug',
        'ville_nom',
        'ville_nom_simple',
        'ville_nom_soundex',
        'ville_nom_metaphone',
        'ville_code_postal',
        'ville_commune',
        'ville_code_commune',
        'ville_arrondissement',
        'ville_canton',
        'ville_amdi',
        'ville_population_2010 ',
        'ville_population_1999',
        'ville_population_2012',
        'ville_densite_2010',
        'ville_surface',
        'ville_longitude_deg',
        'ville_latitude_deg',
        'ville_longitude_grd',
        'ville_latitude_grd',
        'ville_longitude_dms',
        'ville_latitude_dms',
        'ville_zmin',
        'ville_zmax'
    ];
}
