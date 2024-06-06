<footer class="bg-azulcreditomype font-outfit text-textWhite">
    <div class="w-11/12 mx-auto flex flex-col gap-10 pt-12 border-b-white border-b-[1px]"> {{-- py-12 --}}
        <div class="flex flex-col 2md:flex-row 2md:justify-between  pb-10 gap-12 2md:gap-24"> {{-- border-b-2 border-white -  data-aos="fade-up" data-aos-offset="150"  --}}

            <div class="flex flex-col gap-5 basis-1/3">
                <div class="flex flex-col gap-3">
                    <img class="w-52" src="{{ asset('images/img/logocmblanco.png') }}" />
                    <p class="font-fontLight tracking-tight text-text14 xl:text-text18 w-full">
                        ¡Más de 5,000 pequeñas empresas ya se han beneficiado de nuestros servicios!
                    </p>
                </div>


                <div
                    class="flex flex-col gap-5 2md:flex-row 2md:justify-between items-start 2md:items-center text-text14 xl:text-text18">

                    <div class="flex justify-start 2md:justify-between gap-5 w-full 2md:w-auto">

                       
                            <a target="_blank" href="">
                                <img src="{{ asset('images/img/instagramverde.png') }}" alt="instagram">
                            </a>
                       

                        
                            <a target="_blank" href="">
                                <img src="{{ asset('images/img/facebookverde.png') }}" alt="facebook">
                            </a>
                       

                       
                            <a target="_blank" href="">
                                <img src="{{ asset('images/img/linkedverde.png') }}" alt="linkedin">
                            </a>
                       

                      
                            <a target="_blank" href="">
                                <img src="{{ asset('images/img/twitterverde.png') }}" alt="tiktok">
                            </a>
                      

                    </div>
                </div>
            </div>

            <div class="flex flex-col 2md:flex-row gap-12 2md:gap-16 basis-2/3 2md:justify-end">
                <div class="flex flex-col gap-5">
                    <p class="font-medium font-fontBold text-text16 xl:text-text20">Menu</p>
                    <div class="flex flex-col gap-2 font-fontLight tracking-tight">
                        <a href="{{ route('index') . '#prestamo' }}" class="font-normal text-text14 xl:text-text18 block">Solicitar prestamo</a>
                        <a href="{{ route('index') . '#beneficios' }}"
                            class="font-normal text-text14 xl:text-text18 block">Beneficios</a>
                        <a href="{{ route('index') . '#testimonio' }}"
                            class="font-normal text-text14 xl:text-text18 block">Testimonio</a>
                        <a href="{{ route('index') . '#cobertura' }}"
                            class="font-normal text-text14 xl:text-text18 block">Cobertura</a>
                    </div>
                </div>


                <div class="flex flex-col gap-5">
                    <p class="font-medium text-text16 xl:text-text20 font-fontBold">
                        Datos de contacto
                    </p>
                    <div class="flex flex-col gap-2  font-fontLight tracking-tight">
                        <p class="font-normal text-text14 xl:text-text18">
                            {{$generales->address}}
                        </p>
                        <div class="font-normal text-text14 xl:text-text18">
                            <p>Email: {{ $generales->email}}</p>
                        </div>
                        <div class="font-normal text-text14 xl:text-text18">
                            <span>Teléfono:</span> <span>{{ $generales->cellphone}}</span>
                            {{-- <p href="#">{{$generales->office_phone}}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <a href="http://mundoweb.pe/" target="_blank">Copyright &copy; 2023 Mundo Web. Reservados todos los derechos</a> --}}

    </div>
    <div class="w-11/12 mx-auto flex flex-col gap-10 py-8 border-b-white">
        <p class="font-fontLight">Copyright © 2024 <a class="font-bold" href="https://mundoweb.pe/" target="blank">Mundo Web.</a> Reservados todos los derehos.</p>
    </div>
</footer>
