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
    max-width: 400px;
    /*margin-left:36%;*/ 
    /*margin-top: 10%;*/
  }

  hr{
  	margin-top: 0px !important;
    margin-bottom: 15px !important;
  }

  .btn-su{
    margin-left:35%; 
  }

  .caja .panel-body{
    display:block !important;
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

<div class="loading hidden" style="width:100%; text-align:center; height:55vh; margin-top:10%;">
	<div>
		<img src="<?php echo Yii::app()->baseUrl;?>/images/loading_Redondo_1.png" alt="Cargando contenido.." style="position:absolute; z-index:9999;">
		<img src="<?php echo Yii::app()->baseUrl;?>/images/loading_Redondo_3.png" alt="Cargando contenido.." class="fa-pulse">
	</div>
	<!-- <i class="fa fa-spinner fa-pulse fa-5x fa-fw" style="margin-top:10%;"></i><br> -->
	<span>Cargando contenido...</span>
</div>

<div class="row" style="margin-top:10%;">
  <div class="col-md-3 hidden-xs hidden-sm"></div>
  <div class="col-md-6 col-xs-12" align="center">
    <div class="form">
      <div class="panel">
        <div class="panel-body">
          <center><p class="note" style="font-size:23px;"><strong>Recuperacion de contraseña</strong> <br> </p></center>
          <center><div>
            <p style="font-size:13px;">Aviso: Al ingresar el nombre de usuario se enviara la contraseña al correo asociado.</p>
            <hr>
            <label for="username"> Nombre de usuario*</label><br>
            <input name="username" id="username" type="text"><br>
            <p id="Errorusername"></p>
          </div></center>
          <!-- <center><div>
            <label for="email">Correo Electronico*</label><br>
            <input name="email" id="email" type="email"><br>
            <p id="Erroremail"></p>
          </div></center> -->
          <br>
          <div align="center" class="buttons">
            <button id="enviar_user">Enviar</button>
          </div>
          <br>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div><!-- form -->
  </div>
  <div class="col-md-3 hidden-xs hidden-sm"></div>
</div>
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
			
			var usuario = $('#username').val();
			// var correo = $('#email').val();

			if(usuario !=""){
				$('.loading').removeClass('hidden');
				$('.form').addClass('hidden');
				$.ajax({
					url:'/yii/espumred/index.php?r=site/Recuperacion',
					data:{user:usuario},
					type:'get'
					}).done(function(done){
						$('.loading').addClass('hidden');
						$('.form').removeClass('hidden');
						$('.panel-body').html(done);
					}).error(function(){console.log('Error en el ajax de recuperacion');});
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