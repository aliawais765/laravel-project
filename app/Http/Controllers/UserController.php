<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homeloan;
use App\Models\Banklist;
use App\Models\Buisness;
use App\Models\Type;
use App\Models\Car;
use App\Models\Loan;
use App\Models\BankLoan;

class UserController extends Controller
{
   
    public function contactus() {
        return view('user.contact-us');
    }

   
    public function buisness() {
        $bankloans = Type::with('bankloan')->Where('id',3)->get();
        return view('user.buisness-loan', compact('bankloans'));
    }

 
    public function personal() {
        $bankloans = Type::with('bankloan')->Where('id', 1)->get(); 
       
        return view('user.personal-loan', compact('bankloans'));
    }

    public function car() {
       $bankloans = Type::with('bankloan')->Where('id', 4)->get();
        return view('user.car-auto', compact('bankloans'));
    }

    public function homeloan() {
        $bankloans = Type::with('bankloan')->where('id',2)->get(); 
        return view('user.home-loan', compact('bankloans'));
    }


    public function alfalah() {
        return view('user.alfalah');
    }

   
    
  
    
    public function type(Request $request){
        $request->validate([
            'name'=>'required',
        ]);


        Type::create($request->all());
     return redirect()->back()->with('success', 'Type added successfully!');

    }

public function store(Request $request){

  $request->validate([

'bank'=>'required',
'amount'=>'required',
'interest'=>'required',
'tenure_years'=>'required',
'notes'=>'required',
'type'=>'required',
  

  ]);

 Bankloan::create($request->all());

  return redirect()->back()->with('success', 'add loan successfully');
}
public function banklist(){
    $banklists = Banklist::all(); 
    return view('user.bank-list', compact('banklists')); 
}
public function bankliststore(Request $request)
{
    $request->validate([
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'description' => 'nullable|string'
    ]);

    $path = $request->file('image')->store('bank-images', 'public');

    Banklist::create([
        'title' => $request->title,
        'image' => $path,
        'description' => $request->description
    ]);

    return redirect()->back()->with('success', 'Bank added successfully!');
}
public function home(){
    $banklists = Banklist::all();
    return view('user.welcome', compact('banklists'));
}
}
