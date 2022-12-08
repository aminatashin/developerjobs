<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class listingController extends Controller
{
    //all listing
    public function index(){
        
        return view('listings',[
           
            'listings'=> Listing ::latest()->filter(request(['tag','search']))->paginate(6)
        ]);

    }
  
    //single listing
    public function show(Listing $listing){
        return view('listing',[
            'listing'=> $listing
        ]);
    }
      //show create form
      public function create(){
        return view('create');
    }
    //store data /post
   public function store(Request $request){

    $formFields = $request->validate([
        'title' => 'required',
        'address' => 'required',
        'country' => 'required',
        'email' =>[ 'required','email'],
        'source' => 'required',
        'damage' => 'required',
        'tags' => 'required',
        'fullname' => 'required',
        'number' => 'required',
        'description' => 'required'
    ]);
    if($request->hasFile('logo')){
        $formFields['logo']=$request->file('logo')->store('logos','public');
    }
    $formFields['user_id'] = auth()->id();
    Listing::create($formFields);
    return $formFields;

   }
   public function edit(Listing $listing) {
    return view('components.edit', ['listing' => $listing]);
}


public function update(Request $request, Listing $listing){
    $formFields = $request->validate([
        'title' => 'required',
        'address' => 'required',
        'country' => 'required',
        'email' =>[ 'required','email'],
        'source' => 'required',
        'damage' => 'required',
        'tags' => 'required',
        'fullname' => 'required',
        'number' => 'required',
        'description' => 'required'
    ]);
    if($request->hasFile('logo')){
        $formFields['logo']= $request->file('logo')->store('logos','public');
    }
    $listing->update($formFields);
    return redirect('/');

}
public function destroy(Listing $listing){
    $listing->delete();
    return redirect('/');
}

}
