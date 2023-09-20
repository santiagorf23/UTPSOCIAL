@extends('layouts.app')
<head>
    <title>Editar Perfil</title>
</head>
@section('titulo')
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <div class="md:flex md:justify-center hidden sm:block">
                <img class="rounded-full sm:h-35 h-20 m-auto mb-5" src="{{ asset('img/user.jpg') }}" alt="Usuario">
            </div>
            <a class="mb-2 block uppercase text-gray-500 font-bold text-center p-2">Editar Perfil</a>
            <hr class="mb-5">
            <form action="{{ route('profile') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ auth()->user()->id }}" name="id">
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre:
                    </label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Nombre"
                        value="{{ auth()->user()->name }}"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    >
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre de Usuario:
                    </label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Nombre de Usuario"
                        value="{{ auth()->user()->username }}"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                    >
                </div>
                    <input
                    type="submit"
                    value="Editar Perfil"
                    class="bg-gray-600 hover:bg-black transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg font-bold"
                    />
                </div>
            </form>
        </div>
    </div>
@endsection