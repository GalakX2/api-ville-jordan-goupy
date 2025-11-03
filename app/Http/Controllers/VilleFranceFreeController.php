<?php

namespace App\Http\Controllers;

use App\Models\VilleFranceFree;
use Illuminate\Http\Request;
// Remplacez 'Collection' par 'LengthAwarePaginator' pour une meilleure déclaration de type
use Illuminate\Contracts\Pagination\LengthAwarePaginator; 

class VilleFranceFreeController extends Controller
{
    /**
     * Affiche une liste paginée des villes, avec une option de recherche.
     * @param Request $request
     * @return LengthAwarePaginator 
     */
    public function index(Request $request): LengthAwarePaginator // <-- Changement ici
    {
        // 1. Récupérer le terme de recherche 'q' de l'URL
        $search = $request->input('q');
        
        // Définir la limite de résultats par page
        $perPage = 50; 

        $query = VilleFranceFree::query();

        // 2. Appliquer la clause WHERE si un terme de recherche est présent
        if ($search) {
            $query->where('ville_nom', 'LIKE', "%{$search}%")
                  ->orWhere('ville_code_postal', 'LIKE', "{$search}%"); 
        }

        // 3. Appliquer la pagination au lieu de récupérer TOUS les résultats
        // Le paramètre 'q' est automatiquement géré par paginate()
        return $query->paginate($perPage); // <-- Changement clé ici: utilisation de paginate()
    }
}