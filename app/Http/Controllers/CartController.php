<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carritos = session()->get('carrito');
        return view("cart",[
            "Carts"=>$carritos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $Articulo = Articulo::findOrFail($id);

        $carrito = session()->get('carrito', []);
        

        if (isset($carrito[$id])) {
            $carrito[$id]['amount']++;
        } else {
            $carrito[$id] = [
                "img"=> $Articulo->img,
                "name" => $Articulo->name,
                "price" => $Articulo->price,
                "amount" => 1,
                "subtotal" => $Articulo->price,
            ];
        }

        $carrito[$id]['subtotal'] = $carrito[$id]['amount'] * $Articulo->price;

        session()->put('carrito', $carrito);

        return redirect()->back()->with('feedback.message', 'El articulo '.e($Articulo->name).' se agrego con exito');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $amounts = $request->input('amount'); 
        $cart = session('carrito', []); 
    
        if ($amounts && is_array($amounts)) {
            foreach ($amounts as $id => $amount) {
                if (isset($cart[$id])) {
                    $amount = max(0, (int)$amount);
                    $cart[$id]['amount'] = $amount;
                    $cart[$id]['subtotal'] = $cart[$id]['price'] * $amount;

                    if ($amount === 0) {
                        unset($cart[$id]);
                    }
                }
            }
            session()->put('carrito', $cart);
        }
    
        return redirect()->route('cart')->with('feedback.message', 'Carrito actualizado con éxito');
    }

    public function clear()
{
    session()->forget('carrito');
    return redirect()->back()->with('success', 'Carrito vaciado con éxito!');
}

}
