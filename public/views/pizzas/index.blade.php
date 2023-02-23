@extends('layouts.layout')

@section('content')
    <!-- @for($i =0; $i< count($pizzas) ; $i++)
        <p>the value of i is {{ $pizzas[$i]['type'] }}</p>
        @endfor -->
        <div class="wrapper pizza-index">
                <h1>Pizza Orders</h1>
                @foreach ($pizzas as $i)
                <div class="pizza-item">
                <img src="/img/pizzaPhoto.png" alt="pizza icon">
          <h4> <a href="/pizzas/$i->id">  {{$i->name}} </a></h4>
                </div>
                @endforeach
        </div>
    
@endsection