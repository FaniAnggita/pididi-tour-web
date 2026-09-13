<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PididiJourney;
use Illuminate\Http\Request;

class PididiJourneyController extends Controller
{
    public function edit()
    {
        $journey = PididiJourney::first() ?? new PididiJourney();
        return view('admin.journey.edit', compact('journey'));
    }

    public function update(Request $request)
    {
        $journey = PididiJourney::first() ?? new PididiJourney();

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'theme' => 'required|string|max:255',
            'min_pax' => 'required|integer',
            'max_pax' => 'required|integer',
            'price' => 'required|numeric',
            'duration' => 'required|string|max:255',
            'batch_schedule_info' => 'nullable|string',
            'journey_book_info' => 'nullable|string',
            'voucher_info' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ]);

        $principles = [
            'MEET' => $request->input('principle_meet', 'Bertemu manusia & storyteller lokal.'),
            'EXPERIENCE' => $request->input('principle_experience', 'Mencoba memasak & berkarya tangan bersama artisan.'),
            'UNDERSTAND' => $request->input('principle_understand', 'Memahami cerita di balik desa & ekonomi lokal.'),
            'CONNECT' => $request->input('principle_connect', 'Terhubung hangat dalam Vayana Conversation.'),
            'INSPIRE' => $request->input('principle_inspire', 'Pulang membawa Vayana Journey Book & voucher.'),
        ];

        $journey->fill([
            'title' => $validated['title'],
            'tagline' => $validated['tagline'],
            'theme' => $validated['theme'],
            'min_pax' => $validated['min_pax'],
            'max_pax' => $validated['max_pax'],
            'price' => $validated['price'],
            'duration' => $validated['duration'],
            'batch_schedule_info' => $validated['batch_schedule_info'],
            'principles_content' => $principles,
            'journey_book_info' => $validated['journey_book_info'],
            'voucher_info' => $validated['voucher_info'],
            'is_active' => $request->has('is_active'),
        ]);

        $journey->save();

        return redirect()->back()->with('success', 'Data VAYANA JOURNEY Signature Package berhasil diperbarui!');
    }
}
