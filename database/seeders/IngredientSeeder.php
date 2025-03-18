<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            // Légumes
            'Ail',
            'Artichaut',
            'Asperge',
            'Aubergine',
            'Avocat',
            'Betterave',
            'Brocoli',
            'Carotte',
            'Céleri',
            'Champignon',
            'Chou',
            'Chou-fleur',
            'Concombre',
            'Courgette',
            'Échalote',
            'Endive',
            'Épinard',
            'Fenouil',
            'Haricot vert',
            'Laitue',
            'Maïs',
            'Navet',
            'Oignon',
            'Oignon rouge',
            'Petit pois',
            'Poireau',
            'Poivron',
            'Pomme de terre',
            'Potiron',
            'Radis',
            'Tomate',
            'Tomate cerise',

            // Fruits
            'Abricot',
            'Ananas',
            'Banane',
            'Cerise',
            'Citron',
            'Citron vert',
            'Clémentine',
            'Fraise',
            'Framboise',
            'Kiwi',
            'Mandarine',
            'Mangue',
            'Melon',
            'Mûre',
            'Myrtille',
            'Orange',
            'Pamplemousse',
            'Pêche',
            'Poire',
            'Pomme',
            'Prune',
            'Raisin',

            // Herbes et épices
            'Basilic',
            'Cannelle',
            'Ciboulette',
            'Coriandre',
            'Cumin',
            'Curry',
            'Estragon',
            'Gingembre',
            'Laurier',
            'Menthe',
            'Muscade',
            'Origan',
            'Paprika',
            'Persil',
            'Poivre',
            'Romarin',
            'Safran',
            'Sel',
            'Thym',
            'Vanille',

            // Produits laitiers
            'Beurre',
            'Crème fraîche',
            'Fromage blanc',
            'Fromage râpé',
            'Lait',
            'Œuf',
            'Parmesan',
            'Yaourt',

            // Viandes et poissons
            'Bacon',
            'Bœuf',
            'Canard',
            'Crevette',
            'Dinde',
            'Jambon',
            'Lardons',
            'Morue',
            'Poulet',
            'Saumon',
            'Thon',
            'Veau',

            // Féculents et céréales
            'Couscous',
            'Farine',
            'Pâtes',
            'Quinoa',
            'Riz',

            // Divers
            'Chapelure',
            'Chocolat',
            'Huile d\'olive',
            'Levure',
            'Miel',
            'Moutarde',
            'Noix',
            'Pain',
            'Sucre',
            'Vinaigre balsamique',
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create([
                'name' => $ingredient,
            ]);
        }
    }
}
