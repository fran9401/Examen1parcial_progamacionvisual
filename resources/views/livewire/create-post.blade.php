<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Crear Nuevo Post
    </x-jet-danger-button>


    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Crear Nuevo Post
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">¡Cargando Imagen!</strong>
                <span class="block sm:inline">Espere un momento.</span>
                
              </div>

            @if ($image)

            <img class="mb-4" src="{{$image->temporaryUrl()}}">
                
            @else
                
            @endif

            <div class="mb-4">
              <x-jet-label value="Titulo del Post"/>
              <x-jet-input type="text" class="w-full" wire:model="title"/>
             
              <x-jet-input-error for="title"/>

            </div>

            <div class="mb-4">
                <x-jet-label value="Contenido del Post"/>
                
                <textarea wire:model.defer='content' class="form-control w-full" rows="6"></textarea>
              
                <x-jet-input-error for="content"/>
            
              </div>

              <div>
                  <input type="file" wire:model="image" id ="{{$identificador}}">
                  <x-jet-input-error for="image"/>
              </div>

             
        </x-slot>


        <x-slot name="footer">

            <x-jet-secondary-button  wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.remove wire:target="save">
                Crear Post
            </x-jet-danger-button>

            <span wire:loading wire:target="save">Cargando...</span> 

        </x-slot>

    </x-jet-dialog-modal>

</div>
