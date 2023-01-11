<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\customer_Model;

class customer extends Controller
{
    public function index(){
	   $get_customer_list = Customer_Model::all();
     	return view('admin.customer.table', compact('get_customer_list'));
		
	}
	
	public function create(){
		
	  return view('admin.customer.create');	
		
	}
	
	public function store(Request $request){

       $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ]);
		
		
		 $save_data =  customer_Model::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'phone_number' => $request->phone_number,
            'address' => $request->address
        ]);
        return redirect()->route('customerList')->with('status', 'Post Created Successfully');	
		
	}
	
		public function show($id){
	
      $show_value = customer_Model::findOrFail($id);   
       
	   return view('admin.customer.view', compact('show_value'));	
		
	}
	
     public function edit($id)
	{
	   $post = customer_Model::findOrFail($id);	   
       
	   return view('admin.customer.update', compact('post'));
	   
   }
	
	
	public function update(Request $request, $id)
	{
		$update_id = customer_Model::findOrFail($id);
		$update_id->first_name = $request->first_name;		
		$update_id->last_name = $request->last_name;		
		$update_id->email_address = $request->email_address;		
		$update_id->phone_number = $request->phone_number;		
		$update_id->address = $request->address;		
		$update_id->save();
		//dd($update_id);

	return redirect()->route('customerList')->with('status', 'Post Updated Successfully');
	}
		
	public function destroy($id)
   {
    $post = customer_Model::findOrFail($id);
        
    $post->delete();

    return redirect('customerList');
   }
	
	
}
