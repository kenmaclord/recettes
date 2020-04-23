<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Ingredient;
use Illuminate\Http\Request;
use Potassium\App\Http\Controllers\Controller as PotassiumController;

class IngredientsController extends PotassiumController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	{
		return view('admin.pages.ingredients.index');
	}


    public function liste()
    {
        return Ingredient::orderBy('slug')->get();
    }

    /**
     * Ajoute un ingrédient
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Ingredient::create(request()->validate([
            'name' => "required",
            'prix' => "required"
        ]));


        return $this->respond('Ingrédient ajouté');
    }


    /**
     * Met à jour les champs des ingrédients
     *
     * @param  \App\Entities\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Ingredient $ingredient)
    {
        $ingredient->update(request()->all());

        return $this->respond('Information mise à jour');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {

    }
}
