<style media="screen">
	.footermediaQuery{
		position:fixed;
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
		/*border-top: 1px solid #ddd !important;*/
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
<div class="panel" style="margin-left:70px;margin-right:70px;">
	<div class="panel-body">
		<center><h3>Ayuda en linea</h3></center>
	</div>
</div>
<div class="panel" style="margin-left:70px;margin-right:70px;">
	<div class="panel-body">
		<div >
			<p style="text-align:center;">Selecciona una opción.</p>
			<br>
			1. <a href="<?php echo Yii::app()->createUrl("site/recuperacionp"); ?>">He olvidado la contraseña.</a><br>
			2. <a href="<?php echo Yii::app()->createUrl("site/peticiones"); ?>">Notificar falla sobre el aplicativo.</a><br>
			3. <a href="<?php echo Yii::app()->createUrl("site/ngarantia"); ?>">Reportar una garantía.</a><br>
		</div>
	</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('body').css({'background-color':'#EBEEEE'});
    $('.panel').addClass('caja');
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
