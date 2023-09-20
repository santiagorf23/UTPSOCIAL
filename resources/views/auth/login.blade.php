@extends('layouts.app')
<head>
    <title>Iniciar Sesión</title>
</head>
@section('titulo')
    Iniciar Sesión
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <div class="md:flex md:justify-center hidden sm:block">
                <img class="max-h-20" src="{{ asset('img/utp.png') }}" alt="UTP Social">
            </div>
            <h2 class="mb-5 text-gray-600 font-bold font-sans text-center">
                Ingresa para ver fotos y vídeos de tus amigos.
            </h2>
            <hr class="mb-5">

            <form action="{{ route('login') }}" method="POST">
                @csrf
                @if (session('warning'))
                    <p class=" bg-red-500 text-white my-2 rounded-lg p-2 text-center">{{ session('warning') }}</p>
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Correo:
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Correo electronico"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                    >
                    @error('email')
                        <p class=" bg-red-500 text-white my-2 rounded-lg p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña:
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Contraseña"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    >
                    @error('password')
                        <p class=" bg-red-500 text-white my-2 rounded-lg p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <input
                    type="submit"
                    value="Iniciar Sesión"
                    class=" bg-gray-600 hover:bg-black transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg font-bold"
                />
            </form>
            <hr class="mt-5 mb-5">
            <h2 class="text-center"><a class=" text-blue-600" href="{{ route('register') }}">¿Olvidaste tu contraseña?</a></h2>
        </div>
    </div>
    <div class="md:flex md:justify-center md:items-center mt-10">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <h2 class="text-center">¿No tienes una cuenta? <a class=" text-blue-600" href="{{ route('register') }}">Regístrate</a></h2>
        </div>
    </div>
@endsection