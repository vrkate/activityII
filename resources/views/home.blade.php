@extends('layouts.master')

@section('page-title', 'Home Page')


@section('content')
    <h1 class="text-center">Welcome to my app</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Stocks</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stocks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection