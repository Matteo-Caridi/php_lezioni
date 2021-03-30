<?php


class Task
{
    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired(): bool
    {
        //istanza della classe DateTime
        $today = new DateTime();
                
        //print_r(gettype($today)); --> ci darà object
        //get_class($today) --> DateTime

        $task = new DateTime($this->expirationDate);
     
        if($today->format('Ymd')===$task-> format('Ymd')){
            return false;
        }

        return ($today->getTimestamp()>$task->getTimestamp());
    
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}
