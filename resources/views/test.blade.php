<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-8 mt-5">
                <h2 class="text-center">Datos Usuarios</h2>
                <div>Nombre: {{ $name }}</div>
                <div>Edad: {{ $age }}</div>
                @if ($age >= 18)
                    <div>El usuario es mayor de edad</div>
                @else
                    <div>El usuario es menor de edad</div>
                @endif
                <?php
                if ($age >= 18) {
                    echo '<div>El usuario es mayor de edad</div>';
                } else {
                    echo '<div>El usuario es menor de edad</div>';
                }
                ?>
            </div>

            <div class="col-8 mt-5">
                <h2 class="text-center">Tabla Ejemplo</h2>
                @for ($i = 1; $i <= 10; $i += 1)
                <div>5 x {{ $i }} = {{ 5 * $i }}</div>
                @endfor
            </div>

            <div class="col-8 mt-5">
                <h2 class="text-center">Iteración 'While'</h2>
                @while($i<=15)
                <div>Recorrido: {{ $i++ }}</div>
                @endwhile
            </div>
            
        </div>

    </div>

</body>

</html>
