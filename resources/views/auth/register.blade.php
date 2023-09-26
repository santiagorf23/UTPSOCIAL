<x-layout title="Registrate" >
    <x-card-main text="Registrate para ver videos y fotos de tus amigos.">
        <x-forms.form route="{{ route('login') }}" method="POST">
                <x-forms.input name="name" title="Correo:" :value="old('name') ?? old('name')" placeholder="Correo Electronico" type="email"/>
                <x-forms.input name="username" title="Nombre de Usuario:" :value="old('username') ?? old('username')" placeholder="Contraseña" type="username"/>
                <x-forms.input name="email" title="Correo Electronico:" :value="old('email') ?? old('email')" placeholder="Contraseña" type="email"/>
                <x-forms.input name="password" title="Contraseña:" placeholder="Contraseña" type="password"/>
                <x-forms.input name="password_confirmation" title="Repetir Contraseña:" placeholder="Repite la Contraseña" type="password_confirmation"/>
                <x-forms.input-button type="submit" value="Crear Cuenta"/>
        </x-forms.form>
    </x-card-main>
    <x-card-footer text="¿Tienes una Cuenta?" route="{{ route('login')}}" textSecondary="Iniciar Sesion"/>
</x-layout>