@extends('layouts.admin')

@section('title', 'Manajemen Artikel Jurnal')
@section('page-title', 'Katalog Artikel & Cerita Desa')

@section('content')

<div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 space-y-6">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-gray-100 pb-4">
        <div>
            <h2 class="text-xl font-black text-brand-navy">Daftar Artikel Jurnal</h2>
            <p class="text-xs text-gray-500">Kelola artikel cerita desa, kuliner, dan tips perjalanan.</p>
        </div>
        <a href="{{ route('admin.articles.create') }}" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold text-xs px-5 py-2.5 rounded-xl shadow transition-all flex items-center justify-center gap-2">
            <i class="fa-solid fa-plus"></i>
            <span>Tulis Artikel Baru</span>
        </a>
    </div>

    @if($articles->isEmpty())
        <p class="text-center text-xs text-gray-400 py-8">Belum ada artikel diterbitkan.</p>
    @else
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-brand-cream/50 text-brand-navy uppercase text-[10px] font-extrabold border-b border-gray-100">
                    <tr>
                        <th class="p-3">Cover</th>
                        <th class="p-3">Judul Artikel</th>
                        <th class="p-3">Kategori</th>
                        <th class="p-3">Penulis</th>
                        <th class="p-3">Waktu Baca</th>
                        <th class="p-3 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 font-semibold">
                    @foreach($articles as $art)
                        <tr class="hover:bg-brand-cream/20">
                            <td class="p-3">
                                <img src="{{ $art->cover_image }}" alt="{{ $art->title }}" class="w-12 h-10 rounded-lg object-cover border border-gray-200">
                            </td>
                            <td class="p-3">
                                <span class="font-bold text-brand-navy block">{{ $art->title }}</span>
                                <span class="text-[10px] text-gray-400 line-clamp-1">{{ $art->excerpt }}</span>
                            </td>
                            <td class="p-3 uppercase text-[10px] font-bold text-brand-blue">{{ $art->category }}</td>
                            <td class="p-3 text-gray-600">{{ $art->author }}</td>
                            <td class="p-3 text-gray-600">{{ $art->read_time }}</td>
                            <td class="p-3 text-right space-x-1">
                                <a href="{{ route('admin.articles.edit', $art->id) }}" class="p-2 text-brand-blue hover:text-blue-700">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.articles.destroy', $art->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus artikel ini?')">
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
            {{ $articles->links() }}
        </div>
    @endif

</div>

@endsection
