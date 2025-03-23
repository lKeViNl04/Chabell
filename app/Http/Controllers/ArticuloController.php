<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Carrusel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Parámetros para la ordenación
        $orden = $request->input('ORDEN', 'id_product asc');  // Default: 'id_product'

        // Parámetros para paginación
        $pagina = $request->input('page', 1);  // Default: 1

        // Parámetros para el filtro (color, talle, precio)
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $color = $request->input('color');  // Si está usando un filtro de color
        $talle = $request->input('talle');  // Si está usando un filtro de talle

        // Consulta para obtener los artículos con filtros
        $Articulos = Articulo::query();

        // Filtrar por precio
        if ($minPrice) {
            $Articulos->where('price', '>=', $minPrice);
        }
        if ($maxPrice) {
            $Articulos->where('price', '<=', $maxPrice);
        }

        // Filtrar por color y talle (si aplica)
        if ($color) {
            $Articulos->where('color', $color);  // Esto depende de la estructura de tu base de datos
        }
        if ($talle) {
            $Articulos->where('talle', $talle);  // Similar a 'color'
        }

        // Ordenación
        $Articulos->orderByRaw($orden);

        // Paginación
        $Articulos = $Articulos->paginate(6, ['*'], 'paginado', $pagina);
        $countproduct = Articulo::count();
        
        $maxpaginado_producto = ceil(($countproduct) / 6);
        $Carruseles = Carrusel::orderBy('id_carrusel', 'asc')->take(5)->get();

        return view("Product", [
            "Carruseles" => $Carruseles,
            "Articulos" => $Articulos,
            "maxpaginado_producto" => $maxpaginado_producto
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'required|min:30'
        ],[
            'name.required' => 'el titulo debe tener un valor',
            'name.min' => 'el titulo detener al menos :min caracteres',
            'description.min'=> 'el titulo detener al menos :min caracteres'
        ]);

        $input = $request->all();

        if($request->hasFile('img')){
            $input['img'] = $request->file('img')->store('img', 'public');
        }

        $Articulo = Articulo::create($input);

        return redirect()
        ->route('adminArticle')
        ->with('feedback.message', 'El articulo '.e($Articulo->name).' se publico con exito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.article.edit', [
            'Amodificar' => Articulo::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Article = Articulo::findOrFail($id);
        $input = $request->except(['_token', '_method']);
        $oldImg = $Article->img;
        
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'required|min:30'
        ],[
            'name.required' => 'el titulo debe tener un valor',
            'name.min' => 'el titulo detener al menos :min caracteres',
            'description.min'=> 'el titulo detener al menos :min caracteres'
        ]);

        if($request->hasFile('img')){
            $input['img'] = $request->file('img')->store('img', 'public');

            if ($oldImg && Storage::disk('public')->exists($oldImg)) {
                Storage::disk('public')->delete($oldImg);
            }
        }
        
        $Article->update($input);

        if($request->hasFile('img') && $Article->img){
            Storage::delete($oldImg);
        }

        return redirect()
            ->route('adminArticle')
            ->with('feedback.message', 'El articulo '.e($Article->name).' se actualizo con exito');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Article = Articulo::findOrFail($id);

        $Article->delete();

        if ($Article->img && Storage::disk('public')->exists($Article->img)) {
            Storage::disk('public')->delete($Article->img);
        }


        return redirect()
            ->route('adminArticle')
            ->with('feedback.message', 'El articulo '.e($Article->name).' se elimino con exito');
    
    }
}
