<?php

  

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

use App\Models\Contact;

  

class ContactController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */
  
    /**

     * Write code on Method

     *

     * @return response()

     */

    public function store(Request $request)

    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);

  

        Contact::create($request->all());

  

        return redirect()->back()

                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);

    }

}