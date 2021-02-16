<?php

include_once("scramblerf.php");
$mode = "encode";

if(isset($_GET["task"]) && $_GET["task"] =! ""){
    $mode = $_GET["task"];
}

$key = "abcdefghijklmnopqrestuvwsyz1234567890";

if("key" == $mode){
    $key_original  = str_split($key);
    shuffle($key_original);
    $key  = join("", $key_original);
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Data Scrambler</title>
</head>

<body>

    <div class="data-scrambler">
        <div class="container">
            <div class="row">
                <h3 class="mt-5">DatA Scrambler</h3>
                <p>Use This application to scramble you data</p>
                <div class="keys mt-5">
                    <a href="/index.php?task=encode" class="link-item">Encode</a>
                    <a href="/index.php?task=decode" class="link-item">Decode</a>
                    <a href="/index.php?task=key" class="link-item">Generate</a>
                </div>
                <form action="#" class="mt-4">
                    <div class="form-group">
                        <label for="#key">Key</label>
                        <input type="text" class="form-control" id="key" <?php displayKey($key); ?> >
                    </div>
                    <div class="form-group">    
                        <label for="#data">Data</label>
                        <input type="text" class="form-control" id="data">
                    </div>
                    <div class="form-group">
                        <label for="#result">Result</label>
                        <input type="text" class="form-control" id="result">
                    </div>
                    <button type="submit" class="btn btn-primary px-4 mt-3">Do It</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>