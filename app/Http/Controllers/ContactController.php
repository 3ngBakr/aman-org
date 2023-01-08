<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use Exception;

class ContactController extends Controller
{


    public function contact_index(){

        $contact=Contact::all();
        return view('admin.contact.show',['contact' =>  $contact]);


    }


    public function upload_contact(StoreContactRequest $request){
try {
    $contact = new contact;
    $contact->fname=$request->fname;
    $contact->lname=$request->lname;
    $contact->phone=$request->phone;
    $contact->email=$request->email;
    $contact->address=$request->address;
    $contact->message=$request->message;

    $contact->save();
    return redirect()->back()->with('message','تم ارسال طلب التواصل بنجاح');
} catch (Exception $th) {
    
    return redirect()->back()->with('upload_error','لم يتم ارسال طلب التواصل بنجاح');
}

     
        
    }

    public function destroy($id)
    {
        //
        $contact= Contact::findOrFail($id);
        try{
            $contact->delete();
            return redirect('/contact_index')->with('success','الغنصر تم حذفه');
        }catch(Exception $e){
            return redirect('/vcontact_index')->with('error','العنصر لم يتم حذفه  !');
        }
    }
}
