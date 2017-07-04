<?php
function not_found($errno, $errstr, $errfile, $errline)
{
    status(SERVER_ERROR);
    return html('error_404.html.php');
}

function get_public_ss($ss_id, $s_nr){
    $sheet_contents = [];
    for ($i = 1; $i <= $s_nr; $i++) {
        $sheet_content=file_get_contents('https://spreadsheets.google.com/feeds/list/'.$ss_id.'/'.$i.'/public/values?alt=json');
        array_push($sheet_contents, $sheet_content);
    }
    return $sheet_contents;
}

function raw_to_structured($raw_data){
    /*$raw_data0 = json_decode($raw_data[0]);
    print_r($raw_data[0]);*/
    for ($i = 0; $i < count($raw_data); $i++) {
        $row_object = json_decode($raw_data[$i]);
        $structured_data_by_provider = [];
        for ($j = 0; $j < count($row_object->feed->entry); $j++) {
            foreach(explode(", ",$row_object->feed->entry[$j]->content->{'$t'}) as $value){
              $split = explode(": ",$value);
              $array2[$split[0]] = $split[1];
            }
            $structured_data_by_provider[] = $array2;
        }
        $structured_data[$row_object->feed->title->{'$t'}] = $structured_data_by_provider;
    }
    return $structured_data;
}

function csvToArray($csvString){
    $products = array();
    foreach (preg_split('/\r\n?|\n/', $csvString) as $csvLine) {
        $products[] = str_getcsv($csvLine);
    }
    return $products;
}

function debug_console($data) {
    $data = json_encode($data);
    echo "<script>console.log( '".$data."' );</script>";
}
