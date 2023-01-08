<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donate;
use App\Http\Requests\StoreDonateusRequest;
use App\Models\categorie;
use Exception;

class DonateController extends Controller
{



    public function donate_index()
    {

        $Donate = Donate::all();
        return view('admin\donate\show', ['Donate' =>  $Donate]);
    }

    //show page
    public function donate_show()
    {
        $categories = categorie::where('status', '=', 1)->get();

        return view('user.donate_us', ['categories' => $categories]);
    }


    public function upload_donate(StoreDonateusRequest $request)
    {
        $donate = new donate;
        try {

            $donate->name = $request->name;
            $donate->phone = $request->phone;
            $donate->email = $request->email;
            $donate->message = $request->message;

            $donate->save();
            return redirect()->back()->with('message', 'شكراً لك سيتم التواصل بك لاحقاً');
            //code...
        } catch (Exception $th) {
            //throw $th;
            return redirect()->back()->with('upload_error', ' لم يتم الارسال بنجاح');
        }
    }
    public function destroy($id)
    {
        //
        $Donate = Donate::findOrFail($id);
        try {
            $Donate->delete();
            return redirect('/donate_index')->with('success', 'العنصر تم حذفه');
        } catch (Exception $e) {
            return redirect('/donate_index')->with('error', 'العنصر لم يتم حذفه!');
        }
    }
}
