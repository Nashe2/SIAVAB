<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>En desarrollo</title>

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">   <!-- Google web font "Open Sans", https://fonts.google.com/ -->
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">           <!-- Font Awesome, http://fontawesome.io/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                 <!-- Bootstrap style, http://v4-alpha.getbootstrap.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/templatemo-style.css"> 

    <!-- load stylesheets -->
<!-- load stylesheets aqui van los link-->                           <!-- Templatemo style -->

</head>

      <body>
        <div class="container-fluid">

            <section id="welcome" class="tm-content-box tm-banner margin-b-10">
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title"> En desarrollo</h1>                        
                </div>                    
            </section>

            <div class="tm-body">
                <div class="tm-sidebar">
                    <nav class="tm-main-nav">
                        <ul class="tm-main-nav-ul">
                            <li class="tm-nav-item"><a href="{{ route ('alumno') }}" class="tm-nav-item-link tm-button"> 
                              <i class="fa fa-smile-o tm-nav-fa"></i>Inicio</a>
                            </li>
                            <li class="tm-nav-item"><a href="{{ url('/personas')}}" class="tm-nav-item-link tm-button">  <i class="fa fa-tasks tm-nav-fa"></i> Agregar Persona</a>
                            </li>
                            <li class="tm-nav-item"><a href="{{ url('/distribuidor') }}" class="tm-nav-item-link tm-button">  <i class="fa fa-tasks tm-nav-fa"></i> Agregar Distribuidor</a>
                            </li>
                            <li class="tm-nav-item"><a href="{{ url('/materiales') }}" class="tm-nav-item-link tm-button">  <i class="fa fa-tasks tm-nav-fa"></i> Agregar Material</a>
                            </li>
                            <li class="tm-nav-item"><a href="{{ url('/color')}}" class="tm-nav-item-link tm-button">  <i class="fa fa-tasks tm-nav-fa"></i> Agregar Color</a>
                            </li>
                            <li class="tm-nav-item"><a href="{{ route ('form') }}" class="tm-nav-item-link tm-button">  <i class="fa fa-tasks tm-nav-fa"></i> Agregar Producto</a>
                            </li>                          
                            <li class="tm-nav-item"><a href="{{ route ('cons') }}" class="tm-nav-item-link tm-button">  <i class="fa fa-tasks tm-nav-fa"></i> Consultar</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <div class="tm-main-content">
                    @yield('content')
                    <div class="tm-content-box tm-content-box-home">                        

                    </div>

                    <section id="main-content">
                      
                    </section>

                    <footer class="tm-footer">
                        <p class="text-xs-center"></p>
                    </footer>

                </div>
            </div>             
        </div>
        
        <!-- load JS files -->          

      </body>
</html>