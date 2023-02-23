<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }
    public function index()
    {
       
        //$pizzas= Pizza::all();
        $pizzas= Pizza::orderBy('name','desc')->get();
       // $pizzas= Pizza::where('name','like(\'al%\')')->get();
        
        return view('pizzas.index',[
            'pizzas'=>$pizzas ,
            ]); 
    }

    public function show($id)
    {
        $pizza= Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza'=> $pizza]);
    }
    public function create()
    {
    return view('pizzas.create');
    }

    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save();
        // error_log($pizza);
        // error_log(request('name'));
        // error_log(request('base'));
        // error_log(request('type'));
        return redirect('/')->with('mssg','Thanks For Your Order');
        //return request('toppings');
    }
    public function destroy($id)
    {
        $pizza= Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizza');
    }
    public function dd($id)
    {
        $pizza=new Pizza();
        $pizza->name = request('name');
        $pizza= $pizza->where('name',$id)->get();
        return view('pizzas.dd', ['pizza'=> $pizza]);
    }
}
