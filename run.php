<?php

require_once 'vendor/autoload.php';

$originator = new \Behavioral\Memento\Originator();
$caretaker  = new \Behavioral\Memento\Caretaker();

$originator->setState("On");
$caretaker->setMemento($originator->getMemento());
$originator->printState();

$originator->setState("Off");
$originator->printState();

$originator->getRestoringState($caretaker->getMemento());
$originator->printState();