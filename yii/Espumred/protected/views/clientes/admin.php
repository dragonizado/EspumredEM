<style media="screen">
	.footermediaQuery{
		
		width:100%;
		bottom:0px;
	}
	.footermediaQuerym{
		margin-top:9.5%;
	}
	.caja{
		box-shadow: 4px 4px 4px rgba(0,0,0,0.05) !important;
	}
	.table>thead>tr>th,
	.table>tbody>tr>th,
	.table>tfoot>tr>th,
	.table>thead>tr>td,
	.table>tbody>tr>td,
	.table>tfoot>tr>td
	{
		padding: 8px !important;
		line-height: 1.42857143 !important;
		vertical-align: top !important;
		border-top: 1px solid #ddd !important;
	}

	.table-bordered>thead>tr>th,
	.table-bordered>tbody>tr>th,
	.table-bordered>tfoot>tr>th,
	.table-bordered>thead>tr>td,
	.table-bordered>tbody>tr>td,
	.table-bordered>tfoot>tr>td
	{
    border: 1px solid #ddd;
	}
	.table-striped>tbody>tr:nth-child(odd)>td,
	.table-striped>tbody>tr:nth-child(odd)>th
	{
    background-color: rgba(243, 103, 22, 0.11) !important;
	}
	.radius{
		border-radius: 3px;
		margin-right: 4px;
	}
</style>

<div class="panel">
	<div class="panel-body">
		<h1 style="text-align:center; margin:0;">Administrador de Clientes</h1>
	</div>
</div>

<div class="panel">
	<!-- <div class="panel-head" style="text-align:center;">
		<p>
			hola mundo
		</p>
	</div> -->
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered" style="text-align:center; border: 1px solid #dddddd !important;" id="tabla">
				<thead>
					<tr>
						<td>Codigo</td>
						<td>Nombre Cliente</td>
						<?php 
							if(Yii::app()->user->rol==="Cartera"){
								echo "<td>Opciones</td>"; 
							}
						 ?>
						
					</tr>
				</thead>
				<tbody>
					<?php
					echo $Tabla;
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	$(document).ready(function(){
		$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});
		// $('section#Footer').css({'margin-top':'9.5%'});
		$('body').css({'background-color':'#EBEEEE'});
		$('.panel').addClass('caja');
		$('table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td').css({
			'border':'1px solid #ddd !important'
		});
		if ($(window).width() >= 820) {
			$('section#Footer').removeClass('footermediaQuerym');
			$('section#Footer').addClass('footermediaQuery');
		}
		$(window).resize(function(){
			 if ($(window).width() >= 820) {
				 $('section#Footer').removeClass('footermediaQuerym');
				 $('section#Footer').addClass('footermediaQuery');
			 }else if($(window).width() <= 766){
					$('section#Footer').removeClass('footermediaQuery');
					$('section#Footer').addClass('footermediaQuerym');

			 }
		});
	});
</script>
