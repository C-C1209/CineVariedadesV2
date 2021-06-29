<!DOCTYPE html>
<html lang="en">

@extends('menu.layouts.head')

<body style="background-color: rgb(0,0,0,.95);">


    <!-- Footer-->
    @extends('menu.layouts.footer')

    <!-- Navigation bar-->
    @extends('menu.layouts.navbar')

    <!-- Apartado de Peliculas subidas-->
    @extends('menu.layouts.pelis')

    <!-- Presentacion de las peliculas-->
    @extends('menu.layouts.presentacion')
    <!-- 'Respaldo style="background-image: url('{{asset('/clean/assets/img/peli1.jpg')}}')"' -->

    
    
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('/clean/js/scripts.js')}}"></script>
</body>

</html>