@extends('layouts.admin')

@section('title', 'Manajemen Paket Wisata')
@section('page-title', 'Katalog Paket Wisata')

@section('content')

<div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 space-y-6">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-gray-100 pb-4">
        <div>
            <h2 class="text-xl font-black text-brand-navy">Daftar Paket Wisata</h2>
            <p class="text-xs text-gray-500">Kelola katalog paket wisata, galeri foto, dan itinerari harian.</p>
        </div>
        <a href="{{ route('admin.tours.create') }}" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold text-xs px-5 py-2.5 rounded-xl shadow transition-all flex items-center justify-center gap-2">
            <i class="fa-solid fa-plus"></i>
            <span>Tambah Paket Baru</span>
        </a>
    </div>

    @if($tours->isEmpty())
        <p class="text-center text-xs text-gray-400 py-8">Belum ada paket wisata. Klik tombol di atas untuk menambah.</p>
    @else
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-brand-cream/50 text-brand-navy uppercase text-[10px] font-extrabold border-b border-gray-100">
                    <tr>
                        <th class="p-3">Cover</th>
                        <th class="p-3">Nama Paket Wisata</th>
                        <th class="p-3">Kategori</th>
                        <th class="p-3">Lokasi</th>
                        <th class="p-3">Durasi</th>
                        <th class="p-3">Harga Mulai</th>
                        <th class="p-3">Status</th>
                        <th class="p-3 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 font-semibold">
                    @foreach($tours as $tour)
                        <tr class="hover:bg-brand-cream/20">
                            <td class="p-3">
                                <img src="{{ $tour->cover_image }}" alt="{{ $tour->title }}" class="w-12 h-10 rounded-lg object-cover border border-gray-200">
                            </td>
                            <td class="p-3">
                                <span class="font-bold text-brand-navy block">{{ $tour->title }}</span>
                                <span class="text-[10px] text-gray-400">Rating: ⭐ {{ $tour->rating }} ({{ $tour->reviews_count }})</span>
                            </td>
                            <td class="p-3 uppercase text-[10px] font-bold text-brand-blue">{{ $tour->category }}</td>
                            <td class="p-3 text-gray-600">{{ $tour->location }}</td>
                            <td class="p-3 text-gray-600">{{ $tour->duration }}</td>
                            <td class="p-3 font-bold text-brand-orange">Rp {{ number_format($tour->starting_price, 0, ',', '.') }}</td>
                            <td class="p-3">
                                @if($tour->is_featured)
                                    <span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2 py-0.5 rounded-full">★ Featured</span>
                                @else
                                    <span class="bg-gray-100 text-gray-600 text-[10px] font-bold px-2 py-0.5 rounded-full">Standard</span>
                                @endif
                            </td>
                            <td class="p-3 text-right space-x-1">
                                <a href="{{ route('tours.detail', $tour->slug) }}" target="_blank" class="p-2 text-gray-500 hover:text-brand-blue" title="Pratinjau Halaman Detail">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.tours.edit', $tour->id) }}" class="p-2 text-brand-blue hover:text-blue-700" title="Edit Data & Galeri">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.tours.destroy', $tour->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus paket wisata ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-rose-500 hover:text-rose-700" title="Hapus Paket">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pt-4">
            {{ $tours->links() }}
        </div>
    @endif

</div>

@endsection
