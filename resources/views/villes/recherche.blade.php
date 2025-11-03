<!DOCTYPE html>
<html>

<head>
    <title>Recherche de Villes</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 md:p-8 rounded-xl shadow-lg">

        <h1 class="text-3xl font-bold text-gray-800 mb-6">Rechercher une Ville de France</h1>

        {{-- Formulaire de Recherche --}}
        <form action="{{ url('/api/villes') }}" method="GET" class="flex gap-3">
            <input type="text" name="q" placeholder="Tapez le nom d'une ville ou un code postal..."
                value="{{ $searchQuery ?? '' }}"
                class="flex-1 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150">
            <button type="submit"
                class="bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-150 shadow-md">
                🔍 Rechercher
            </button>
        </form>

        <hr class="my-6 border-gray-200">

        {{-- Affichage des Résultats --}}
        @if($villes->count() > 0)
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Résultats trouvés ({{ $villes->total() }} au total) :</h2>
            <ul class="space-y-3">
                @foreach ($villes as $ville)
                    <li class="bg-white p-4 rounded-lg border border-gray-200 hover:shadow-sm transition duration-150">
                        <div class="font-bold text-lg text-gray-800">{{ $ville->ville_nom }}</div>
                        <div class="text-sm text-gray-500">
                            Code Postal: {{ $ville->ville_code_postal }} &bull; Département:
                            {{ $ville->ville_code_departement }}
                        </div>
                    </li>
                @endforeach
            </ul>

            {{-- Liens de Pagination (nécessite une petite configuration Tailwind pour bien s'afficher) --}}
            <div class="mt-6">
                {{ $villes->links() }}
            </div>

        @else
            <p class="text-gray-500 italic p-4 bg-gray-50 rounded-lg border border-gray-200">
                Aucune ville trouvée pour votre recherche.
            </p>
        @endif

    </div>

</body>

</html>