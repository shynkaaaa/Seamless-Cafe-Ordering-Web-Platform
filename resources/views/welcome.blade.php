@extends('layout')

@section('title', 'Выберите опции напитка')

@section('content')
    <h1>Выберите опции напитка</h1>

    <form method="POST" action="{{ route('single-item.show', ['type' => $type, 'id' => $id]) }}">
        @csrf

        <label for="size">Выберите размер:</label>
        <select name="size" id="size">
            <option value="small">Маленький</option>
            <option value="medium">Средний</option>
            <option value="large">Большой</option>
        </select>
        <br>

        <label for="toppings">Выберите добавки:</label>
        <br>
        @foreach ($toppings as $topping)
            <input type="checkbox" name="toppings[]" value="{{ $topping->id }}"> {{ $topping->name }}<br>
        @endforeach
        <br>

        <button type="submit">Рассчитать общую стоимость</button>
    </form>

    @isset($totalPrice)
        <h2>Общая стоимость: ${{ $totalPrice }}</h2>
    @endisset
@endsection
