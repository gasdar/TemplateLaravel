<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <h2 class="text-center p-5">Login de Cliente</h2>

        <div class="row justify-content-center">
            <form action="#" method="POST" class="col-8" >
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de Usuario:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="user_pass" class="form-label">Clave:</label>
                    <input type="password" class="form-control" id="user_pass" name="user_pass">
                </div>
                <input type="submit" value="Iniciar Sesión" class="btn btn-primary">
            </form>
        </div>
    </div>

</body>
</html>