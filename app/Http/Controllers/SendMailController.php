<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class SendMailController extends Controller
{
    //
     public function send(Request $request) {
        //$new = $request->all();
//        $data = 'Имя: ' . $request->name . ' Телефон: ' . $request->phone . ' email: ' . $request->email
//                . ' Сообщение: '. $request->message;
        $data['name'] = $request->name;
        //dd($data);
        $data['phone'] = $request->phone;
        //$data['email'] = $request->email;
        $data['message'] = "Добрый день! Я хочу заказать у Вас номер. Пожалуйста, перезвоните мне!";
        
        //return view('_letters.new_order', ['data' => $data]);
        //dd($data);
        \Mail::send('letters.order', ['data' => $data], function ($message){
            $message->to('info@russky-style.ru', 'Русский Стиль')->subject('Заявка с сайта');
        });
        return redirect('/');
    }
}
