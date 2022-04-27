<x-utils.container>
    <div class="bg-white rounded-md shadow-md p-10 ">
        <div class="tile-wrapper flex items-start">
            <x-icons.add class="w-10 text-accent-color mr-4" />
            <x-utils.subtitle class="mb-4">Agregar Contacto</x-utils.subtitle>
        </div>

        <div class="formulario my-10">
            <x-utils.grid-container>
                <!-- Nombre-->
                <x-utils.text-input wire:model="nombre" type="text" label="Nombre del contacto" :required="true"
                    placeholder="Nombre" class="mb-4 rounded-md xl:col-span-6" />
                <!-- Universidad-->
                <x-utils.text-input wire:model="universidad" type="text" label="Universidad" :required="true"
                    placeholder="Universidad" class="mb-4 rounded-md xl:col-span-6" />
                <x-utils.text-input wire:model="carrera" type="text" label="Carrera" :required="true"
                    placeholder="carrera" class="mb-4 rounded-md xl:col-span-6" />
                <x-utils.text-input wire:model="trabajo_actual" type="text" label="Trabajo Actual" :required="true"
                    placeholder="Trabajo Actual" class="mb-4 rounded-md xl:col-span-6" />
                <x-utils.text-input wire:model="especialidad" type="text" label="Especialidad" :required="true"
                    placeholder="Especialidad" class="mb-4 rounded-md xl:col-span-6" />
                <x-utils.text-input wire:model="web" type="text" label="Sitio Web (Portafolio)" :required="true"
                    placeholder="Sitio Web" class="mb-4 rounded-md xl:col-span-6" />
                <x-utils.text-input wire:model="temas" type="text" label="Temas (separadas por coma)" :required="true"
                    placeholder="Temas" class="mb-4 rounded-md xl:col-span-6" />
                <x-utils.text-input wire:model="telefono" type="text" label="Telefono" :required="true"
                    placeholder="Telefono" class="mb-4 rounded-md xl:col-span-6" />
                <x-utils.text-input wire:model="email" type="text" label="E-Mail" :required="true" placeholder="E-Mail"
                    class="mb-4 rounded-md xl:col-span-6" />
                <x-utils.text-input wire:model="twitter" type="text" label="Twitter" :required="true"
                    placeholder="@cuenta" class="mb-4 rounded-md xl:col-span-6" />
                <x-utils.text-input wire:model="facebook" type="text" label="Facebook" :required="true"
                    placeholder="Cuenta" class="mb-4 rounded-md xl:col-span-6" />
                <x-utils.text-input wire:model="linkedin" type="text" label="LinkedIn" :required="true"
                    placeholder="@cuenta" class="mb-4 rounded-md xl:col-span-6" />
                <x-utils.button-accent class="px-4 py-3 lg:col-span-3 lg:col-start-10" wire:click="save">Crear
                </x-utils.button-accent>
            </x-utils.grid-container>

        </div>

    </div>
</x-utils.container>
@push('modals')
<script>
    Livewire.on('success', message => {
    StayOrLeave(message,'¿Deseas agregar otro?','/panelistas/show');
  });

  Livewire.on('error', message => {
    thimsg = message;
    Toast.fire({
      icon: 'error',
      title: thimsg
    });
  })

</script>
@endpush