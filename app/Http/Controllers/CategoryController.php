<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        //
    }

    public function index()
    {
        // $results = app('db')->select("SELECT * FROM categories");
        // $results = DB::select("SELECT * FROM categories");
        $results = DB::table('categories')->get();
        return $results;
    }

    public function store(Request $request)
    {
        $results = DB::table('categories')->insert(['name' => $request->name]);
        return $results;
    }

    public function update(Request $request, $id)
    {
        $results = DB::table('categories') ->where('id', $id) ->update(['name' => $request->name]);
        return $results;
    }

    public function view($id)
    {
        $results = DB::table('categories')->where('id', $id)->first();
        $results = json_encode($results);
        return $results;
    }

    public function delete($id)
    {
        $results = DB::table('categories')->where('id', $id)->delete();
        return $results;
    }
}
