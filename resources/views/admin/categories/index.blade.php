@extends('layouts.admin')

@section('title', 'Manajemen Kategori Paket Wisata')
@section('page-title', 'Kategori Paket Wisata')

@section('content')

<div class="space-y-6 max-w-5xl mx-auto">
    
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
        
        <!-- Left: Category Form (Create / Quick Add) -->
        <div class="md:col-span-4 bg-white rounded-3xl p-6 shadow-sm border border-gray-100 space-y-4 h-fit">
            <div class="border-b border-gray-100 pb-3">
                <h3 class="text-base font-black text-brand-navy flex items-center gap-2">
                    <i class="fa-solid fa-tags text-brand-orange"></i>
                    <span>Tambah Kategori Baru</span>
                </h3>
                <p class="text-xs text-gray-500">Buat kategori wisata baru untuk mengelompokkan paket.</p>
            </div>

            <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Nama Kategori *</label>
                    <input type="text" name="name" placeholder="Contoh: Honeymoon & Romantic" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Ikon / Emoji (Opsional)</label>
                    <input type="text" name="icon" placeholder="Contoh: 💖, 🌾, ⛰️" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Deskripsi Singkat</label>
                    <textarea name="description" rows="3" placeholder="Keterangan singkat kategori ini..." class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2 text-xs font-semibold focus:ring-2 focus:ring-brand-orange"></textarea>
                </div>

                <button type="submit" class="w-full bg-brand-orange hover:bg-orange-600 text-white font-extrabold text-xs py-3 rounded-xl shadow transition-all">
                    + Simpan Kategori Baru
                </button>
            </form>
        </div>

        <!-- Right: Category List & Manage -->
        <div class="md:col-span-8 bg-white rounded-3xl p-6 shadow-sm border border-gray-100 space-y-6">
            <div class="border-b border-gray-100 pb-3">
                <h2 class="text-xl font-black text-brand-navy">Daftar Kategori Paket Wisata</h2>
                <p class="text-xs text-gray-500">Seluruh kategori yang tersedia di opsi form paket wisata & filter publik.</p>
            </div>

            @if($categories->isEmpty())
                <p class="text-center text-xs text-gray-400 py-8">Belum ada kategori yang dibuat.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-brand-cream/50 text-brand-navy uppercase text-[10px] font-extrabold border-b border-gray-100">
                            <tr>
                                <th class="p-3">Ikon</th>
                                <th class="p-3">Nama Kategori</th>
                                <th class="p-3">Slug</th>
                                <th class="p-3">Total Paket</th>
                                <th class="p-3 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 font-semibold">
                            @foreach($categories as $cat)
                                <tr class="hover:bg-brand-cream/20">
                                    <td class="p-3 text-lg">{{ $cat->icon ?? '🧭' }}</td>
                                    <td class="p-3">
                                        <span class="font-bold text-brand-navy block">{{ $cat->name }}</span>
                                        @if($cat->description)
                                            <span class="text-[10px] text-gray-400 line-clamp-1">{{ $cat->description }}</span>
                                        @endif
                                    </td>
                                    <td class="p-3 text-gray-500 font-mono text-[11px]">{{ $cat->slug }}</td>
                                    <td class="p-3">
                                        <span class="bg-brand-blue/10 text-brand-blue text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                            {{ $cat->tours_count }} Paket
                                        </span>
                                    </td>
                                    <td class="p-3 text-right space-x-1">
                                        <form action="{{ route('admin.categories.destroy', $cat->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus kategori ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-rose-500 hover:text-rose-700">
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
                    {{ $categories->links() }}
                </div>
            @endif

        </div>

    </div>

</div>

@endsection
