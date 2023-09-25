<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Redirect;


class RegistrationController extends Controller
{
     
    public function register(Request $request)
    { 
        $validator = Validator::make($request->all(), 
        [
            'firstName'=>['required'],
            'lastName'=>['required'],
            'email'=>['required','email'],
            'phone'=>['required','numeric','min:8',],
            'provenance'=>['required'],
            'profession' => ['required'],
        ] ,
        [
            'firstName.required' => 'Un Prénom est requis',
            'lastName.required' => 'Le Nom est requis',
            'provenance.required' => 'Mettez la structure ou l\'université de provenance',
            'profession.required' => 'Cochez votre profession',
            'email.required' => 'L\'Email est requis',
            'email.email' => 'Ce email n\'est pas valide',
            'phone.required' => 'Le numero de téléphone est requis',
            'phone.min' => 'Le Numéro doit contenir 8 chiffres',
            'phone.numeric' => 'Le Numéro ne doit contenir que des chiffres',
        ]);

        if ($validator->fails()){
          
            return Redirect::back()->withErrors($validator->errors())->withInput();
        }else{
            $req = $request->input();
         
            $data=[
               'firstName' => $request->firstName,
               'lastName' => $request->lastName,
               'email' => $request->email,
               'phone' => $request->phone,
               'provenance' => $request->provenance,
               'profession' => empty($req["profession"]) ? "" : $req["profession"],
                
           ];
          
           // $participant = Participant::create($data);
           
           Mail::to($data['email'])->send(new WelcomeEmail($data['firstName']));
            //return redirect()->back()->with('success','Inscription Finis');
            return view('retour')->with('success','Inscription Finis');
        }
       
        

    }
}
