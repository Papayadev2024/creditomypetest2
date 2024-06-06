<x-authentication-layout>
    <h1 class="text-3xl text-[#254F9A] font-outfit text-[40px] font-bold mb-6">{{ __('Hola de vuelta!') }}</h1>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif   
    <!-- Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-label for="email" value="{{ __('Correo') }}" class="text-[#254F9A] font-medium text-[14px]"/>
                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus  placeholder="Ingrese usuario" class="text-[#3b3e44] py-4 rounded-lg font-medium text-[18px] border-2 border-[#254F9A] focus:border-[#254F9A] px-5  bg-[#F6F8FE]"/>                
            </div>
            <div>
                <x-label for="password" value="{{ __('Contraseña') }}" class="text-[#254F9A] font-medium text-[14px]"/>
                <x-input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Ingrese Clave" class="text-[#254F9A] py-4 rounded-lg font-medium text-[18px] border-2 border-[#254F9A] focus:border-[#254F9A] px-5 bg-[#F6F8FE]"/>                
            </div>
            <!-- <div>
                pggsg
            </div> -->
        </div>
        <div class="flex items-center justify-end mt-6">
           {{--  @if (Route::has('password.request'))
                <div class="mr-1">
                    <a class="text-sm underline hover:no-underline" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                </div>
            @endif   --}}          
            <x-button class="ml-3" class="!bg-[#254F9A] text-white w-full py-4 rounded-lg font-semibold text-[18px]">
                {{ __('Ingresar') }}
            </x-button>            
        </div>
    </form>
    <x-validation-errors class="mt-4" />   
    <!-- Footer -->
    {{-- <div class="pt-5 mt-6 border-t border-slate-200 dark:border-slate-700">
        <div class="text-sm">
            {{ __('¿No tienes una cuenta?') }} <a class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400" href="{{ route('register') }}">{{ __('Regístrate') }}</a>
        </div>
        
    </div> --}}
</x-authentication-layout>

    