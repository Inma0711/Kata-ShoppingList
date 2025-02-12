<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shopping_List;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{

    public function index()
    {
        $shoppinglist = Shopping_List::all();
        return response()->json($shoppinglist, 200);
    }

    public function store(Request $request)
    {
        $shoppinglist = Shopping_List::create([
            'article' => $request->article,
            'price' => $request->price,
        ]);
        $shoppinglist->save();
        return response()->json($shoppinglist, 200);
    }

    public function update(Request $request, string $id)
    {
        $shoppinglist = Shopping_List::find($id);
        $shoppinglist->update([
            'article' => $request->article,
            'price' => $request->price,
        ]);

        $shoppinglist->save();
        return response()->json($shoppinglist, 200);
    }

    public function destroy(string $id)
    {
        $shoppinglist = Shopping_List::find($id);
        $shoppinglist->delete();

    }

    public function destroyall(){
        $shoppinglist = Shopping_List::all();
        $shoppinglist->delete();
    }

}
