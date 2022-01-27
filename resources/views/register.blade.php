<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evil steam | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
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
                    <h4 class="mb-3 text-black">Formulario de Registro</h4>
                    <form method="POST" action="{{route('finalRegister')}}">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="NombreUsuario" class="form-label text-black">Nombre</label>
                            <input type="string" id="name" name="name"  class="form-control"
                                aria-describedby="emailHelp">
                                <div id="nameHelp" class="form-text text-black">nombre no debe superar los 30 caracteres</div>
                                
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-black">Email</label>
                            <input type="email" class="form-control" name="email" id="email" >
                            
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label text-black">Contraseña</label>
                            <input type="text" class="form-control" name="password" id="password" >
                            <div id="passwordHelp" class="form-text text-black">La contraseña debe contener una letra minuscula, mayuscula, un número y un caracter expecial [@$!%*#?&] </div>
                        </div>
                        <div class="mb-3">
                            <label for="FechaNacimiento" class="form-label text-black">Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" >
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Registrarse</button>
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