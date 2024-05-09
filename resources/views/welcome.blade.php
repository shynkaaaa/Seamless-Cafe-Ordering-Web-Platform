@extends('layout')

@section('title', 'Choose Drink Options')

@section('content')
    <h1>Choose Drink Options</h1>

    <form method="POST" action="{{ route('single-item.show', ['type' => $type, 'id' => $id]) }}">
        @csrf

        <label for="size">Select Size:</label>
        <select name="size" id="size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
        <br>

        <label for="toppings">Select Toppings:</label>
        <br>
        @foreach ($toppings as $topping)
            <input type="checkbox" name="toppings[]" value="{{ $topping->id }}"> {{ $topping->name }}<br>
        @endforeach
        <br>

        <button type="submit">Calculate Total Price</button>
    </form>

    @isset($totalPrice)
        <h2>Total Price: ${{ $totalPrice }}</h2>
    @endisset
@endsection
