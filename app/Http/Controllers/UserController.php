<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function destroy($id){
 
        
        User::destroy($id);  
        return redirect()->route('layouts.index');
        
    }

}
      
      
      