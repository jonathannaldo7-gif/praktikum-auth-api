<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(Auth::user()->role === 'admin')
                    <a href="{{ route('products.create') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Tambah Produk
                    </a>
                    @else
                    <p class="text-gray-500">Anda tidak memiliki akses untuk menambah produk</p>
                    @endif

                    <h3 class="text-lg font-semibold mt-6">Daftar Produk</h3>
                    <p class="mt-2">Halaman ini menampilkan daftar produk.</p>

                    <table class="w-full mt-4 border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Nama Produk</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Harga</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Stok</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $index => $product)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $product->name }}</td>
                                <td class="border border-gray-300 px-4 py-2">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $product->stock }}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    @if(Auth::user()->role === 'admin')
                                        <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600">Edit</a> |
                                        <form method="POST" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600" onclick="return confirm('Hapus produk ini?')">Hapus</button>
                                        </form>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="border border-gray-300 px-4 py-2 text-center">Belum ada produk yang tersedia.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
