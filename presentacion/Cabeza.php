<!doctype html>
<html lang="en">

<head>
    <title>Administrador</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <ul class="nav nav-tabs" id="navId" role="tablist">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Dropdown</a>
        </li>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#tab2Id">Citas</a>
            <a class="dropdown-item" href="#tab3Id">Pacientes</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#tab4Id">Action</a>
        </div>
        <li class="nav-item">
            <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Proximas Citas</a>
        </li>
       
        <li class="nav-item" role="presentation">
            <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Pacientes</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="cerrarSesion.php" class="nav-link" data-bs-toggle="tab">Cerrar sesion</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">

        </div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>

    <script>
        var triggerEl = document.querySelector("#navId a");
        bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
    </script>