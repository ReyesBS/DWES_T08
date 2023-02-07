@include('base')

<body>
<div class="p-3 mb-2">
  <div class="table-responsive-sm">
    <table class="table" >
      <tr style="color:#401612">
        <th scope="col">Título</th>
        <th scope="col">Fecha de publicación</th>
        <th scope="col">Autor</th>
      </tr>
      <!--Buscamos libros y autores en el array $libros-->
      @foreach ($libros as $fila)
      <tr style="color: #F2E1AC">
        <td>{{ $fila->titulo }}</td>
        <td>{{ date('d/m/Y',strtotime($fila->f_publicacion)) }}</td>
        <td>{{ $fila->nombre }} {{ $fila->apellidos }}</td>

      </tr>
      @endforeach
    </table>
  </div>
</div>

</body>