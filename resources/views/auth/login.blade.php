<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Palavra-passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-400 shadow-sm focus:ring-blue-400" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Lembrar a minha conta') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400" href="{{ route('password.request') }}">
                    {{ __('Esqueceu-se da palavra-passe?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Entrar') }}
            </x-primary-button>
        </div>
    </form>
    @if (Route::has('register'))
    <div class="container mt-9">
        <span class="mb-2 text-sm  text-gray-700 dark:text-gray-700">
            Ainda não tem conta?
        </span>
            <a
                href="{{ route('register') }}"
                class="rounded-md ml-3 px-3 py-2 bg-blue-400 text-white ring-1 ring-transparent transition hover:bg-blue-500 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Registar
            </a>
    </div>
    @endif

</x-guest-layout>
