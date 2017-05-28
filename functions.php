<?php
function get_public_ss($ss_id, $s_nr){
    $sheet_contents = [];
    for ($i = 1; $i <= $s_nr; $i++) {
        $sheet_content=file_get_contents('https://spreadsheets.google.com/feeds/list/'.$ss_id.'/'.$i.'/public/values?alt=json');
        array_push($sheet_contents, $sheet_content);
    }
    return $sheet_contents;
}

function getContent($file_id, $mime_type){
    
    if (!$file_id || !$mime_type) return 'Bad request';
    
    $client = new Google_Client();
    $client->setApplicationName('encalc');
    $client->setClientId(''); //to be set
    $client->setClientSecret(''); //to be set
    $guzzleClient = new \GuzzleHttp\Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), ));
    $client->setHttpClient($guzzleClient);
    $service = new Google_Service_Drive($client);

    $token = json_decode(file_get_contents('access-token.json'), true);
    $client->setAccessToken($token);

    if ($client->isAccessTokenExpired()) {
        $refreshTokenSaved = $client->getRefreshToken(); 
        $client->fetchAccessTokenWithRefreshToken($refreshTokenSaved);
        $accessTokenUpdated = $client->getAccessToken();
        $accessTokenUpdated['refresh_token'] = $refreshTokenSaved;
        file_put_contents('access-token.json', json_encode($accessTokenUpdated)); 
    }
    
    $results = $service->files->export($file_id,$mime_type);
    
    $content = strip_tags((string) $results->getBody(),'<p>,<span>,<img>');
    return $content;
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