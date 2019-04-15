<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;
use App\Http\Requests;

class ReviewsController extends Controller
{
    //
    public function store(Request $request, Review $review){
        $data = $review->create($request->all());
        //$file = $request->file();
        //dd($data);
        $data->save();
        return redirect()->back();
    }
    
    public function show(Review $review){
        $data = $review->getAll();
        return view('pages.edit.reviews', ['data' => $data]);        
    }
    
    public function edit(Request $request, $id){
        $data = Review::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
        if($request->published == 'on'){ $data->published = 1;} else {
           $data->published = 0;
        };
        //dd($data);
        $data->save();
        return redirect()->back();
    }
}
