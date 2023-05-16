<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First Responder Tool</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/my.js') }}" ></script>
        <script src="{{ asset('js/Cases.js') }}" ></script>
    </head>
    <body>   
            <h2 class = "font-bold text-lg self-center">First Responder Tool</h2>
        </div>  
        <div>
    
        
        
        
       
@Auth
        <div> <p1> Welcome </p1>{{ Auth::user()->name }} 
    @endif
    </div>

    </header>
    <main class="border-bottom-double border-2">
    <!-- Menu -->
    @include('layouts.navigation')   
    
    {{$slot}}

    </main>
    <footer>
        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </footer>
    </body>
</html>