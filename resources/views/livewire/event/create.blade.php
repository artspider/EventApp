<main x-data="datepicker" x-init="appInit()" x-cloak>
    <div class="container flex flex-col items-center xl:mx-auto">
        <div class="eventform w-11/12 md:w-4/5 lg:w-3/5 bg-white rounded-md shadow-xl px-6 py-4 mt-8 mb-8">
            <div class="w-16 relative mx-auto">
                <svg class="fill-current text-orange-600 w-16 rounded-full absolute -top-10"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M16.13 22h-16.13v-22h24v20.937l-2-2.002v-12.935h-20v14h12.128l2.002 2zm6.487.382l-1.625 1.618-12.162-12.121 1.65-1.649 12.137 12.152zm-10.074-9.266l-2.062-2.062-.824.824 2.061 2.062.825-.824zm1.685-4.085c.22.719.782 1.281 1.501 1.501-.719.219-1.281.782-1.501 1.501-.219-.719-.782-1.282-1.501-1.501.718-.22 1.282-.782 1.501-1.501zm-2.629 7.548c-.954.291-1.7 1.037-1.991 1.99-.291-.953-1.037-1.699-1.99-1.99.953-.291 1.699-1.037 1.99-1.99.29.953 1.037 1.699 1.991 1.99zm4.641-4.898c.157.509.555.906 1.062 1.062-.508.155-.906.552-1.062 1.062-.154-.509-.552-.906-1.06-1.062.508-.156.906-.554 1.06-1.062zm3.12-1.134c-.62.19-1.107.676-1.297 1.298-.19-.622-.676-1.108-1.298-1.298.621-.189 1.107-.676 1.297-1.297.191.621.678 1.108 1.298 1.297z" />
                </svg>
            </div>

            <form x-on:submit="event.preventDefault();" id="createEventForm" class="my-10" autocomplete="on">
                <!-- Leyenda Inicial -->
                <div class="leyenda mb-6">
                    <h3 class="text-xl text-accent-color font-semibold mb-1">
                        Creador de Eventos
                    </h3>
                    <p class="">Ingresa los datos para el nuevo evento</p>
                </div>

                <!-- Titulo-->
                <x-utils.text-input wire:model="nombre" type="text" label="Titulo del evento" :required="true"
                    placeholder="Título" class="mb-4 rounded-md" />

                <!-- Descripcion -->
                <div class="mt-4">
                    <label for="descripcion" class="block font-medium leading-5 text-gray-800">
                        Descripción
                    </label>
                    <div class="mt-1">
                        <textarea id="descripcion" name="descripcion" rows="7" wire:model="descripcion"
                            class="shadow-sm bg-gray-200 focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full text-sm md:text-base border border-gray-300 rounded-md"
                            placeholder="De que trata el evento" required></textarea>
                    </div>
                    <p class="mt-2 text-gray-500">
                        Breve descripción del evento y los objetivos del mismo.
                    </p>
                </div>

                <div class="xl:flex justify-between">
                    <!-- Número de presentaciones en el evento -->
                    <div class="grid grid-cols-6 gap-6 mt-4 xl:w-1/2 xl:mr-2">
                        <div class="col-span-6">
                            <label for="presentaciones" class="block font-medium text-gray-800">Número de
                                presentaciones</label>
                            <select id="presentaciones" name="presentaciones" wire:model="presentaciones" required
                                class="mt-1 block w-full py-2 px-3 bg-gray-200 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-sm md:text-base">
                                <option selected>Total de Presentaciones</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>

                    <!-- Mínimo de presentaciones para ganarse la constancia -->
                    <div class="grid grid-cols-6 gap-6 mt-4 xl:w-1/2">
                        <div class="col-span-6">
                            <label for="min_certificar" class="block font-medium text-gray-800">Mínimo de
                                presentaciones
                                para constancia</label>
                            <select id="min_certificar" name="min_certificar" wire:model="min_certificar" required
                                class="mt-1 block w-full py-2 px-3 bg-gray-200 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 text-sm md:text-base">
                                <option selected>Mínimo Presentaciones</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Costo del boleto para el evento -->
                <div class="grid grid-cols-12 mt-4">
                    <div class="col-span-12 xl:col-span-6 relative">
                        <label for="precio" class="block font-medium text-gray-700">Costo del boleto</label>
                        <input type="number" name="precio" id="precio" wire:model="precio"
                            class="mt-1 pl-5 bg-gray-200 focus:ring-accent-color focus:border-accent-color block w-full shadow-sm text-sm md:text-base border-gray-300 rounded-md"
                            required />
                        <p class="absolute top-9 left-2">$</p>
                        <p class="absolute top-9 right-16">MXN</p>
                    </div>
                </div>

                <div class="w-full xl:flex justify-between">
                    <!-- Fecha de Inicio-->
                    <div class="flex w-full xl:w-1/2 xl:mr-2 items-center justify-start mt-4">
                        <div class="datepicker relative form-floating mb-3 w-full" data-mdb-toggle-button="false">
                            <input name="fecha_inicio" type="text" wire:model="fecha_inicio" x-ref="fecha_inicio"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Selecciona la fecha de inicio" data-mdb-toggle="datepicker" id="datepicker"
                                x-on:change="doChangeInicio()" autocomplete="off" required />
                            <label for="fecha_inicio" class="text-gray-700">Fecha de inicio</label>
                        </div>
                    </div>

                    <!-- Fecha de Cierre -->
                    <div class="flex w-full xl:w-1/2 items-center justify-start mt-4">
                        <div class="datepicker relative form-floating mb-3 w-full" data-mdb-toggle-button="false">
                            <input name="fecha_cierre" type="text" wire:model="fecha_cierre" x-ref="fecha_cierre"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Selecciona la fecha de inicio" data-mdb-toggle="datepicker"
                                id="datepicker2" x-on:change="doChangeCierre()" autocomplete="off" required />
                            <label for="fecha_cierre" class="text-gray-700">Fecha de cierre</label>
                        </div>
                    </div>
                </div>



                <!-- Botonera -->
                <div class="grid grid-cols-12 gap-2 xl:gap-4 mt-4">
                    <!-- Boton Submit -->
                    <div class="col-span-4">
                        <button type="submit" wire:click="crear"
                            class="inline-block w-full h-12 px-6 py-2.5 bg-blue-600 text-white font-medium text-sm lg:text-base leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Crear Evento
                        </button>
                    </div>

                    <!-- Boton cancelar -->
                    <div class="col-span-4">
                        <button type="button"
                            class="inline-block w-full h-12 px-6 py-2.5 bg-red-600 text-white font-medium text-sm lg:text-base leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                            onclick="history.back()">
                            Cancelar
                        </button>
                    </div>

                    <!-- Boton reset -->
                    <div class="col-span-4">
                        <button type="reset"
                            class="inline-block w-full h-12 px-6 py-2.5 bg-green-600 text-white font-medium text-sm lg:text-base leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

@push('modals')
<script src="pikaday.js"></script>
<script>
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