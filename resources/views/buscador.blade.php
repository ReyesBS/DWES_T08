@include('base')

<body>

	<div class="contenedor_padre">
		<div class="card">
			<div class="card-header font-weight-bold">
				<h2>Buscar libros</h2>
			</div>
			<div class="card-body">
				<form name="buscar" id="buscar" method="post" action="javascript:void(0)">
					@csrf
					<div class="form-group">
						<label for="titulo">Título</label>
						<input type="text" id="libro" name="libro" class="form-control">
					</div>
					<p>
						<span id="sugerencias_libros"></span>
					</p>
				</form>
			</div>

		</div>
		<div class="contenedor_hijo">
			<div class="card">
				<div class="card-header font-weight-bold">
					<h2>Buscar autores</h2>
				</div>
				<div class="card-body">
					<form name="buscar" id="buscar" method="post" action="javascript:void(0)">
						@csrf
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" id="autor" name="autor" class="form-control">
						</div>
						<p>
							<span id="sugerencias_autores"></span>
						</p>
					</form>
				</div>
			</div>
			<script>
				/**
				 * Este script usa Ajax para mostrar los resultados de buscar_librosy buscar_autores mientras va leyendo los caracteres introducidos.
				 */
				$(document).ready(function() {
					$(document).ready(function() {
						$.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
						//Buscamos libros
						$("#libro").keyup(function() {
							$.ajax({
								type: "POST",
								url: "{{url('/libros/consultar')}}",
								data: {
									"q": $("#libro").val()
								},
								success: function(data) {
									let texto = "<br>";

									data.forEach((fila) => {
										texto = texto + "<br>" + fila.titulo;
									});

									$("#sugerencias_libros").html(texto);
								},
								error: function(data) {
									alert("fallo");
								}
							});
						});
					});

					//Buscamos autores
					$("#autor").keyup(function() {
						$.ajax({
							type: "POST",
							url: "{{url('/autores/consultar')}}",
							data: {
								"q": $("#autor").val()
							},
							success: function(data) {
								let texto = "<br>";

								data.forEach((fila) => {
									texto = texto + "<br>" + fila.nombre + " " + fila.apellidos;
								});

								$("#sugerencias_autores").html(texto);
							},
							error: function(data) {
								alert("fallo");
							}
						});
					});
				});
			</script>

</body>

</html>