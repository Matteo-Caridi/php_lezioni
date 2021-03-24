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
        //se vero allora la task è scaudata
        //è una valutazione di verità
        echo ($passato->getTimestamp()< $today->getTimestamp());return $task > $today;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}
