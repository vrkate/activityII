@extends('layouts.master')

@section('page-title', 'Create User')


@section('content')

<ul>
    @foreach($errors->all() as $message)
    <li>{{ $message }}</li>
    @endforeach
</ul>

<form action="{{ route('users.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" value="{{ old('name') }}" name="name" required>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" value="{{ old('email') }}"  name="email" required>
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control"  name="password" required>
    </div>

    <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="password" class="form-control"  name="password_confirmation" required>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Save</button>
</form>
    
@endsection
