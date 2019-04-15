<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewOrder;

class SaveOrderController extends Controller
{
    //

    public function saveOrder(){
        $order = Order::create(request()->all());
        //$id = $data->id;
        if ($order){
            \Mail::to('info@russky-style.ru')->send(new NewOrder($order));
            return redirect('/save-order/success');
        } else {
            return redirect('/servises')->withInput();
        }
    }

    public function success(){
        return view('pages.success');
    } 
}
