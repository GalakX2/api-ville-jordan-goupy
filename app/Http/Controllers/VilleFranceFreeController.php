<?php

namespace App\Http\Controllers;

use App\Models\VilleFranceFree;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View; // Importation pour l'indication de type de retour

class VilleFranceFreeController extends Controller
{
    /**
     * Affiche l'interface de recherche et les résultats paginés.
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View // <-- Retourne une Vue
    {
        // 1. Récupérer le terme de recherche 'q' de l'URL
        $search = $request->input('q');
        
        // Définir la limite de résultats par page
        $perPage = 50; 

        $query = VilleFranceFree::query();

        // 2. Appliquer la recherche (si 'q' est présent)
        if ($search) {
            $query->where('ville_nom', 'LIKE', "%{$search}%")
                  ->orWhere('ville_code_postal', 'LIKE', "{$search}%"); 
        }

        // 3. Exécuter la requête paginée
        $villes = $query->paginate($perPage)->withQueryString(); // withQueryString maintient le 'q=' dans les liens de pagination

        // 4. Retourner la vue en lui passant les données
        return view('villes.recherche', [ // <-- Renvoie la vue 'resources/views/villes/recherche.blade.php'
            'villes' => $villes,
            'searchQuery' => $search // Pour pré-remplir la barre de recherche
        ]);
    }
}