<x-app-layout>

    <div class="py-16 bg-white">
        <div class="container m-auto  text-gray-600 bg-white ">
            <div class="bg-white">
                <div class="py-10 bg-white">
                    <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                        <h1 class="text-2xl text-gray-900 font-bold md:text-4xl text-center ">Jenabien. Tú bienestar es
                            nuestro
                            bienestar.</h1>
                    </div>
                </div>
                <div class=" container border-b border-gray-900 mb-10 mt-10"></div>

                {{-- Menus de navegacion --}}
                <div class=" bg-white ">

                    <div class=" grid grid-cols-6   text-center">

                        <!-- Card 1 -->
                        <a class="ml-5 p-7  md:w-5/6 bg-[#e4e4e7] rounded-xl h-60  "
                            href="{{ route('iniciobloques.finanzas') }}">

                            <!-- City Name -->
                            <p class="text-base text-center text-[#374151] pt-5 p-auto mb-3">ÁREA FINANZAS Y CARTOLA</p>

                            <!-- Image -->
                            <img src="/img/finanzas/finanza.jpg" class="rounded h-24 " />

                        </a>

                        <!-- Card 2 -->
                        <a class="ml-6 p-7 md:w-5/6 bg-[#e5e7eb] rounded-xl h-60"
                            href="{{ route('iniciobloques.farmacia') }}">


                            <!-- City Name -->
                            <p class="text-base text-center text-[#374151] pt-5 p-auto mb-3">FARMACIAS JENABIEN</p>


                            <!-- Image -->
                            <img src="/img/farmacia/farmacia.jpg" class="rounded  h-24" />

                        </a>

                        <!-- Card 3 -->
                        <a class="ml-6 p-7 md:w-5/6  bg-[#e4e4e7] rounded-xl h-60"
                            href="{{ route('iniciobloques.corporativo') }}">


                            <!-- City Name -->
                            <p class="text-base text-center text-[#374151] pt-5 p-auto mb-3">CORPORATIVO´S JENABIEN</p>


                            <!-- Image -->
                            <img src="/img/corporativo/corporativo.jpg" class="rounded h-24" />


                        </a>

                        <!-- Card 4 -->
                        <a class="ml-6 p-7 md:w-5/6  bg-[#e5e7eb] rounded-xl h-60"
                            href="{{ route('iniciobloques.centros') }}">


                            <!-- City Name -->
                            <p class="text-base text-center text-[#374151] pt-5 p-auto mb-3">CENTROS RECREACIONALES</p>


                            <!-- Image -->
                            <img src="/img/centros/centro.jpeg" class="rounded h-24" />

                        </a>

                        <!-- Card 5 -->
                        <a class="ml-6 p-7 md:w-5/6  bg-[#e4e4e7] rounded-xl h-60"
                            href="{{ route('iniciobloques.vivienda') }}">


                            <!-- City Name -->
                            <p class="text-base text-center text-[#374151] pt-5 p-auto mb-3">VIVIENDAS FISCALES</p>


                            <!-- Image -->
                            <img src="/img/viviendas/vivienda.jpg" class="rounded h-24" />

                        </a>

                        <!-- Card 6 -->
                        <a class="ml-6 p-7 md:w-5/6  bg-[#e5e7eb] rounded-xl h-60"
                            href="{{ route('iniciobloques.convenios') }}">


                            <!-- City Name -->
                            <p class="text-base text-center  text-[#374151] pt-5 p-auto mb-3">CONVENIOS JENABIEN</p>


                            <!-- Image -->
                            <img src="/img/convenios/convenios.jpg" class="rounded h-24" />


                        </a>

                    </div>

                </div>

                <br>
                <br>
                <br>



                <div class="flex items-center justify-center ">
                    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
                    <div class=" relative flex items-center justify-center">
                        <button aria-label="slide backward"
                            class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-black focus:ring-2 focus:ring-offset-2 focus:ring-black cursor-pointer"
                            id="prev">
                            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="  overflow-x-hidden overflow-y-hidden">
                            <div id="slider"
                                class=" flex  items-center justify-start transition ease-out duration-700">

                                {{-- 1 --}}
                                <div class="flex flex-shrink-0 relative  ">
                                    <a >
                                        <img src="/img/slidergrande/casino.jpg" class=" h-64 m-2 " />
                                    </a>
                                </div>

                                {{-- 2 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a >
                                        <img src="/img/slidergrande/hotel.jpg" class="h-64 m-2" />
                                    </a>
                                </div>

                                {{-- 3 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a >
                                        <img src="/img/slidergrande/invierno.jpg" class="h-64 m-2" />
                                    </a>
                                </div>

                                {{-- 4 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a >
                                        <img src="/img/slidergrande/papa.jpg" class="h-64 m-2" />
                                    </a>
                                </div>

                                {{-- 5 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a >
                                        <img src="/img/slidergrande/bci.jpg" class="h-64 m-2" />
                                    </a>
                                </div>

                                {{-- 6 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a >
                                        <img src="/img/slidergrande/circo.png" class="h-64 m-2" />
                                    </a>
                                </div>

                                {{-- 7 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a >
                                        <img src="/img/slidergrande/movistar.jpg" class="h-64 m-2" href="" />
                                    </a>
                                </div>

                                {{-- 8 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a >
                                        <img src="/img/slidergrande/sura.jpg" class="h-64 m-2" />
                                    </a>
                                </div>

                                {{-- 9 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a >
                                        <img src="/img/slidergrande/copeuch.jpg" class="h-64 m-2" />
                                    </a>
                                </div>

                                {{-- 10 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a >
                                        <img src="/img/slidergrande/entel.jpg" class="h-64 m-2" />
                                    </a>
                                </div>

                                {{-- 11 --}}
                                <div class="flex flex-shrink-0 relative  ">
                                    <a >
                                        <img src="/img/slidergrande/optica.jpg" class=" h-64 m-2 " />
                                    </a>
                                </div>

                                {{-- 12 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a>
                                        <img src="/img/slidergrande/padro.jpg" class="h-64 m-2" />
                                    </a>
                                </div>


                            </div>
                        </div>
                        <button aria-label="slide forward"
                            class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-black focus:ring-2 focus:ring-offset-2 focus:ring-black"
                            id="next">
                            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                <script>
                    let defaultTransform = 0;

                    function goNext() {
                        defaultTransform = defaultTransform - 398;
                        var slider = document.getElementById("slider");
                        if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7)
                            defaultTransform = 0;
                        slider.style.transform = "translateX(" + defaultTransform + "px)";
                    }
                    next.addEventListener("click", goNext);

                    function goPrev() {
                        var slider = document.getElementById("slider");
                        if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
                        else defaultTransform = defaultTransform + 398;
                        slider.style.transform = "translateX(" + defaultTransform + "px)";
                    }
                    prev.addEventListener("click", goPrev);
                </script>



                <br>
                <br>
                <br>

                {{-- aaaaaaaaaaaaaaaaaaaaaaaaa --}}


                {{-- Menus de navegacion --}}
                <div class=" bg-white  ">

                    <div class="p-7 grid grid-cols-6   text-center">

                        <!-- Card 1 -->
                        <a class="ml-5 p-7 md:w-5/6 bg-[#e4e4e7] rounded-xl h-60  "
                            href="{{ route('iniciobloques.club') }}">

                            <!-- City Name -->
                            <p class="text-base text-center text-[#374151] pt-5 p-auto mb-9">CLUB SOCIAL PDI</p>

                            <!-- Image -->
                            <img src="/img/club/club.jpg" class="rounded h-24 " />

                        </a>

                        <!-- Card 2 -->
                        <a class="ml-6 p-7 md:w-5/6 bg-[#e5e7eb] rounded-xl h-60"
                            href="{{ route('iniciobloques.socios') }}">


                            <!-- City Name -->
                            <p class="text-base text-center text-[#374151] pt-5 p-auto mb-3">INCORPORACIÓN SOCIOS</p>


                            <!-- Image -->
                            <img src="/img/socios/socios.jpg" class="rounded  h-24" />

                        </a>

                        <!-- Card 3 -->
                        <a class="ml-6 p-7 md:w-5/6 bg-[#e4e4e7] rounded-xl h-60"
                            href="{{ route('iniciobloques.estetica') }}">


                            <!-- City Name -->
                            <p class="text-base text-center text-[#374151] pt-5 p-auto mb-3">CENTRO DE ESTETICA
                                POLICIAL
                            </p>


                            <!-- Image -->
                            <img src="/img/estetica/estetica.jpg" class="rounded h-24" />


                        </a>

                        <!-- Card 4 -->
                        <a class="ml-6 p-7 md:w-5/6 bg-[#e5e7eb] rounded-xl h-60"
                            href="{{ route('iniciobloques.valegas') }}">


                            <!-- City Name -->
                            <p class="text-base text-center text-[#374151] pt-5 p-auto mb-3">SOLICITUD VALES DE GAS
                            </p>


                            <!-- Image -->
                            <img src="/img/valegas/gas.png" class="rounded h-24" />

                        </a>

                        <!-- Card 5 -->
                        <a class="ml-6 p-7 md:w-5/6 bg-[#e4e4e7] rounded-xl h-60"
                            href="https://www.jenabien.cl/wp-content/uploads/2022/05/ANEXOS-2022_compressed.pdf">


                            <!-- City Name -->
                            <p class="text-base text-center text-[#374151] pt-5 p-auto mb-9">ANEXOS JENABIEN</p>


                            <!-- Image -->
                            <img src="/img/anexos/anexo.jpg" class="rounded h-24 ml-2.5" />

                        </a>

                        <!-- Card 6 -->
                        <a class="ml-6 p-7 md:w-5/6 bg-[#e5e7eb] rounded-xl h-60"
                            href="{{ route('iniciobloques.documentos') }}">


                            <!-- City Name -->
                            <p class="text-base text-center  text-[#374151] pt-5 p-auto mb-3">DOCUMENTOS DECARGABLES
                            </p>


                            <!-- Image -->
                            <img src="/img/documentos/documentos.jpg" class="rounded h-24 ml-5" />


                        </a>

                    </div>

                </div>

                <br>
                <br>
                <br>



                {{-- SLIDER SPONSOR --}}

                <div class=" container border-b border-gray-900 mb-10 mt-10"></div>


                <div class="flex items-center justify-center ">
                    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
                    <div class=" relative flex items-center justify-center">
                        <button aria-label="slide backward"
                            class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                            id="prev">
                            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="  overflow-x-hidden overflow-y-hidden">
                            <div id="slider"
                                class=" flex  items-center justify-start transition ease-out duration-700">

                                {{-- 1 --}}
                                <div class="flex flex-shrink-0 relative  ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/azocar.png" class=" h-32 m-2 " />
                                    </a>
                                </div>

                                {{-- 2 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/bci.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 3 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/capital.jpg" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 4 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/cristo.jpg" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 5 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/manpower.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 6 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/mariomeza.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 7 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/parque.jpg" class="h-32 m-2" href="" />
                                    </a>
                                </div>

                                {{-- 8 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/portillo.jpg" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 9 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/preu.jpg" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 10 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/tronwell.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- NUEVOS SLIDER --}}

                                {{-- 1 --}}
                                <div class="flex flex-shrink-0 relative  ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/clinicaloa.png" class=" h-32 m-2 " />
                                    </a>
                                </div>

                                {{-- 2 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/clinicarioblanco.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 3 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/clinicasiria.jpg" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 4 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/cocha.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 5 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/epilepsia.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 6 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/express.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 7 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/fabrizzi.png" class="h-32 m-2" href="" />
                                    </a>
                                </div>

                                {{-- 8 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/gino.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 9 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/lario.jpg" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 10 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/abastible.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 11 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/cruzverde.jpg" class="h-32 m-2" />
                                    </a>
                                </div>


                                {{-- 12 --}}
                                <div class="flex flex-shrink-0 relative  ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/lenceria.png" class=" h-32 m-2 " />
                                    </a>
                                </div>

                                {{-- 13 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/oftain.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 14 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/pacific.jpg" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 15 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/padro.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 16 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/pronto.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 17 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/terra.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 18 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/ubo.png" class="h-32 m-2" href="" />
                                    </a>
                                </div>

                                {{-- 19 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/uma.png" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 20 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/viajes.jpg" class="h-32 m-2" />
                                    </a>
                                </div>

                                {{-- 21 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <a href="{{ route('iniciobloques.convenios') }}">
                                        <img src="/img/sliderpeque/vtr.png" class="h-32 m-2" />
                                    </a>
                                </div>


                            </div>
                        </div>
                        <button aria-label="slide forward"
                            class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                            id="next">
                            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                <script>
                    let defaultTransform = 0;

                    function goNext() {
                        defaultTransform = defaultTransform - 398;
                        var slider = document.getElementById("slider");
                        if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7)
                            defaultTransform = 0;
                        slider.style.transform = "translateX(" + defaultTransform + "px)";
                    }
                    next.addEventListener("click", goNext);

                    function goPrev() {
                        var slider = document.getElementById("slider");
                        if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
                        else defaultTransform = defaultTransform + 398;
                        slider.style.transform = "translateX(" + defaultTransform + "px)";
                    }
                    prev.addEventListener("click", goPrev);
                </script>

                <br>
                <br>
                <br>

                <div class=" container border-b border-gray-900 mb-10 mt-10"></div>



                {{-- MAPA Y CONTACTO --}}

                <div class="container ">

                    <!--Section: Design Block-->
                    <section class="mb-20 text-gray-800 text-center">
                        <h3 class="font-bold text-3xl mb-12">¿ Dónde estamos úbicados ?</h3>
                        <div class="flex flex-wrap ">

                            <div class="mb-6 lg:mb-0 flex-initial shrink w-full lg:w-5/12 lg:pr-3 ">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.193971888885!2d-70.65867518426501!3d-33.44425260458133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5a7cc036425%3A0xdabeaf534de7a7ba!2sAv.%20Libertador%20Bernardo%20O&#39;Higgins%201449%2C%20Santiago%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1659471655506!5m2!1ses!2scl"
                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <div class="flex  shrink  m-auto">
                                <form>
                                    <div class="flex mr-20 flex-wrap">

                                        <div class="flex shrink w-full  md:pl-3">
                                            <ul>
                                                <li class="mb-8">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        class="w-5 mx-auto text-blue-600 mb-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                        <path fill="currentColor"
                                                            d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                                        </path>
                                                    </svg>
                                                    <h2 class="font-bold mb-2">DIRECCIÓN</h2>
                                                    <p class="mb-6 ">Avda Libertador Bernardo
                                                        O’higgins #1449, Santiago</p>
                                                    <p class="text-ms">Stgo Downtown, Torre 7, Piso 12</p>
                                                </li>
                                                <li class="mb-8">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        class="w-6 mx-auto text-blue-600 mb-1" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="currentColor"
                                                            d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                                                        </path>
                                                    </svg>
                                                    <h2 class="font-bold mb-2">FONO CAP</h2>
                                                    <p class="mb-6">227082262 – 227082275</p>
                                                </li>
                                                <li class="mb-8">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="envelope" class="w-6 mx-auto text-blue-600 mb-1"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="currentColor"
                                                            d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                                        </path>
                                                    </svg>
                                                    <h2 class="font-bold mb-2">CORREO</h2>
                                                    <p>cap@jenabien.cl</p>
                                                </li>

                                                <li>
                                                    <h2 class="font-bold mb-2">HORARIO DE ATENCIÓN</h2>
                                                    <p>Lunes a Jueves 08:30 – 17:30 hrs
                                                        Viernes 8:30 – 16:30 hrs</p>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!--Section: Design Block-->

                </div>

                <br>
                <br>
                <br>
                <!-- Container for demo purpose -->
            </div>
        </div>
    </div>
    {{-- footer --}}

    <footer class="relative py-10 flex  items-center bg-[#0369a1] overflow-hidden">
        <div class="grid grid-cols-8 relative flex-nowrap  container m-auto px-6 md:px-12">

            <div>
                <ul class="list-disc list-inside space-y-3 text-white">
                    <li><a href="#" class="hover:text-sky-400 transition">Inicio</a></li>
                    <li><a href="#" class="hover:text-sky-400 transition">Nosotros</a></li>
                    <li><a href="#" class="hover:text-sky-400 transition">Noticias</a></li>
                </ul>
            </div>

            <div>
                <ul role="list" class="space-y-3 text-white">
                    <li>
                        <a href="https://www.facebook.com/groups/Jenabien/" class="flex flex-wrap items-center space-x-3 hover:text-sky-400 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                            <span>Facebook</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/pdi_jenabien/" class="flex items-center space-x-3 hover:text-sky-400 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                            <span>Instagram</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="grid col-span-5 content-end justify-self-end">
                <span class=" text-gray-300">Copyright &copy; @php echo date('Y');@endphp - <a>Sistemas Web -
                        Jefatura
                        Nacional de Bienestar
                        y Calidad de Vida.</a></span>
            </div>
        </div>



    </footer>

    <!--

                Add to your stylesheet

            .bg-layers {
                -webkit-animation: filter-animation 4s infinite;
                animation: filter-animation 4s infinite;
            }

            .bg-scale {
                -webkit-animation: filter-animation 8s infinite;
                animation: filter-scale 8s infinite;
            }

            @-webkit-keyframes filter-animation {
                0% {
                -webkit-filter: hue-rotate(0deg);
                }
                50% {
                -webkit-filter: hue-rotate(45deg);
                }

                100% {
                -webkit-filter: hue-rotate(0deg);
                }
            }

            @keyframes filter-animation {
                0% {
                filter: hue-rotate(0deg);
                }
                50% {
                filter: hue-rotate(45deg);
                }
                100% {
                filter: hue-rotate(0deg);
                }
            }

            @keyframes filter-scale {
                0% {
                transform:scale(1);
                }
                50% {
                transform:scale(1.4);
                }
                100% {
                    transform:scale(.8);
                }
            }
            -->



</x-app-layout>
