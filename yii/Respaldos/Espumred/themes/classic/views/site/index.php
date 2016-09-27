<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<?php

?>
<style>
  .rating-static {
  width: 60px;
  height: 16px;
  display: block;
  background: url('http://www.itsalif.info/blogfiles/rating/star-rating.png') 0 0 no-repeat;
}


</style>
			
                    <div class="row">
                    	 <div class="col-md-12">
                                <div class="row">
                                <div class="col-md-3"style="text-align:center;" >
                                 <img src="<?php echo Yii::app()->baseUrl;?>/images/laterales.png" width='320px' height="300px"></a>
                                </div>
                                  <div class="col-md-6" style="text-align:center;">
                                <?php if(isset(Yii::app()->user->rol)): ?>
                                    
                                         <?php if (Yii::app()->user->rol=='despacho'): ?>
                                     <img src="<?php echo Yii::app()->baseUrl;?>/images/ESPUMRED.png" width='150px' height="100px"></a>
                                         <?php endif ?>
                                     <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                            <?php if (Yii::app()->user->rol=='despacho'): ?>
                                     <img src="<?php echo Yii::app()->baseUrl;?>/images/ESPUMRED.png" width='150px' height="100px"></a>
                                         <?php endif ?>
                                         
                                    
                                  <?php  endif ?>
                                    <?php if (!isset(Yii::app()->user->rol)): ?>
                                    <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                         <?php endif ?>
                                  
                                    </div>
                                  <div class="col-md-3" style="text-align:center;">
                                  <img src="<?php echo Yii::app()->baseUrl;?>/images/laterales.png" width='320px' height="300px"></a>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                
