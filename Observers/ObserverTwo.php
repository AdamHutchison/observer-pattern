<?php

namespace Observers;

use Interfaces\ObserverInterface;

class ObserverTwo implements ObserverInterface
{
    protected $subjectValue;

    public function update($value): void
    {
        $this->subjectValue = $value;
    }

    public function getSubjectValue()
    {
        return $this->subjectValue;
    }
}
