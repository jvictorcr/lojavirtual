<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">Cadastrar Novo Tipo</h2>

        <br>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/type/new') }}">
            @csrf
            <div class="mt-4">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-800 dark:border-gray-500 dark:text-gray-300">
            </div>

            <div class="mt-6">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Salvar</button>
                <a href="{{ url('/type') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
