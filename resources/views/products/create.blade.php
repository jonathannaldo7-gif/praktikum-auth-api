<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Validation errors --}}
                    @if($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf

                        {{-- Nama Produk --}}
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">
                                Nama Produk
                            </label>
                            <input type="text" name="name"
                                   class="w-full border rounded px-3 py-2"
                                   placeholder="Masukkan nama produk">
                        </div>

                        {{-- Harga --}}
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">
                                Harga
                            </label>
                            <input type="number" name="price"
                                   class="w-full border rounded px-3 py-2"
                                   placeholder="Masukkan harga">
                        </div>

                        {{-- Stok --}}
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">
                                Stok
                            </label>
                            <input type="number" name="stock"
                                   class="w-full border rounded px-3 py-2"
                                   placeholder="Masukkan stok">
                        </div>

                        {{-- SKU --}}
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2">
                                SKU
                            </label>
                            <input type="text" name="sku"
                                   class="w-full border rounded px-3 py-2"
                                   placeholder="Contoh: PRD-001">
                        </div>

                        {{-- Tombol --}}
                        <div class="flex gap-2">
                            <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Simpan
                            </button>

                            <a href="{{ route('products.index') }}"
                               class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                                Kembali
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
