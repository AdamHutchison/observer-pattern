<?php

use Observers\ObserverOne;
use Observers\ObserverThree;
use Observers\ObserverTwo;
use Subjects\Subject;

require('./vendor/autoload.php');

$subject = new Subject();

$observerOne = new ObserverOne();
$observerTwo = new ObserverTwo();
$observerThree = new ObserverThree();

$subject->registerObserver($observerOne);
$subject->registerObserver($observerTwo);
$subject->registerObserver($observerThree);

$subject->setValue('Adam is the best');
echo "Subject value is set to 'Adam is the best'<br><br>";

echo "observer one thinks the subject value is {$observerOne->getSubjectValue()}<br>";
echo "observer two thinks the subject value is {$observerTwo->getSubjectValue()}<br>";
echo "observer three thinks the subject value is {$observerThree->getSubjectValue()}<br><br>";

$subject->setValue('Adam thinks he\'s the best');
echo "Updated subject value to 'Adam thinks he's the best'<br><br>";

echo "observer one thinks the subject value is {$observerOne->getSubjectValue()}<br>";
echo "observer two thinks the subject value is {$observerTwo->getSubjectValue()}<br>";
echo "observer three thinks the subject value is {$observerThree->getSubjectValue()}<br>";
