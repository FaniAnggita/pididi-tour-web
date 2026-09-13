@extends('layouts.admin')

@section('title', 'Manajemen Destinasi Wisata')
@section('page-title', 'Destinasi Wisata')

@section('content')

<div class="space-y-6" x-data="{ createModalOpen: false, editModalOpen: false, editItem: {} }">

    <!-- Header Actions -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
        <div>
            <h2 class="text-xl font-black text-brand-navy">Daftar Destinasi Wisata</h2>
            <p class="text-xs text-gray-500 mt-1">Kelola destinasi tur, pengali tarif (multiplier rate), dan status tampil di kalkulator publik.</p>
        </div>
        <button @click="createModalOpen = true" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold text-xs px-5 py-3 rounded-2xl shadow-lg transition-all flex items-center justify-center gap-2">
            <i class="fa-solid fa-plus"></i>
            <span>Tambah Destinasi Baru</span>
        </button>
    </div>

    <!-- Table List -->
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-brand-cream/50 text-brand-navy font-black uppercase text-[10px] tracking-wider border-b border-gray-100">
                    <tr>
                        <th class="p-4 w-16 text-center">Urutan</th>
                        <th class="p-4">Nama Destinasi</th>
                        <th class="p-4">Slug (Kode)</th>
                        <th class="p-4 text-center">Multiplier Rate</th>
                        <th class="p-4 text-center">Status</th>
                        <th class="p-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 font-semibold text-gray-700">
                    @forelse($destinations as $item)
                        <tr class="hover:bg-brand-cream/20 transition-colors">
                            <td class="p-4 text-center font-bold text-gray-400">#{{ $item->sort_order }}</td>
                            <td class="p-4">
                                <div class="flex items-center gap-3">
                                    @if($item->image_path)
                                        <img src="{{ Str::startsWith($item->image_path, ['http://', 'https://']) ? $item->image_path : asset($item->image_path) }}" alt="{{ $item->name }}" class="w-10 h-10 rounded-xl object-cover border border-gray-200">
                                    @else
                                        <div class="w-10 h-10 rounded-xl bg-brand-cream text-brand-orange flex items-center justify-center font-bold">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                    @endif
                                    <div>
                                        <span class="font-extrabold text-brand-navy text-sm block">{{ $item->name }}</span>
                                        @if($item->description)
                                            <span class="text-[10px] text-gray-400 block truncate max-w-xs">{{ $item->description }}</span>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="p-4">
                                <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-lg font-mono text-[11px]">{{ $item->slug }}</span>
                            </td>
                            <td class="p-4 text-center">
                                <span class="bg-amber-100 text-amber-900 font-extrabold px-3 py-1 rounded-full text-xs border border-amber-200">
                                    {{ number_format($item->multiplier, 2) }}x
                                </span>
                            </td>
                            <td class="p-4 text-center">
                                @if($item->is_active)
                                    <span class="bg-emerald-100 text-emerald-800 font-bold px-3 py-1 rounded-full text-[10px] inline-flex items-center gap-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Aktif
                                    </span>
                                @else
                                    <span class="bg-gray-100 text-gray-500 font-bold px-3 py-1 rounded-full text-[10px] inline-flex items-center gap-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span> Nonaktif
                                    </span>
                                @endif
                            </td>
                            <td class="p-4 text-right space-x-2">
                                <button @click="editItem = {{ json_encode($item) }}; editModalOpen = true" class="bg-brand-blue/10 hover:bg-brand-blue hover:text-white text-brand-blue p-2.5 rounded-xl transition-all">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <form action="{{ route('admin.destinations.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus destinasi {{ $item->name }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-rose-50 hover:bg-rose-600 hover:text-white text-rose-600 p-2.5 rounded-xl transition-all">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-gray-400">
                                Belum ada data destinasi wisata. Klik tombol di atas untuk menambah destinasi baru.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Create Modal -->
    <div x-show="createModalOpen" class="fixed inset-0 z-50 overflow-y-auto bg-brand-navy/60 backdrop-blur-sm flex items-center justify-center p-4" x-cloak>
        <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl space-y-6" @click.away="createModalOpen = false">
            <div class="flex items-center justify-between border-b border-gray-100 pb-4">
                <h3 class="text-lg font-black text-brand-navy">Tambah Destinasi Wisata Baru</h3>
                <button @click="createModalOpen = false" class="text-gray-400 hover:text-gray-600"><i class="fa-solid fa-xmark text-xl"></i></button>
            </div>

            <form action="{{ route('admin.destinations.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Nama Destinasi *</label>
                    <input type="text" name="name" required placeholder="Contoh: Bromo & Tengger" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1">Kode / Slug (Opsional)</label>
                        <input type="text" name="slug" placeholder="bromo-tengger" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1">Multiplier Rate *</label>
                        <input type="number" name="multiplier" required step="0.05" min="0.1" value="1.00" class="w-full bg-white border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-extrabold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                        <span class="text-[10px] text-gray-400">Contoh: 1.25 (tarif 25% lebih tinggi dari base)</span>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Deskripsi Singkat</label>
                    <textarea name="description" rows="2" placeholder="Penjelasan singkat destinasi..." class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange"></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1">Urutan Tampil (Sort Order)</label>
                        <input type="number" name="sort_order" value="0" min="0" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div class="flex items-center pt-5">
                        <label class="inline-flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="is_active" value="1" checked class="w-4 h-4 rounded text-brand-orange focus:ring-brand-orange">
                            <span class="text-xs font-bold text-brand-navy">Tampilkan di Publik</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Unggah Foto Cover (Opsional)</label>
                    <input type="file" name="image_file" accept="image/*" class="w-full text-xs text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-brand-orange file:text-white hover:file:bg-orange-600 cursor-pointer">
                </div>

                <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
                    <button type="button" @click="createModalOpen = false" class="px-5 py-2.5 rounded-xl border border-gray-200 text-xs font-bold text-gray-600 hover:bg-gray-50">Batal</button>
                    <button type="submit" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold px-6 py-2.5 rounded-xl shadow transition-all text-xs">Simpan Destinasi</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div x-show="editModalOpen" class="fixed inset-0 z-50 overflow-y-auto bg-brand-navy/60 backdrop-blur-sm flex items-center justify-center p-4" x-cloak>
        <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl space-y-6" @click.away="editModalOpen = false">
            <div class="flex items-center justify-between border-b border-gray-100 pb-4">
                <h3 class="text-lg font-black text-brand-navy">Edit Destinasi Wisata</h3>
                <button @click="editModalOpen = false" class="text-gray-400 hover:text-gray-600"><i class="fa-solid fa-xmark text-xl"></i></button>
            </div>

            <form :action="'{{ url('admin/destinations') }}/' + editItem.id" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Nama Destinasi *</label>
                    <input type="text" name="name" :value="editItem.name" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1">Kode / Slug</label>
                        <input type="text" name="slug" :value="editItem.slug" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1">Multiplier Rate *</label>
                        <input type="number" name="multiplier" :value="editItem.multiplier" required step="0.05" min="0.1" class="w-full bg-white border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-extrabold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Deskripsi Singkat</label>
                    <textarea name="description" rows="2" :value="editItem.description" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange"></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1">Urutan Tampil</label>
                        <input type="number" name="sort_order" :value="editItem.sort_order" min="0" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div class="flex items-center pt-5">
                        <label class="inline-flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="is_active" value="1" :checked="editItem.is_active" class="w-4 h-4 rounded text-brand-orange focus:ring-brand-orange">
                            <span class="text-xs font-bold text-brand-navy">Tampilkan di Publik</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Ganti Foto Cover</label>
                    <input type="file" name="image_file" accept="image/*" class="w-full text-xs text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-brand-orange file:text-white hover:file:bg-orange-600 cursor-pointer">
                </div>

                <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
                    <button type="button" @click="editModalOpen = false" class="px-5 py-2.5 rounded-xl border border-gray-200 text-xs font-bold text-gray-600 hover:bg-gray-50">Batal</button>
                    <button type="submit" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold px-6 py-2.5 rounded-xl shadow transition-all text-xs">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
