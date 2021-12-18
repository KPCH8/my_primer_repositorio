<H1>Mostrar lista de solicitantes :)</H1>

<!--Creamos la tabla para almacenar la información optenida abreviatura de escritura (b-table-header) -->
<table class="table table-dark">
    <thead class="thead-dark">
        <!--Creamos los encabezados de nuestra tabla-->
        <tr>
            <th>#</th>
            <th>Documento</th>
            <th>Nombres</th>
            <th>primer_apellido</th>
            <th>segundo_apellido</th>
            <th>Correo</th>
            <th>Oficina del tramite</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <!--foreach permite recorrer fila a fila los datos optenidos de la variable empleado creada en EmpleadoController.php-->
        @foreach ( $empleados as $empleado )
            <!--Por cada fila que recorra nuestro foreach imprime los siguiente datos-->
            <tr>
                <td>{{ $empleado -> id }}</td>
                <td>{{ $empleado -> tipo_documento }}</td>
                <td>{{ $empleado -> documento }}</td>
                <td>{{ $empleado -> nombres }}</td>
                <td>{{ $empleado -> primer_apellido }}</td>
                <td>{{ $empleado -> segundo_apellido }}</td>
                <td>{{ $empleado -> correo_electronico }}</td>
                <td>{{ $empleado -> id }}</td>
                <td>Editar | 
                    <!--Creamos un formulario con el metodo post para enviar el id del registro que deseamos eliminar-->
                    <form action="{{ url('/solicitantes/' . $empleado->id) }}" method="post">
                        <!--@csrf valida que los datos optinidos vengan de los formularios del mismo proyecto-->
                        @csrf
                        <!--Metodo que nos permite ejecutar la funcion de borrar-->
                        {{ method_field('DELETE')}}
                        <!--Boton que al ser presionado arreja una alerta informando que el registro seleccionado sera eliminado-->
                        <input type="submit" onclick=" return confirm('¿Deseas eliminar el registro?')" value="Borrar">
                    </form>
                </td>
            </tr>

         @endforeach
    </tbody>
</table>