<?php

namespace App\Http\Controllers;
use App\Models\Userstat;
use Illuminate\Http\Request;

use App\Models\User;

class UserstatsController extends Controller
{
    //
    
    public function showAlluserstats(Request $request) {
        $orderBy = $request->input('orderBy', 'id');//por defecto ordena por id si no se introce parametro
        $userstats = Userstat::orderBy($orderBy)->paginate(6); 
        return view('userstats.userstatsBlade', compact('userstats', 'orderBy'));
    }

    public function createUserstats(){
        return view('userstats.userstatsCreateBlade');
    }

    public function addUserstats(Request $req){                         
        $user1 = User::select()->where('nickname', $req->input('user_nick'))->first();

        $userstat = new Userstat();
        $userstat->kills = $req->input('kills');
        $userstat->assists = $req->input('assists');
        $userstat->deaths = $req->input('deaths');
        $userstat->times_mvp = $req->input('times_mvp');
        $userstat->win_rate = $req->input('win_rate');
        $userstat->adr = $req->input('adr');
        $userstat->user_id = $user1->id;
        $userstat->save();
        
        return redirect()->route('userstats.showAlluserstats');
    }

    public function deleteUserstats($id){
        $userstats = Userstat::findOrfail($id);
        $userstats->delete($id);
        return redirect()->route('userstats.showAlluserstats');
    }


    public function modifyUserstats($id){
        $userstats = Userstat::findOrfail($id);
        return view('userstats.userstatsModifyBlade', [
            'userstats' => $userstats
        ]);        
    }

    public function updateUserstats($id){
        $userstat = Userstat::find($id);        
        $user1 = User::select()->where('nickname', request('user_nick'))->first();   
            
        $userstat->kills = request('kills');
        $userstat->assists = request('assists');
        $userstat->deaths = request('deaths');
        $userstat->times_mvp = request('times_mvp');
        $userstat->win_rate = request('win_rate');
        $userstat->adr = request('adr');
    
        $userstat->user_id = $user1->id; 
            
        $userstat->save();
        return redirect()->route('userstats.showAlluserstats');        
    
    }
    
}
