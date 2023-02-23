@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
<form action="/pizza" method="POST">
@csrf
<label for="name">Your name:</label>
<input type="text" id="name" name="name">
<label for="type"> Choose pizza type: </label>
<select name="type" id="type">
    <option value="margrita">Margrita</option>
    <option value="hawaiian">Hawaiian</option>
    <option value="veg supreme">Veg Supreme</option>
    <option value="volcano">Volcano</option>
</select>
<label for="base"> Choose pizza base: </label>
<select name="base" id="base">
    <option value="mheesy crust">Mheesy crust</option>
    <option value="halric crust">Haalric crustn</option>
    <option value="thin & crispy">Thin & Crispy</option>
    <option value="thick">Thick</option>
</select>
<fieldset>
<label>Extra toppings:</label>
<input type="checkbox" name="toppings[]" value ="mushrooms">Mushrooms <br/>
<input type="checkbox" name="toppings[]" value ="peppers">Peppers <br/>
<input type="checkbox" name="toppings[]" value ="garlic">Garlic <br/>
<input type="checkbox" name="toppings[]" value ="olives">Olives <br/>
</fieldset>
<input type="submit" value="Order Pizza">
</form>
</div>

@endsection