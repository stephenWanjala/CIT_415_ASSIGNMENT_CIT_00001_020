<?php

class DateDifferenceCalculator {
    private $startDate;
    private $endDate;

    // Constructor to initialize the start and end dates
    public function __construct($startDate, $endDate) {
        // Create DateTime objects for the start and end dates
        $this->startDate = new DateTime($startDate);
        $this->endDate = new DateTime($endDate);
    }

    // Method to calculate the difference between two dates
    public function calculateDifference() {
        // Use the diff method of DateTime to get the interval between the two dates
        $interval = $this->startDate->diff($this->endDate);

        // Return an associative array containing the difference in various units
        return [
            'years'   => $interval->y,
            'months'  => $interval->m,
            'days'    => $interval->d,
            'hours'   => $interval->h,
            'minutes' => $interval->i,
            'seconds' => $interval->s,
        ];
    }
}

// Sample dates
$startDate = '1981-11-03';
$endDate = '2013-09-04';

// Create an instance of DateDifferenceCalculator with the sample dates
$dateDifferenceCalculator = new DateDifferenceCalculator($startDate, $endDate);

// Calculate the difference between the dates
$difference = $dateDifferenceCalculator->calculateDifference();

// Output the result
echo "Difference: ";
echo "{$difference['years']} years, {$difference['months']} months, {$difference['days']} days, ";
echo "{$difference['hours']} hours, {$difference['minutes']} minutes, {$difference['seconds']} seconds.";

?>
