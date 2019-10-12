<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AccountController extends Controller
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
        $accounts = Account::where('user_id', $this->userId())->get();

        return response()->json([
            'accounts' => $accounts
        ], 201);
    }


    /**
     * Returns the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $account = Account::find($id);

        return response()->json([
            'account' => $account
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

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $account = Account::find($id);

        $account->fill($request->all());

        $account->save();

        return response()->json([
            'account' => $account
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
        Account::find($id)->delete();

        return response()->json([
            'message' => 'The account was deleted successfully!'
        ], 201);
    }


}
