<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro de Pontos</title>
    <!-- Favicon-->
    <link rel="sortcut icon" type="image/gif" href="assets/img/icon.png" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <?php
        include_once "../verifica.php";
    ?>
</head>

<body class="bg-gradient-primary">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Cadastre um ponto de coleta:</h1>
                            </div>
                            <form class="user" method="POST" action="../processa_cad.php">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="address" name="address" placeholder="Endereço">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="lat" name="lat" placeholder="Latitude">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="lng" name="lng" placeholder="Longitude">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style="margin-left:47px" for="Descarte">Selecione o tipo do descarte:</label>
                                    <select  name="Descarte" id="Descarte">
                                        <?php
                                            
                                            include_once "../fachada.php";

                                            $dao = $factory->getDescarteDao();
                                            $descartes = $dao->buscaTodos();

                                            if ($descartes)
                                            {
                                                foreach ($descartes as $descarte)
                                                {
                                                    echo "<option value=\"" . $descarte->getId() . "\">" . $descarte->getNome() . "</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="row">
                                    <input style="width: 50%;" type="reset" class="btn btn-primary btn-user"  value="Limpar"><br><br>
                                    <input style="width: 50%" type="submit" class="btn btn-primary btn-user"  value="Registre o novo ponto"><br><br>
                                </div>
                            </form>
                            <div class="text-center">
                                <a class="small" href="index.php">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>