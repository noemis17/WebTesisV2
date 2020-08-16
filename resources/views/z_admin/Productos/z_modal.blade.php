<!-- z_modal.blade.php -->
<!-- Large modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".frmProductos_modal">Large modal</button> -->

<div class="modal fade frmProductos_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

	  	<div class="modal-header text-white" style="background:  #004a93">
	        <h5 class="modal-title" id="exampleModalLabel">Datos del Producto</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span class="text-white" aria-hidden="true">&times;</span>
	        </button>
	  	</div>
 
	  	<div class="modal-body">

			<form id="frmProductos_modificar" class="needs-validation">
				{{-- <input type="hidden" name="" id="nome_token_productos_modal" required> --}}
				<div class="container">
					<div class="row" id="tabla_infor_producto">
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
