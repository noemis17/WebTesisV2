<!-- z_modal.blade.php -->
<!-- Large modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".frmVentas_modal">Large modal</button> -->

<div class="modal fade frmVentas_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

	  	<div class="modal-header text-white" style="background:  #004a93">
	        <h5 class="modal-title" id="exampleModalLabel">Datos de la Venta</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span class="text-white" aria-hidden="true">&times;</span>
	        </button>
	  	</div>

	  	<div class="modal-body">
 
			<form id="frmVentas_modificar" class="needs-validation">
				{{-- <input type="hidden" name="" id="nome_token_ventas_modal" required> --}}
				<div class="container">
					<div class="row" id="tabla_infor_venta">
					</div>
          <div class="row" >
						<div class="table-responsive">
								<table  class="display" id="venta_listado_ventas" style="width: 100%!important;">
								</table>
						</div>
					</div>
				</div>
			</form>

	  	</div>

	  	<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	  	</div>
    </div>
  </div>
</div>
