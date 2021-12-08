<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PageController extends Controller
{
    public function dashboardPage(Request $request)
    {
        if (Auth::user()->type == 'Managerial' && Auth::user()->unit_id == 1) {
            $data['role'] = 'Admin';
        } else {
            $data['role'] = 'SKK';
        }
        
        return view('backview.dashboard', compact('data'));
    }

    public function usersTablePage(Request $request)
    {
        if (Auth::user()->type == 'Managerial' && Auth::user()->unit_id == 1) {
            $data['role'] = 'Admin';
        } else {
            $data['role'] = 'SKK';
        }
        
        return view('backview.usersTable', compact('data'));
    }

    public function usersFormPage(Request $request)
    {
        if (Auth::user()->type == 'Managerial' && Auth::user()->unit_id == 1) {
            $data['role'] = 'Admin';
        } else {
            $data['role'] = 'SKK';
        }

        return view('backview.usersForm', compact('data'));
    }

    public function unitsTablePage(Request $request)
    {
        if (Auth::user()->type == 'Managerial' && Auth::user()->unit_id == 1) {
            $data['role'] = 'Admin';
        } else {
            $data['role'] = 'SKK';
        }
        
        return view('backview.unitsTable', compact('data'));
    }

    public function unitsFormPage(Request $request)
    {
        if (Auth::user()->type == 'Managerial' && Auth::user()->unit_id == 1) {
            $data['role'] = 'Admin';
        } else {
            $data['role'] = 'SKK';
        }

        return view('backview.unitsForm', compact('data'));
    }

    public function trafficPage(Request $request)
    {
        echo 'this is traffic page';
    }

    public function reportPage(Request $request)
    {
        echo 'this is report page';
    }
}
