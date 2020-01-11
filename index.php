<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>

    <!--Import Styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="controlador.js"></script>
</head>

<body>
    <header class="d-flex justify-content-around align-items-center bg-primary text-white">
        <p>CRUD</p>
        <ul class=" d-flex justify-content-around">
            <li class="nav-item ">
                Ajax
            </li>
            <li class="nav-item">
                bootstrap
            </li>
            <li class="nav-item">
                PHP
            </li>
            <li class="nav-item">
                Jquery
            </li>
        </ul>
    </header>

    <section class="container-fluid d-flex justify-content-center align-items-center mt-5 ">
        <article class="container p-3 bg-light ">
            <nav class="navbar">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertar">Añadir
                    Registro</button>

                <!-- Modal insert -->
                <div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Añadir alumno</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="validar.php" method="POST">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Asignatura:</label>
                                        <input type="text" class="form-control" name="asigntura" id="asignatura">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Nota:</label>
                                        <input type="number" class="form-control" min="0" max="10"  name="nota" step='0.1'id="nota">
                                    </div>
                              
                            </div>
                            <div class="modal-footer">
                                <input type="button" onclick="iniciarInsertar()" class="btn btn-primary" data-dismiss="modal" value="Insertar">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
                </div>
            </nav>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Asignatura</th>
                        <th scope="col">Nota</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><a href="">Editar</a></td>
                        <td><a href="">Borrar</a></td>
                    </tr>

                </tbody>
            </table>
        </article>


    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>