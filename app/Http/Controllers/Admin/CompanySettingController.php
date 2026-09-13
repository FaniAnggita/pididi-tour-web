<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanySetting;
use Illuminate\Http\Request;

class CompanySettingController extends Controller
{
    public function edit()
    {
        $setting = CompanySetting::first() ?? new CompanySetting();
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = CompanySetting::first() ?? new CompanySetting();

        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'nib' => 'nullable|string|max:255',
            'npwp' => 'nullable|string|max:255',
            'bank_name' => 'nullable|string|max:255',
            'bank_account_number' => 'nullable|string|max:255',
            'bank_account_holder' => 'nullable|string|max:255',
            'office_address' => 'nullable|string',
            'operational_hours' => 'nullable|string|max:255',
            'phone_wa' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'google_maps_iframe' => 'nullable|string',
            'tagline' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'logo_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5120',
            'logo_path' => 'nullable|string|max:255',

            // Bespoke Rates Validation
            'bespoke_rate_homestay' => 'required|numeric|min:0',
            'bespoke_rate_hotel3' => 'required|numeric|min:0',
            'bespoke_rate_resort' => 'required|numeric|min:0',
            'bespoke_mult_bali' => 'required|numeric|min:0.1',
            'bespoke_mult_bajo' => 'required|numeric|min:0.1',
            'bespoke_mult_jogja' => 'required|numeric|min:0.1',
            'bespoke_mult_toraja' => 'required|numeric|min:0.1',
            'bespoke_mult_rajaampat' => 'required|numeric|min:0.1',
            'bespoke_mult_custom' => 'required|numeric|min:0.1',
            'bespoke_min_pax_discount' => 'required|integer|min:1',
            'bespoke_discount_percent' => 'required|integer|min:0|max:100',
        ]);

        if ($request->hasFile('logo_file')) {
            $path = $request->file('logo_file')->store('logos', 'public');
            $validated['logo_path'] = 'storage/' . $path;
        }

        $setting->fill($validated);
        $setting->save();

        return redirect()->back()->with('success', 'Data Profil & Legalitas Perusahaan berhasil diperbarui!');
    }

}
