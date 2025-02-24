@extends('layouts.app')

@section('content')
<div class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/background1.png') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center">
        <div class="w-full max-w-md p-6 bg-gray-900 bg-opacity-80 rounded-lg shadow-lg border border-gray-700">
            <h2 class="text-2xl font-bold text-center text-white mb-6">Login Bengkel</h2>
            <form method="POST" action="{{ route('login.attempt') }}">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-300">Username</label>
                    <input type="text" name="username" id="username" required
                        class="w-full p-3 mt-1 rounded-lg bg-gray-800 border border-gray-600 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full p-3 mt-1 rounded-lg bg-gray-800 border border-gray-600 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <button type="submit"
                    class="w-full p-3 mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition-all">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
