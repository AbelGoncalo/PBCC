@extends('layouts.home.app')
@section('title','Agente Bancário')
@section('content')

<!-- Section Location -->
<section class="card-location">

  @include('livewire.home.pages.modals.modal-delivery')

    <div class="container mb-5" data-aos="fade-up">
      <div class="w-100 d-md-flex justify-content-center align-items-center gap-3 ">
        
        <!-- <div class="map-primary-content">
          <a href="https://www.appsheet.com/start/7e0d033e-b557-4962-963c-645680caf633" target="_blank" class="map-primary d-flex align-items-center justify-content-center gap-3 px-3 py-3">
            <div class="d-grid text-center"> 
              <span>Usar Mapa</span>
              <span style="font-size: 10px;font-weight: normal;">BETA</span>
            </div>
            <i class="bi-map"></i>
          </a>
        </div> -->

        <div class="w-100 input-main d-flex align-items-center justify-content-center gap-3" style="max-width: 800px;">
          <div class="w-100 input-refree">
            <h2>Onde</h2>
            <input type="text" class="w-100" placeholder="Adicionar pontos de referência (p.ex., Talatona, Academia Bai, MDC)">
          </div>

          <div class="slide-provade" >
            <div class="dropdown">
              <a class="dropdown-toggle provade-title" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Provedores
              </a>
            
              <ul class="dropdown-menu shadow-lg border-0 p-3">
                <li class="form-check d-flex align-items-center gap-2 py-1">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Todos
                  </label>
                </li>
                <li class="form-check d-flex align-items-center gap-2 py-1">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Agentes BAI
                  </label>
                </li>
                <li class="form-check d-flex align-items-center gap-2 py-1">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Agentes BIC
                  </label>
                </li>
                <li class="form-check d-flex align-items-center gap-2 py-1">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Agentes BFA
                  </label>
                </li>
                <li class="form-check d-flex align-items-center gap-2 py-1">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Agentes e-Kwanza
                  </label>
                </li>
                <li class="form-check d-flex align-items-center gap-2 py-1">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Agentes Unitel
                  </label>
                </li>
              </ul>
            </div>
          </div>
    
        </div>

      </div>
    </div>

    <div class="container pt-4 mb-5" data-aos="fade-up">   
      <div class="row justify-content-between align-items-center g-3">
        <div class="row col-12 col-md-12 col-lg-12">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="badge-top d-flex gap-2 align-items-center">
              <div class="pt-2">
                <span class="badge rounded-pill text-bg-success">
                  <span class="d-none">scp</span>
                </span>
              </div>
              <div>
                <span class="badge-text">Todos serviços dísponíveis</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="badge-top d-flex gap-2 align-items-center">
              <div class="pt-2">
                <span class="badge rounded-pill text-bg-warning">
                  <span class="d-none">scp</span>
                </span>
              </div>
              <div>
                <span class="badge-text">Pode levantar, outros serviços podem estar indisponível</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="badge-top d-flex gap-2 align-items-center">
              <div class="pt-2">
                <span class="badge rounded-pill" style="background-color: yellow;">
                  <span class="d-none">scp</span>
                </span>
              </div>
              <div>
                <span class="badge-text">Não pode levantar, alguns dos outros disponíveis </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="badge-top d-flex gap-2 align-items-center">
              <div class="pt-2">
                <span class="badge rounded-pill text-bg-danger">
                  <span class="d-none">scp</span>
                </span>
              </div>
              <div>
                <span class="badge-text">Todos serviços indísponíveis</span>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-12 col-md-3 col-lg-3 text-md-end visually-hidden">
          <button class="btn border-2 px-4 py-3 border-light-subtle rounded-3" style="font-size: 14px;">Entregas</button>
        </div> -->
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row gy-5 gx-4">
        @foreach ($agentes as $agente )
          <div class="col-xl-3 col-lg-4 col-md-6 col-12 pe-0 position-relative overflow-hidden rounded-2">
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="home/img/features-light-1.jpg" class="rounded-2 d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="home/img/features-light-2.jpg" class="rounded-2 d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="home/img/features-light-3.jpg" class="rounded-2 d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title pt-3 pb-2">Agente BAI - Morro Bento </h5>
              <ul class="list-unstyled">
                <li><i class="bi-check-lg"></i> <span>Levantar dinheiro</span></li>
                <li><i class="bi-check-lg"></i> <span>Reservar Levantamento</span></li>
                <li><i class="bi-check-lg"></i> <span>Depositar Dinheiro</span></li>
              </ul>
              <div class="d-flex gap-2">
                <a class="btn w-100 btn-agent">
                  Direcção <i class="bi bi-geo-alt-fill"></i>
                </a>

                <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn w-100 btn-agent">
                  Marcar Reserva <i class="bi bi-clipboard-fill"></i>
                </button>

                @include('livewire.home.pages.modals.modal-reservation')
              </div>
            </div>
            <div class="badge-style text-bg-success">
              <span class="d-none">scp</span>
            </div>
          </div>
        @endforeach


        {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-12 pe-0 position-relative overflow-hidden rounded-2">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/features-light-1.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/features-light-2.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/features-light-3.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title pt-3 pb-2">Agente BAI - Morro Bento </h5>
            <ul class="list-unstyled">
              <li><i class="bi-check-lg"></i> <span>Levantar dinheiro</span></li>
              <li><i class="bi-x-lg"></i> <span>Reservar Levantamento</span></li>
              <li><i class="bi-x-lg"></i> <span>Depositar Dinheiro</span></li>
            </ul>
            <a class="btn">Direcção <i class="bi bi-geo-alt-fill"></i> </a>
            <a class="btn">Marcar Reserva <i class="bi bi-clipboard-fill"></i> </a>
          </div>
          <div class="badge-style text-bg-warning">
            <span class="d-none">scp</span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12 pe-0 position-relative overflow-hidden rounded-2">
          <div id="carouselExampleIndicators3" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/features-light-1.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/features-light-2.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/features-light-3.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title pt-3 pb-2">Agente BAI - Morro Bento </h5>
            <ul class="list-unstyled">
              <li><i class="bi-x-lg"></i> <span>Levantar dinheiro</span></li>
              <li><i class="bi-check-lg"></i> <span>Reservar Levantamento</span></li>
              <li><i class="bi-check-lg"></i> <span>Depositar Dinheiro</span></li>
            </ul>
            <a class="btn">Direcção <i class="bi bi-geo-alt-fill"></i> </a>
            <a class="btn">Marcar Reserva <i class="bi bi-clipboard-fill"></i> </a>
          </div>
          <div class="badge-style" style="background-color: yellow;">
            <span class="d-none">scp</span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12 pe-0 position-relative overflow-hidden rounded-2">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/features-light-1.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/features-light-2.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/features-light-3.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title pt-3 pb-2">Agente BAI - Morro Bento </h5>
            <ul class="list-unstyled">
              <li><i class="bi-x-lg"></i> <span>Levantar dinheiro</span></li>
              <li><i class="bi-x-lg"></i> <span>Reservar Levantamento</span></li>
              <li><i class="bi-x-lg"></i> <span>Depositar Dinheiro</span></li>
            </ul>
            <a class="btn">Direcção <i class="bi bi-geo-alt-fill"></i> </a>
            <a class="btn">Marcar Reserva <i class="bi bi-clipboard-fill"></i> </a>
          </div>
          <div class="badge-style text-bg-danger">
            <span class="d-none">scp</span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12 pe-0 position-relative overflow-hidden rounded-2">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/features-light-1.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/features-light-2.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/features-light-3.jpg" class="rounded-2 d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title pt-3 pb-2">Agente BAI - Morro Bento </h5>
            <ul class="list-unstyled">
              <li><i class="bi-x-lg"></i> <span>Levantar dinheiro</span></li>
              <li><i class="bi-x-lg"></i> <span>Reservar Levantamento</span></li>
              <li><i class="bi-x-lg"></i> <span>Depositar Dinheiro</span></li>
            </ul>
            <a class="btn">Direcção <i class="bi bi-geo-alt-fill"></i> </a>
            <a class="btn">Marcar Reserva <i class="bi bi-clipboard-fill"></i> </a>
          </div>
          <div class="badge-style text-bg-danger">
            <span class="d-none">scp</span>
          </div>
        </div> --}}
        
      </div>
    </div>

  </section>
  <!-- End Section Location -->

  @push('timepicker')
    <script>

      $(document).ready(function(){
        $('.timevalidate').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            minTime: '10',
            maxTime: '6:00pm',
            defaultTime: '11',
            startTime: '10:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
      });

    </script>
  @endpush

@endsection