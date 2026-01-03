<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <p class="mb-4">
                        Selamat datang, <strong>{{ Auth::user()->name }}</strong>
                    </p>

                    {{-- MENU PRODUCT --}}
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold mb-2">Menu</h3>

                        <a href="{{ route('products.index') }}"
                           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Kelola Produk
                        </a>
                    </div>

                    {{-- INFO ROLE --}}
                    <div class="mt-4 text-gray-600">
                        Role Anda: <strong>{{ Auth::user()->role }}</strong>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
