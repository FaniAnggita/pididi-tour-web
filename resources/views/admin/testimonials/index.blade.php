@extends('layouts.admin')

@section('title', 'Manajemen Testimoni Tamu')
@section('page-title', 'Ulasan & Testimoni Tamu')

@section('content')

<div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 space-y-6">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-gray-100 pb-4">
        <div>
            <h2 class="text-xl font-black text-brand-navy">Daftar Ulasan Tamu</h2>
            <p class="text-xs text-gray-500">Kelola testimoni verified tamu untuk tampilan Google Review publik.</p>
        </div>
        <a href="{{ route('admin.testimonials.create') }}" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold text-xs px-5 py-2.5 rounded-xl shadow transition-all flex items-center justify-center gap-2">
            <i class="fa-solid fa-plus"></i>
            <span>Tambah Ulasan Baru</span>
        </a>
    </div>

    @if($testimonials->isEmpty())
        <p class="text-center text-xs text-gray-400 py-8">Belum ada testimoni tamu.</p>
    @else
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-brand-cream/50 text-brand-navy uppercase text-[10px] font-extrabold border-b border-gray-100">
                    <tr>
                        <th class="p-3">Avatar</th>
                        <th class="p-3">Nama Tamu & Kota</th>
                        <th class="p-3">Paket Wisata</th>
                        <th class="p-3">Rating</th>
                        <th class="p-3">Status</th>
                        <th class="p-3 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 font-semibold">
                    @foreach($testimonials as $t)
                        <tr class="hover:bg-brand-cream/20">
                            <td class="p-3">
                                <img src="{{ $t->avatar_url }}" alt="{{ $t->guest_name }}" class="w-9 h-9 rounded-full object-cover border border-gray-200">
                            </td>
                            <td class="p-3">
                                <span class="font-bold text-brand-navy block">{{ $t->guest_name }}</span>
                                <span class="text-[10px] text-gray-400">{{ $t->city }}</span>
                            </td>
                            <td class="p-3 text-gray-600">{{ $t->package_name }}</td>
                            <td class="p-3 text-amber-500 font-bold">
                                ⭐ {{ $t->rating }}/5
                            </td>
                            <td class="p-3">
                                @if($t->is_verified)
                                    <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-full">✓ Verified</span>
                                @else
                                    <span class="bg-gray-100 text-gray-600 text-[10px] font-bold px-2 py-0.5 rounded-full">Pending</span>
                                @endif
                            </td>
                            <td class="p-3 text-right space-x-1">
                                <a href="{{ route('admin.testimonials.edit', $t->id) }}" class="p-2 text-brand-blue hover:text-blue-700">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.testimonials.destroy', $t->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus testimoni ini?')">
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
            {{ $testimonials->links() }}
        </div>
    @endif

</div>

@endsection
