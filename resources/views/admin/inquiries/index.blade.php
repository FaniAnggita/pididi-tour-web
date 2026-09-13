@extends('layouts.admin')

@section('title', 'Pesan Masuk Kontak')
@section('page-title', 'Pesan Masuk dari Form Kontak Publik')

@section('content')

<div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 space-y-6">
    
    <div class="border-b border-gray-100 pb-4">
        <h2 class="text-xl font-black text-brand-navy">Pesan & Pertanyaan Masuk</h2>
        <p class="text-xs text-gray-500">Daftar masukan/pertanyaan yang diisi pengunjung melalui form kontak publik.</p>
    </div>

    @if($inquiries->isEmpty())
        <p class="text-center text-xs text-gray-400 py-8">Belum ada pesan masuk.</p>
    @else
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-brand-cream/50 text-brand-navy uppercase text-[10px] font-extrabold border-b border-gray-100">
                    <tr>
                        <th class="p-3">Tanggal</th>
                        <th class="p-3">Nama Pengirim</th>
                        <th class="p-3">WhatsApp / Email</th>
                        <th class="p-3">Topik</th>
                        <th class="p-3">Status</th>
                        <th class="p-3 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 font-semibold">
                    @foreach($inquiries as $inq)
                        <tr class="hover:bg-brand-cream/20 {{ $inq->status === 'unread' ? 'bg-amber-50/50 font-bold' : '' }}">
                            <td class="p-3 text-gray-500 text-[11px]">{{ $inq->created_at->format('d M Y H:i') }}</td>
                            <td class="p-3 text-brand-navy font-bold">{{ $inq->full_name }}</td>
                            <td class="p-3">
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inq->wa_number) }}" target="_blank" class="text-emerald-600 font-bold hover:underline flex items-center gap-1">
                                    <i class="fa-brands fa-whatsapp"></i> {{ $inq->wa_number }}
                                </a>
                                @if($inq->email)
                                    <span class="text-[10px] text-gray-400 block">{{ $inq->email }}</span>
                                @endif
                            </td>
                            <td class="p-3 text-gray-700">{{ $inq->topic ?? 'Umum' }}</td>
                            <td class="p-3">
                                @if($inq->status === 'unread')
                                    <span class="bg-rose-100 text-rose-800 text-[10px] font-bold px-2 py-0.5 rounded-full">Baru (Unread)</span>
                                @else
                                    <span class="bg-gray-100 text-gray-600 text-[10px] font-bold px-2 py-0.5 rounded-full">Sudah Dibaca</span>
                                @endif
                            </td>
                            <td class="p-3 text-right space-x-1">
                                <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="p-2 text-brand-blue hover:text-blue-700">
                                    <i class="fa-solid fa-envelope-open-text"></i>
                                </a>
                                <form action="{{ route('admin.inquiries.destroy', $inq->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus pesan ini?')">
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
            {{ $inquiries->links() }}
        </div>
    @endif

</div>

@endsection
