<form action="{{ $route }}" method="{{ $method }}">
    @csrf
    @if (session($status))
        <p class=" bg-red-500 text-white my-2 rounded-lg p-2 text-center">{{ session('warning') }}</p>
    @endif
    {{ $slot }}
    <x-forms.input name="email" title="Correo:" placeholder="Correo Electronico" type="email"/>
    <x-forms.input name="password" title="Contraseña:" placeholder="Contraseña" type="password"/>
    <input
        type="submit"
        value="Iniciar Sesión"
        class=" bg-gray-600 hover:bg-black transition-colors cursor-pointer uppercase w-full p-3 text-white rounded-lg font-bold"
    />
</form>