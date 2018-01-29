<?php
class Profile {
    public $name, $data = array(), $score, $diff, $base;

    function __construct($name, array $importance) {
        $values = array(-1, 1); // Perception values
        $this->name = $name;
        foreach ($importance as $item => $point) {
            // Generate Random true/false for real Items
            $this->data[$item] = $values[mt_rand(0, 1)];
        }
        $this->base = array_sum($importance);
    }

    public function setScore($score, $diff) {
        $this->score = $score / $this->base;
        $this->diff = $diff / $this->base;
    }
}
?>