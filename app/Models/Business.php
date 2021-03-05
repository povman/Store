<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Business extends Model{
    public static function getuserData($id=0){

    if($id==0){
      $value=DB::table('stores')->orderBy('id', 'asc')->get(); 
    }else{
      $value=DB::table('stores')->where('id', $id)->first();
    }
    return $value;
    }
    public static function insertData($data){
    $value=DB::table('stores')->where('name', $data['name'])->get();
    if($value->count() == 0){
      DB::table('stores')->insert($data);
      return 1;
     }else{
       return 0;
     }
 
  }

  public static function updateData($id,$data){
    DB::table('stores')
      ->where('id', $id)
      ->update($data);
  }

  public static function deleteData($id){
    DB::table('stores')->where('id', '=', $id)->delete();
  }
}
