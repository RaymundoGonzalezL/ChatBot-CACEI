<?php

    $release_date = "2019-02-28";

    $data['input']['text'] = $_POST['message'];
    $json = json_encode($data, JSON_UNESCAPED_UNICODE);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://gateway.watsonplatform.net/assistant/api/v2/assistants/4117636a-0e67-4522-b088-30e8eff5e60f/sessions?version='.$release_date);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_USERPWD, 'apikey' . ':' . 'FhngtWPo4D3CWWGukDX-7HI8XE-8-U9-59mR6LLF2yRG');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    $result = json_decode($result, true);
    $id = $result['session_id'];
    //print_r($id);
    curl_close ($ch);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://gateway.watsonplatform.net/assistant/api/v2/assistants/4117636a-0e67-4522-b088-30e8eff5e60f/sessions/'.$id.'/message?version='.$release_date);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_USERPWD, 'apikey' . ':' . 'FhngtWPo4D3CWWGukDX-7HI8XE-8-U9-59mR6LLF2yRG');

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://gateway.watsonplatform.net/assistant/api/v2/assistants/4117636a-0e67-4522-b088-30e8eff5e60f/sessions/'.$id.'?version=2019-02-28');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

    curl_setopt($ch, CURLOPT_USERPWD, 'apikey' . ':' . 'FhngtWPo4D3CWWGukDX-7HI8XE-8-U9-59mR6LLF2yRG');

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
