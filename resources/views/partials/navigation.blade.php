<!-- Navigation -->
<header class="fixed w-full bg-white bg-opacity-95 backdrop-blur-sm z-20 shadow-md">
    <div class="container mx-auto px-6">
        <nav class="flex justify-between items-center py-4">
            <a href="#" class="flex items-center group transition-transform duration-300 hover:scale-105">
                <i data-lucide="citrus"
                    class="h-10 w-10 text-citrus-500 transition-colors duration-300 group-hover:text-citrus-600"></i>
                <span
                    class="ml-3 text-2xl font-display font-bold text-gray-800 transition-colors duration-300 group-hover:text-gray-900">
                    Zest
                </span>
            </a>

            <div class="hidden md:flex space-x-8 font-bold">
                <a href="{{ route('homepage') }}" class="text-gray-600 hover:text-citrus-600 transition-colors duration-300">Accueil</a>
                @auth
                <a href="{{ route('recipes.index') }}" class="text-gray-600 hover:text-citrus-600 transition-colors duration-300">Mes recettes</a>
                @else
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-citrus-600 transition-colors duration-300">Se connecter</a>
                @endauth
                <a href="#contact"
                    class="text-gray-600 hover:text-citrus-600 transition-colors duration-300">Contact</a>
            </div>
        </nav>
    </div>
</header>
