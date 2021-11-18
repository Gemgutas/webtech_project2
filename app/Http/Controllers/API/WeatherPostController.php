<?php
namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illum9\Support\Facades\DB;


use App\Http\Controllers\Controller;
use App\Models\WeatherAPI;

class WeatherPostController extends Controller
{
    public $successStatus = 200;

    public function getAllPosts(Request $request) {
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null){
            $weathers = WeatherAPI::all();

            return response()->json($weathers, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }

    }
    public function getPost(Request $request){
            $id = $request['pid']; // pid = post id
            $token = $request['t']; // t = token
            $userid = $request['u']; // u = userid

            $user = User::where('id', $userid)->where('remember_token', $token)->first();

            if ($user != null){
                $weathers = WeatherAPI::where('id', $id)->first();

                if ($weathers != null){
                    return response()->json($weathers, $this->successStatus);
                } else {
                    return response()->json(['response' => 'Post not found'], 404);
                }
            } else {
                return response()->json(['response' => 'Bad Call'], 501);
            }
    }
    public function searchPost(Request $request){
        $params = $request['p']; // p = params
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null){
            $weathers = WeatherAPI::where('country', 'LIKE', '%' . $params . '%')
            ->orWhere('fahrenheit', 'LIKE', '%' . $params . '%')
            ->get();
// SELECT * FROM posts WHERE song_title LIKE '%params%' OR genre LIKE '%params%'
            if ($weathers != null){
                return response()->json($weathers, $this->successStatus);
            } else {
                return response()->json(['response' => 'Post not found'], 404);
            }
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
}
}
