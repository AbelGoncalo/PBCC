
<!-- Modal - Mark Reservation -->
<div class="modal fade modal-reservation" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Agente BAI - Morro Bento </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row">
                    <div class="mb-3 col-12 col-md-6 col-lg-6">
                      <label for="name" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="name" placeholder="Pacheco Barroso" aria-describedby="name" disabled>
                    </div>
                    <div class="mb-3 col-12 col-md-6 col-lg-6">
                      <label for="nif" class="form-label">NIF</label>
                      <input type="text" class="form-control" placeholder="008309510NE043" id="nif" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-12 col-md-6 col-lg-6">
                      <label for="exampleInputEmail1" class="form-label">Montante</label>
                      <input type="text" class="form-control" placeholder="Digite o montante" id="montante">
                    </div>
                    <div class="mb-3 col-12 col-md-6 col-lg-6">
                        <label for="date" class="form-label">Data</label>
                        @php
                            $dateNow = \Carbon\Carbon::now()->format('d/m/Y');
                        @endphp
                        <input type="text" value="{{$dateNow}}" class="form-control" id="date" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-12 col-md-6 col-lg-6">
                      <label for="horario" class="form-label">Horário</label>
                      <input type="time" class="form-control timevalidate" id="horario">
                    </div>
                    {{-- <div class="mb-3 col-12 col-md-6 col-lg-6">
                      <label for="exampleInputPassword1" class="form-label">Data</label>
                      <input type="date" class="form-control" id="date">
                    </div> --}}
                </div>
                {{-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-modal-reservation mt-2 py-2 px-5 hover">Marcar Reserva <i class="bi bi-clipboard-fill"></i> </button>
            </form>
        </div>
        
      </div>
    </div>
  </div>
