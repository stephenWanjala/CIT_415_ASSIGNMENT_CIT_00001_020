<?php

class PieSplitter {
    private $totalSlices;
    private $numRecipients;
    private $slicesPerPerson;

    public function __construct($totalSlices, $numRecipients, $slicesPerPerson) {
        $this->totalSlices = $totalSlices;
        $this->numRecipients = $numRecipients;
        $this->slicesPerPerson = $slicesPerPerson;
    }

    public function canSplitFairly() {
        // Check if the total slices are evenly divisible by both recipients and slices per person
        return ($this->totalSlices % $this->numRecipients == 0) && ($this->totalSlices % $this->slicesPerPerson == 0);
    }
}

// Example usage
$totalSlices = 8;
$numRecipients = 4;
$slicesPerPerson = 2;

$pieSplitter = new PieSplitter($totalSlices, $numRecipients, $slicesPerPerson);

if ($pieSplitter->canSplitFairly()) {
    echo "It is possible to split the pie fairly!";
} else {
    echo "It is not possible to split the pie fairly.";
}

?>
