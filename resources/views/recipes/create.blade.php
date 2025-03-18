<x-layout>
    <div class="max-w-3xl mx-auto p-8 bg-white rounded-xl shadow-sm pt-40">
        <h2 class="text-2xl font-bold mb-8 text-gray-800 border-b pb-4 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-copy"><path d="M2 16V4a2 2 0 0 1 2-2h11"/><path d="M22 18H11a2 2 0 1 0 0 4h10.5a.5.5 0 0 0 .5-.5v-15a.5.5 0 0 0-.5-.5H11a2 2 0 0 0-2 2v12"/><path d="M5 14H4a2 2 0 1 0 0 4h1"/></svg>
            Nouvelle recette
        </h2>

        <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Basic Information -->
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-600 mb-2">Titre de la recette</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition">
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="level" class="block text-sm font-medium text-gray-600 mb-2">Niveau de difficulté</label>
                <select name="level" id="level"
                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition appearance-none bg-no-repeat bg-right pr-8"
                    style="background-image: url('data:image/svg+xml;charset=US-ASCII,<svg width=\"20\" height=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 10l5 5 5-5z\" fill=\"%23555\"/></svg>'); background-position: right 0.8rem center;">
                    <option value="">Sélectionner un niveau</option>
                    @foreach (\App\Enums\RecipeLevelEnum::cases() as $level)
                        <option value="{{ $level->value }}" {{ old('level') == $level->value ? 'selected' : '' }}>
                            {{ $level->value }}
                        </option>
                    @endforeach
                </select>
                @error('level')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image Upload -->
            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-600 mb-2">Photo de la recette</label>
                <div class="flex items-center justify-center w-full">
                    <label for="image"
                        class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-200 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-3 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-image"><path d="m20 13.7-2.1-2.1a2 2 0 0 0-2.8 0L9.7 17"/><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><circle cx="10" cy="8" r="2"/></svg>
                            <p class="mb-1 text-sm text-gray-500">Cliquez pour téléverser</p>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF (Max. 5Mo)</p>
                        </div>
                        <input id="image" name="image" type="file" class="hidden" accept="image/*" />
                    </label>
                </div>
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-600 mb-2">Description</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Preparation Details -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="duration" class="block text-sm font-medium text-gray-600 mb-2">Temps de préparation
                        (minutes)</label>
                    <input type="number" name="duration" id="duration" min="1" value="{{ old('duration') }}"
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition">
                    @error('duration')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="people" class="block text-sm font-medium text-gray-600 mb-2">Nombre de
                        personnes</label>
                    <input type="number" name="people" id="people" min="1" value="{{ old('people') }}"
                        class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition">
                    @error('people')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Ingredients Section -->
            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-600 mb-3">Ingrédients</label>
                <div id="ingredients-container" class="space-y-3">
                    @forelse (old('ingredients') ?? [] as $key => $oldIngredient)
                        <div class="ingredient-row flex flex-wrap md:flex-nowrap gap-3">
                            <div class="w-full md:w-1/2">
                                <select name="ingredients[]"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition appearance-none bg-no-repeat bg-right pr-8"
                                    style="background-image: url('data:image/svg+xml;charset=US-ASCII,<svg width=\"20\" height=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 10l5 5 5-5z\" fill=\"%23555\"/></svg>'); background-position: right 0.8rem center;">
                                    <option value="">Sélectionner un ingrédient</option>
                                    @foreach ($ingredients as $ingredient)
                                        <option value="{{ $ingredient->id }}" @selected($oldIngredient == $ingredient->id)>
                                            {{ $ingredient->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-1/2 md:w-1/4">
                                <input type="number" name="quantities[]" placeholder="Quantité" min="0"
                                    step="0.01" value="{{ old('quantities')[$key] }}"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition">
                            </div>
                            <div class="w-1/2 md:w-1/4">
                                <select name="units[]"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition appearance-none bg-no-repeat bg-right pr-8"
                                    style="background-image: url('data:image/svg+xml;charset=US-ASCII,<svg width=\"20\" height=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 10l5 5 5-5z\" fill=\"%23555\"/></svg>'); background-position: right 0.8rem center;">
                                    <option value="">Unité</option>
                                    @foreach ($units as $unit)
                                        <option value="{{ $unit['value'] }}" @selected(old('units')[$key] ? old('units')[$key] == $unit['value'] : false)>
                                            {{ $unit['label'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex items-center">
                                <button type="button"
                                    class="remove-ingredient text-red-500 hover:text-red-700 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </div>
                    @empty
                        <div class="ingredient-row flex flex-wrap md:flex-nowrap gap-3">
                            <div class="w-full md:w-1/2">
                                <select name="ingredients[]"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition appearance-none bg-no-repeat bg-right pr-8"
                                    style="background-image: url('data:image/svg+xml;charset=US-ASCII,<svg width=\"20\" height=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 10l5 5 5-5z\" fill=\"%23555\"/></svg>'); background-position: right 0.8rem center;">
                                    <option value="">Sélectionner un ingrédient</option>
                                    @foreach ($ingredients as $ingredient)
                                        <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-1/2 md:w-1/4">
                                <input type="number" name="quantities[]" placeholder="Quantité" min="0"
                                    step="0.01"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition">
                            </div>
                            <div class="w-1/2 md:w-1/4">
                                <select name="units[]"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition appearance-none bg-no-repeat bg-right pr-8"
                                    style="background-image: url('data:image/svg+xml;charset=US-ASCII,<svg width=\"20\" height=\"20\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 10l5 5 5-5z\" fill=\"%23555\"/></svg>'); background-position: right 0.8rem center;">
                                    <option value="">Unité</option>
                                    @foreach ($units as $unit)
                                        <option value="{{ $unit['value'] }}">{{ $unit['label'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex items-center">
                                <button type="button"
                                    class="remove-ingredient text-red-500 hover:text-red-700 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg>
                                </button>
                            </div>
                        </div>
                    @endforelse
                </div>
                <button type="button" id="add-ingredient"
                    class="mt-4 px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300 transition flex items-center text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-apple"><path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 2-1-.56-2.78-2-5-2a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"/><path d="M10 2c1 .5 2 2 2 5"/></svg>
                    Ajouter un ingrédient
                </button>
                @error('ingredients.*')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                @error('quantities.*')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                @error('units.*')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 transition flex items-center font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-dashed"><path d="M12 17h1.5"/><path d="M12 22h1.5"/><path d="M12 2h1.5"/><path d="M17.5 22H19a1 1 0 0 0 1-1"/><path d="M17.5 2H19a1 1 0 0 1 1 1v1.5"/><path d="M20 14v3h-2.5"/><path d="M20 8.5V10"/><path d="M4 10V8.5"/><path d="M4 19.5V14"/><path d="M4 4.5A2.5 2.5 0 0 1 6.5 2H8"/><path d="M8 22H6.5a1 1 0 0 1 0-5H8"/></svg>
                    Créer la recette
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addIngredientBtn = document.getElementById('add-ingredient');
            const ingredientsContainer = document.getElementById('ingredients-container');

            // Helper function to create ingredient row
            function createIngredientRow() {
                const newRow = document.createElement('div');
                newRow.className = 'ingredient-row flex flex-wrap md:flex-nowrap gap-3';

                newRow.innerHTML = `
                    <div class="w-full md:w-1/2">
                        <select name="ingredients[]" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition appearance-none bg-no-repeat bg-right pr-8" style="background-image: url('data:image/svg+xml;charset=US-ASCII,<svg width=\\"20\\" height=\\"20\\" xmlns=\\"http://www.w3.org/2000/svg\\"><path d=\\"M7 10l5 5 5-5z\\" fill=\\"%23555\\"/></svg>'); background-position: right 0.8rem center;">
                            <option value="">Sélectionner un ingrédient</option>
                            @foreach ($ingredients as $ingredient)
                                <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-1/2 md:w-1/4">
                        <input type="number" name="quantities[]" placeholder="Quantité" min="0" step="0.01"
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition">
                    </div>
                    <div class="w-1/2 md:w-1/4">
                        <select name="units[]" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition appearance-none bg-no-repeat bg-right pr-8" style="background-image: url('data:image/svg+xml;charset=US-ASCII,<svg width=\\"20\\" height=\\"20\\" xmlns=\\"http://www.w3.org/2000/svg\\"><path d=\\"M7 10l5 5 5-5z\\" fill=\\"%23555\\"/></svg>'); background-position: right 0.8rem center;">
                            <option value="">Unité</option>
                            @foreach ($units as $unit)
                                <option value="{{ $unit['value'] }}">{{ $unit['label'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center">
                        <button type="button" class="remove-ingredient text-red-500 hover:text-red-700 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/></svg>
                        </button>
                    </div>
                `;

                return newRow;
            }

            // Helper function to setup remove button
            function setupRemoveButton(button) {
                button.addEventListener('click', function() {
                    this.closest('.ingredient-row').remove();
                });
            }

            // Add new ingredient row
            addIngredientBtn.addEventListener('click', function() {
                const newRow = createIngredientRow();
                ingredientsContainer.appendChild(newRow);
                setupRemoveButton(newRow.querySelector('.remove-ingredient'));
            });

            // Setup existing remove buttons
            document.querySelectorAll('.remove-ingredient').forEach(setupRemoveButton);
        });
    </script>
</x-layout>
