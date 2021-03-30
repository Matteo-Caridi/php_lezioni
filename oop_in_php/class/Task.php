<?php


class Task
{
    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired(DateTime $expiration): bool
    {
        //istanza della classe DateTime
        $today = new DateTime();
                
        //print_r(gettype($today)); --> ci darà object
        //get_class($today) --> DateTime
        try {
            $task = new DateTime($this->expirationDate);
            //verifichiamo se la scadenza è oggi o no
            if($expiration->format('Ymd')===$task-> format('Ymd')){
                return false;
            }
    
            return ($today->getTimestamp()>$task->getTimestamp());
            
        } catch (\Throwable $th) {
            return $th;
        }
    
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}
