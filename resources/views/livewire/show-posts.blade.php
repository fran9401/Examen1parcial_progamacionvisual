<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
       
            <div class="px-6 py-4 flex items-center">
                
                {{-- <input type="text" wire:model="search">--}}
                <x-jet-input class="flex-1 mr-4" placeholder="Buscar" type="text" wire:model="search"/>

                @livewire('create-post')
        </div>
          
        @if ($posts->count())
             
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="w-24 cursor-pointer px-6 py-3 text-left text-xs"
                        wire:click="order('id')">
                            ID

                             {{--Sort--}}
                           @if ($sort == 'id')

                           @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>  
                           @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i> 
                           @endif
                          
                           @else
                           <i class="fas fa-sort float-right mt-1"></i>
                           @endif

                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3"
                        wire:click="order('title')">
                           title
                           
                           {{--Sort--}}
                           @if ($sort == 'title')

                           @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>  
                           @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i> 
                           @endif
                          
                           @else
                           <i class="fas fa-sort float-right mt-1"></i>
                           @endif
                           
                        </th>
                        <th scope="col" class="cursor-pointer px-6 py-3"
                        wire:click="order('content')">
                            content

                             {{--Sort--}}
                           @if ($sort == 'content')

                           @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>  
                           @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i> 
                           @endif
                          
                           @else
                           <i class="fas fa-sort float-right mt-1"></i>
                           @endif

                         </th> 

                         <th scope="col" class="relative px-6 py-3">
                             <span class="sr-only">Edit</span>
                         </th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($posts as $post)
                       
                    <tr>
                        <td class="px-6 py-4">
                           <div class="text-sm text-gray-900">
                           {{$post->id}}
                        </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                            {{$post->title}}
                         </div>
                         </td>
                         <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                            {{$post->content}}
                         </div>
                         </td>
                        
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            @livewire('edit-post', ['post' => $post], key($post->id))
                        </td>
                        
                    </tr>

                    @endforeach
                </tbody>
            </table>
    @else
         <div class="px-6 py-4">
             No existe ningun registro que coincida.
         </div>
    @endif

    </div>
</div>
