<x-layout>
    <x-slot:title>Welcome page</x-slot>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center">
        <div class="absolute inset-0 bg-zinc-900">
            <img src="https://images.unsplash.com/photo-1514326640560-7d063ef2aed5?w=1920&auto=format&fit=crop&q=80"
                alt="French Cuisine" class="absolute inset-0 w-full h-full opacity-50 object-cover">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-2xl text-white">
                <h1 class="font-display text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    L'art de la Cuisine Française
                </h1>
                <p class="text-xl mb-8 font-light leading-relaxed">
                    Découvrez les secrets de la gastronomie française avec nos recettes authentiques transmises de
                    génération en génération.
                </p>
                <a href="#recipes"
                    class="inline-block px-8 py-3 bg-citrus-500 text-white font-semibold rounded-full transition-colors duration-300 hover:bg-citrus-600">
                    Explorer Nos Recettes
                </a>
            </div>
        </div>
    </section>

    <!-- Recipe Cards Section -->
    <section id="recipes" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-display font-bold text-center mb-4">Nos Recettes Signature</h2>
            <p class="text-center text-gray-600 mb-16 max-w-2xl mx-auto">
                Une sélection soignée de nos meilleures recettes françaises, préparées avec passion et expertise.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Recipe Card 1 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?w=800&auto=format&fit=crop&q=80"
                            alt="Coq au Vin" class="w-full h-56 object-cover">
                        <span class="absolute top-4 right-4 bg-citrus-500 text-white text-xs px-3 py-1 rounded-full">
                            Classique
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3 text-sm text-gray-500 space-x-4">
                            <span class="flex items-center">
                                <i data-lucide="clock" class="w-4 h-4 mr-1 text-citrus-600"></i>
                                90 min
                            </span>
                            <span class="flex items-center">
                                <i data-lucide="users" class="w-4 h-4 mr-1 text-citrus-600"></i>
                                4 pers.
                            </span>
                            <span class="flex items-center">
                                <i data-lucide="flame" class="w-4 h-4 mr-1 text-citrus-600"></i>
                                Moyen
                            </span>
                        </div>
                        <h3 class="font-display text-xl font-semibold mb-2">Coq au Vin Traditionnel</h3>
                        <p class="text-gray-600 mb-4">
                            Un plat emblématique de la cuisine française, mijoté dans un délicieux rouge avec chamignons
                            et lardons.
                        </p>
                        <button onclick="document.getElementById('recipe1').classList.remove('hidden')"
                            class="w-full bg-citrus-500 text-white py-2 rounded-md hover:bg-citrus-600 transition-colors duration-300">
                            Voir la Recette
                        </button>
                    </div>
                </div>

                <!-- Recipe Card 2 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1572453800999-e8d2d1589b7c?w=800&auto=format&fit=crop&q=80"
                            alt="Ratatouille" class="w-full h-56 object-cover">
                        <span class="absolute top-4 right-4 bg-citrus-500 text-white text-xs px-3 py-1 rounded-full">
                            Végétarien
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3 text-sm text-gray-500 space-x-4">
                            <span class="flex items-center">
                                <i data-lucide="clock" class="w-4 h-4 mr-1 text-citrus-600"></i>
                                60 min
                            </span>
                            <span class="flex items-center">
                                <i data-lucide="users" class="w-4 h-4 mr-1 text-citrus-600"></i>
                                6 pers.
                            </span>
                            <span class="flex items-center">
                                <i data-lucide="flame" class="w-4 h-4 mr-1 text-citrus-600"></i>
                                Facile
                            </span>
                        </div>
                        <h3 class="font-display text-xl font-semibold mb-2">Ratatouille Provençale</h3>
                        <p class="text-gray-600 mb-4">
                            Un mélange coloré de légumes du sud de la France, cuits lentement avec des herbes de
                            Provence.
                        </p>
                        <button onclick="document.getElementById('recipe2').classList.remove('hidden')"
                            class="w-full bg-citrus-500 text-white py-2 rounded-md hover:bg-citrus-600 transition-colors duration-300">
                            Voir la Recette
                        </button>
                    </div>
                </div>

                <!-- Recipe Card 3 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1470124182917-cc6e71b22ecc?w=800&auto=format&fit=crop&q=80"
                            alt="Crème Brûlée" class="w-full h-56 object-cover">
                        <span class="absolute top-4 right-4 bg-citrus-500 text-white text-xs px-3 py-1 rounded-full">
                            Dessert
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3 text-sm text-gray-500 space-x-4">
                            <span class="flex items-center">
                                <i data-lucide="clock" class="w-4 h-4 mr-1 text-citrus-600"></i>
                                45 min
                            </span>
                            <span class="flex items-center">
                                <i data-lucide="users" class="w-4 h-4 mr-1 text-citrus-600"></i>
                                4 pers.
                            </span>
                            <span class="flex items-center">
                                <i data-lucide="flame" class="w-4 h-4 mr-1 text-citrus-600"></i>
                                Moyen
                            </span>
                        </div>
                        <h3 class="font-display text-xl font-semibold mb-2">Macarons à la Framboisine</h3>
                        <p class="text-gray-600 mb-4">
                            Un ensemble de petits macarons terriblement délicieux, mélangé à dur Kir et à la framboise
                            intense.
                        </p>
                        <button onclick="document.getElementById('recipe3').classList.remove('hidden')"
                            class="w-full bg-citrus-500 text-white py-2 rounded-md hover:bg-citrus-600 transition-colors duration-300">
                            Voir la Recette
                        </button>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block px-8 py-3 border-2 border-citrus-600 text-citrus-600 font-semibold rounded-full hover:bg-citrus-500 hover:text-white transition-colors duration-300">
                    Voir Toutes Nos Recettes
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="w-full lg:w-1/2">
                    <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?w=800&auto=format&fit=crop&q=80"
                        alt="Chef français" class="w-full h-auto rounded-lg shadow-lg">
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="text-4xl font-display font-bold mb-6 relative">
                        Notre Passion pour la Cuisine Française
                        <span class="block w-20 h-1 bg-citrus-500 mt-4"></span>
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Fondée en 2015 par le chef Michel Lavoisier, La Cuisine Française est née d'une passion pour la
                        gastronomie traditionnelle et le partage des savoirs culinaires.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Notre mission est de faire découvrir l'authenticité et la richesse de la cuisine française à
                        travers des recettes soigneusement élaborées et adaptées pour être réalisables chez vous.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-2">
                    <div class="flex items-center mb-4">
                        <i data-lucide="citrus" class="h-8 w-8 text-citrus-600"></i>
                        <span class="ml-2 text-xl font-display font-bold">Zest</span>
                    </div>
                    <p class="text-gray-300">
                        Découvrez l'excellence de la cuisine française à travers nos recettes traditionnelles.
                    </p>
                </div>

                <div>
                    <h4 class="font-display font-semibold mb-4">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">
                            <i data-lucide="facebook" class="h-6 w-6"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">
                            <i data-lucide="instagram" class="h-6 w-6"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">
                            <i data-lucide="twitter" class="h-6 w-6"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-4 text-center text-gray-400 text-sm">
                &copy; {{ date('Y') }} Zest. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Recipe Modals -->
    <!-- Recipe Modal 1 -->
    <div id="recipe1" class="hidden relative z-30" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

        <div class="fixed inset-0 z-30 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:max-w-2xl sm:p-6">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-display text-2xl font-bold">Coq au Vin Traditionnel</h3>
                            <button onclick="document.getElementById('recipe1').classList.add('hidden')"
                                class="text-gray-500 hover:text-gray-700">
                                <i data-lucide="x" class="w-6 h-6"></i>
                            </button>
                        </div>
                        <img src="https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?w=800&auto=format&fit=crop&q=80"
                            alt="Coq au Vin" class="w-full h-64 object-cover rounded-lg mb-6">

                        <!-- Ingredients Section -->
                        <div class="mb-6">
                            <h4 class="font-display text-xl font-semibold mb-3">Ingredients</h4>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>1 poulet entier (environ 1,8 kg), coupé en 8 morceaux</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>230 g de bacon ou pancetta, coupé en dés</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>2 tasses d’oignons grelots, pelés</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>230 g de champignons, coupés en quartiers</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>3 carottes, coupées en rondelles</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>4 gousses d’ail, émincées</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>2 c. à soupe de concentré de tomate</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>1 bouteille (750 ml) de vin rouge sec (de préférence Bourgogne)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>2 tasses de bouillon de volaille</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>1 bouquet garni (thym, laurier, persil)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>3 c. à soupe de beurre</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>3 c. à soupe de farine</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>Persil frais pour la garniture</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="inline-block w-6 text-center">•</span>
                                    <span>Sel et poivre noir fraîchement moulu, selon le goût</span>
                                </li>
                            </ul>

                        </div>

                        <!-- Comments Section -->
                        <div class="border-t pt-6">
                            <h4 class="font-display text-xl font-semibold mb-4">Commentaires (3)</h4>

                            <!-- Individual Comments -->
                            <div class="space-y-4 mb-6">
                                <!-- Comment 1 -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex items-center mb-2">
                                        <div
                                            class="w-10 h-10 rounded-full bg-citrus-100 flex items-center justify-center mr-3">
                                            <span class="text-citrus-500 font-medium">MJ</span>
                                        </div>
                                        <div>
                                            <p class="font-medium">Marie Joubert</p>
                                            <p class="text-gray-500 text-sm">il y a 2 jours</p>
                                        </div>
                                    </div>
                                    <p>J'ai préparé ce plat le week-end dernier et c'était incroyable ! J'ai mariné le
                                        poulet toute la nuit dans du vin et des herbes, ce qui a vraiment rehaussé la
                                        saveur.</p>
                                </div>

                                <!-- Comment 2 -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex items-center mb-2">
                                        <div
                                            class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center mr-3">
                                            <span class="text-green-500 font-medium">TB</span>
                                        </div>
                                        <div>
                                            <p class="font-medium">Thomas Bernard</p>
                                            <p class="text-gray-500 text-sm">il y a 1 semaine</p>
                                        </div>
                                    </div>
                                    <p>Cette recette est très proche de celle de ma grand-mère ! Je suggère d'ajouter
                                        une cuillère à soupe de cognac à la fin pour une touche française authentique.
                                    </p>
                                </div>

                                <!-- Comment 3 -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex items-center mb-2">
                                        <div
                                            class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center mr-3">
                                            <span class="text-purple-500 font-medium">KL</span>
                                        </div>
                                        <div>
                                            <p class="font-medium">Catherine Lewis</p>
                                            <p class="text-gray-500 text-sm">il y a 2 semaines</p>
                                        </div>
                                    </div>
                                    <p>J'ai trouvé cette recette assez accessible malgré le fait que je n'avais jamais
                                        cuisiné de plats français auparavant. Les instructions étaient claires et le
                                        résultat était délicieux !</p>
                                </div>
                            </div>

                            <!-- Add Comment Form -->
                            <form class="mt-6">
                                <div class="mb-4">
                                    <label for="comment" class="block text-sm font-medium text-gray-700 mb-2">Ajouter
                                        un commentaire</label>
                                    <textarea id="comment" rows="3"
                                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-citrus-500 focus:border-citrus-500 outline-none transition"
                                        placeholder="Partagez votre expérience pour cette recette..."></textarea>
                                </div>
                                <button type="button"
                                    class="w-[250px] bg-citrus-500 text-white py-2 rounded-md hover:bg-citrus-600 transition-colors duration-300">Publier
                                    le commentaire</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
