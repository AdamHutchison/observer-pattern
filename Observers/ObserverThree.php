<?php

namespace Observers;

use Interfaces\ObserverInterface;

class ObserverThree implements ObserverInterface
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
