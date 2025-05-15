<x-filament::page>
    <div class="text-2xl font-bold mb-4">Halo, Admin!</div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div class="bg-white rounded-xl p-4 shadow-md border border-gray-200">
            <div class="text-sm text-gray-500">Total Produk</div>
            <div class="text-3xl font-semibold">{{ $this->getTotalProduk() }}</div>
        </div>
    </div>

    <div class="bg-white p-4 rounded-xl shadow border border-gray-200">
        <div class="text-lg font-semibold mb-2">Stok Produk Menipis</div>
        <table class="w-full border-collapse text-sm">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="border-b p-2">Kode Produk</th>
                    <th class="border-b p-2">Nama Produk</th>
                    <th class="border-b p-2">Stok</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($this->getStokMenipis() as $produk)
                    <tr>
                        <td class="border-b p-2">{{ $produk->kode_produk }}</td>
                        <td class="border-b p-2">{{ $produk->nama_produk }}</td>
                        <td class="border-b p-2">{{ $produk->stok }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center p-4 text-gray-500">Semua stok aman 🙌</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-filament::page>
