<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title> test </title>
        <link rel="stylesheet" href="/css/app.css">
        <script type= "text/javascript" src= {{asset('js/app.js')}}></script>
        
    </head>
    <body>
                    @include('inc.navbar')

            
            <div class="container">
            <div class="navbar">
               </div>
                @if(Request::is('/'))
                    @include ('inc.showcase')
                @endif
                <div class="row">
                    <div class="col-md-8 col-lg-8">
                        @include('inc.content')
                    </div>

                    <div class="col-md-4 col-lg-4">
                        @include('inc.sidebar')

                    </div>
                </div>
            </div>

            <footer id="footer" class="text-center">
                <p>Copyright 2018 &copy; test</p>
            </footer>

    </body>
</html>
