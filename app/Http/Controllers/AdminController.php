<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

use App\Models\Bankloan;
use App\Models\Banklist;

class AdminController extends Controller
{
  public function admincarloan() {
       $bankloans = Type::with('bankloan')->Where('id', 4)->get();
        return view('admin.admincarloan', compact('bankloans'));
    }

public function editcarloan($id){
  $bankloan = Bankloan::findorfail($id);
  return view('admin.editcarloan', compact('bankloan'));
}
public function updatecarloan(Request $request,$id){
  $request->validate([
      'bank'  => 'required',
        'amount' => 'required|numeric',
        'tenure_years' => 'required|numeric',
        'interest' => 'required|numeric',
        'notes' => 'required',
  ]);
  $bankloan = Bankloan::findorfail($id);
   $bankloan->update($request->only([
        'bank','amount','tenure_years','interest','notes'
    ]));
        return redirect()->route('admincarloan')->with('success', 'Updated successfully!');

}
    public function edithomeloan($id){
      $bankloan = Bankloan::findorfail($id);
      return view('admin.edithomeloan',compact('bankloan'));
      
    }
    public function adminpersonal(){
          $bankloans = Type::with('bankloan')->Where('id', 1)->get(); 
       
        return view('admin.personalloan', compact('bankloans'));
    }
   public function bankloan(){
   $types = Type::all();
  

  return view('admin.bankloan', compact('types'));   
}


    public function adminbuisness(){
          $bankloans = Type::with('bankloan')->Where('id',3 )->get(); 
       
        return view('admin.adminbuisness', compact('bankloans'));
    }

public function adminhomeloan(){
  $bankloans = Type::With('bankloan')->Where('id',2)->get();
  return view('admin.adminhomeloan', compact('bankloans'));
}



public function editbuisnessloan($id){
  $bankloan = Bankloan::findorfail($id);

  return view('admin.editbuisnessloan',compact('bankloan'));
}
public function updatebuisnessloan(Request $request,$id){
  $request->validate([
        'bank'  => 'required',
        'amount' => 'required|numeric',
        'tenure_years' => 'required|numeric',
        'interest' => 'required|numeric',
        'notes' => 'required',
  ]);
  $bankloan = Bankloan::findorfail($id);
   $bankloan->update($request->only([
        'bank','amount','tenure_years','interest','notes'
    ]));

    return redirect()->route('adminbuisness')->with('success', 'Updated successfully!');
}



public function editpersonalloan($id){

    $bankloan = Bankloan::findOrFail($id); 
    return view('admin.editpersonalloan', compact('bankloan'));
}

public function updatepersonalloan(Request $request, $id)
{
    $request->validate([
        'bank'  => 'required',
        'amount' => 'required|numeric',
        'tenure_years' => 'required|numeric',
        'interest' => 'required|numeric',
        'notes' => 'required',
    ]);

    $bankloan = Bankloan::findOrFail($id);

    $bankloan->update($request->only([
        'bank','amount','tenure_years','interest','notes'
    ]));

    return redirect()->route('adminpersonal')->with('success', 'Updated successfully!');
  }
public function destroyadmincarloan($id)
{
    $bankloan = Bankloan::find($id); 
    if ($bankloan) {
        $bankloan->delete(); 
        return redirect()->route('admincarloan')->with('success', 'Car loan deleted successfully!');
    }
    else {
    return redirect()->route('admincarloan')->with('error', 'Car loan not found!');
}
}


public function destroypersonalloan($id)
{
    $bankloan = Bankloan::find($id); 
    if ($bankloan) {
        $bankloan->delete(); 
        return redirect()->route('adminpersonal')->with('success', 'personal-loan deleted successfully!');
    }
    else {
    return redirect()->route('adminpersonal')->with('error', 'personal-loan not found!');
}
}






public function destroyhomeloan($id)
{
  
    $bankloan = Bankloan::find($id); 
    if ($bankloan) {
        $bankloan->delete(); 
        return redirect()->route('adminhomeloan')->with('success', 'home-loan deleted successfully!');
    }
    else {
    return redirect()->route('adminhomeloan')->with('error', 'home-loan not found!');
}
}





public function destroybuisnessloan($id)
{
  
    $bankloan = Bankloan::find($id); 
    if ($bankloan) {
        $bankloan->delete(); 
        return redirect()->route('adminbuisness')->with('success', 'buisness-loan deleted successfully!');
    }
    else {
    return redirect()->route('adminbuisness')->with('error', 'buisness-loan not found!');
}
}
public function adminbanklistspage(){
    $banklists = Banklist::all();
    return view('admin.banklistblade', compact('banklists'));
}
public function editbanklist($id){
    $banklist = Banklist::findOrFail($id);
    return view('admin.editbanklist',compact('banklist'));
}
public function updatebanklist(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',        
        'description' => 'required',
    ]);

    $banklist = Banklist::findOrFail($id);
    
   
    $banklist->title = $request->title;
    $banklist->description = $request->description;

   
    if($request->hasFile('image')){
       
        if($banklist->image && \Storage::disk('public')->exists($banklist->image)){
            \Storage::disk('public')->delete($banklist->image);
        }

        $path = $request->file('image')->store('bank-images', 'public');
        $banklist->image = $path;
    }

    $banklist->save();

    return redirect()->route('admin-banklist')->with('success','Bank updated successfully');
}
public function adminbanklist(){
    $banklists = Banklist::all();
    return view('admin.banklistblade',compact('banklists'));
}
public function addbanklist(){
    return view('admin.bank-list');
}
public function deletebanklist($id){
    $banklist = Banklist::find($id);
    If($banklist){
        $banklist->delete();
        return redirect()->route('admin-banklist')->with('success','delete banklist successfully');
    }
}
public function login(){
    return view('user.login');
}
public function loginstore(Request $request){
    $validatedData = $request->validate([
        'email'=>['required'],
        'password'=>['required'],
    ]);
    $bankloan = Bankloan::where(email,$request->email)->first();
    if ($bankloan && $bankloan->password == $request->notes){
        Auth::login('$bankloan');
    return redirect()->route('home');
    }
   
else
    {return back()->withErrors(['wrong notes or bank']);
    }
    }
}

