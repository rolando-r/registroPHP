<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <script src="/js/index.js" defer></script>
    <title>Registro Campers 🚀</title>
</head>
<body>
    <nav>
        <h1>Registro Campers</h1>
    </nav>
    <form action="work.php" method="post">
    <div class="container mt-5" id="campers">
        <div class="card">
            <div class="card-header">
            Registro <span class="badge bg-secondary" id="registro"></span>
            </div>
            <div class="card-body">
                <form>
                    <div class="row g-3">
                        <div class="col-5">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" aria-describedby="nombre">
                        </div>
                        <div class="col-7">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" aria-describedby="apellidos">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" aria-describedby="email">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-4">
                            <div>
                                <label for="exampleInputPassword1" class="form-label">Nivel de Estudio</label>
                            </div>
                            <select class="form-select" aria-label="Default select example">
                                <option value="bachiller">Bachiller</option>
                                <option value="tecnico">Tecnico</option>
                                <option value="tecnologo">Tecnologo</option>
                                <option value="profesional">Profesional</option>
                                <option value="estudiante">Estudiante</option>
                                <option value="universitario">Universitario</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono" aria-describedby="telefono">
                        </div>
                        <div class="col-3">
                            <div>
                                <label for="exampleInputPassword1" class="form-label">Nivel de ingles</label>
                            </div>
                            <select id="opcion" onchange="mostrarImagen()" class="form-select" aria-label="Default select example">
                                <option value="opcion1">Basico</option>
                                <option value="opcion2">Intermedio</option>
                                <option value="opcion2">Avanzado</option>
                            </select>
                        </div>
                        <div class="col-2">
                        <img src="images/emoji1.png" id="imgEmoji1" class="emoji1">
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-6">
                            <label for="conocimientos" class="form-label">Conocimientos previos en programacion</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkPython" name="checkPython" onchange="mostrarImagenC()">
                                <label class="form-check-label" for="checkPython">
                                  Python
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkHTML" name="checkHTML" onchange="mostrarImagenC()">
                                <label class="form-check-label" for="checkHTML">
                                  HTML
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkJS" name="checkJS" onchange="mostrarImagenC()">
                                <label class="form-check-label" for="checkJS">
                                  JS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkCSS" name="checkCSS" onchange="mostrarImagenC()">
                                <label class="form-check-label" for="checkCSS">
                                  CSS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkPhp" name="checkPhp" onchange="mostrarImagenC()">
                                <label class="form-check-label" for="checkPhp">
                                  Php
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkNodeJs" name="checkNodeJs" onchange="mostrarImagenC()">
                                <label class="form-check-label" for="checkNodeJs">
                                  nodeJs
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkC" name="checkC" onchange="mostrarImagenC()">
                                <label class="form-check-label" for="checkC">
                                  C#
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkTypeScript" name="checkTypeScript" onchange="mostrarImagenC()">
                                <label class="form-check-label" for="checkTypeScript">
                                  TypeScript
                                </label>
                            </div>
                        </div>
                        <div class="col-6 imgC">
                        <img src="images/campus.png" alt="" class="imagenCam" id="imagenCam">
                        </div>
                    </div>
                    <br>
                    <div class="btns">
                    <button type="submit" class="btn btn-danger">Borrar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </form>
    <!-- como crear una funcion que me muestre una imagen u otra, dependiendo de la opcion elegida en el selct -->
</body>
</html>
