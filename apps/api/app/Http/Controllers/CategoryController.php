<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();

        $category = Category::create($data);

        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
       /* $category = Category::find($id);

        if (!$category){
            //404 not found
            return response()->json([
                'message' =>'Categoria não encontrada'
            ], 404);
        }*/

        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category, CategoryUpdateRequest $request)
    {
        $data = $request->validated();

        $category->update($data);

        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        if ($hasProduct){
            //422 Unprocessable Entity
            return response()->json([
                'message' => 'Categoria com produtos relacionados',
            ], 404);
        }

        $category->delete();

        //204 No content
        return response()->json([
            'message' => 'Categoria excluída',
        ], 204);
    }
}
