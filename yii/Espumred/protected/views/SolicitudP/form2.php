<?php
$nameAsesor = Yii::app()->user->Nombre . Yii::app()->user->Apellido;
?>
<style media="screen">
    .btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary, .btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover, .btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary.active {
        background-color: #b7b8b9 !important;
        border-color: #a2a7ad !important;
    }
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
                      <input type="text" class="form-control info" id="Obs_entrega" name="Obs_entrega">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="T_Pedido" class="col-sm-3 control-label">Tipo de Pedido:</label>
                    <div class="col-sm-9">
                      <select id="T_Pedido" name="T_Pedido" class="form-control">
                          <option value="0">---</option>
                          <option value="1">Espumas</option>
                          <option value="2">Colchones</option>
                          <option value="3">Muebles</option>
                          <option value="4">Otros</option>
                        </select> 
                    </div>
                  </div>

                  <div class="form-group" >
                    <label for="Apl_bon" class="col-sm-3 control-label ">Aplica bonificacion?</label>
                    <div class="col-sm-9">
                         <select id="Apl_bon" name="Apl_bon" class="form-control">
                          <option value="no">No</option>
                          <option value="si">Si</option>
                        </select> 
                    </div>
                  </div>
                  <div  class="hidden" id="otros_cap">
                  <div class="row">
                    <div class="col-sm-3">
                      <label for="inp_bonifi" class="col-sm-3 control-label">Bonificación</label>
                      <div class="col-sm-12" id="inp_bonifi">
                        <input type="text" class="form-control info"  name="formyiid[bonifi][]">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <label for="inp_Ref" class="col-sm-3 control-label">Referencia</label>
                      <div class="col-sm-12" id="inp_Ref">
                        <input type="text" class="form-control info"  name="formyiid[Ref][]">
                      </div>
                    </div>
                    <div class="col-sm-3 ">
                      <label for="inp_cod" class="col-sm-3 control-label">Código</label>
                      <div class="col-sm-12" id="inp_cod">
                        <input type="text" class="form-control info"  name="formyiid[cod][]" >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <label for="inp_cant" class="col-sm-3 control-label">Cantidad</label> <span class="btn btn-default" style="float: right; margin-left: 15px;" id="btnm1"><i class="fa fa-plus" aria-hidden="true"></i></span> <span id="btnm2" class="btn btn-default" style="float: right; "><i class="fa fa-minus" aria-hidden="true"></i></span>
                      <div class="col-sm-12" id="inp_cant">
                        <input type="text" class="form-control info"  name="formyiid[cant][]">
                      </div>
                    </div>
                  </div>
                  </div>
                  
                  <!--Fin de la parte del pedido-->
                    
                    <!-- botones -->
                    <div class="row" align="center">
                      <!-- <span class="btn btn-primary">Atras</span> -->
                      <span class="btn btn-primary" id="btns1" onclick="" disabled >Siguiente</span>
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
                              <div class="col-sm-9" id="render_cod_pro">
                              <?php
                                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                                         'name' => 'cod_pro',
                                         'id' => 'cod_pro',
                                         'htmlOptions'=>array('class'=>'form-control', 'placeholder'=>'####', 'required'),
                                         'sourceUrl' => $this->createUrl('ListarCodProductos'),
                                         'options' => array(
                                             'minLength' => '2',
                                             'showAnim' => 'fold',
                                             'select' => 'js:function(event,ui)
                                             
                                      { 
                                        
                                        $("#cod_pro").val(ui.item["id"]);
                                        $("#description").val(ui.item["label"]);
                                        //ajaxcalculator("solicitudP/Ajaxcalculator",ui.item["label"],ui.item["id"]);

                                       }',
                                             'search' => 'js:function(event, ui)
                                      { jQuery("#Condicionescomerciales_nombreCliente").val(0); }'
                                         ),
                                     ));
                              ?>
                              </div>
                          </div> 
                          <div class="form-group" >
                              <label for="description" class="col-sm-3 control-label">Descripción</label>
                              <div class="col-sm-9" id="render_description">
                              <?php
                                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                                         'name' => 'description',
                                         'id' => 'description',
                                         'htmlOptions'=>array('class'=>'form-control',),
                                         'sourceUrl' => $this->createUrl('ListarProductos'),
                                         'options' => array(
                                             'minLength' => '2',
                                             'showAnim' => 'fold',
                                             'select' => 'js:function(event,ui)    
                                      { 
                                        $("#cod_pro").val(ui.item["id"]);
                                        $("#description").val(ui.item["label"]);
                                        //ajaxcalculator("solicitudP/Ajaxcalculator",ui.item["label"],ui.item["id"]);
                                       }',
                                             'search' => 'js:function(event, ui)
                                      { jQuery("#Condicionescomerciales_nombreCliente").val(0); }'
                                         ),
                                     ));
                              ?>
                              </div>
                          </div>
                          <div id="frmajax">
                            <!--Parte de ajax-->
                          </div>
                          </div>
                  </div>            
              </div>
               <!-- / panel preview -->
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
                          <button type="button" class="btn btn-primary btn-block hidden" id="send_all_form">Enviar todos los pedidos</button>
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
    $('#btnm1').click(function(){
      $('#inp_bonifi').append('<input type="text" class="form-control info" style="margin-top:16px;" id="inp_bonifi" name="formyiid[bonifi][]">');
      $('#inp_Ref').append('<input type="text" class="form-control info" style="margin-top:16px;" id="inp_bonifi" name="formyiid[Ref][]">');
      $('#inp_cod').append('<input type="text" class="form-control info" style="margin-top:16px;" id="inp_bonifi" name="formyiid[cod][]">');
      $('#inp_cant').append('<input type="text" class="form-control info" style="margin-top:16px;" id="inp_bonifi" name="formyiid[cant][]">');
    });

    $('#btnm2').click(function(){
      $('#inp_bonifi :last-child').remove();
      $('#inp_Ref :last-child').remove();
      $('#inp_cod :last-child').remove();
      $('#inp_cant :last-child').remove();
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


function ajaxcalculator(url,datos,v = null){

        $.ajax({
          url:'/yii/espumred/index.php?r='+url,
          data:{Tajax:"Dragonizado",term:datos,V:v},
          type:'get'
          }).done(function(done){
            alert("Resultado de la consulta");
          }).error(function(){console.log('Error en el ajax de recuperacion');});
    
}

function AjaxPageControl(type){
  var url;

  
  url = "SolicitudP/AjaxPageControl";
  $.ajax({
            url:'/yii/espumred/index.php?r='+url,
            data:{Tajax:"Dragonizado",type:type},
            dataType:'html',
            type:'get'
            }).done(function(done){
              $("#frmajax").html(done);
           
            }).error(function(){console.log('Error en el ajax de AjaxPageControl ERROR L443');});
           
}

  function MO(id){
    $('#'+id).toggleClass('hidden');
  }

  $('#Apl_bon').change(function(){
    if($('#Apl_bon option:selected').val() === "si"){
      $('#otros_cap').removeClass('hidden');
    }else{
      $('#otros_cap').addClass('hidden');
    }
  });

  $("#T_Pedido").change(function(){
    console.log("SE HA MODIFICADO EL COMBOBOX");
    if($("#T_Pedido option:selected").val() === "0"){
         $("span#btns1").attr({"onclick":"null","disabled":true});
         AjaxPageControl(0);
    }else if($("#T_Pedido option:selected").val() === "1"){
         $("span#btns1").attr({"onclick":"btns1()","disabled":false});
         AjaxPageControl(1); 
    }else if($("#T_Pedido option:selected").val() === "2"){
         $("span#btns1").attr({"onclick":"btns1()","disabled":false});
         AjaxPageControl(2);   
    }else if($("#T_Pedido option:selected").val() === "3"){
         $("span#btns1").attr({"onclick":"btns1()","disabled":false});
         AjaxPageControl(3);     
    }else if($("#T_Pedido option:selected").val() === "4"){
         $("span#btns1").attr({"onclick":"btns1()","disabled":false});
         AjaxPageControl(4);
         
    }else{
         alert("Error en la pagina web.");
         var confirm = confirm("Recargar la pagina?");
          if(confirm){
           window.reload();
         }else{
           alert("El error persiste por favor recargar la pagina.");
         }
     }
     console.log("el valor del objeto seleccionado es: "+ $("#T_Pedido option:selected").val());
  });

  function calc_total(){
    var sum = 0;
    $('.input-amount').each(function(){
        sum += parseFloat($(this).text());
    });
    $(".preview-total").text(sum);
    $("#valor_total_pedido").val(sum);    
}


function validarDatos(codp){   
  var con = 0;   
  $(".preview-table > tbody tr").each(function(i, e){     
    console.log($(e).find("td:eq(3)").find("input").val());     
    if($(e).find("td:eq(1)").text()==codp){
      con++; 
    }
  });
  return con==0?true:false; 
}

function btns1(){

      $("#contenido1").slideToggle();
      $("#contenido2").slideToggle();
   
}

function btns2(){
     
      $("#contenido2").slideToggle();
      $("#contenido1").slideToggle();
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


    function btnn1(){
        var form_data = {};
        var form_post = {};
        var count_row = parseInt($('#contador_fila').val());
        var count_final;
        // conds = 0;
        // $('.finput').each(function(){
        //   if($(this).val()==''){
        //     $(this).parent('.form-group').addClass('has-error');
        //     console.log('Hay campos sin llenar');
        //     conds = conds + 1;
        //   }else{
        //     $(this).parent('.form-group').removeClass('has-error');
        //     console.log('yea');
        //   }
          
        // });

        
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
        $('#send_all_form').removeClass('hidden');
      
    } 

</script> 