<header
    class="bg-transparent bg__servicios-fondo font-outfit w-full h-24 lg:h-28 fixed top-0 bg-white z-60">
    <div class="text-azulcreditomype flex justify-between items-center w-11/12 mx-auto pt-7 pb-5">
        <div class="flex justify-start items-center w-60 xl:w-auto" data-aos="fade-up" data-aos-offset="150">
            <a href="{{route('index')}}">
                <img src="{{ asset('images/img/logocreditomype.png') }}" alt="creditomype">
            </a>

        </div>
        <div class="hidden lg:flex justify-center items-center gap-10 font-semibold font-fontMedium text-text16 xl:text-text18">
            <nav class="flex justify-center items-center gap-10 text-center" data-aos="fade-up" data-aos-offset="150">
                <a href="{{route('index').'#prestamo'}}" class="text-verdecreditomype">Solicitar Prestamo</a>
                <a href="{{route('index').'#beneficios'}}">Beneficios</a>
                <a href="{{route('index').'#testimonio'}}">Testimonios</a>
                <a href="{{route('index').'#prensa'}}">Prensa</a>
                <a href="{{route('index').'#cobertura'}}">Cobertura</a>
            </nav>
        </div>
    </div>

    

    {{-- <div class="flex justify-end w-11/12 mx-auto mb-4 z-10">
        <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20">
            <a target="_blank" href="https://api.whatsapp.com/send?phone={{$generales->whatsapp}}&text={{$generales->mensaje_whatsapp}}" rel="noopener">
                <img src="{{ asset('images/svg/WhatsApp.svg') }}" alt="whatsapp" class="w-20 h-20 md:w-full md:h-full">
            </a>
        </div>
    </div> --}}
</header>
