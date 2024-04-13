<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->get('query');

        $users = User::select(
            'users.*',
            'departments.name as department_name',
            'designations.name as designation_name'
        )
            ->leftJoin('departments', 'users.department_id', '=', 'departments.id')
            ->leftJoin('designations', 'users.designation_id', '=', 'designations.id')
            ->where(function ($query) use ($q) {
                $query->where('users.name', 'like', '%' . $q . '%')
                    ->orWhere('designations.name', 'like', '%' . $q . '%')
                    ->orWhere('departments.name', 'like', '%' . $q . '%');
            })
            ->get();

        return $users;
    }
}
