<?php

namespace App\Controllers;

class GameController extends BaseController
{
    public function index()
    {
        $client = \Config\Services::curlrequest();

        try {

            $response = $client->get(
                'https://www.freetogame.com/api/games',
                [
                    'verify' => false
                ]
            );

            $data['games'] = json_decode($response->getBody());

        } catch (\Exception $e) {

            $data['games'] = [];
            $data['error'] = $e->getMessage();

        }

        return view('game_view', $data);
    }

    public function about()
{
    return view('about_view');
}
}