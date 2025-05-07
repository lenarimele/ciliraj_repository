<?php
<!DOCTYPE html>
<html lang="sl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Čili Raj</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <script src="koda.js"></script>
</head>
<body>
<!-- glava -->
<header class="container-fluid bg-danger text-white py-3 ">
  <div class="d-flex justify-content-between align-items-center">
    <img src="čiliraj slikovni.png" alt="LOGO" class="img-fluid me-3" href="index.php" style="height: 60px;" onclick = domov()>
    <div class="d-flex align-items-center gap-3">





      <form class="navbar-form">
        <div class="form-group">
          <input type="text" placeholder="Išči" class="form-control" id="search-input">
          
        </div>
      </form>
        <button type="submit" class="btn btn-outline-light btn-sm rounded" id="search-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
          </svg>
        </button>



        

      <button class="btn btn-outline-light btn-sm rounded" onclick = profil()>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
        </svg>
      </button>

      <button class="btn btn-outline-light btn-sm rounded" onclick = kosarica()>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket3" viewBox="0 0 16 16">
          <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6z"/>
        </svg>
      </button>

      <button class="btn btn-outline-light btn-sm rounded navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarChili">
        <span class="navbar-toggler-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
          </svg>
        </span>
      </button>
    </div>
  </div>



<div class="collapse navbar-collapse bg-danger text-white text-center" id="navbarChili">
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link active" href="index.php">Domov</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="izdelki.php">Izdelki</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="galerija.php">O nas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#kontakt">Kontakt</a>
    </li>
  </ul>
</div>
</div>
</nav>

</header>

  


  <!-- Product Grid -->


  <div class="container">

    <div class="row mt-3">
      <div class="col-6 product-card">
        <div class="card mx-auto">
          <div class="card-body text-center">
            <img src="slike_izdelki/cili_pekoca_omaka.jpg" class="img-fluid" style="height: 130px;" alt="Pekoča omaka">
          </div>
          <div class="card-footer fw-bold text-center">Pekoča omaka<div>3,99 €</div></div>
        </div>
      </div>
      <div class="col-6 product-card">
        <div class="card mx-auto">
          <div class="card-body text-center">
            <img src="slike_izdelki/cili_v_prahu.jpg" class="img-fluid" style="height: 130px;" alt="Čili v prahu">
          </div>
          <div class="card-footer fw-bold text-center">Čili v prahu<div>2,49 €</div></div>
        </div>
      </div>
    </div>
  
    <div class="row mt-3">
      <div class="col-6 product-card">
        <div class="card mx-auto">
          <div class="card-body text-center">
            <img src="slike_izdelki/posusen_cili.jpg" class="img-fluid" style="height: 130px;" alt="Posušen čili">
          </div>
          <div class="card-footer fw-bold text-center">Posušen čili<div>4,00 €</div></div>
        </div>
      </div>
      <div class="col-6 product-card">
        <div class="card mx-auto">
          <div class="card-body text-center">
            <img src="slike_izdelki/vlozen_cili.jpg" class="img-fluid" style="height: 130px;" alt="Vloženi čili">
          </div>
          <div class="card-footer fw-bold text-center">Vloženi čili<div>3,25 €</div></div>
        </div>
      </div>
    </div>
  
    <div class="row mt-3">
      <div class="col-6 product-card">
        <div class="card mx-auto">
          <div class="card-body text-center">
            <img src="slike_izdelki/cili_olje.jpg" class="img-fluid" style="height: 130px;" alt="Čili olje">
          </div>
          <div class="card-footer fw-bold text-center">Čili olje<div>5,00 €</div></div>
        </div>
      </div>
      <div class="col-6 product-card">
        <div class="card mx-auto">
          <div class="card-body text-center">
            <img src="slike_izdelki/svezi_cili.jpg" class="img-fluid" style="height: 130px;" alt="Sveži čiliji">
          </div>
          <div class="card-footer fw-bold text-center">Sveži čiliji<div>2,99 €</div></div>
        </div>
      </div>
    </div>
  
    <div class="row mt-3">
      <div class="col-6 product-card">
        <div class="card mx-auto">
          <div class="card-body text-center">
            <img src="slike_izdelki/cili_sambal.jpg" class="img-fluid" style="height: 130px;" alt="Čili Sambal">
          </div>
          <div class="card-footer fw-bold text-center">Čili Sambal<div>3,75 €</div></div>
        </div>
      </div>
      <div class="col-6 product-card">
        <div class="card mx-auto">
          <div class="card-body text-center">
            <img src="slike_izdelki/sirarcha_omaka.jpg" class="img-fluid" style="height: 130px;" alt="Sriracha omaka">
          </div>
          <div class="card-footer fw-bold text-center">Sriracha omaka<div>4,49 €</div></div>
        </div>
      </div>
    </div>
  
    <div class="row mt-3">
      <div class="col-6 product-card">
        <div class="card mx-auto">
          <div class="card-body text-center">
            <img src="slike_izdelki/cili_cokolada.jpg" class="img-fluid" style="height: 130px;" alt="Čili čokolada">
          </div>
          <div class="card-footer fw-bold text-center">Čili čokolada<div>6,00 €</div></div>
        </div>
      </div>
    </div>
  
  </div>
  




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
?>
