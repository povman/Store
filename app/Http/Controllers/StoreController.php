<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller {
public function index($id=0){
 
    // Fetch all records
    $userData['data'] = \App\Models\Business::getuserData();
 
    $userData['edit'] = $id;

    // Fetch edit record
    if($id>0){
      $userData['editData'] = \App\Models\Business::getuserData($id);
    }

    // Pass to view
    return view('index')->with("userData",$userData);
  }

  public function save(Request $request){
 
    if ($request->input('submit') != null ){

      // Update record
      if($request->input('editid') !=null ){
        $name = $request->input('name');
        $city = $request->input('city');
        $price = $request->input('price');
        $editid = $request->input('editid');

        if($name !='' && $city != ''){
           $data = array('name'=>$name,"city"=>$city,"price"=>$price);
 
           // Update
           \App\Models\Business::updateData($editid, $data);

           Session::flash('message','Updated successfully.');
 
        }
 
      }else{ // Insert record
        $name = $request->input('name');
        $city = $request->input('city');
        $price = $request->input('price');
        $editid = $request->input('editid');

         if($name !='' && $city !='' && $price != ''){
            $data = array('name'=>$name,"city"=>$city,"price"=>$price);
 
            // Insert
            $value = \App\Models\Business::insertData($data);
            if($value){
              Session::flash('message','Inserted successfully.');
            }else{
              Session::flash('message','Name already exists.');
            }
 
         }
      }
 
    }
    return redirect()->action('App\Http\Controllers\StoreController@index',['id'=>0]);
  }

  public function deleteUser($id=0){

    if($id != 0){
      // Delete
      \App\Models\Business::deleteData($id);

      Session::flash('message','Deleted successfully.');
      
    }
    return redirect()->action('App\Http\Controllers\StoreController@index',['id'=>0]);
  }
}