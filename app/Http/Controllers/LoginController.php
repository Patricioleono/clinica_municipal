<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    private $apiToken;
    public function __construct(){
        $this->apiToken = uniqid(base64_encode(Str::random(30)));
    }

    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');

        $data = User::where('sis_usuario', $email)->get();
    
        if(count($data) == 0){
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        if(Hash::check($password, $data[0]->sis_password)){
            $update = User::find($data[0]->id);
            $update->sis_tokenCreado = $this->apiToken;
            $update->save();

            $response = array(
                'id' => $email[0]->id,
                'token' => $update->sis_tokenCreado
            );
    
            return response()->json($response, 201);
        }else{
            return response()->json(['error' => 'no autorizado'], 401, []);
        }

        
    }
}
