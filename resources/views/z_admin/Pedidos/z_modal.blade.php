<!-- Large modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".frmPedidos_modal">Large modal</button> -->

<div class="modal fade frmPedidos_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

	  	<div class="modal-header text-white" style="background:  #004a93">
	        <h5 class="modal-title" id="exampleModalLabel">Datos del Pedido</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span class="text-white" aria-hidden="true">&times;</span>
	        </button>
	  	</div>

	  	<div class="modal-body">

			<form id="frmPedidos_modificar" class="needs-validation">
				<input type="hidden" name="" id="nome_token_pedido_modal" required>
				<div class="container">
					<div class="row" id="tabla_infor_pedido">
					</div>
					<div class="row" id="tabla_infor_pedido_productos">
						<div class="table-responsive">
								<table  class="display" id="pedido_listado_productos" style="width: 100%!important;">
								</table>
						</div>
					</div>
				</div>
			</form>



	  	</div>

	  	<div class="modal-footer">

	  	</div>

    </div>
  </div>
</div>
