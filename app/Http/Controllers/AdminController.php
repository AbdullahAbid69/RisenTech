<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\document;
use App\Models\eae;
use App\Models\gi;
use App\Models\hc;
use App\Models\pl;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function adminLogin()
    {
        return view('Admin.adminLogin');
    }   
    public function adminloginPost(Request $request){
        $request->validate([
            'adminemail'=>'required',
            'adminpassword'=>'required',
        ]);

        $admin_panel = admin::where('adminemail','=',$request->adminemail)->first();
        if($admin_panel){
            if(Hash::check($request->adminpassword, $admin_panel->adminpassword)){
                $request->session()->put('AdminloginId',$admin_panel->id);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','You are not admin');
            }
        }else{
            return back()->with('fail','This admin is not registered in hackthon.');
        }
    }
    public function adminlogout(){
        if(session()->has('AdminloginId')){
            session()->pull('AdminloginId');
            return redirect('admin/login');
        }
    }
    public function adminDashboard(){
        return view('Admin.adminDashboard');
    }

    public function viewStudent($id){
        
        $student = User::findOrFail($id);
        
        $personal = pl::where('user_id', $id)->first();
        $education = eae::where('user_id', $id)->first(); 
        $guardian = gi::where('user_id', $id)->first();
        $health = hc::where('user_id', $id)->first();
        $documents = document::where('user_id', $id)->first();

        $student->personal = $personal;
        $student->education = $education;
        $student->guardian = $guardian;
        $student->health = $health;
        $student->documents = $documents;
        
        return view('Admin.adminDashboard', compact('student'));
    }
    
}