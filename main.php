<?php

namespace Behavioral\Memento;

require_once 'vendor/autoload.php';

$originator = new Originator();
$caretaker  = new Caretaker($originator);

try {
    $originator->setState("on");
    $caretaker->save();
    $originator->printLog("State is ");

    $originator->setState("off");
    $caretaker->save();
    $originator->printLog("State is ");

    $originator->setState("empty");
    $originator->printLog("State is ");

    $caretaker->undo();
    $originator->printLog("Restoring state... ");

    $caretaker->undo();
    $originator->printLog("Restoring state... ");
} catch (\Throwable $th) {
    printf("%s", "Caught exception: " . $th->getMessage() . "\n");
}
