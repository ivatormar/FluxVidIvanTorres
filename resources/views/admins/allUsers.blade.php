

@extends('layout')

@section('content')
    <h1>All Users</h1>

    @foreach ($users as $user)
        <div>
            <p>{{ $user->name }}</p>
            <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
