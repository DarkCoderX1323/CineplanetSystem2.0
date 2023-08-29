

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center min-vh-100">
            <!-- Lado Azul con la frase -->
            <div class="col-md-5 bg-primary text-white py-5 d-flex justify-content-center">
                <div class="card p-4">
                    <p class="fs-5 text-center m-0">
                        "Transformamos días comunes en experiencias extraordinarias"
                    </p>
                </div>
            </div>

            <!-- Lado Blanco con la estructura del login -->
            <div class="col-md-5 py-5">
                <div class="card p-4">
                    <h2 class="mb-4">Bienvenidx</h2>
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
