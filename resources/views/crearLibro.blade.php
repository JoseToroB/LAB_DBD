<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Subir Libro | Biblioteca online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    @include('includes.navbarAdm')
</head>
<body>
<section>
        <div class="container">
            <div class="row">
                <div class="col">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <h4 class="mb-3 text-black">Formulario de Creacion de Libro</h4>
                    <form method="POST" action="{{route('finalCrearLibro')}}">
                    {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="nombre" class="form-label text-black">Titulo</label>
                            <input type="string" id="nombre" name="nombre"  class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="autor" class="form-label text-black">Autor</label>
                            <input type="string" class="form-control" name="autor" id="autor" >
                             </div>
                        <div class="mb-3">
                            <label for="fecha_publicacion" class="form-label text-black">Fecha de publicacion</label>
                            <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion" >
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label text-black">Link</label>
                            <input type="string" class="form-control" name="link" id="link" >
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Subir Libro</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>