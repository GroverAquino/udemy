<div class="container py-8">
    <!-- This example requires Tailwind CSS v2.0+ -->

    <x-table-responsive>

        <div class="px-6 py-4 flex">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-input flex-1 shadow-sm" placeholder="Buscar curso...">

            <a class="btn btn-danger ml-2" href="{{route('instructor.courses.create')}} ">Crear nuevo curso</a>
        </div>

        @if ($courses->count())         
        
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Matriculados
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Calificación
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                        </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                                    
                    @foreach ($courses as $course)                    
                    
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    @isset($course->image)
                                        <img class="h-10 w-10 rounded-full object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="">
                                    @else
                                        <img class="h-10 w-10 rounded-full object-cover object-center" src="data:image/jpeg;base64,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" alt="">
                                    @endisset
                                </div>
                                <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{$course->title}}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{$course->category->name}}
                                </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{$course->students->count()}}</div>
                            <div class="text-sm text-gray-500">Alumnos matriculados</div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900 flex items-center">
                                {{$course->rating}}
                                <ul class="flex text-sm ml-2">
                                    <li class="mr-1">
                                        <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                                    </li>
                                    <li class="mr-1">
                                        <i class="fas fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-sm text-gray-500">Valoración del curso</div>
                        </td>

                        
                            
                        <td class="px-6 py-4 whitespace-nowrap">

                            @switch($course->status)
                                @case(1)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Borrador
                                    </span>
                                    @break
                                @case(2)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Revisión
                                    </span>
                                    @break
                                @case(3)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Publicado
                                    </span>
                                    @break
                                @default
                                    
                            @endswitch

                            
                        </td>
                        
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{route('instructor.courses.edit', $course)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>

                    @endforeach               
    
                <!-- More people... -->
                </tbody>
            </table>

            <div class="px-6 py-4">
                {{$courses->links()}}
            </div>
        @else
            <div class="px-6 py-4">
                No hay ningun registro coincidente
            </div>

        @endif

            
        </x-table-responsive>
  

</div>
