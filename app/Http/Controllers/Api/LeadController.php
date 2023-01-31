<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        $sucess = true;

        $validator = Validator::make($data,
        [
          'name' => 'required|min:3|max:255',
          'email' => 'required|email',
          'message' => 'required',
        ],
        [
            'name.required' => 'Il nome è obbligatorio',
            'name.min' => 'Il numero minimo di caratteri è :min',
            'name.max' => 'Il numero massimo di caratteri è :max',
            'email.required' => 'L\'email è obbligatoria',
            'email.email' =>'Bisogna inserire una Mail',
            'message.required' => 'Il messaggio è obbligatorio'
        ]
        );

        if ($validator->fails()) {

            $sucess = false;

            $errors = $validator->errors();

            return response()->json(compact('sucess','errors'));
        }

        $newLead = new Lead();

        $newLead->fill($data);

        $newLead->save();

         Mail::to("hello@example.com")->send(new NewContact($newLead));

        return response()->json(compact('sucess'));

    }
}
