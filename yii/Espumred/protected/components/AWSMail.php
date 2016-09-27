<?php

require 'vendor/autoload.php';
use Aws\Ses\SesClient;

class AWSMail extends CApplicationComponent{
	
	public function sendMail($email,$message,$subject){
            
                $client = SesClient::factory(array(
                'key'    => 'AKIAJXIDTPSPNECQ4GWQ',
                'secret' => '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',
                'region' => 'us-east-1'
            ));


            $result = $client->sendEmail(array(
                    // Source is required
                    'Source' => 'info@socialscorecard.co',
                    // Destination is required
                    'Destination' => array(
                        'ToAddresses' => array($email),
                       // 'CcAddresses' => array('string', ... ),
                        //'BccAddresses' => array('string', ... ),
                    ),
                    // Message is required
                    'Message' => array(
                        // Subject is required
                        'Subject' => array(
                            // Data is required
                            'Data' => $subject,
                           // 'Charset' => 'string',
                        ),
                        // Body is required
                        'Body' => array(
                            'Text' => array(
                                // Data is required
                                'Data' => $message,
                              //  'Charset' => 'string',
                            ),
                            'Html' => array(
                                // Data is required
                                'Data' => $message,
                             //   'Charset' => 'string',
                            ),
                        ),
                    ),
                   // 'ReplyToAddresses' => array('string', ... ),
                   // 'ReturnPath' => 'string',
                ));
	  
		
		
	}


        
        /**
	 * Prepares the message to Sends a notification [EJEMPLO PARA USO DE PLANTILLAS Y NOTIFICACIONES]
	 * @param string $type newAssignment, newUser, newComment, newRequestUpdate, delegatedAssignment, remindStatusUpdate
         * @param string $entityId GUID that generates de notification used to compose
         * @param string $generatedByUserCompleteName 
         * @param string $plainTextPassword generated password addNew user
         * @param string $relEntityId
         * @param string $relEntityName
	 */
        public function sendNotification($type, $entityId, $entityName, $generatedByUserCompleteName, $plainTextPassword="", $relEntityId="", $relEntityName=""){
            
            $EntityModel = "";
            $EntityReadableName ="";
            $EntityReadableNameWA="";
            $UserModel ="";
            $TemplateContent = "";
            $TemplateFilePath= "templates/notification_en_us.tpl";
            
            if(file_exists($TemplateFilePath)){
                $TemplateContent .= file_get_contents($TemplateFilePath,  FILE_USE_INCLUDE_PATH);
            }
            
            switch($entityName){
                
                case "tasks":
                    
                    $EntityModel = Tasks::model()->findByPk($entityId);
                    $EntityReadableName = "a task";
                    $EntityReadableNameWA ="Task";
                    
                    break;
                case "objectives":
                    $EntityModel = Objectives::model()->findByPk($entityId);
                    $EntityReadableName = "an objective";
                    $EntityReadableNameWA ="Objective";
                    break;
                
                case "risks":
                    $EntityModel = Risks::model()->findByPk($entityId);
                    $EntityReadableName = "a risk";
                    $EntityReadableNameWA ="Risk";
                    break;
                
                case "indicators":
                    $EntityModel = Indicators::model()->findByPk($entityId);
                    $EntityReadableName = "a metric";
                    $EntityReadableNameWA ="Metric";
                    break;
                
                case "initiatives":
                    $EntityModel = Initiatives::model()->findByPk($entityId);
                    $EntityReadableName = "an initiative";
                    $EntityReadableNameWA ="Initiative";
                    break;
                
                case "users":
                    $EntityModel = Users::model()->findByPk($entityId);
                    
                    break;
                case "activityFeed":
                    $EntityModel = ActivityFeed::model()->findByPk($entityId);
                    $EntityReadableNameWA ="Comment";
                    break;
                
                case "statusUpdate":
                    $EntityModel = StatusUpdate::model()->findByPk($entityId);
                    break;
                
                                
                
            }
            
            switch ($type){
                
                case "newAssignment":
                    if(isset($EntityModel->assignedUser)){
                        $AssignedUserName = $EntityModel->assignedUser->first_name;
                        $AssignedUserEmail = $EntityModel->assignedUser->email;
                        $MessageSubject = $generatedByUserCompleteName." has assigned ".$EntityReadableName." to you";
                        $MessageHTMLBody = str_replace("%subject%", $MessageSubject, $TemplateContent);
                        $MessageHTMLBody = str_replace("%user_complete_name%", $AssignedUserName, $MessageHTMLBody);
                        $MessageHTMLBody = str_replace("%item_type%", $EntityReadableNameWA.": ".$EntityModel->name, $MessageHTMLBody);
                        $MessageHTMLBody = str_replace("%action%", "assigned", $MessageHTMLBody);
                        $MessageHTMLBody = str_replace("%message%", " ", $MessageHTMLBody);
                        $MessageHTMLBody = str_replace("%link%", $EntityModel->assignedUser->is_manager == 1 ? "check ".CHtml::link('here', Yii::app()->createAbsoluteUrl($entityName."/view",array("id"=>$entityId))) : "", $MessageHTMLBody);
                        
                                                
                        $this->sendMail($AssignedUserEmail, $MessageHTMLBody, $MessageSubject);
                        
                        
                    }
                    
                    
                    break;
                
                case "newUser":
                    $AssignedUserName = $EntityModel->first_name;
                    $AssignedUserEmail = $EntityModel->email;
                    $AssignedUserPassword = $plainTextPassword;
        
                    $MessageSubject = $generatedByUserCompleteName." has invited you to join SocialScorecard.co";
                    $MessageHTMLBody = str_replace("%subject%", $MessageSubject, $TemplateContent);
                    $MessageHTMLBody = str_replace("%user_complete_name%", $AssignedUserName, $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%action%", "SocialScorecard.CO new user information", $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%item_type%", " ", $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%message%", "<p>".$AssignedUserName.", you can access using the above Login information "."</br>User id: ".$AssignedUserEmail."</br>Password: ".$AssignedUserPassword."</p>", $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%link%", " click ". CHtml::link('here', Yii::app()->createAbsoluteUrl('users/portal'))." to acces the application", $MessageHTMLBody);
                                      
                   
                    $this->sendMail($AssignedUserEmail, $MessageHTMLBody, $MessageSubject);
                    break;
                
                case "newComment":
                    //$AssignedUserName = $EntityModel->first_name;
                    $MessageSubject = $generatedByUserCompleteName." commented something thay may concern to you";
                                      
                    $MessageHTMLBody = str_replace("%subject%", $MessageSubject, $TemplateContent);
                    $MessageHTMLBody = str_replace("%item_type%", "New ".$EntityReadableNameWA, $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%action%", "", $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%message%", $EntityModel->description, $MessageHTMLBody);
                    
                    
                    $Subscribers = Subscribers::model()->findSubscribers($relEntityName, $relEntityId);
                    
                   
                    foreach($Subscribers as $i => $item){
                         $MessageHTMLBody = str_replace("%link%", $item->bpmUsers->is_manager == 1 ? "check ".CHtml::link('here', Yii::app()->createAbsoluteUrl($EntityModel->entity_name."/view",array("id"=>$EntityModel->entity_id))) : "", $MessageHTMLBody);
                          $MessageHTMLBody = str_replace("%user_complete_name%", $item->bpmUsers->first_name, $MessageHTMLBody);
                         
                          $AssignedUserEmail = $item->bpmUsers->email;
                         $this->sendMail($AssignedUserEmail, $MessageHTMLBody, $MessageSubject);
                    }
                        
                            
                    
                    break;
                
                case "newRequestUpdate":
                    $AssignedUserName = $EntityModel->assignedUser->first_name;
                    $AssignedUserEmail = $EntityModel->assignedUser->email;
                    $MessageSubject = $generatedByUserCompleteName. " has requested an status update";
                    
                    $MessageHTMLBody = str_replace("%subject%", $MessageSubject, $TemplateContent);
                    $MessageHTMLBody = str_replace("%user_complete_name%", $AssignedUserName, $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%item_type%", "Request Update".": ".$EntityModel->name, $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%action%", "(".$EntityModel->date_expected.")", $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%message%", $EntityModel->request_description, $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%link%", "You can answer to the requested information ".CHtml::link('here', Yii::app()->createAbsoluteUrl($entityName."/statusUpdateExt",array("id"=>$entityId))) , $MessageHTMLBody);
                    
                    $this->sendMail($AssignedUserEmail, $MessageHTMLBody, $MessageSubject);
                    
                    break;
                
                case "delegatedAssignment":
                    
                    $AssignedUserName = $EntityModel->assignedUser->first_name;
                    $AssignedUserEmail = $EntityModel->assignedUser->email;
                    $MessageSubject = $generatedByUserCompleteName. " has delegated ".$EntityReadableName. " to you";
                    
                    $MessageHTMLBody = str_replace("%subject%", $MessageSubject, $TemplateContent);
                    $MessageHTMLBody = str_replace("%user_complete_name%", $AssignedUserName, $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%item_type%", $EntityReadableNameWA.": ".$EntityModel->name, $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%action%", "delegated", $MessageHTMLBody);
                    
                    $MessageHTMLBody = str_replace("%message%", " ", $MessageHTMLBody);
                    $MessageHTMLBody = str_replace("%link%", $EntityModel->assignedUser->is_manager == 1 ? "check ".CHtml::link('here', Yii::app()->createAbsoluteUrl($entityName."/view",array("id"=>$entityId))) : "", $MessageHTMLBody);
                        
                    $MessageBody = $AssignedUserName. ",  ".$EntityModel->name. " has been delegated to you";
                    $MessageBody .= $EntityModel->assignedUser->is_manager == 1 ? " check ".CHtml::link('here', Yii::app()->createAbsoluteUrl($entityName."/view",array("id"=>$entityId))) : "";
                    $this->sendMail($AssignedUserEmail, $MessageHTMLBody, $MessageSubject); 
                    
                    
                    break;
                
                case "remindStatusUpdate":
                    
                    break;
                
                
            }
            
            
        }
	
}