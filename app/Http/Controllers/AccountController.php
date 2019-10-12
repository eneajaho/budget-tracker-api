<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{

    public function index()
    {
        $accounts = Account::where('user_id', Auth::id())->get();

        return response()->json([
            'accounts' => $accounts
        ], 201);
    }


    public function show($id)
    {
        $account = Account::find($id);

        if (Auth::user()->can('view', $account)) {
            return response()->json([
                'account' => $account
            ], 201);
        } else {
            return response()->json([
                'error' => 'You cannot access this account!'
            ], 401);
        }

    }


    public function store(Request $request)
        {
            $account = Account::create($request->validate([
                'user_id' => 'required|integer',
                'name' => 'required|string',
                'icon' => 'required|string',
                'currency' => 'required|string',
                'balance' => 'required|integer',
                'note' => 'required|string',
            ]));

        return response()->json([
            'account' => $account
        ], 201);
    }


    public function update(Request $request, $id)
    {
        $account = Account::find($id);

        if (Auth::user()->can('update', $account)) {

            $account->fill($request->all());

            $account->save();

            return response()->json([
                'account' => $account
            ], 201);

        } else {
            return response()->json([
                'error' => 'You cannot update this account!'
            ], 401);
        }


    }


    public function destroy($id)
    {
        $account = Account::find($id);

        if (Auth::user()->can('delete', $account)) {

            $account->delete();

            return response()->json([
                'success' => 'The account was deleted successfully!'
            ], 201);
        } else {
            return response()->json([
                'error' => 'You cannot delete this account!'
            ], 401);
        }

    }


}
