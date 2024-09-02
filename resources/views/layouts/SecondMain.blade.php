<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title><?= $title; ?> </title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
        <img  width="32" height="32" src="images/arrow-left.svg" alt="Стрілка вліво"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-sm-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"></a>
        </li>
                <li class="nav-item">
          <a class="nav-link"   href="/zapis"></a>
        </li>
        <h2 class="text"><?= $title; ?></h2>
      </ul>
      
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Пошук" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Пошук</button>
      </form>

      </div>
  </div>
</nav>
<div class="container">
 <div class="row justify-content-center">      
  <div class="col-5">
    @yield('content')
  </div>
 </div>
</div> 
</div>
  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>