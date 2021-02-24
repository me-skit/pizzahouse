@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h1>Create a New Pizza</h1>
  <form action="/pizzas" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" id="name" name="name">
    <label for="type">Chose pizza's type:</label>
    <select name="type" id="type">
      <option value="Margarita">Margarita</option>
      <option value="Hawaiian">Hawaiian</option>
      <option value="Veg Supreme">Veg Supreme</option>
      <option value="Volcano">Volcano</option>
    </select>
    <label for="base">Chose base's type:</label>
    <select name="base" id="base">
      <option value="Cheesy Crust">Cheesy Crust</option>
      <option value="Garlic Crust">Garlic Crust</option>
      <option value="Thin & Crispy">Thin & Crispy</option>
      <option value="Thick">Thick</option>
    </select>
    <fieldset>
      <label>Extra toppings:</label>
      <input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms<br />
      <input type="checkbox" name="toppings[]" value="Peppers">Peppers<br />
      <input type="checkbox" name="toppings[]" value="Garlic">Garlic<br />
      <input type="checkbox" name="toppings[]" value="Olives">Olives<br />
    </fieldset>
    <input type="submit" value="Order Pizza">
  </form>
</div>
@endsection