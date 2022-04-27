<div x-data="datepicker" x-init="appInit()">
    <x-utils.container>
        <div class="bg-white rounded-md shadow-md p-10 ">
            <div class="title-wrapper flex  items-start">
                <x-icons.add class="w-10 h-10 text-accent-color mr-4" />
                <x-utils.subtitle class="mb-4 ">Agregar una ponencia/presentación</x-utils.subtitle>
            </div>

            <div class="formulario my-10">
                <x-utils.grid-container>
                    <!-- Nombre-->
                    <x-utils.text-input wire:model="nombre" type="text" label="Nombre de la presentación"
                        :required="true" placeholder="Nombre" class="mb-4 rounded-md col-span-12 xl:col-span-6" />
                    <!-- Duracion-->
                    <x-utils.text-input wire:model="duracion" type="number" label="Duración" :required="true"
                        placeholder="Tiempo, en minutos, que tomará la presentación"
                        class="mb-4 rounded-md col-span-12 xl:col-span-6" />

                    <!-- Descripcion -->

                    <div class="mt-4 col-span-12 xl:col-span-8">
                        <label for="descripcion" class="block font-medium leading-5 text-gray-800">
                            Descripción
                        </label>
                        <div class="mt-1">
                            <textarea id="descripcion" name="descripcion" rows="7" wire:model="descripcion"
                                class="shadow-sm bg-gray-200 focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full text-sm md:text-base border border-gray-300 rounded-md"
                                placeholder="De que trata el evento" required></textarea>
                        </div>
                        @error('descripcion')
                        <p class="col-span-12 block-inline mt-2 text-sm text-red-600" id="">{{$message}}</p>
                        @enderror
                    </div>

                    <!-- Fecha-->

                    <div class=" flex col-span-12 xl:col-span-6 items-center justify-center mt-4">
                        <div class="datepicker relative form-floating  w-full" data-mdb-toggle-button="false">
                            <input name="fecha" type="text" wire:model="fecha" x-ref="fecha"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Selecciona la fecha" data-mdb-toggle="datepicker" id="datepicker"
                                x-on:change="doChangeFecha()" autocomplete="off" required />
                            <label for="fecha" class="text-gray-700">Fecha del evento</label>
                        </div>
                    </div>
                    @error('fecha')
                    <p class="col-span-12 block-inline mt-2 text-sm text-red-600" id="">{{$message}}</p>
                    @enderror

                    <!-- Hora -->
                    <x-utils.text-input wire:model="hora" type="time" label="Hora" :required="true"
                        placeholder="Hora que dará inicio" class="mb-4 rounded-md col-span-12 xl:col-span-6" />

                    <!-- Evento -->
                    <div class="mb-4 col-span-12 xl:col-span-6">
                        <label for="menu" class="block text-sm font-medium leading-5 text-eat-olive-700">Agregar a un
                            evento</label>
                        <select wire:model="selectedEvento" class=" w-full rounded-md shadow-md form-input block text-eat-olive-900 font-montserrat placeholder-eat-olive-50
                        bg-eat-white-500 font-bold
                        border
                        border-transparent focus:outline-none focus:ring-2 focus:ring-eat-olive-600 focus:border-transparent sm:text-sm
                        sm:leading-5">
                            <option value="">== EVENTOS ==</option>
                            @foreach ($eventos as $key => $evento)
                            <option value="{{$evento->id}}">{{$evento->nombre}}</option>
                            @endforeach
                        </select>
                        @error('evento')
                        <p class="mt-2 text-sm text-red-600" id="">{{$message}}</p>
                        @enderror
                    </div>

                    <!-- Panelista -->
                    <div class="mb-4 col-span-12 xl:col-span-6">
                        <label for="menu" class="block text-sm font-medium leading-5 text-eat-olive-700">El
                            Panelista</label>
                        <select wire:model="selectedPresentador" class="
                        @error('presentador')
                            bg-gray-600
                            text-main-color
                        @else
                            bg-gray-300
                            text-gray-900
                        @enderror
                        
                        w-full rounded-md shadow-md form-input block  font-montserrat placeholder-gray-400
                         font-bold
                        border
                        border-transparent focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent sm:text-sm
                        sm:leading-5">
                            <option value="">== PANELISTA ==</option>
                            @foreach ($presentadores as $key => $presentador)
                            <option value="{{$presentador->id}}">{{$presentador->nombre}}</option>
                            @endforeach
                        </select>
                        @error('presentador')
                        <p class="mt-2 text-sm text-red-600" id="">{{$message}}</p>
                        @enderror
                    </div>

                    <x-utils.button-accent class="px-4 py-3 lg:col-span-3 lg:col-start-10" wire:click="save">Crear
                    </x-utils.button-accent>
                </x-utils.grid-container>
            </div>
        </div>
    </x-utils.container>
</div>

@push('modals')
<script src="pikaday.js"></script>
<script>
    Livewire.on('success', message => {
    StayOrLeave(message,'¿Deseas agregar otro?','/presentaciones');
  });

  Livewire.on('error', message => {
    thimsg = message;
    Toast.fire({
      icon: 'error',
      title: thimsg
    });
  });

    var picker = new Pikaday({ 
            field: document.getElementById('datepicker'),  
            format: 'D/M/YYYY',
            toString(date, format) {
                // you should do formatting based on the passed format,
                // but we will just return 'D/M/YYYY' for simplicity
                const day = date.getDate();
                const month = date.getMonth() + 1;
                const year = date.getFullYear();
                return `${day}/${month}/${year}`;
            },
            parse(dateString, format) {
                // dateString is the result of `toString` method
                const parts = dateString.split('/');
                const day = parseInt(parts[0], 10);
                const month = parseInt(parts[1], 10) - 1;
                const year = parseInt(parts[2], 10);
                return new Date(year, month, day);
            }
        });
        var picker = new Pikaday({ 
            field: document.getElementById('datepicker2'),
            format: 'D/M/YYYY',
            toString(date, format) {
                // you should do formatting based on the passed format,
                // but we will just return 'D/M/YYYY' for simplicity
                const day = date.getDate();
                const month = date.getMonth() + 1;
                const year = date.getFullYear();
                return `${day}/${month}/${year}`;
            },
            parse(dateString, format) {
                // dateString is the result of `toString` method
                const parts = dateString.split('/');
                const day = parseInt(parts[0], 10);
                const month = parseInt(parts[1], 10) - 1;
                const year = parseInt(parts[2], 10);
                return new Date(year, month, day);
            }
         });
</script>
@endpush