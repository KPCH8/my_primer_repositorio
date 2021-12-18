<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h1>Registro de Universidades</h1>

<!--Formulario de registro de unuversidades-->
<dir class="container">
  <!--Formulario de registro de unuversidades-->
  <form class="row g-3" action="{{ url ('/Universidades')}}" method="post" enctype="multipart/form-data">
    
    <!--Con la siguiente llave validamos que todas la consultas realizadas a la base, solo permita acceso a formularios del mismo proyecto-->
      @csrf

      <!--Incluimos el formulario que esta en edit-->
      @include('Universidades.formulario');

    </form>
  </dir>
