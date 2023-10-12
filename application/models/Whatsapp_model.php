<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Whatsapp_model extends CI_Model
{
    public function send_message($no_wa, $message)
    {
        $token = $this->Setting_model->integrasi();
        $ch = curl_init();
        $data = array(
            'recipient_type' => 'individual',
            'to' => $no_wa,
            'type' => 'text',
            'text' => array(
                'body' => $message
            )
        );
        $json_data = json_encode($data);

        curl_setopt_array($ch, array(
            CURLOPT_URL => $token['url_api'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $json_data,
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $token['wagw']
            ),
        ));

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            // handle cURL error
            $response = curl_error($ch);
        }

        curl_close($ch);

        return $response;
    }
}
