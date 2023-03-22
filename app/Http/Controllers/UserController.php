<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Excel;

class UserController extends Controller
{
    public function exportUser(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function importUser(){
        Excel::import(new UsersImport, request()->file('file'));
    }
}