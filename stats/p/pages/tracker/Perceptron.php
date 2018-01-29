<?php

class Perceptron {
    private $w = array();
    private $dw = array();
    public $debug = false;

    private function initialize($colums) {
        // Initialize perceptron vars
        for($i = 1; $i <= $colums; $i ++) {
            // weighting vars
            $this->w[$i] = 0;
            $this->dw[$i] = 0;
        }
    }

    function train($input, $alpha, $teta) {
        $colums = count($input[0]) - 1;
        $weightCache = array_fill(1, $colums, 0);
        $checkpoints = array();
        $keepTrainning = true;

        // Initialize RNA vars
        $this->initialize(count($input[0]) - 1);
        $just_started = true;
        $totalRun = 0;
        $yin = 0;

        // Trains RNA until it gets stable
        while ($keepTrainning == true) {
            // Sweeps each row of the input subject
            foreach ($input as $row_counter => $row_data) {
                // Finds out the number of columns the input has
                $n_columns = count($row_data) - 1;

                // Calculates Yin
                $yin = 0;
                for($i = 1; $i <= $n_columns; $i ++) {
                    $yin += $row_data["x" . $i] * $weightCache[$i];
                }

                // Calculates Real Output
                $Y = ($yin <= 1) ? - 1 : 1;

                // Sweeps columns ...
                $checkpoints[$row_counter] = 0;
                for($i = 1; $i <= $n_columns; $i ++) {
                    /** DELTAS **/
                    // Is it the first row?
                    if ($just_started == true) {
                        $this->dw[$i] = $weightCache[$i];
                        $just_started = false;
                        // Found desired output?
                    } elseif ($Y == $row_data["o"]) {
                        $this->dw[$i] = 0;
                        // Calculates Delta Ws
                    } else {
                        $this->dw[$i] = $row_data["x" . $i] * $row_data["o"];
                    }

                    /** WEIGHTS **/
                    // Calculate Weights
                    $this->w[$i] = $this->dw[$i] + $weightCache[$i];
                    $weightCache[$i] = $this->w[$i];

                    /** CHECK-POINT **/
                    $checkpoints[$row_counter] += $this->w[$i];
                } // END - for

                foreach ($this->w as $index => $w_item) {
                    $debug_w["W" . $index] = $w_item;
                    $debug_dw["deltaW" . $index] = $this->dw[$index];
                }

                // Special for script debugging
                $debug_vars[] = array_merge($row_data, array(
                    "Bias" => 1,
                    "Yin" => $yin,
                    "Y" => $Y
                ), $debug_dw, $debug_w, array(
                    "deltaBias" => 1
                ));
            } // END - foreach

            // Special for script debugging
             $empty_data_row = array();
            for($i = 1; $i <= $n_columns; $i ++) {
                $empty_data_row["x" . $i] = "--";
                $empty_data_row["W" . $i] = "--";
                $empty_data_row["deltaW" . $i] = "--";
            }
            $debug_vars[] = array_merge($empty_data_row, array(
                "o" => "--",
                "Bias" => "--",
                "Yin" => "--",
                "Y" => "--",
                "deltaBias" => "--"
            ));

            // Counts training times
            $totalRun ++;

            // Now checks if the RNA is stable already
            $referer_value = end($checkpoints);
            // if all rows match the desired output ...
            $sum = array_sum($checkpoints);
            $n_rows = count($checkpoints);
            if ($totalRun > 1 && ($sum / $n_rows) == $referer_value) {
                $keepTrainning = false;
            }
        } // END - while

        // Prepares the final result
        $result = array();
        for($i = 1; $i <= $n_columns; $i ++) {
            $result["w" . $i] = $this->w[$i];
        }

        $this->debug($this->print_html_table($debug_vars));

        return $result;
    } // END - train
    function testCase($input, $results) {
        // Sweeps input columns
        $result = 0;
        $i = 1;
        foreach ($input as $column_value) {
            // Calculates teste Y
            $result += $results["w" . $i] * $column_value;
            $i ++;
        }
        // Checks in each class the test fits
        return ($result > 0) ? true : false;
    } // END - test_class

    // Returns the html code of a html table base on a hash array
    function print_html_table($array) {
        $html = "";
        $inner_html = "";
        $table_header_composed = false;
        $table_header = array();

        // Builds table contents
        foreach ($array as $array_item) {
            $inner_html .= "<tr>\n";
            foreach ( $array_item as $array_col_label => $array_col ) {
                $inner_html .= "<td>\n";
                $inner_html .= $array_col;
                $inner_html .= "</td>\n";

                if ($table_header_composed == false) {
                    $table_header[] = $array_col_label;
                }
            }
            $table_header_composed = true;
            $inner_html .= "</tr>\n";
        }

        // Builds full table
        $html = "<table border=1>\n";
        $html .= "<tr>\n";
        foreach ($table_header as $table_header_item) {
            $html .= "<td>\n";
            $html .= "<b>" . $table_header_item . "</b>";
            $html .= "</td>\n";
        }
        $html .= "</tr>\n";

        $html .= $inner_html . "</table>";

        return $html;
    } // END - print_html_table

    // Debug function
    function debug($message) {
        if ($this->debug == true) {
            echo "<b>DEBUG:</b> $message";
        }
    } // END - debug
} // END - class

?>