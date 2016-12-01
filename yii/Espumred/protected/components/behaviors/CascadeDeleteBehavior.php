<?php 
class CascadeDeleteBehavior extends CActiveRecordBehavior
{
    public $relations = array();
    
    public function beforeDelete($event)
    {
        foreach($this->relations as $relation)
        {
            $objects = $this->Owner->getRelated($relation);
            
            if($objects !== null)
            {
                if(is_array($objects))
                {
                    foreach($objects as $object)
                    {
                        $object->delete();
                    }
                }
                else
                {
                    $objects->delete();
                }
            }
        }
        
        return true;
    }    
}
 ?>

