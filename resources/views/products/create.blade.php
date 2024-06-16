<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
        <form action="{{ url('products/new') }}" method="POST">
            @csrf

            <br><br>
            <div class="mb-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-2 w-full" type="text" name="name" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="description" :value="__('Descrição')" />
                <x-text-input id="description" class="block mt-2 w-full" type="text" name="description" />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="quantity" :value="__('Quantidade')" />
                <x-text-input id="quantity" class="block mt-2 w-full" type="number" name="quantity" required />
                <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="price" :value="__('Preço')" />
                <x-text-input id="price" class="block mt-2 w-full" type="number" name="price" required />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="destaque" :value="__('Destaque')" />
                <select id="destaque" name="destaque"
                    class="border-gray-300 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    <option value="0" @if(old('destaque') == '0') selected @endif>Não</option>
                    <option value="1" @if(old('destaque') == '1') selected @endif>Sim</option>
                </select>
                <x-input-error :messages="$errors->get('destaque')" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-input-label for="type_id" :value="__('Tipo')" />
                <select id="type_id" name="type_id"
                    class="border-gray-300 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" @if(old('type_id', isset($product) ? $product->type_id : '') == $type->id) selected @endif>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4 flex justify-between">
                <a class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150"
                    href="{{ url('/products') }}">Voltar</a>
                <x-primary-button type="submit">Salvar</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>