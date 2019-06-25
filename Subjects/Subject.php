<?php

namespace Subjects;

use Interfaces\ObserverInterface;
use Interfaces\SubjectInterface;

class Subject implements SubjectInterface
{
    protected $observers = [];
    protected $value;

    public function registerObserver(ObserverInterface $observer): void
    {
        array_push($this->observers, $observer);
    }

    public function removeObserver(ObserverInterface $observer): void
    {
        unset($observer, $this->observers);
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->value);
        }
    }

    public function setValue($value)
    {
        $this->value = $value;
        $this->notifyObservers();
    }
}
