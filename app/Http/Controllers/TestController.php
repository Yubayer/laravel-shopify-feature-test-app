<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request) {
        $shop = $request->user();

        $webhookData = [
            'webhook' => [
                'topic' => 'orders/create',
                'address' => env('APP_URL') . '/webhook/orders-create',
                'format' => 'json'
            ]
        ];

        // $dataW = $shop->api()->rest('POST', '/admin/api/2024-04/webhooks.json', $webhookData);


        $data = $shop->api()->rest('GET', '/admin/api/2024-04/webhooks.json');
        $webhooks   = $data['body'];
        dd($webhooks);
    }
}
