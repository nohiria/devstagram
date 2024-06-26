@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-4 p-10">
        {{-- Imagen --}}
        <div class="md:w-6/12 min-h-max p-4">
            <img class="h-full w-auto object-cover" src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios">
        </div>

        {{-- Formulario --}}
        <div class="md:w-5/12 bg-white p-6 rounded-lg shadow-xl flex items-center h-full">
            <form class="w-full">
                <div class="mb-4">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input 
                        type="text" 
                        id="name"
                        name="name"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg" 
                    />
                </div>

                <div class="mb-4">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input 
                        type="text" 
                        id="username"
                        name="username"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg" 
                    />
                </div>

                <div class="mb-4">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                        type="email" 
                        id="email"
                        name="email"
                        placeholder="Tu dirección de correo electrónico"
                        class="border p-3 w-full rounded-lg" 
                    />
                </div>

                <div class="mb-4">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input 
                        type="password" 
                        id="password"
                        name="password"
                        placeholder="Tu contraseña"
                        class="border p-3 w-full rounded-lg" 
                    />
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Password
                    </label>
                    <input 
                        type="password" 
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Repite tu contraseña"
                        class="border p-3 w-full rounded-lg" 
                    />
                </div>

                <input 
                    type="submit"
                    value="Crear cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection


