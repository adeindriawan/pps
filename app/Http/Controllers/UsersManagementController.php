<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UsersManagementController extends Controller
{
    public function storeUnit(Request $request)
    {
        $unitData = ['name' => $request->input('name'), 'type' => $request->input('type')];
        $newUnit = Unit::create($unitData);

        $result['status'] = 'success';
        $result['data'] = $newUnit;
        $result['message'] = 'Unit berhasil tersimpan';
        return response()->json($result);
    }
}
