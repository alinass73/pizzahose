@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
<h1>Order for {{$order->name }}</h1>
@foreach
<p class="type">Type - {{$order->type}}</p>
<p class="created_at">Ordered at - {{$order->created_at}}</p>
<p class="base">Base - {{$order->base}}</p>
<p class="type">Type - {{$order->type}}</p>
@endforeach
</div>
<a href="/pizza" class="back"><- Back to all Pizzas </a>
@endsection