<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class TransactionsController extends Controller
{
    /**
     * Return the Id of the logged in user
    */
    public function userId() {
        return auth()->user()->id;
    }

    /**
     * Returns a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $transactions = Transaction::where('user_id', $this->userId())
            ->with('user')->get();

        return response()->json([
            'transactions' => $transactions
        ], 201);
    }


    /**
     * Returns the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);

        return response()->json([
            'transaction' => $transaction
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        $transaction->fill($request->all());

        $transaction->save();

        return response()->json([
            'transaction' => $transaction
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Transaction::find($id)->delete();

        return response()->json([
            'message' => 'The transaction was deleted successfully!'
        ], 201);
    }


}
