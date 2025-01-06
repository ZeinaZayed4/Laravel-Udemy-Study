<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function about()
    {
        return view('theme.about');
    }

    public function services()
    {
        return view('theme.services');
    }

    public function contact()
    {
//        $data = Contact::where('first_name', '=', 'Zeina')->get();
//        $data = Contact::find(1); // find by id

//        $contact = new Contact();
//        $contact->first_name = 'Safa';
//        $contact->last_name = 'Atef';
//        $contact->email = 'safaatef@gmail.com';
//        $contact->message = 'Hello from the other side!';
//        $contact->save();

//        Contact::create([
//            'first_name' => 'Adam',
//            'last_name' => 'Ismail',
//            'email' => 'adamismail@gmail.com',
//            'message' => 'Adam\'s message',
//        ]);

//        $contact = Contact::find(5);
//        $contact->status = '0';
//        $contact->save();

//        $contact = Contact::find(5);
//        $contact->update([
//            'status' => '1'
//        ]);

//        $contact = Contact::find(5);
//        $contact->delete();

//        dd('Created Successfully');

        $categories = Category::all();
        return view('theme.contact', compact('categories'));
    }

    public function store(StoreContactRequest $request)
    {
        $validatedData = $request->validated();
//        $validatedData = $request->validate([
//           'first_name' => 'required|string',
//           'last_name' => 'required|string',
//            'email' => 'required|email',
//            'message' => 'nullable'
//        ]);

        Contact::create($validatedData);

        return back()->with('Success', 'Your data has been successfully added!');
    }

    public function display()
    {
        $data = Contact::paginate(5);
        return view('theme.display-contacts', compact('data'));
    }
}
