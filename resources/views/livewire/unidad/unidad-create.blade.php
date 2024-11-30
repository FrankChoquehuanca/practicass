<div>
    <x-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Registra una Nueva Unidad</h3>
      </x-slot>
      <x-slot name="content">
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Nombre de la Unidad" class="font-bold"/>
              <x-input wire:model="form.nombre" type="text" class="w-full"/>
              <x-input-error for="form.nombre"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
                <x-label value="Descripción de la Unidad" class="font-bold"/>
                <x-textarea wire:model="form.descripcion" type="text" class="w-full"/>
                <x-input-error for="form.descripcion"/>
            </div>
        </div>
      </x-slot>
      <x-slot name="footer">
        <x-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-secondary-button>
        <x-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:opacity-25">
          Registrar
        </x-button>
        <!-- <span wire:loading wire:target="store">Cargando...</span> -->
      </x-slot>

    </x-dialog-modal>
</div>
