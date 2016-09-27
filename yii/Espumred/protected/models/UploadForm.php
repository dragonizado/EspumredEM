<?php

class UploadForm extends CFormModel {
    public $image;
    public $idProducto;
 
    public function rules() {
        return array(
            array('image', 'file', 'types' => 'jpg, jpeg'),
        );
    }
        
}
