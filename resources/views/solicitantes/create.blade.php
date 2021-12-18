formulario de creación de solicitantes

<form action="{{ url ('/solicitantes') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <label for="">Tipo de documento</label>
    <select id="tipo_documento" name="tipo_documento">
        <option value="C.C">Cédula de Ciudadanía</option>
        <option value="C.X">Cédula de Extranjería</option>
        <option value="PSS">Pasaporte</option>
    </select>
    <br>

    <label for="">Número de documento</label>
    <input type="text" name="documento" id="documento">
    <br>

    <label for="">Nombres</label>
    <input type="text" name="nombres" id="nombres">
    <br>

    <label for="">Primer apellido</label>
    <input type="text" name="primer_apellido" id="primer_apellido">
    <br>
    
    <label for="">Segundo apellido</label>
    <input type="text" name="segundo_apellido" id="segundo_apellido">
    <br>

    <label for="">Correo electrónico</label>
    <input type="text" name="correo_electronico" id="correo_electronico">
    <br>

    <label for="">Oficina de tramite</label>
    <input type="text" name="oficina_tramite" id="oficina_tramite">
    <br>

    <input type="submit" value="Guardar">

</form>


