@extends('layouts.app')

@section('content')
        <div class="wrapper create-pizza">
            <h1>Create A New Pizza</h1>
            <form action="/pizzas" method="POST">
            @csrf
                <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name">
                <label for="type">Choose Pizza Type:</label>
                    <select id="type" name="type">
                        <option value="margherita">Margherita</option>
                        <option value="hawaiian">Hawaiian</option>
                        <option value="veg supreme">Veg Supreme</option>
                        <option value="volcano">Volcano</option>
                    </select>
                <label for="base">Choose Base Type:</label>
                    <select id="base" name="base">
                        <option value="cheesy crust">Cheese Crust</option>
                        <option value="garlic crust">Garlic Crust</option>
                        <option value="thin & crispy">Thin & Crispy</option>
                        <option value="thick">Thick</option>
                    </select>
                    <fieldset>
                        <label> Extra Toppings</label>
                        <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
                        <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
                        <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
                        <input type="checkbox" name="toppings[]" value="olives">Olives <br>
                    </fieldset>
                <input type="submit" value="Order Pizza">
            </form>
        </div>
@endsection