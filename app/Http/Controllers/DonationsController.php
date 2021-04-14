<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;

class DonationsController extends Controller
{
    public function donate(){

        return view('donate');

    } 

    public function donatePost(Request $request) 
    {
        $this->validate($request,
        [ 
            'amount' => 'required',
            // 'email' => 'required|email',
            // 'phone_number' => 'required'
        ]);

        $donation = Donation::create(
            [
                'type' => $request->radio1,
                'currency' => $request->radio2,
                'amount' => $request->amount,
                'full_name' => $request->fname,
                'country' => $request->country,
                'city' => $request->city,
                'address' => $request->faddress,
                'email' => $request->e_mail,
                'phone_number' => $request->phone_num,
                'payment_method' => $request->radio3,
                'card_holder_name' => $request->h_name,
                'card_number' => $request->c_num,
                'card_end_date' => $request->c_end_date,
                'card_cvc' => $request->c_cvc,
            ]
        );
        if($donation){
            return redirect()->back()->with('success', 'تم بنجاح شكرا لك');   

        }else{
            
            return redirect()->back()->with('error', 'حدث خطأ حاول مجددا');   

        }

        
    }
}
