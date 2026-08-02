@extends('layouts.admin')

@section('title', 'Login Admin')

@section('content')
<div class="max-w-sm mx-auto bg-white p-6 rounded shadow mt-10 border-t-4 border-cnb-gold">
    <h1 class="font-serif text-xl font-bold mb-4 text-cnb-black">Login Admin</h1>

    @if ($errors->any())
        <div class="text-red-600 text-sm mb-4">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <div class="mb-3">
            <label class="block text-sm text-cnb-gray mb-1">Username</label>
            <input type="text" name="username" class="border border-gray-300 focus:border-cnb-gold outline-none w-full p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm text-cnb-gray mb-1">Password</label>
            <input type="password" name="password" class="border border-gray-300 focus:border-cnb-gold outline-none w-full p-2 rounded" required>
        </div>
        <button type="submit" class="bg-cnb-black hover:bg-cnb-gold hover:text-cnb-black text-white px-4 py-2 rounded w-full transition">
            Login
        </button>
    </form>
</div>
@endsection