<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormBantuan;

class FormBantuanController extends Controller
{
    public function index()
    {
        $assistanceList = FormBantuan::latest()->get();
        return view('form-bantuan.index', compact('assistanceList'));
    }

    public function create()
    {
        return view('form-bantuan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'school_name' => 'required|string|max:255',
            'assistance_type' => 'required|string|max:255',
            'donor_name' => 'required|string|max:255',
            'donor_contact' => 'required|string|max:255',
            'notes' => 'nullable|string',
        ]);

        FormBantuan::create($validated);

        return redirect()
            ->route('form-bantuan.index')
            ->with('success', 'Data bantuan berhasil disimpan!');
    }
}
