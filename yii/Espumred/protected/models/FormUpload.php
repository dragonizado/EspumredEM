<?php

class FormUpload extends CFormModel{
	public $title;
	public $images;

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('title, match', 'patten'=>'|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|', 'message'=>'Error solo letra y numeros'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array(
				'images', 
				'file', 
				'type'=>'jpg,gif,png', 
				'wrongType'=>'Formatos permitidos jpg, gif y png', 
				'maxSize'=>1024*1024*5,
				'tooLarge'=>'El tamaño maximo permitido de la imagen son 5MB',
				'allowEmpy'=>true,
				),
		);
	}

}