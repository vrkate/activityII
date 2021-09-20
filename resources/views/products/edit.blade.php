@extends('layouts.master')

@section('page-title', 'Edit Product')


@section('content')

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" value="{{ $product->name }}" name="name">
    </div>
    <div class="form-group">
        <label for="">Stocks</label>
        <input type="number" class="form-control" value="{{ $product->stocks }}" name="stocks">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Save</button>
</form>
    
@endsection
