<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller{
    public function submit(ContactRequest $req){

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        //Переадресация на главную страницу после добавления данных
        return redirect()->route('home')->with('success', 'Успешно добавлено');

//        $validation = $req->validate([
//            'subject'=>'required|min:5|max:50',
//            'message'=>'required|min:15|max:500'
//        ]);
    }

    //Обращаемся к модели нашего объекта
    public function allData(){
        $contact = new Contact;
        //return view('messages', ['data'=> $contact->inRandomOrder()->get()]);
        //return view('messages', ['data'=> [$contact->inRandomOrder()->first()]]);
        //return view('messages', ['data'=>[$contact->find(2)]]);
       return view('messages', ['data'=>Contact::all ()]);
//        $contact = new Contact;
//        dd($contact->all());

    }


}
