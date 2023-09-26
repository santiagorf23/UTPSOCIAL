<x-layout>
    <div class="md:flex md:justify-center md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <div class="flex justify-center">
                <img class="rounded-full sm:h-35 h-20 m-auto mb-5" src="{{ asset('img/user.jpg') }}" alt="Usuario">
            </div>
            <h2 class="mb-5 mt-5 text-gray-600 font-bold font-sans text-center">
                Editar Perfil
            </h2>
            <hr class="mb-5">
            <x-forms.form route="{{ route('profile') }}" method="POST">
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <x-forms.input name="name" title="Nombre:" value="{{ auth()->user()->name }}" placeholder="Nombre" type="name"/>
                <x-forms.input name="password" title="Contraseña:" value="{{ auth()->user()->username }}" placeholder="Contraseña" type="password"/>
                <x-forms.input-button type="submit" value="Guardar Cambios."/>
            </x-forms.form>
        </div>
    </div>
</x-layout>