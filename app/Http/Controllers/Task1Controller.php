<?php
namespace App\Http\Controllers;

use App\Helpers\APIHelpers;
use App\Models\Task1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\DB;
use Response;

class Task1Controller extends Controller
{
    public function index(){

       $users=DB::select('select `id` , `title`,`body` from task1s');
       //$userslist=Task1::paginate();
       $respone=APIHelpers::createAPIResponse(false,200,'',$users);

       return $respone;
    }
    public function add(Request $request){
        $user = new Task1();
        $user->title= $request->title;
        $user->body= $request->body;
        $post_saved=$user->save();
        if($post_saved){
            $respone=APIHelpers::createAPIResponse(false,201,'post added successfully',null);
        return $respone;
        }
        else{
        $respone=APIHelpers::createAPIResponse(true,400,'failed',null);
        return $respone;
     }
    }
}
