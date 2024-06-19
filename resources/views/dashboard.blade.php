<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Conteúdo da página -->
                <div class="text-2xl font-bold mb-4">Bem-vindo ao Dashboard!</div>
                <p class="text-gray-700">Aqui você pode gerenciar seus produtos, tipos e perfil.</p>

                <!-- Cards para ações rápidas -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-6">
                    <!-- Card para produtos -->
                    <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                        <div class="p-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM12 6a7.5 7.5 0 017.5 7.5c0 3.22-2.56 5.85-5.67 6.21-2.37.29-4.45-.9-5.83-2.75M12 6v3m0 9v-3m-4.22-1.28a1.5 1.5 0 112.12-2.12 1.5 1.5 0 01-2.12 2.12M16.22 8.28a1.5 1.5 0 112.12-2.12 1.5 1.5 0 01-2.12 2.12M7.78 15.72a1.5 1.5 0 112.12-2.12 1.5 1.5 0 01-2.12 2.12M16.22 15.72a1.5 1.5 0 112.12-2.12 1.5 1.5 0 01-2.12 2.12"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-600 dark:text-gray-300">Gerenciar Produtos</div>
                                    <a href="{{ route('products') }}" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Ver Produtos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card para tipos -->
                    <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                        <div class="p-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-600 dark:text-gray-300">Gerenciar Tipos</div>
                                    <a href="{{ route('type') }}" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Ver Tipos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card para perfil -->
                    <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                        <div class="p-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12a8 8 0 11-16 0 8 8 0 0116 0zM12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-600 dark:text-gray-300">Gerenciar Perfil</div>
                                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Editar Perfil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
