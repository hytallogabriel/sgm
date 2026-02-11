<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SGM | Gestor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        </li>
        </ul>
      <form class="d-flex" role="search">
        <span class="navbar-text">
        Chamados Locais |
        </span>
        <a href="api/logout.php" class="btn btn-outline-danger"><i class="bi bi-box-arrow-right"></i>Sair</a>
      </form>
    </div>
  </div>
</nav>

<div class="conteiner m-3">
    <div class="d-flex justify-content-between align-items-center m-3">
        <h2>Todos os Chamados</h2>
    </div>
</div>

<div class="container m-4">
    <div class="">
        <button type="button" class="btn btn-outline-secondary">Secondary</button>
        <button type="button" class="btn btn-outline-success">Success</button>
        <button type="button" class="btn btn-outline-warning">Warning</button>
        <button type="button" class="btn btn-outline-danger">Danger</button>
    </div>
</div>


<div class="container mt-4">
    <div class="shadow rounded border overflow-hidden">
        <table class="table m-0"> <thead class="table">
            <tr>
                <th>ID</th>
                <th>Solicitante</th>
                <th>Local/Tipo</th>
                <th>Prioridade</th>
                <th>Técnico</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>#1</td>
                <td>XXXX</td>
                <td>Recepição</td>
                <td>Alta</td>
                <td>XXXX</td>
                <td><span class="badge bg-danger">FECHADO</span></td>
                <td><span class="badge bg-danger">Gerenciar</span></td>
            </tr>
        </tbody>
    </table>
    </div>
</div>

<div class="conteiner m-3">
    <div class="d-flex justify-content-center p-3">
        <a href="gestor_deshboard.php" type="button" class="btn btn-secondary m-3"><i class="bi bi-arrow-left-circle"></i>Voltar a Pagina Inicial</a>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>