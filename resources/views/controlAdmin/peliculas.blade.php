<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administracion Cine Variedades</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('./dashboard/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('./dashboard/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        @include("./controlAdmin/layouts/header")

        <!-- Main Sidebar Container -->
        @include("./controlAdmin/layouts/sidebar")

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-image: url(./img/tec2.jpg);">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Peliculas</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Agregar una nueva Pelicula </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>



                    <div class="card-body">

                        <!-- Aqui vamos a trabajar-->
                        

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pelicula Nuevas Agregadas </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>


<!--AQUI SE PONE EL CODIGO DE LA VISTA DE PELIS-->
                    <div class="card-body">
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    @if($message = Session::get('Listo'))
                                        <div class="alert alert-success alert-dismissable fade show col-12" role="alert">
                                            <h5>Listo</h5>
                                            <p>{{$message}}</p>
                                        </div>
                                    @endif

                                    <table class="table">
                                    <thead>
                                        <tr>
                                        <th>Nombre</th>
                                        <th>Idioma</th>
                                        <th>Subtitulos</th>
                                        <th>Director</th>
                                        <th>Fecha</th>
                                        <th>Descrpcion</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($productos as $p)
                                        <tr>
                                        
                                            <td>
                                                <img src="{{asset('img/cine.jpg')}}" alt="" width="70px">
                                                {{$p->Nombre}}
                                            </td>
                                            <td>{{$p->Idioma}}</td>
                                            <td>{{$p->Subtitulos}}</td>
                                            <td>{{$p->Director}}</td>
                                            <td>{{$p->Fecha}}</td>
                                            <td>{{$p->Descripcion}}</td>
                                            <td>
                                                <button class="btn btn-danger btnEliminar" data-id="{{$p->id}}" 
                                                data-toggle="modal" data-target="#modalDelete">
                                                <i class="fa fa-trash"></i>
                                                </button>

                                                <button class="btn btn-primary btnEdit" 
                                                data-id="{{$p->id}}" data-nombre="{{$p->Nombre}}" data-idioma="{{$p->Idioma}}" data-subtitulos="{{$p->Subtitulos}}" 
                                                data-director="{{$p->Director}}" data-fecha="{{$p->Fecha}}" data-descripcion="{{$p->Descripcion}}"
                                                data-toggle="modal" data-target="#modal-edit">
                                                <i class="fa fa-edit"></i>
                                                </button>
                                               

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
<!--AQUI SE ACABA EL CODIGO DE LA VISTA DE PELIS-->
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- footer -->
        @include("./controlAdmin/layouts/footer")
        <!--end footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


<!--AQUI ESTAN LOS MODALS-->
<!-- Modal Edit -->
<div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Editar Peliculas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/admin/peliculas/edit" method="POST" enctype="multipart/form-data">
                @if($message = Session::get('errorInsert'))
                <div class="alert alert-danger alert-dismissable fade show col-12" role="alert">
                    <h5>Error:</h5>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @csrf
                <div class="modal-body">
                  <input type="text" id="idEdit" name="id">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-border" id="nombreEdit" name="nombre" value="{{@old('nombre')}}">
                    </div>
                    <div class="form-group">
                        <label for="idiomas">Idioma</label>
                        <input type="text" class="form-control form-control-border" id="idiomaEdit" name="idiomas" value="{{@old('idiomas')}}">
                    </div>
                    <div class="form-group">
                        <label for="subtitulos">Subtitulos</label>
                        <input type="text" class="form-control form-control-border" id="subtitulosEdit" min="1" name="subtitulos" value="{{@old('subtitulos')}}">
                    </div>
                    <div class="form-group">
                        <label for="director">Director</label>
                        <input type="text" class="form-control form-control-border" id="directorEdit" min="1" name="director" value="{{@old('director')}}">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control form-control-border" id="fechaEdit" min="1" name="fecha" value="{{@old('fecha')}}">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control form-control-border" id="descripcionEdit" min="1" name="descripcion" value="{{@old('descripcion')}}">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


<!--MODAL DELETE-->
<div class="modal fade" id="modalDelete">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Pelicula</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/peliculas/eliminar" method="POST">
            @csrf
                <div class="modal-body">
                    <div class="form-group col-12">
                        <input id="idConv" name="id" type="hidden">
                        <label>Está a punto de eliminar una pelicula</label>
                        <br>
                        <label>¿Está usted segur@ de eliminar esta pelicula?</label>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" >Borrar</button>
                </div>
            </form>

        </div>
        
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--AQUI ACABAN LOS MODALS-->

    <!-- jQuery -->
    <script src="{{asset('./dashboard/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('./dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('./dashboard/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('./dashboard/dist/js/demo.js')}}"></script>
</body>

<script>
    var idEliminar=-1;
        $(document).ready(function(){
            @if($message = Session::get('errorInsert'))
                $("#modal-add").modal('show');
            @endif
           
            $(".btnEliminar").click(function(){
              var id=$(this).data('id');
              $("#idEliminar").val(id);
              idEliminar=id;
            });

            $(".btnEdit").click(function(){
              var id=$(this).data('id');
              var nombre=$(this).data('nombre');
              var idioma=$(this).data('idioma');
              var subtitulos=$(this).data('subtitulos');
              var director=$(this).data('director');
              var fecha=$(this).data('fecha');
              var descripcion=$(this).data('descripcion');

              $("#idEdit").val(id);
              $("#nombreEdit").val(nombre);
              $("#idiomaEdit").val(idioma);
              $("#subtitulosEdit").val(subtitulos);
              $("#directorEdit").val(director);
              $("#fechaEdit").val(fecha);
              $("#descripcionEdit").val(descripcion);

                console.log(id);
            });

            $(".btnEliminar").click(function(){
                $("#idEliminar").val($(this).data('id'));
            });
        });
    </script>
</html>