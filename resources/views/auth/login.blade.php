<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
  <style>
    body {
      overflow-y: hidden; /* Oculta la barra de desplazamiento vertical */
    }

    .vh-100 {
      height: 100vh; /* Establece una altura fija al 100% del alto de la ventana */
    }
  </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <img src="{{asset('assets/unab.png')}}" alt="logo">
              </div>
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form action="{{route('login')}}" method="post" style="width: 23rem;">
                    @csrf
      
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesion</h3>
      
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example18">Correo</label>
                    <input type="email" name="email" id="form2Example18" class="form-control form-control-lg" />                    
                  </div>
      
                  <div class="form-outline mb-4">
                    <label class "form-label" for="form2Example28">Contraseña</label>
                    <input type="password" name="password" id="form2Example28" class="form-control form-control-lg" />
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit">Ingresar</button>
                  </div>
      
                  <p class="small mb-5 pb-lg-2"><a class="text-muted" href="{{route('register')}}"></p>
                  <p>¿No estas registrado? <a href="{{route('register')}}" class="link-info">registrate aquí</a></p>
      
                </form>
      
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="{{asset('assets/img-unab.jpg')}}"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
