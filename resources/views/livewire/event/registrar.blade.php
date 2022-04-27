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
            <x-utils.text class="col-span-12">Alumnos</x-utils.text>
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
            $headers = array("noControl","Nombre", "Carrera", "Semestre","Acciones");
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
                                    <div class="">{{$alumno->nombre}} {{$alumno->paterno}} {{$alumno->materno}}
                                    </div>
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
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Acciones</span>
                            <div class="flex justify-center">
                                <a wire:click="selectAlumno({{ $alumno }})" id="editPanelista"
                                    data-title='Edita los datos del registro' data-placement="left"
                                    class="cursor-pointer tooltip_prduct mr-3 text-eat-green-400 hover:text-eat-green-600 underline">
                                    <x-icons.finger class="w-6 h-6" />
                                </a>

                            </div>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6 col-span-12">
                {{ $alumnos->links() }}
            </div>
            @else
            <x-icons.not-found />
            <x-utils.text class="text-center mb-6">¡Al parecer no hay alumnos registrados! Puedes agregar haciendo clic
                en el
                botón AGREGAR que esta abajo
            </x-utils.text>
            <hr class=" border-gray-300 mb-6 ">
            @endif

            <div class="wrapper-datos col-span-8">
                <div class="nombre flex">
                    <x-utils.text class="mr-2">Alumno seleccionado: </x-utils.text>
                    <x-utils.text class="text-sm">{{$alumno_seleccionado}}</x-utils.text>
                </div>
                <div class="control flex">
                    <x-utils.text class="mr-2">Número de Control: </x-utils.text>
                    <x-utils.text class="text-sm">{{$control_seleccionado}}</x-utils.text>
                </div>
            </div>


            @isset($control_seleccionado)
            <!-- Subir archivo -->
            <div class="recibo relative group col-span-4 h-16 flex justify-center items-center ">
                <div
                    class="absolute inset-0 w-full h-full rounded-xl  bg-sky-600 bg-opacity-80 shadow-2xl backdrop-blur-xl group-hover:bg-opacity-70 group-hover:scale-110 transition duration-300">
                </div>
                <input accept=".jpg, .jpeg .png, .svg, .webp"
                    class="relative z-10 opacity-0 h-full w-full cursor-pointer" type="file" name="recibo" id="recibo"
                    wire:model="recibo" x-ref="file"
                    x-on:change="window.livewire.emit('upload', {{$alumno}}, $refs.file.files[0]);">
                <div
                    class="text-main-color absolute top-0 right-0 bottom-0 left-0 w-full h-full m-auo flex items-center justify-center">
                    <x-icons.upload class=" w-8 h-8 p-1" />
                    <p class="ml-2">Subir recibo</p>
                </div>
            </div>

            <div class="col-span-4 col-start-9 text-center text-red-500 text-lg font-semibold font-poppins" wire:loading
                wire:target="recibo">
                Subiendo imagen...
            </div>

            @if ($recibo)
            <div class="col-span-10 col-start-2">
                <img src="{{ $recibo->temporaryUrl() }}">
            </div>

            <div class=col-span-7>
                <div class="flex mt-6">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox" wire:model="verificado">
                        <span class="ml-2 text-base text-accent-color font-semibold font-poppins">El recibo se ha <span
                                class="underline">Verificado</span></span>
                    </label>
                </div>
            </div>
            @endif

            @endisset



            <div class="flex justify-end mt-4 col-span-12">

                @if ($control_seleccionado)

                <button class=" py-3 px-4 w-32 border border-transparent rounded-md font-semibold
                                bg-sky-500 text-sm text-main-color uppercase tracking-wider
                                hover:bg-sky-400 active:bg-sky-700 focus:outline-none focus:border-sky-700
                                focus:ring ring-sky-300 disabled:opacity-25 transition ease-in-out duration-150"
                    wire:click="registrar">
                    Registrar
                </button>


                @else
                <x-utils.button is_disabled="true" class=" py-3 px-4 w-32" id="createProduct">
                    <a href="{{route('evento-registrar',$event->id)}}">
                        Registrar
                    </a>
                </x-utils.button>
                @endif
            </div>




        </x-utils.grid-container>
    </div>

</x-utils.container>

@push('modals')


<script>
    tippy(
		'.tooltip_usr', {
    content:(reference)=>reference.getAttribute('data-title'),
    onMount(instance) {
        instance.popperInstance.setOptions({
        placement :instance.reference.getAttribute('data-placement')
        });
    },
		theme: 'tomato',	
},
);
</script>

<script>
    Livewire.on('success', message => {
  thimsg = message;
			Toast.fire({
					icon: 'success',
					title: thimsg
			}); 
});
</script>

@endpush