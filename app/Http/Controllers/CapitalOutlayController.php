<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CapitalOutlay;

class CapitalOutlayController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'account_code.*' => 'required|string',
            'item.*' => 'required|string',
            'proposed_budget.*' => 'required|numeric',
            'justification.*' => 'required|string',
        ]);

        foreach ($data['account_code'] as $index => $account_code) {
            CapitalOutlay::create([
                'account_code' => $account_code,
                'item' => $data['item'][$index],
                'proposed_budget' => $data['proposed_budget'][$index],
                'justification' => $data['justification'][$index],
            ]);
        }

        return redirect()->back()->with('success', 'Data saved successfully.');
    }
}