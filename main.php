<?php

$GLOBALS['SQLUsername'] = 'royoosterlee';

// Function to get the client IP address
function getIP() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

// echo getIp();

function toSQL() {
    // CHANGE NAME FOR OTHER SERVER
    $conn = new mysqli('localhost', $GLOBALS['SQLUsername'], 'RoyOosterlee$', 'portfolio');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM `visitors` WHERE `ip` = '".getIp()."'";

    $result = $conn->query($query);


    if ($result->num_rows == 0) {
        $query = "INSERT INTO `visitors` (`ip`, `times`) VALUES ('".getIp()."', 1)";
        $res = $conn->query($query);
    } else {
        $row = $result->fetch_assoc();
        $query = "UPDATE `visitors` SET `times`=".((int)$row["times"]+1)." WHERE `ip` = '".getIp()."' AND `id` = ".$row["id"]."";
        $res = $conn->query($query);
    }

}

//
// if (!isset($_SESSION["visitor"]) && !isset($_POST["stats"])) {
//     toSQL();
//     $_SESSION["visitor"] = getIp();
// }

if (isset($_POST["stats"])) {
    // echo "<br>";
    // var_dump($_POST["stats"]);
    // echo "<br>";
    // var_dump(json_decode($_POST["stats"], true)["screen"]["width"]);
    $jsonArray = json_decode($_POST["stats"], true);

    // echo $jsonArray["target"]["children"];
    var_dump($jsonArray["target"]);


    $conn = new mysqli('localhost', $GLOBALS['SQLUsername'], 'RoyOosterlee$', 'portfolio');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //
    $ip = getIp();
    $data = $_POST["stats"];

    $stmt = $conn->prepare("INSERT INTO `actions` (ip, data) VALUES (?, ?)");
    $stmt->bind_param("ss", $ip, $data);

    $stmt->execute();

    // var_dump(htmlspecialchars($_POST["stats"]));

    $stmt->close();
    $conn->close();
    // else {
    //     $row = $result->fetch_assoc();
    //     $query = "UPDATE `visitors` SET `times`=".((int)$row["times"]+1)." WHERE `ip` = '".getIp()."'";
    //     $res = $conn->query($query);
    // }
}

$possibleIdentifiers = array(
    'pageon' => 0.1,
    'referrer' => 0.1,
    'previousSites' => 0.2,
    'browserName' => 1,
    'browserEngine' => 2,
    'browserVersion1a' => 10,
    'browserVersion1b' => 10,
    'browserLanguage' => 7,
    'browserOnline' => 0.1,
    'browserPlatform' => 1,
    'javaEnabled' => 1,
    'dataCookiesEnabled' => 1,
    'dataStorage' => 20,
    'hardwareConcurrency' => 2,
    'plugins' => 20,
    'speed' => 8,
    'sizeScreenW' => 10,
    'sizeScreenH' => 10,
    'sizeDocW' => 0.1,
    'sizeDocH' => 0.1,
    'sizeAvailW' => 10,
    'sizeAvailH' => 10,
    'scrColorDepth' => 30,
    'scrPixelDepth' => 30,
    'ip' => 50
);

if (isset($_POST["idata"])) {
    $data = json_decode($_POST["idata"], true);
    $data["ip"] = getIp();

    $conn = new mysqli('localhost', $GLOBALS['SQLUsername'], 'RoyOosterlee$', 'portfolio');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM `visitors` WHERE `identifydata` IS NOT NULL";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $score = idChecker(json_decode($row["identifydata"], true), $data, $possibleIdentifiers);

            // var_dump($score);
            if ($score["percentage"] > 75) {
                // l("Possible match!", "ID: ".$row["id"], $score["percentage"]."%");
                $stmt = $conn->prepare("UPDATE `visitors` SET `identifyscore`=(?),`identifydata`=(?),`times`=`times`+1 WHERE `ip` = (?) AND `id` = (?)");
                $ip = getIp();
                $id = $row["id"];
                $sc = json_encode($score);
                $idata = json_encode($data);
                $stmt->bind_param("ssss", $sc, $idata, $ip, $id);

                $stmt->execute();
            } else if ($score["percentage"] > 50) {
                $stmt = $conn->prepare("INSERT INTO `visitors` (identifyscore, identifydata, ip, times) VALUES (?, ?, ?, 1)");
                $ip = getIp();
                $id = $row["id"];
                $sc = json_encode($score);
                $idata = json_encode($data);
                $stmt->bind_param("sss", $sc, $idata, $ip);

                $stmt->execute();
                l("INSERT USER_50", $score["percentage"]);
                break;
            }
        }
    } else {
        $ip = getIp();
        $query = "SELECT * FROM `visitors` WHERE `ip` = '".$ip."'";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $data = json_encode($data);
            $stmt = $conn->prepare("UPDATE `visitors` SET `identifydata`=(?) WHERE `ip` = (?)");
            $stmt->bind_param("ss", $data, $ip);

            $stmt->execute();


            $stmt->close();
        } else {
            $stmt = $conn->prepare("INSERT INTO `visitors` (identifyscore, identifydata, ip, times) VALUES (?, ?, ?, 1)");
            $ip = getIp();
            $id = $row["id"];
            $sc = NULL;
            $idata = json_encode($data);
            $stmt->bind_param("sss", $sc, $idata, $ip);

            $stmt->execute();

            l("INSERT USER");
        }
    }

}




// for ($i=0; $i < count($possibleIdentifiers); $i++) {
//     var_dump($possibleIdentifiers);
//     echo "<script>console.warn('".$possibleIdentifiers[$i]."');</script>";
// }


function getMax($possibleIdentifiers) {
    $max = 0;
    foreach ($possibleIdentifiers as $key => $value) {
        // echo "<script>console.warn('".$key."', '".$value."');</script>";
        $max += (double)$value;
    }
    return $max;
}

function plus($data) {
    echo "<br><br>PLUS: <span style=\"color: blue;\">".$data."</span><br><br>";
}

function minus($data) {
    echo "<br><br>MINUS: <span style=\"color: red;\">".$data."</span><br><br>";
}

function l($data1 = "", $data2 = "", $data3 = "") {
    echo "<br><br><span style=\"font-size: 20px;color: red;\">LOG: </span><span style=\"color: blue;\">".$data1." | ".$data2." | ".$data3."</span><br><br>";
}

function idChecker($d,$data, $possibleIdentifiers) {
    $score = 0;
    foreach ($possibleIdentifiers as $iDataKey => $iDataValue) {
        if (isset($d[$iDataKey]) && isset($data[$iDataKey])) {
            if (gettype($d[$iDataKey]) == "array" && gettype($data[$iDataKey]) == "array") {
                foreach ($d[$iDataKey] as $key => $value) {
                    // l("KEY:", $key);
                    if (strval($d[$iDataKey][$key]) == strval($data[$iDataKey][$key])) {
                        $score += $iDataValue/count($d[$iDataKey]);
                        // plus($iDataValue/count($d[$iDataKey]));
                    } else {
                        $n = (float)$d[$iDataKey][$key];
                        $n2 = (float)$data[$iDataKey][$key];

                        // l($n, $n2);

                        if ($key == 'cpu') {
                            if (($n < $n2+0.3 && $n > $n2-0.3) || ($n < $n2-0.3 && $n > $n2+0.3)) {
                                $score += $iDataValue/count($d[$iDataKey]);
                            } else {
                                $score -= $iDataValue/count($d[$iDataKey]);
                                // l($d[$iDataKey][$key], $data[$iDataKey][$key]);
                                // minus($iDataValue/count($d[$iDataKey]));
                            }
                        } else if ($key == 'time') {
                            if (($n < $n2+0.3 && $n > $n2-0.3) || ($n < $n2-0.3 && $n > $n2+0.3)) {
                                $score += $iDataValue/count($d[$iDataKey]);
                            } else {
                                $score -= $iDataValue/count($d[$iDataKey]);
                                // l($d[$iDataKey][$key], $data[$iDataKey][$key]);
                                // minus($iDataValue/count($d[$iDataKey]));
                            }
                        } else {
                            $score -= $iDataValue/count($d[$iDataKey]);
                            // echo "<br>".gettype($d[$iDataKey]);
                            // l($d[$iDataKey][$key], $data[$iDataKey][$key]);
                            // minus($iDataValue/count($d[$iDataKey]));
                        }
                    }
                }
            } else {
                // echo "<br>".gettype($d[$iDataKey]);
                if ($d[$iDataKey] == $data[$iDataKey]) {
                    $score += $iDataValue;
                    // plus($iDataValue);
                } else {
                    $score -= $iDataValue;
                    // l($d[$iDataKey], $data[$iDataKey]);
                    // minus($iDataValue);
                }
            }
            // echo "<br><br><b>".$d[$iDataKey]."/".$data[$iDataKey]."</b><br><br>";

        } else {
            // echo l("Not matching: ",$iDataKey, $iDataValue);
            $score -= $iDataValue;
        }

    }

    // echo "<br><br><br><b><u>".$max." | ".$score."</u></b>";
    return ['percentage' => ((double)$score/(double)getMax($possibleIdentifiers))*100, 'score' => (double)$score, 'max' => (double)getMax($possibleIdentifiers)];
}


// ($num/$max)*100 = percentage
?>
