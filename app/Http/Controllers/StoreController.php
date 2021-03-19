<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function Create(Request $request)
    {
        $user = new User([
            'name' => $request->name,
            'email' => 'test' . microtime() . '@test.com',
            'password' => str_replace(' ', '_', $request->name)
        ]);
        $user->save();

        $url = url('/store/'.$request->name);
        $qr = 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$url.'&choe=UTF-8';

        $data = $request->all();
        $data['donations'] = json_encode($data['donations']);
        $data['images'] = json_encode($data['images']);
        $data['user_id'] = $user->id;
        $data['qr'] = $qr;

        $store = new Store($data);
        $store->save();

        return Response()->json([
            'success' => true,
            'url' => $url
        ]);
    }

    public function Get(Request $request, $name)
    {
        $store = Store::where('name', $name)->first();
        
        return Response()->json($store);
    }
}
