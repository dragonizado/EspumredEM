<?php
$nameAsesor = Yii::app()->user->Nombre . Yii::app()->user->Apellido;
?>
<style media="screen">
  .footermediaQuery{
    position: relative;
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

<div class="panel ">
  <div class="panel-body">
    <h1 style="text-align:center; margin:0;">Formato Para Solicitud de Pedidos</h1>
  </div>
</div>

<div class="loading hidden" style="width:100%; text-align:center; height:55vh; margin-top:10%;">
  <div>
    <img src="<?php echo Yii::app()->baseUrl;?>/images/loading_Redondo_1.png" alt="Cargando contenido.." style="position:absolute; z-index:9999;">
    <img src="<?php echo Yii::app()->baseUrl;?>/images/loading_Redondo_3.png" alt="Cargando contenido.." class="fa-pulse">
  </div>
  <!-- <i class="fa fa-spinner fa-pulse fa-5x fa-fw" style="margin-top:10%;"></i><br> -->
  <span>Cargando contenido...</span>
</div>

<div class="panel">
  <!-- <div class="panel-head" style="text-align:center;">
    <p>
      hola mundo
    </p>
  </div> -->
  <div class="panel-body " >
    <div class="table-responsive">
      <div class="container">
        <div class="row">
              <div class="col-sm-11">
                  <legend><?php echo $nameAsesor;?></legend>
              </div>
              <!-- panel preview -->
              <div class="col-sm-11 " id="contenido1">
                <form action="/yii/espumred/index.php?r=solicitudP/Mail" method="post" id="form_solicitud" name="form_solicitud" class="form-horizontal" >
                  <!--Parte del cliente-->
                  <div class="form-group">
                    <label for="nom_client" class="col-sm-3 control-label">Nombre Cliente</label>
                    <div class="col-sm-9">
                      <!-- <input type="text" class="form-control info" id="nom_client" name="nom_client" placeholder="Pepe" required> -->
                      <?php 

                      // $value = "hola";
                        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'nom_client',
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarClientes'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event,ui)
                                 
                          { 
                            // jQuery("#Condicionescomerciales_nombreCliente").val(ui.item["value"]);
                            $("#cod_client").val(ui.item["id"]);
                            // $("#cod_client").prop("disabled",true);

                           }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Condicionescomerciales_nombreCliente").val(0); }'
                             ),
                         ));
                       ?>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="cod_client" class="col-sm-3 control-label ">Código Cliente</label>
                    <div class="col-sm-9">
                        <!-- <input type="text" class="form-control info" id="cod_client" name="cod_client" placeholder="####" required> -->
                        <?php 
                        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'cod_client',
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarClientescod'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event,ui)
                                 
                          { 
                            // jQuery("#Condicionescomerciales_nombreCliente").val(ui.item["value"]);
                            $("#nom_client").val(ui.item["id"]);
                            // $("#nom_client").prop("disabled",true);

                           }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Condicionescomerciales_nombreCliente").val(0); }'
                             ),
                         ));
                       ?>
                        <input type="hidden"  id="contador_fila" name="contador_fila" value="1">
                    </div>
                  </div>
                  <!--Fin de la parte para el cliente-->

                  <!--Parte del pedido-->
                  <div class="form-group">
                    <label for="Obs_entrega" class="col-sm-3 control-label">Observaciones de entrega:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control info" id="Obs_entrega" name="Obs_entrega" required>
                    </div>
                  </div>

                  <div class="form-group" >
                    <label for="Apl_bon" class="col-sm-3 control-label ">Aplica bonificacion?</label>
                    <div class="col-sm-9">
                         <select id="Apl_bon" name="Apl_bon" class="form-control">
                          <option>---</option>
                          <option value="si">Si</option>
                          <option value="no">No</option>
                          <option value="otros">Otro</option>
                        </select> 
                    </div>
                  </div>

                  <div class="form-group hidden" id="otros_cap">
                    <label for="inp_otros" class="col-sm-3 control-label">Cual?</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control info" id="inp_otros" name="inp_otros" required>
                    </div>
                  </div>
                  <!--Fin de la parte del pedido-->
                    
                    <!-- botones -->
                    <div class="row" align="center">
                      <!-- <span class="btn btn-primary">Atras</span> -->
                      <span class="btn btn-primary" id="btns1">Siguiente</span>
                    </div>
                    <!-- fin de botones -->
                    <!--Valor total del pedido-->
                    <input type="hidden" id="valor_total_pedido" name="valor_total_pedido">
                </form>
              </div>
              
        </div>
<div id="contenido2" style="display: none;">
              <div class="col-sm-5">

                  <h4>Añadir pedido:</h4>
                  <div class="panel panel-default">
                      <div class="panel-body form-horizontal payment-form">
                         
                          <div class="form-group">
                              <label for="N_orden" class="col-sm-3 control-label">N° orden</label>
                              <div class="col-sm-9">
                                  <input type="number" class="form-control info finput" id="N_orden" name="N_orden" placeholder="####" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="cod_pro" class="col-sm-3 control-label">Código Producto</label>
                              <div class="col-sm-9">
                              <input type="text" class="form-control info finput" id="cod_pro" name="cod_pro" placeholder="####" required>
                                  <?php 
                                    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                                         'name' => 'idtbl_Productos',
                                         'htmlOptions'=>array('class'=>'form-control'),
                                         'sourceUrl' => $this->createUrl('ListarCodProductos'),
                                         'options' => array(
                                             'minLength' => '2',
                                             'showAnim' => 'fold',
                                             'select' => 'js:function(event,ui)
                                             
                                      { 
                                        // jQuery("#Condicionescomerciales_nombreCliente").val(ui.item["value"]);
                                        $("#nom_client").val(ui.item["id"]);
                                        // $("#nom_client").prop("disabled",true);

                                       }',
                                             'search' => 'js:function(event, ui)
                                      { jQuery("#Condicionescomerciales_nombreCliente").val(0); }'
                                         ),
                                     ));
                                   ?>
                              </div>
                          </div> 
                          <div class="form-group">
                              <label for="description" class="col-sm-3 control-label">Descripción</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control info finput" id="description" name="description">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="cantidad" class="col-sm-3 control-label">Cantidad</label>
                              <div class="col-sm-9">
                                  <input type="number" class="form-control info finput" id="cantidad" name="cantidad" placeholder="####"  required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="value_unit" class="col-sm-3 control-label">Valor Unitario</label>
                              <div class="col-sm-9">
                                  <input type="number" class="form-control info finput" id="value_unit" name="value_unit" placeholder="####"  required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="value_kl" class="col-sm-3 control-label">Valor Kilo</label>
                              <div class="col-sm-9">
                                  <input type="number" class="form-control info finput" id="value_kl" name="value_kl" placeholder="####" required>
                              </div> 
                          </div>
                          <div class="form-group">
                              <label for="descuentoP" class="col-sm-3 control-label">Porcentaje Descuento</label>
                              <div class="col-sm-9">
                                  <input type="number" class="form-control info finput" id="descuentoP" name="descuentoP" placeholder="#" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="value_descount" class="col-sm-3 control-label">Valor Descuento</label>
                              <div class="col-sm-9">
                                  <input type="number" class="form-control info finput" id="value_descount" name="value_descount" placeholder="####" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="amount" class="col-sm-3 control-label">Valor total</label>
                              <div class="col-sm-9">
                                  <input type="number" class="form-control info finput" id="amount" name="amount" placeholder="####" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="date" class="col-sm-3 control-label">Fecha de entrega</label>
                              <div class="col-sm-9">
                                  <input type="date" class="form-control info finput" id="date" name="date"  placeholder="##/##/####"required>
                              </div>
                          </div>   
                          <div class="form-group">
                              <div class="col-sm-6 text-left">
                              <button type="button" class="btn btn-primary" id="btns2">
                                <span class="glyphicon glyphicon-arrow-left" >Volver</span>
                              </button>
                              </div>
                              <div class="col-sm-6 text-right">
                                  <button type="button" class="btn btn-default preview-add-button">
                                      <span class="glyphicon glyphicon-plus"></span> Añadir
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>            
              </div> <!-- / panel preview -->
              <div class="col-sm-6">
                  <h4>Vista Preliminar:</h4>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="table-responsive">
                              <table class="table preview-table">
                                  <thead>
                                      <tr>
                                          <th>N° Orden</th>
                                          <th>Código Producto</th>
                                          <th>Valor Unitario</th>
                                          <th>Mas Detalles</th>
                                          <th>Eliminar</th>
                                      </tr>
                                  </thead>
                                  <tbody></tbody> <!-- preview content goes here-->
                              </table>
                          </div>                            
                      </div>
                  </div>
                  <div class="row text-right">
                      <div class="col-xs-12">
                          <h4>Total: <strong><span class="preview-total"></span></strong></h4>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-xs-12">
                          <hr style="border:1px dashed #dddddd;">
                          <button type="button" class="btn btn-primary btn-block" id="send_all_form">Enviar todos los pedidos</button>
                      </div>                
                  </div>
              </div>
            </div>




      </div>
    </div>
  </div>
</div>


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
    $("#btns1").click(function(){
      $("#contenido1").slideToggle();
      $("#contenido2").slideToggle();
    }); 

    $("#btns2").click(function(){
      $("#contenido2").slideToggle();
      $("#contenido1").slideToggle();
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

  function MO(id){
    $('#'+id).toggleClass('hidden');
  }

  $('#Apl_bon').change(function(){
    if($('#Apl_bon option:selected').val() === "otros"){
      $('#otros_cap').removeClass('hidden');
    }else{
      $('#otros_cap').addClass('hidden');
    }
  });

  function calc_total(){
    var sum = 0;
    $('.input-amount').each(function(){
        sum += parseFloat($(this).text());
    });
    $(".preview-total").text(sum);
    $("#valor_total_pedido").val(sum);    
}
$(document).on('click', '.input-remove-row', function(){ 
    var tr = $(this).closest('tr');
    tr.fadeOut(200, function(){
      tr.remove();
      calc_total()
  });
});

$('#send_all_form').click(function(){
  $("#form_solicitud").submit();
});

$(function(){
    $('.preview-add-button').click(function(){
        var form_data = {};
        var form_post = {};
        var count_row = parseInt($('#contador_fila').val());
        var count_final;
        // form_data["cod_client"] = $('.payment-form input[name="cod_client"]').val();
        // form_data["nom_client"] = $('.payment-form input[name="nom_client"]').val();
        form_data["N_orden"] = $('.payment-form input[name="N_orden"]').val();
        form_data["cod_pro"] = $('.payment-form input[name="cod_pro"]').val();
        form_data["amount"] = $('.payment-form input[name="amount"]').val();
        form_data["details-row"] = '<span class="glyphicon glyphicon-list-alt"></span>';
        form_data["remove-row"] = '<span class="glyphicon glyphicon-remove"></span>';

        // form_post["cod_cliente2"] = "<input type='hidden' name='cod_cliente2[]' id='cod_cliente2' value='"+ $('.payment-form input[name="cod_client"]').val()+"'>";
        // form_post["nom_client2"] = "<input type='hidden' name='nom_client2[]' id='nom_client2' value='" + $('.payment-form input[name="nom_client"]').val()+"'>";
        form_post["N_orden2"] = "<input type='hidden' name='Formyiis[N_orden2][]' id='N_orden2' value='" + $('.payment-form input[name="N_orden"]').val()+"' required>";
        form_post["cod_prod2"] = "<input type='hidden' name='Formyiis[cod_prod2][]' id='cod_prod2' value='" + $('.payment-form input[name="cod_pro"]').val()+"'required>";
        form_post["description2"] = "<input type='hidden' name='Formyiis[description2][]' id='description2' value='" + $('.payment-form input[name="description"]').val()+"'>";
        form_post["cantidad2"] = "<input type='hidden' name='Formyiis[cantidad2][]' id='cantidad2' value='" + $('.payment-form input[name="cantidad"]').val()+"' required>";
        form_post["value_unit2"] = "<input type='hidden' name='Formyiis[value_unit2][]' id='value_unit2' value='" + $('.payment-form input[name="value_unit"]').val()+"' required>";
        form_post["value_kl2"] = "<input type='hidden' name='Formyiis[value_kl2][]' id='value_kl2' value='" + $('.payment-form input[name="value_kl"]').val()+"' required>";
        form_post["descuentoP2"] = "<input type='hidden' name='Formyiis[descuentoP2][]' id='descuentoP2' value='" + $('.payment-form input[name="descuentoP"]').val()+"' required>";
        form_post["value_descount2"] = "<input type='hidden' name='Formyiis[value_descount2][]' id='value_descount2' value='" + $('.payment-form input[name="value_descount"]').val()+"'>";
        form_post["amount2"] = "<input type='hidden' name='Formyiis[amount2][]' id='amount2' value='" + $('.payment-form input[name="amount"]').val()+"'>";
        form_post["date2"] = "<input type='hidden' name='Formyiis[date2][]' id='date2' value='" + $('.payment-form input[name="date"]').val()+"' required>";

        var forms = $('<div id="textico'+count_row+'"></div>');
        var row = $('<tr></tr>');
        $.each(form_data, function( type, value ) {
            $('<td class="input-'+type+'"></td>').html(value).appendTo(row);
        });

        $.each(form_post, function(types,value){
          $('<div class="text-'+types+'"></div>').html(value).appendTo(forms);
        });
        count_final = count_row + 1;
        $('#contador_fila').val(count_final);
        $('#form_solicitud').append(forms);
        $('.preview-table > tbody:last').append(row); 
        calc_total();
    });  
});
</script> 