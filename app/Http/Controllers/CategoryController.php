<?php

namespace App\Http\Controllers;

use App\Account;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
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
//        $categories = Category::where('user_id', $this->userId())->get();
        $categories = Category::with('type')->get();

        return response()->json([
            'categories' => $categories
        ], 201);
    }


    /**
     * Returns the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        return response()->json([
            'category' => $category
        ], 201);
    }
}
