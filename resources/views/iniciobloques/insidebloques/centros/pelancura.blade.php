<x-app-layout>
    <div class="py-16 bg-white">
        <div class="container m-auto  text-gray-600 bg-white ">
            <h1 class="text-2xl text-gray-900 text-center font-bold md:text-4xl mb-10">C.R. PELANCURA</h1>

            <div class="md:7/12 text-justify  leading-loose mb-20 ">


                <div class="flex items-center justify-center ">
                    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
                    <div class=" relative flex items-center justify-center">
                        <button aria-label="slide backward"
                            class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                            id="prev">
                            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="  overflow-x-hidden overflow-y-hidden">
                            <div id="slider"
                                class=" flex  items-center justify-start transition ease-out duration-900">

                                {{-- 1 --}}
                                <div class="flex flex-shrink-0 relative  ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura.jpeg" class=" h-96 m-2 " />
                                </div>

                                {{-- 2 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura1.jpeg" class="h-96 m-2" />
                                </div>

                                {{-- 3 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura2.jpeg" class="h-96 m-2" />
                                </div>

                                {{-- 4 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura3.jpeg" class="h-96 m-2" />
                                </div>

                                {{-- 5 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura4.jpeg" class="h-96 m-2" />
                                </div>

                                {{-- 6 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura5.jpg" class="h-96 m-2" />
                                </div>

                                {{-- 7 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura6.jpg" class="h-96 m-2" />
                                </div>

                                {{-- 8 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura7.jpg" class="h-96 m-2" />
                                </div>

                                {{-- 9 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura8.jpg" class="h-96 m-2" />
                                </div>

                                {{-- 10 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura9.jpg" class="h-96 m-2" />
                                </div>

                                {{-- 11 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura10.jpg" class="h-96 m-2" />
                                </div>

                                {{--12 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura11.jpg" class="h-96 m-2" />
                                </div>

                                {{--13 --}}
                                <div class="flex flex-shrink-0 relative ">
                                    <img src="/img/centros/zcentro/pelancura/pelancura12.jpg" class="h-96 m-2" />
                                </div>

                            </div>
                        </div>
                        <button aria-label="slide forward"
                            class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                            id="next">
                            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
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

            </div>

            <div class=" container border-b border-gray-900 mb-10 mt-10"></div>
            <div class="grid grid-cols-2 col-span-2   gap-1  ">
                <h1 class="text-2xl text-gray-900 font-bold md:text-4xl mb-10">Detalle</h1>
            </div>
            <div class="flex flex-col grid grid-cols-4 mb-10 gap-20">

                <div class="  text-justify  ">
                    <!-- City Name -->
                    <p class="text-xl text-center text-[#374151] pt-5 p-auto mb-9">Atractivos Turísticos</p>
                    <p class="mt-6 text-gray-600 mb-10" width="1200">En una superficie de doce mil cuatrocientos
                        metros cuadrados, donde emergen magníficos jardines y una espléndida vista, nace Pelancura, data
                        del año 1957, en donde sus primeros colonos visitaban este centro vacacional en carpas,
                        construyendo con sus propias manos la primera piscina, que se encontraba en su acantilado,
                        nutriéndose de agua de mar. </p>
                    <p class="mt-6 text-gray-600 mb-10" width="1200">
                        Áreas comunes:
                        • Gran comedor , ofreciendo una amplia variedad de productos del mar.
                        • Auditórium para cien personas, en donde se pueden realizar, charlas, conferencias, reuniones
                        empresariales etcétera.
                        • Zona de picnic para doscientas personas, para paseos y reuniones sociales informales.
                        • Snack bar, con una amplia variedad de tragos nacionales e internacionales.
                        • Piscina para cien personas, con baños y duchas
                        • Cancha de tenis.
                        • Multicancha.
                    </p>
                </div>



                <div class="  text-justify  ">
                    <!-- City Name -->
                    <p class="text-xl text-center text-[#374151] pt-5 p-auto mb-9">Contacto</p>
                    <p class="mt-6 text-gray-600 mb-10" width="1200">
                    <p> + 56 942099366</p>
                    <p>centrov.pelancura@gmail.com</p>
                    
                    <p>
                        Dirección: Antonio Núñez Fonseca N°2510 – San Antonio</p>
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
                            <a href="#"
                                class="flex flex-wrap items-center space-x-3 hover:text-sky-400 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                                <span>Facebook</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="flex items-center space-x-3 hover:text-sky-400 transition">
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
