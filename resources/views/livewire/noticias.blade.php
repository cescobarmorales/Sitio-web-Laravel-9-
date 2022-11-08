<x-app-layout>
    <div class="py-16 bg-white">
        <div class="container m-auto px-6  md:px-12 xl:px-6 bg-white">
            <section class="container  bg-white ">
                <h1 class="text-2xl text-gray-900 font-bold md:text-4xl mb-20">| Noticias </h1>

                <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 ">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                        {{-- <img class="h-56 lg:h-60 w-full object-cover"
                            src="https://images.unsplash.com/photo-1523289217630-0dd16184af8e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8d29tZW4lMjBlbXBvd2VybWVudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                            alt="" /> --}}
                        <div class="p-3">
                            <span class="text-sm text-primary">Junio 24, 2022</span>
                            <br>
                            <br>
                            <a href="{{ route('noticiaslivewire.noticia1') }}" class="font-semibold text-xl leading-6 text-gray-900 my-2 uppercase underline">
                                tarzán circo extraordinario
                            </a>

                            <p class="paragraph-normal text-gray-600  mt-2 ">
                                El extraordinario circo de Tarzán y Jane ...
                            </p>
                            <a class="mt-3 block" href="{{ route('noticiaslivewire.noticia1') }}">Leer más >></a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                        {{-- <img class="h-56 lg:h-60 w-full object-cover"
                            src="https://images.unsplash.com/photo-1607748862156-7c548e7e98f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                            alt="" /> --}}
                        <div class="p-3">
                            <span class="text-sm text-primary">Junio 24, 2022</span>
                            <br>
                            <br>
                            <a href="{{ route('noticiaslivewire.noticia2') }}" class="font-semibold text-xl leading-6 text-gray-900 my-2 uppercase underline">
                                movistar
                            </a>
                            <p class="paragraph-normal text-gray-600 text-justify mt-2">
                                PLANES MÓVIL-FIJO PASOS A SEGUIR Ingresar a:
                                https://ww2.movistar.cl/ofertas/convenios-corporativos/ Ingresar con correo electrónico:
                                nombre.apellido@jenabien.cl Revisar los planes en las pestañas de Planes Móviles y
                                Planes
                                Hogar ...
                            </p>
                            <a href="{{ route('noticiaslivewire.noticia2') }}" class="mt-3 block" >Leer más >></a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                        {{-- <img class="h-56 lg:h-60 w-full object-cover"
                            src="https://images.unsplash.com/photo-1637419450536-378d5457abb8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                            alt="" /> --}}
                        <div class="p-3">
                            <span class="text-sm text-primary">Junio 24, 2022</span>
                            <br>
                            <br>
                            <a href="{{ route('noticiaslivewire.noticia3') }}" class="font-semibold text-xl leading-6 text-gray-900 my-2 uppercase underline">
                                día del niño
                            </a>
                            <p class="paragraph-normal text-gray-600 mt-2">

                            </p>
                            <a href="{{ route('noticiaslivewire.noticia3') }}" class="mt-3 block" >Leer más >></a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                        {{-- <img class="h-56 lg:h-60 w-full object-cover"
                            src="https://images.unsplash.com/photo-1621352404112-58e2468993a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                            alt="" /> --}}
                        <div class="p-3">
                            <span class="text-sm text-primary">Junio 20, 2022</span>
                            <br>
                            <br>
                            <a href="{{ route('noticiaslivewire.noticia4') }}" class="font-semibold text-xl leading-6 text-gray-900 my-2 uppercase underline">
                                celebración día del padre
                            </a>
                            <p class="paragraph-normal text-gray-600 mt-2">
                                Celebración día del Padre en Nuestro Club Social PDI...
                            </p>
                            <a href="{{ route('noticiaslivewire.noticia4') }}" class="mt-3 block" >Leer más >></a>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                        {{-- <img class="h-56 lg:h-60 w-full object-cover"
                            src="https://images.unsplash.com/photo-1607868894064-2b6e7ed1b324?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                            alt="" /> --}}
                        <div class="p-3">
                            <span class="text-sm text-primary">Junio 17, 2022</span>
                            <br>
                            <br>
                            <a href="{{ route('noticiaslivewire.noticia5') }}" class="font-semibold text-xl leading-6 text-gray-900 my-2 uppercase underline">
                                día del padre
                            </a>
                            <p class="paragraph-normal text-gray-600 mt-2">
                                Celebración dia del Padre ...
                            </p>
                            <a href="{{ route('noticiaslivewire.noticia5') }}" class="mt-3 block" >Leer más >></a>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                        {{-- <img class="h-56 lg:h-60 w-full object-cover"
                            src="https://images.unsplash.com/photo-1633329712176-4751f52ccc1b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzV8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                            alt="" /> --}}
                        <div class="p-3">
                            <span class="text-sm text-primary">Junio 14, 2022</span>
                            <br>
                            <br>
                            <a href="{{ route('noticiaslivewire.noticia6') }}" class="font-semibold text-xl leading-6 text-gray-900 my-2 uppercase underline">
                                celebración de pentecostés
                            </a>
                            <p class="paragraph-normal text-gray-600 text-justify mt-2">
                                Eucaristía en unidades de nuestra PDI. El pasado jueves 9 de junio, nuestro sacerdote
                                Jesús
                                Bonachia, junto al Área social de la Jenabien, visitaron la Brigada Antinarcóticos
                                Metropolitana, donde se celebró una Eucaristía para todo su personal. También se bendijo
                                las
                                diferentes instalaciones de la Briant Metro...
                            </p>
                            <a href="{{ route('noticiaslivewire.noticia6') }}" class="mt-3 block" >Leer más >></a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                        {{-- <img class="h-56 lg:h-60 w-full object-cover"
                            src="https://images.unsplash.com/photo-1607868894064-2b6e7ed1b324?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                            alt="" /> --}}
                        <div class="p-3">
                            <span class="text-sm text-primary">Junio 7, 2022</span>
                            <br>
                            <br>
                            <a href="{{ route('noticiaslivewire.noticia7') }}" class="font-semibold text-xl leading-6 text-gray-900 my-2 uppercase underline">
                                green park
                            </a>
                            <p class="paragraph-normal text-gray-600 mt-2">
                            </p>
                            <a href="{{ route('noticiaslivewire.noticia7') }}" class="mt-3 block">Leer más >></a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                        {{-- <img class="h-56 lg:h-60 w-full object-cover"
                            src="https://images.unsplash.com/photo-1607868894064-2b6e7ed1b324?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                            alt="" /> --}}
                        <div class="p-3">
                            <span class="text-sm text-primary">Junio 7, 2022</span>
                            <br>
                            <br>
                            <a href="{{ route('noticiaslivewire.noticia8') }}" class="font-semibold text-xl leading-6 text-gray-900 my-2 uppercase underline">
                                MODALIDAD DE RESERVAS VACACIONES DE INVIERNO 2022
                            </a>
                            <p class="paragraph-normal text-gray-600 text-justify mt-2">
                                El Nuevo Plan de reservas para Vacaciones
                                de Invierno permitirá que el doble de familias puedan acceder a nuestras cabañas y a su
                                vez,
                                evitará que el Gasto sea mayor. Las opciones son:- 4 días y 3 noches, ingresa el lunes y
                                sale el Jueves.- 3 días y 2 ...
                            </p>
                            <a href="{{ route('noticiaslivewire.noticia8') }}" class="mt-3 block" >Leer más >></a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                        {{-- <img class="h-56 lg:h-60 w-full object-cover"
                            src="https://images.unsplash.com/photo-1607868894064-2b6e7ed1b324?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fHdvbWVuJTIwZW1wb3dlcm1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                            alt="" /> --}}
                        <div class="p-3">
                            <span class="text-sm text-primary">Junio 6, 2022</span>
                            <br>
                            <br>
                            <a href="{{ route('noticiaslivewire.noticia9') }}" class="font-semibold text-xl leading-6 text-gray-900 my-2 uppercase underline">
                                inaguración casino asepol
                            </a>
                            <p class="paragraph-normal text-gray-600 text-justify mt-2">
                                NUEVO CASINO Y WORK CAFE ASEPOL El Nuevo CASINO y WORK CAFÉ ASEPOL, proporciona un
                                servicio
                                de alimentación de primer nivel a todos los alumnos de la Academia Superior, Curso de
                                Alto
                                Mando, de perfeccionamiento y especialidades. Este gran logro es consecuencia de la
                                constante preocupación de nuestro Alto Mando y especialmente de Nuestro Director ...
                            </p>
                            <a href="{{ route('noticiaslivewire.noticia9') }}" class="mt-3 block">Leer más >></a>
                        </div>
                    </div>

                </div>

            </section>


            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
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
                        <a href="https://www.instagram.com/pdi_jenabien/"  class="flex items-center space-x-3 hover:text-sky-400 transition">
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
                <span class=" text-gray-300">Copyright &copy; @php echo date('Y');@endphp - <a>Sistemas Web - Jefatura
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
    </div>

</x-app-layout>
