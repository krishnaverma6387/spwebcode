<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once './vendor/aitool/autoload.php';

use GuzzleHttp\Client;

class AI_Model extends CI_Model {

    private $api_key;
    private $client;

    public function __construct() {
        parent::__construct();
        $this->api_key = 'sk-proj-SoBqVeNTXMyFdMnSF3ydT3BlbkFJV0sE2eNA4q5H3LSKJcMD'; // Replace with your actual API key
        $this->client = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
        ]);
    }

    public function generateContent($prompt) {
        $response = $this->client->post('engines/davinci/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->api_key,
                'Content-Type'  => 'application/json',
            ],
            'json' => [
                'prompt' => $prompt,
                'max_tokens' => 150,
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        return $data['choices'][0]['text'];
    }
}
