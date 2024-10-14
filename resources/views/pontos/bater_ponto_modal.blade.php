<div class="modal fade" id="baterPontoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content cor-bege">
            <div class="modal-header">
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">
                </button>

                
            </div>
            <div class="modal-body">
                <h3 class="mb-1">Horário</h3>
                <h2 class="mb-2"><strong
                        id="hora-modal">{{\Carbon\Carbon::now('America/Sao_Paulo')->format('H:i:s')}}</strong></h2>
                    <a href="{{route('bater-ponto.bater')}}" type="submit" class="btn btn-lg btn-primary rounded">
                        <i class="fas fa-clock me-2"></i>Registrar
                    </a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
