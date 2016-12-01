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
  /*  width: 400px;*/
    margin-left:4%; 
    margin-right:4%; 
    /*margin-top: 5%;*/
  }

  hr{
  	margin-top: 0px !important;
    margin-bottom: 15px !important;
  }

  .btn-su{
    margin-left:35%; 
  }

 /* .caja .panel-body{
    display:block !important;
  }*/
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

<div class="loading hidden" style="width:100%; text-align:center; height:55vh; margin-top:10%;">
	<div>
		<img src="<?php echo Yii::app()->baseUrl;?>/images/loading_Redondo_1.png" alt="Cargando contenido.." style="position:absolute; z-index:9999;">
		<img src="<?php echo Yii::app()->baseUrl;?>/images/loading_Redondo_3.png" alt="Cargando contenido.." class="fa-pulse">
	</div>
	<!-- <i class="fa fa-spinner fa-pulse fa-5x fa-fw" style="margin-top:10%;"></i><br> -->
	<span>Cargando contenido...</span>
</div>
<div class="panel titleforms">
  <div class="panel-body">
    <center><p class="note" style="font-size:23px;"><strong>Informe su dificultad</strong> <br> </p></center>
  </div>
</div>
<div class="form">
	<div class="panel">
		<div class="panel-body contenido">
      <div class="row">
        <div class="col-md-12">
          <center>
            <div>
              <p style="font-size:14px;">Informanos sobre tu incoveniente con el aplicativo,<br>  y asi podremos trabajar a una pronta solucion.</p>
              <hr>
            </div>
          </center>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div>
            <label for="frm_titulo">Titulo</label><br>
            <input type="text" name="frm_titulo" id="frm_titulo" class="form-control"> 
          </div>
          <br>
          <div>
            <label for="frm_area">Area</label><br>
            <input type="text" name="frm_area" id="frm_area" class="form-control">
          </div>
        </div>
        <div class="col-md-9">
          <label for="sugerencia">Problema</label><br>
          <textarea name="sugerencia" id="sugerencia" cols="108" rows="8" class="form-control"></textarea>
          <p id="Erroremail"></p>
          <div align="center" class="buttons">
        <button id="enviar_user">Enviar</button>
      </div>
        </div>
      </div>
			
			<br>
		</div><!-- panel-body -->
	</div><!-- panel -->
</div><!-- form -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<script>

	$(document).ready(function(){
		
		$('#enviar_user').click(function(){
			
			var sugerencia = $('#sugerencia').val();
      var titulo = $('#frm_titulo').val();
			var area = $('#frm_area').val();

			if(sugerencia !="" && titulo != "" && area != ""){
				$('.loading').removeClass('hidden');
				$('.form').addClass('hidden');
        $('.titleforms').addClass('hidden');
				$.ajax({
					url:'/yii/espumred/index.php?r=site/Enviopeticiones',
					data:{sugerencia:sugerencia,frm_titulo:titulo,frm_area:area},
					type:'get'
					}).done(function(done){
						$('.loading').addClass('hidden');
						$('.form').removeClass('hidden');
            $('.titleforms').removeClass('hidden');
						$('.contenido').html(done);
					}).error(function(){console.log('Error en el ajax de peticiones');});
			}else{
				alert('Hay campos sin llenar');
			}

			
		});

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