<?php

class UploadFormFactura extends CFormModel {
    public $image;
    public $id;
 
    public function rules() {
        return array(
            array('image', 'file', 'types' => 'jpg, jpeg, png, pdf'),
        );
    }
    
    
}
