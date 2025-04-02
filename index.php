<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!--        Bootstrap CSS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" crossorigin="anonymous">

<!--        DataTables Bootstrap -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

<!--        Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

        <title>CRUD AJAX</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><i class="fas fa-user-secret"> </i>Coding City</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(en cours)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Une autre action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Autre chose</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Désactivé</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section class="container py-5">
            <div class="row">
                    <div class="col-lg-8 col-sm mb-5 mx-auto">
                        <h1 class="fs-4 text-center lead text-primary">CRUD PHP POO MYSQL AJAX</h1>
                    </div>
                </div>
            <div class="dropdown-divider border-warning"></div>
            <div class="row">
                    <div class="col-md-6">
                        <h5 class="fw-bold mb-0">Liste des factures</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary btn-sm me-3"><i class="fas fa-folder-plus"></i> Nouveau</button>
                            <a href="#" class="btn btn-success btn-sm" id="export"><i class="fas fa-table"></i> Exporter</a>
                        </div>
                    </div>
                </div>
            <div class="dropdown-divider border-warning"></div>
            <div class="row">
                    <div class="table-responsive" id="orderTable">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">CLient</th>
                                <th scope="col">Caissier</th>
                                <th scope="col">Montant</th>
                                <th scope="col">Perçu</th>
                                <th scope="col">Retourné</th>
                                <th scope="col">Etat</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php for($i = 0; $i < 100; $i++): ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>

                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>
                                        <a href="#" class="text-info me-2 infoBtn" title="Voir détails"><i class="fas
                                        fa-info-circle"></i></a>
                                        <a href="#" class="text-primary me-2 editBtn" title="Modifier"><i class="fas
                                        fa-edit"></i></a>
                                        <a href="#" class="text-danger me-2 deleteBtn" title="Supprimer"><i class="fas
                                        fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <div class="row"></div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
                crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-data/3.0.11/js-data.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="process.js"></script>
    </body>
</html>