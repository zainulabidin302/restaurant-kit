<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipies = \App\Recipie::with('recipieGroup')->paginate(15);
        
        return view('recipies.index', ['recipies' => $recipies] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ing = \App\Ingredient::with('Unit')->get();
        $groups = \App\RecipieGroup::all();
        
        return view('recipies.create', ['ingredients' => $ing, 'groups' => $groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $recipie = new \App\Recipie();

        $recipie->title = $request['title'];
        $recipie->description = $request['description'];
        $recipie->recipieGroup()->associate($request['group']);

        $ings = [];
        $i = 0;
        $recipie->save();
        foreach($request->ingredientId as $id) {
             $recipieItem = new \App\RecipieItem();
             $recipieItem->quantity = $request->ingredientQty[$i];        
             $recipieItem->ingredient()->associate($id);
             $recipie->recipieItems()->save($recipieItem);    
        }


        return redirect('/recipies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
