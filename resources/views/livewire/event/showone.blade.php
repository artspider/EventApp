<x-utils.container>
    <div class="bg-white rounded-md shadow-md p-10 ">
        <x-utils.subtitle>
            {{ $event->nombre }}
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
                    <x-utils.button wire:click="clear" color="sky"
                        class="h-10 md:ml-4 shadow-md w-full md:w-1/3 mb-6 md:mb-0 justify-center">Limpiar
                    </x-utils.button>
                </div>
            </div>

            @if ($alumnos && $alumnos->count())
            @php
            $headers = array("noControl","Nombre", "Carrera", "Semestre", "Recibo", "Verificado");
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
                            @if ($alumno->pivot->recibo)
                            <a href="{{asset('storage/' . $alumno->pivot->recibo) }}">
                                <svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14 12c0 1.103-.897 2-2 2s-2-.897-2-2 .897-2 2-2 2 .897 2 2zm10-.449s-4.252 7.449-11.985 7.449c-7.18 0-12.015-7.449-12.015-7.449s4.446-6.551 12.015-6.551c7.694 0 11.985 6.551 11.985 6.551zm-8 .449c0-2.208-1.791-4-4-4-2.208 0-4 1.792-4 4 0 2.209 1.792 4 4 4 2.209 0 4-1.791 4-4z" />
                                </svg>

                            </a>
                            @else


                            No


                            @endif

                        </td>
                        <td class=" w-full lg:w-auto p-3 text-gray-800 border border-b lg:table-cell relative lg:static
                                h-24 flex items-center justify-center md:h-auto">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Verificado</span>
                            <p class="text-sm font-montserrat text-center">{{$alumno->pivot->verificado}}</p>
                        </td>


                    </tr>

                    @endforeach
                </tbody>
            </table>
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6 col-span-12">
                {{ $alumnos->links() }}
            </div>
            @else
            <div class="grid-center col-span-12">
                <x-icons.not-found />
                <x-utils.text class="text-center mb-6">¡Al parecer no hay alumnos registrados! Puedes agregar haciendo
                    clic
                    en el
                    botón AGREGAR que esta abajo
                </x-utils.text>
            </div>
            <hr class=" border-gray-300 mb-6 ">
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
@push('modals')


<script>
    function fireUpload(){
        alert('upload');
    };
</script>
<script>
    (function() {
    var uploadDialog = document.getElementById('uploadDialog');
    })();
</script>



@endpush