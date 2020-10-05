<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class ProductController extends BaseController
{
    //
    public function get()
    {
        echo "Hello friends.";
    }

    public function getUser($id)
    {
        return 'User id = ' . $id;
    }

    public function getProduct($cat1, $cat2)
    {
        return 'Category 1 = ' . $cat1 . ' Category 2 = ' . $cat2;
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()-getTTL() * 60
        ], 200);
    }
}
