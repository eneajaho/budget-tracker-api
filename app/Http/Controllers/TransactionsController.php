<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionsController extends Controller
{

    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::id())
            ->with('user', 'type', 'account')
            ->get();

        return response()->json([
            'transactions' => $transactions
        ], 201);
    }


    public function show($id)
    {
        $transaction = Transaction::with('user', 'type', 'account')->find($id);

        if (Auth::user()->can('view', $transaction)) {
            return response()->json([
                'transaction' => $transaction
            ], 201);
        } else {
            return response()->json([
                'error' => 'You cannot access this transaction!'
            ], 401);
        }
    }


    public function store(Request $request)
    {
        $transaction = Transaction::create($request->validate([
            'user_id' => 'required|integer',
            'type_id' => 'required|integer',
            'category_id' => 'required|integer',
            'account_id' => 'required|integer',
            'value' => 'required|integer',
            'currency' => 'required|string',
            'notes' => 'required|string',
        ]));

        return response()->json([
            'transaction' => $transaction
        ], 201);
    }


    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        if (Auth::user()->can('update', $transaction)) {

            $transaction->fill($request->all());

            $transaction->save();

            return response()->json([
                'transaction' => $transaction
            ], 201);

        } else {
            return response()->json([
                'error' => 'You cannot update this transaction!'
            ], 401);
        }

    }


    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (Auth::user()->can('delete', $transaction)) {

            $transaction->delete();

            return response()->json([
                'success' => 'The transaction was deleted successfully!'
            ], 201);
        } else {
            return response()->json([
                'error' => 'You cannot delete this transaction!'
            ], 401);
        }

    }

}
