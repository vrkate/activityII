@extends('layouts.master')

@section('page-title', 'Edit User')


@section('content')

<ul>
    @foreach($errors->all() as $message)
    <li>{{ $message }}</li>
    @endforeach
</ul>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf 
    @method('PATCH')
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" value="{{ $user->name }}" name="name" required>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" value="{{ $user->email }}"  name="email" required>
    </div>


    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control"  name="password">
    </div>

    <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="password" class="form-control"  name="password_confirmation">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Save</button>
</form>
    
@endsection
