@extends('layouts.master')

@section('page-title', 'Products Page')


@section('content')

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-2">
    Create New Product
    </a>


    <table class="table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Stocks</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stocks }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}">
                            Edit
                        </a>

                        <form action="{{ route('products.delete', $product->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
