<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | biblioteca Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @if(session('id_rol_on')==2)
    @include('includes.navbarAdm')
    @else
    @include('includes.navbarUser')
    @endif
</head>

<body>
  <section class="mt-5">
    <div class="container">
     
      <h4 class="mb-5 text-black">Libros Disponibles</h4>
      <div class="row text-center mb-4">
        @foreach($libros as $l)
        
        <div class="col-4 d-flex justify-content-center mb-5">
          <div class="card" style="width: 18rem;">
            <img src="https://i.imgur.com/htjrRPK.jpg"
              class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Titulo:{{$l->nombre}}</h5>
              <h5 class="card-title">Autor:{{$l->autor}}</h5>
              <ul class="list-group list-group-flush">
              </ul>
              <a href="{{route('vistaLibro',$l)}}" class="btn btn-primary">Ver libro</a>
            </div>
          </div>
        </div>

        @endforeach


        <footer>
          <p> 2-2021 Biblioteca online DEBEDE</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>
</body>

</html>