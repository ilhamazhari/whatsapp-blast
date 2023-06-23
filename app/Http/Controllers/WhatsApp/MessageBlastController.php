<?php

namespace App\Http\Controllers\WhatsApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class MessageBlastController extends Controller
{
    public function blast()
    {
        $json = Storage::disk('local')->get('kmmd2023.json');

        foreach(json_decode($json) as $waNumber){
            print("62" . $waNumber->mobile ." | ");

            $data = array(
            );

            $resp = Http::withHeaders([
                'Authorization' => 'Bearer EAAuzfN61guwBAI2ZAiCH3bQZADN0g86FFuSeDq4L5xBybpZAllFqWkhvmfBxogZBafUvKZBocVt5BlZC8nWd4VwIg96MYugx4NF59ejVZBNZCrRZBtpgDORp1ODHb1b40s1D0ZAhfNdZAqOgxANuDi2ZA0FliH4VZBMj7YZAhXN9at7ZBrbY938kyQvt7u4xAZATrjVSfUW3epODZApMeWgZDZD',
                'Content-Type' => 'application/json'
            ])->post("https://graph.facebook.com/v15.0/109229092069290/messages", [
                "messaging_product" => "whatsapp",
                "to" => "62" . $waNumber->mobile,
                "type" => "template",
                "template" => [
                    "name" => "kmmd_ditunggu",
                    "language" => [
                        "code" => "id"
                    ]
                    // "components" => [[
                    //     // "type" => "header",
                    //     // "parameters" => [[
                    //     //     "type" => "image",
                    //     //     "image" => [
                    //     //         "link" => "https://duanamaintegra.co.id/kmmd2023/zoom-bg.jpg"
                    //     //     ]
                    //     // ]]
                    // ]]
                ]
            ]);

            print($resp ."\n");
        }
    }
}
