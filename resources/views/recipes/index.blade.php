<x-layout>
    <x-slot:title>Mes recettes</x-slot>

    <div class="max-w-4xl mx-auto pt-40">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-4 sm:mb-0">Mes Recettes</h1>
            <a href="{{ route('recipes.create') }}"
                class="inline-flex items-center justify-center rounded-lg bg-gradient-to-r from-yellow-500 to-yellow-600 px-4 py-2 text-sm font-semibold text-white shadow-lg hover:from-yellow-600 hover:to-yellow-700 transition-all duration-300">
                <i data-lucide="plus-circle" class="size-5 mr-2"></i>
                Ajouter une recette
            </a>
        </div>

        <ul role="list" class="space-y-4">
            @forelse ($recipes as $recipe)
                <li class="group bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-x-6 p-6">
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-x-3">
                                <p class="text-lg font-semibold text-gray-900">{{ $recipe->title }}</p>
                            </div>
                            <div class="mt-2 flex items-center gap-x-2 text-sm text-gray-600">
                                <p class="whitespace-nowrap flex items-center text-sm text-gray-600">
                                    <i data-lucide="calendar" class="size-4 mr-2 text-yellow-600"></i>
                                    Ajoutée le
                                    <time datetime="{{ $recipe->created_at }}" class="font-medium text-gray-800 ml-1">
                                        {{ $recipe->created_at->format('j F Y') }}
                                    </time>
                                </p>                                <svg viewBox="0 0 2 2" class="size-1 fill-current">
                                    <circle cx="1" cy="1" r="1" />
                                </svg>
                                <i data-lucide="user" class="size-4 mr-1"></i>
                                <p class="truncate">Par {{ $recipe->user->name }}</p>
                            </div>
                            <div class="mt-3 flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-gray-700">
                                <div class="flex items-center">
                                    <i data-lucide="gauge" class="size-4 mr-1 text-yellow-600"></i>
                                    <span>Niveau: {{ $recipe->level }}</span>
                                </div>
                                <div class="flex items-center">
                                    <i data-lucide="clock" class="size-4 mr-1 text-yellow-600"></i>
                                    <span>Cuisson: {{  $recipe->duration }} min</span>
                                </div>
                                <div class="flex items-center">
                                    <i data-lucide="users" class="size-4 mr-1 text-yellow-600"></i>
                                    <span>Pour {{ $recipe->people }} personnes</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none mt-4 sm:mt-0 flex items-center gap-x-3">
                            <a href="#"
                                class="rounded-lg bg-white px-3 py-2 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-gray-200 hover:bg-gray-50 hover:ring-gray-300 transition-all duration-300">
                                <i data-lucide="eye" class="size-5"></i>
                            </a>
                            <a href="#"
                                class="rounded-lg bg-white px-3 py-2 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-gray-200 hover:bg-gray-50 hover:ring-gray-300 transition-all duration-300">
                                <i data-lucide="edit-3" class="size-5"></i>
                            </a>
                            <a href="#"
                                class="rounded-lg bg-white px-3 py-2 text-sm font-semibold text-red-600 shadow-sm ring-1 ring-gray-200 hover:bg-gray-50 hover:text-red-700 hover:ring-gray-300 transition-all duration-300">
                                <i data-lucide="trash-2" class="size-5"></i>
                            </a>
                        </div>
                    </div>
                </li>
            @empty
                <div class="text-center py-10">
                    <p class="text-gray-600">Vous n'avez pas de recette.</p>
                    <a href="{{ route('recipes.store') }}" class="mt-4 inline-flex items-center text-yellow-600 hover:text-yellow-700 font-semibold">
                        <i data-lucide="plus-circle" class="size-5 mr-2"></i>
                        Créer une recette
                    </a>
                </div>
            @endforelse
        </ul>
    </div>
</x-layout>
