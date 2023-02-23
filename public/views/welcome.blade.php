@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="/img/pizza-house.png" alt="pizza house logo">
                <div class="title m-b-md">
                    The North's Best Pizzas
                </div>
                <p class="mssg">{{session('mssg')}}</p>
                <a href="/pizza/create"><h2>Order a Pizza</h2></a>
                
                <form action="/order/dd" method="GET">
                <label for="name">
                <h2>View Your Last Orders</h2></a>
                </label>
                <input type="text" id="name" name="name">
                <input type="submit" value="submit">
                </form>
            </div>
        </div>
   @endsection 