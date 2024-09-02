@extends('layouts.SecondMain')

@section('content')
<div class="card mb-4" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-3">
    <img src="images/kaskad.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
          <div class="card-body">          
          <h2 class="card-title">   </h2>
        <h1 class="card-text">Каскадія</h1>        
      </div>
    </div>
  </div>
</div>

<div class="card text-bg-light mb-3" style="max-width: 540px;">
  <div class="card-header text-center"><h3>Дата гри</h3></div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    
    <h5 class="card"><input type="date" name="datagry"></h5>
    
  </div>

  <div class="card-header text-center"><h3>Тривалість гри</h3></div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <h5 class="card"><input type="time"></h5>
  </div>
  
  <div class="card-header text-center"><h3>Локація</h3></div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <h5 class="card"><input type="location" placeholder="Вкажіть де грали"></h5>
  </div>

  <div class="card-header text-center"><h3>Гравці</h3></div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <h5 class="card"><input type="text" placeholder="Ім'я гравця"></h5>
    <form>
          <input id="html" type="checkbox">
          <label for="html">Переможець</label>
          <input id="html" type="checkbox">
          <label for="html">Новачок</label>
        </form>
        
        <div class="dropdown">
                <button class="btn  mb-4 btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Колір
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item bg-danger" href="#">червоний</a></li>
                  <li><a class="dropdown-item bg-" href="#">помаранчевий</a></li>
                  <li><a class="dropdown-item bg-warning" href="#">жовтий</a></li>
                  <li><a class="dropdown-item bg-success" href="#">зелений</a></li>
                  <li><a class="dropdown-item bg-" href="#">бірюзовий</a></li>
                  <li><a class="dropdown-item bg-primary" href="#">синій</a></li>
                  <li><a class="dropdown-item bg-" href="#">фіолетовий</a></li>
                  <li><a class="dropdown-item bg-" href="#">рожевий</a></li>
                  <li><a class="dropdown-item bg-secondary" href="#">сірий</a></li>
                  <li><a class="dropdown-item bg-dark" href="#">чорний</a></li>
                  <li><a class="dropdown-item bg-liht" href="#">білий</a></li>
                  <li><a class="dropdown-item bg-" href="#">коричневий</a></li>
                </ul>
              </div>

  </div>

</div>

@endsection