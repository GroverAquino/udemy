<x-app-layout>
    
    <section class="bg-cover" style="background-image: url({{asset('img/home/online-3412473_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
             <h1 class="text-white font-bold text-4xl">Domina la tecnología con E-Learning</h1> 
             <p class="text-white text-lg mt-2 mb-4">E-Learning te ayudara a encontrar cursos, manuales y artículos que te ayudarán a convertirte en un profesional</p>
            
            @livewire('search')
             
      
         </div>
             
         </div>

         

    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img  class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/online-4091231_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>

                <p class="text-sm text-gray-500">Aquí van los Cursos y proyectos Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores omnis qui adipisci doloremque illum nemo, odit id totam fuga asperiores corporis laboriosa.</p>

            </article>

            <article>
                <figure>
                    <img  class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/online-5268393_640.png')}}" alt="">
                </figure>
                
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Capacitación a distancia</h1>
                </header>

                <p class="text-sm text-gray-500">Aquí va Capacitación a distancia Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores omnis qui adipisci doloremque illum nemo, odit id totam fuga asperiores corporis laboriosa.</p>


            </article>

            <article>
                <figure>
                    <img  class="rounded-xl h-36 w-full object-cover"src="{{asset('img/home/to-learn-977545_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                </header>

                <p class="text-sm text-gray-500">Aquí estará el Blog Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores omnis qui adipisci doloremque illum nemo, odit id totam fuga asperiores corporis laboriosa.</p>


            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/webinar-4216601_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Guia profesional</h1>
                </header>

                <p class="text-sm text-gray-500">Aquí va Guia profesional Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores omnis qui adipisci doloremque illum nemo, odit id totam fuga asperiores corporis laboriosa.</p>


            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes que curso llevar?</h1>
        <p class="text-center text-white">Dirígete al catálago de cursos</p>
        
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-4 rounded">
                Catálago de cursos
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center tex text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajo duro para seguir formando profesionales</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course"/>
            @endforeach
        </div>

    </section>
   

</x-app-layout>


