<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro | Biblioteca Online </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    @if(session('id_rol_on')==2)
    @include('includes.navbarAdm')
    @else
    @include('includes.navbarUser')
    @endif

</head>

<body>
    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6">

            </div>
            <div class="col bg-white p-5 rounded-end">
                <form>
                    <h2 class="fd-bold text-center pt-5 mb-5">Titulo:{{$libro->nombre}}</h2>
                    <h2 class="fd-bold text-center pt-5 mb-5">Autor:{{$libro->autor}}</h2>
                    <h2 class="fd-bold text-center pt-5 mb-5">Fecha publicacion:{{$libro->fecha_publicacion}}</h2>
                    <div style="margin: 0 auto; text-align: center ">
                        <a aling="center" href="{{$libro->link}}">Link del libro</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</body>

</html>