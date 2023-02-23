@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
<h1>Order for {{$pizza->name }}</h1>
<p class="type">Type - {{$pizza->type}}</p>
<p class="base">Base - {{$pizza->base}}</p>
<p class="toppings">Extra toppings:</p>
<ul>
@foreach($pizza->toppings as $toppings)
<li>{{$toppings}}</li>
@endforeach
</ul>

</div>
<a href="/pizza" class="back"><- Back to all Pizzas </a>
@endsection