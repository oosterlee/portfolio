<?php

include_once "./Profile.php";
include_once "./Perceptron.php";


$features = array(
    'Real IP address' => .5,
    'Used proxy IP address' => .4,
    'HTTP Cookies' => .9,
    'Session Cookies' => .6,
    '3rd Party Cookies' => .6,
    'Flash Cookies' => .7,
    'PDF Bug' => .2,
    'Flash Bug' => .2,
    'Java Bug' => .2,
    'Frequent Pages' => .3,
    'Browsers Finger Print' => .3,
    'Installed Plugins' => .2,
    'URL' => .5,
    'Cached PNG' => .4,
    'System Fonts Detection' => .6,
    'Localstorage' => .8,
    'Geolocation' => .6,
    'AOLTR' => .4,
    'Network Information API' => .3,
    'Battery Status API' => .2
);

// Get RNA Lables
$labels = array();
$n = 1;
foreach ($features as $k => $v) {
    $labels[$k] = "x" . $n;
    $n ++;
}

// Create Users
$users = array();
for($i = 0, $name = "A"; $i < 5; $i ++, $name ++) {
    $users[] = new Profile($name, $features);
}

// Generate Unknown User
$unknown = new Profile("Unknown", $features);

// Generate Unknown RNA
$unknownRNA = array(
    0 => array("o" => 1),
    1 => array("o" => - 1)
);

// Create RNA Values
foreach ($unknown->data as $item => $point) {
    $unknownRNA[0][$labels[$item]] = $point;
    $unknownRNA[1][$labels[$item]] = (- 1 * $point);
}

// Start Perception Class
$perceptron = new Perceptron();

// Train Results
$trainResult = $perceptron->train($unknownRNA, 1, 1);

// Find matches
foreach ($users as $name => &$profile) {
    // Use shorter labels
    $data = array_combine($labels, $profile->data);
    if ($perceptron->testCase($data, $trainResult) == true) {
        $score = $diff = 0;

        // Determing the score and diffrennce
        foreach ($unknown->data as $item => $found) {
            if ($unknown->data[$item] === $profile->data[$item]) {
                if ($profile->data[$item] > 0) {
                    $score += $features[$item];
                } else {
                    $diff += $features[$item];
                }
            }
        }
        // Ser score and diff
        $profile->setScore($score, $diff);
        $matchs[] = $profile;
    }
}

// Sort bases on score and Output
if (count($matchs) > 1) {
    usort($matchs, function ($a, $b) {
        // If score is the same use diffrence
        if ($a->score == $b->score) {
            // Lower the diffrence the better
            return $a->diff == $b->diff ? 0 : ($a->diff > $b->diff ? 1 : - 1);
        }
        // The higher the score the better
        return $a->score > $b->score ? - 1 : 1;
    });

    echo "<br />Possible Match ", implode(",", array_slice(array_map(function ($v) {
        return sprintf(" %s (%0.4f|%0.4f) ", $v->name, $v->score,$v->diff);
    }, $matchs), 0, 2));
} else {
    echo "<br />No match Found ";
}


echo "<pre>";
print_r($matchs[0]);

?>