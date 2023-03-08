<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * HTTP Requestごとに呼び出すUseCaseを変更する
     * @throws \Exception
     */
    public function switchHttpRequest(Request $request): JsonResponse
    {
        $httpMethod = $request->method();
        switch ($httpMethod){
            case "GET":

                return response()->json(["message" => "記事の取得できました。"]);
            case "POST":

                return response()->json(["message" => "更新できました。"]);
            case "PUT":

                return response()->json(["message" => "更新できました。"]);
            case "DELETE":

                return response()->json(["message" => "削除できました。"]);
        }
        return response()->json(["message" => "存在しません"], 302);
    }
}
