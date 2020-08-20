<?php

namespace Behavioral\Memento;

require_once 'vendor/autoload.php';

$originator = new Originator();
$caretaker  = new Caretaker($originator);

try {
    $originator->setState("state is on");
    $caretaker->save();
    echo "{$originator->getState()} || {$originator->getDate()}\n";

    $originator->setState("state is off");
    $caretaker->save();
    echo "{$originator->getState()} || {$originator->getDate()}\n";

    $originator->setState("state is empty");
    echo "{$originator->getState()} || {$originator->getDate()}\n";

    $caretaker->undo();
    echo "Restoring state... {$originator->getState()} || {$originator->getDate()}\n";

    $caretaker->undo();
    echo "Restoring state... {$originator->getState()} || {$originator->getDate()}\n";
} catch (\Throwable $th) {
    printf("%s", "Caught exception: " . $th->getMessage() . "\n");
}
