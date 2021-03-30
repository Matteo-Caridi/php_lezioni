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
        // $task -> getTimestamp();
        // echo $task-> format('d F Y')."\t";
        //se vero allora la task è scaudata
        //è una valutazione di verita
        if ($today->getTimestamp()>$task->getTimestamp()){
            // echo $task -> format ('d/m/Y');
            return false;
        }
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}
