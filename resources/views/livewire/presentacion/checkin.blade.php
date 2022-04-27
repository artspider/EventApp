<x-utils.container>
    <div class="bg-white rounded-md shadow-md p-10 ">
        <x-utils.subtitle>
            {{ $presentacion->nombre }}
        </x-utils.subtitle>
        <div class="fecha-wrapper flex items-center my-4 col-span-8">
            <div class="fecha w-9 h-9 bg-accent-color rounded-md flex items-center justify-center">
                <x-icons.fecha class="w-6 text-main-color" />
            </div>
            <p class="date font-poppins font-semibold ml-2">28 ABR 2022</p>
        </div>
        <hr class=" border-gray-300 mb-6 ">
        <x-utils.grid-container>
            <x-utils.text class="col-span-12">Alumnos Registrados/Preregistrados</x-utils.text>
            <div class="md:flex  col-span-12">
                <div class="w-full md:w-1/3 relative ">
                    <x-utils.text-input wire:model="search" type="text" label="" :required="true"
                        placeholder="Buscar item" class="mb-4 rounded-md" />
                    <div class="absolute top-0 right-12 cursor-pointer">
                        <x-icons.search class=" " />
                    </div>
                </div>
                <div class="w-full md:w-1/3 ">
                    <x-utils.button color="sky" wire:click="clear"
                        class=" h-10 md:ml-4 shadow-md w-full md:w-1/3 mb-6 md:mb-0 justify-center">Limpiar
                    </x-utils.button>
                </div>
            </div>

            @if ($alumnos && $alumnos->count())
            @php
            $headers = array("noControl","Nombre", "Carrera", "Semestre", "Check-In");
            @endphp
            <table class="border-collapse w-full col-span-12">
                <thead>
                    <tr>
                        @foreach ($headers as $key => $header)
                        <th
                            class="p-3 text-xs font-light font-montserrat  uppercase bg-eat-olive-500 text-eat-white-500 border border-eat-white-200 hidden lg:table-cell">
                            {{$header}}
                        </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $key => $alumno)



                    <tr wire:key="{{ $loop->index }}"
                        class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b lg:table-cell relative lg:static h-24 flex items-center justify-center md:h-auto">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">NoControl</span>
                            <p class="text-sm font-montserrat text-center">{{$alumno->numcontrol}}</p>
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b lg:table-cell relative lg:static h-24 flex items-center justify-center md:h-auto">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-montserrat uppercase">
                                Nombre
                            </span>

                            <div class="flex items-center justify-center md:justify-start">

                                <div class="ml-4 text-sm font-montserrat">
                                    <div class="">{{$alumno->nombre}} {{$alumno->paterno}} {{$alumno->materno}}</div>
                                </div>
                            </div>
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b lg:table-cell relative lg:static h-24 flex items-center justify-center md:h-auto">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Carrera</span>
                            <p class="text-sm font-montserrat text-center">{{$alumno->carrera}}</p>
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b lg:table-cell relative lg:static h-24 flex items-center justify-center md:h-auto">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Semestre</span>
                            <p class="text-sm font-montserrat text-center">{{$alumno->semestre}}</p>
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b lg:table-cell relative lg:static h-24 flex items-center justify-center md:h-auto">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Recibo</span>

                            @if ($length =$alumno->presentations->find($presentacion->id))
                            @if ($length->pivot->checkin)
                            <svg class="fill-current w-8 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M0 0v24h24v-24h-24zm11 17l-5-5.299 1.399-1.43 3.574 3.736 6.572-7.007 1.455 1.403-8 8.597z" />
                            </svg>


                            @endif
                            @else

                            <button type="submit" class="py-2 px-4 bg-green-" wire:click="checkin({{$alumno->id}})">
                                <svg class="fill-current w-8 text-sky-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" xmlns:serif="http://www.serif.com/" fill-rule="evenodd"
                                    clip-rule="evenodd">
                                    <path serif:id="shape 2" d="M24 24h-24v-24h24v24zm-22-22v20h20v-20h-20z" />
                                </svg>
                            </button>
                            @endif

                        </td>



                    </tr>

                    @endforeach
                </tbody>
            </table>
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6 col-span-12">
                {{ $alumnos->links() }}
            </div>
            @else
            <div class="col-span-12 mx-auto">
                <svg class="fill-current w-32 h-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm9 12c0 1.94-.624 3.735-1.672 5.207l-12.535-12.535c1.472-1.048 3.267-1.672 5.207-1.672 4.962 0 9 4.038 9 9zm-18 0c0-1.94.624-3.735 1.672-5.207l12.534 12.534c-1.471 1.049-3.266 1.673-5.206 1.673-4.962 0-9-4.038-9-9z" />
                </svg>
            </div>
            <x-utils.text class=" col-span-12 text-center mb-6">¡Al parecer no hay alumnos registrados! Puedes agregar
                haciendo clic
                en el
                botón AGREGAR que esta abajo
            </x-utils.text>
            <hr class="col-span-12 border-gray-300 mb-6 ">
            @endif

            <div class="flex justify-end mt-4 col-span-12">
                <x-utils.button class=" py-3 px-4 w-32" color="sky" id="createProduct">
                    <a href="{{route('evento-registrar',$event->id)}}"">
                    Registrar
                </a>
                </x-utils.button>

            </div>
        </x-utils.grid-container>
    </div>

    

</x-utils.container>