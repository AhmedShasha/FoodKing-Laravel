<?php

namespace App\Http\Controllers;

use App\Kitchens;
use App\Recipes;
use Illuminate\Support\Facades\View;

class PostsController extends Controller
{
    public function __construct()
    {
        //its just a dummy data object.

        $kitchens = Kitchens::select('id', 'name' ,'img')->get();

        // Sharing is caring
        View::share('kitchens', $kitchens);
    }
    // Recipes Function
    public function recipes($id)
    {
        $recipes = Recipes::orderBy('id', 'desc')->where('kitchen_id', '=', $id)->paginate(9);
        $kitchenNm = Kitchens::where('id', '=', $id)->first();
        $count = Recipes::where('kitchen_id', '=', $id)->count();
        return view('posts.recipes', compact('recipes', 'count','kitchenNm'));
    }

    // Details Function of one recipe
    public function details($id)
    {
        $details = Recipes::find($id);

        return view("posts.details", compact('details'));
    }
    // Go to home page
    public function home()
    {
        return view("posts.home");
    }

}
