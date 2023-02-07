<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <style>
        body {
            background: #D98825;

        }

        nav {
            background-color: #401612;
            padding: 20px;
        }

        nav a {
            color: #F2E1AC;

        }

        nav a:hover {

            color: #B3A67F;
        }

        .card {
            background: #F2E1AC;
            color: #401612;
            font-weight: bold;

            margin: 10px;
        }

        .contenedor_padre {

            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .contenedor_hijo {

            margin: 50px;
        }

        @media (max-width: 800px) {
            .contenedor_padre {
                flex-direction: column;
            }
        }

        div {
            text-align: center;
        }

        p {
            text-align: left;
        }

        .form-control:focus {
            background-color: #B3A67F;
            color: #F2E1AC;
            letter-spacing: 1px;

        }

        tr {
            text-align: left;
        }
    </style>

    <title>Biblioteca</title>
</head>

<body>
    <div>
        <nav class="">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="navbar-brand" href="http://localhost:8000/" alt="Lista de autores">Biblioteca</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="http://localhost:8000/buscador" alt="Lista de autores">Buscador</a>
                </li>

            </ul>
        </nav>
    </div>
</body>

</html>