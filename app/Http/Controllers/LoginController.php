<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{

    #constructor
    private $apiToken;
    public function __construct(){
        $this->apiToken = uniqid(base64_encode(Str::random(30)));
    }

    #vistas distintas paginas
    public function index(){
        return view('login');
    }
    public function viewRegisterUser(){
        return view('register');

    }

    #procesos
    public function login(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');
        $data = User::where('sis_usuario', $email)->get();

        if(count($data) == 0){
            return response()->json(['status' => 404, 'message' => 'Usuario no Encontrado']);
        }
        
        if(Hash::check($password, $data[0]->sis_password)){
            $update = User::find($data[0]->id);
            $update->sis_tokenCreado = $this->apiToken;
            $update->save();

            $response = array(
                'status' => 201,
                'id' => $data[0]->id,
                'token' => $update->sis_tokenCreado,
                'fecha' => $data[0]->sis_tokenFecha
            );
    
            return response()->json($response, 201);
        }else{
            return response()->json(['status' => 401, 'message' => 'Usuario No Autorizado']);
        }
        
    }

    public function registerNewUser(Request $request){
        $validationFront = $request->post('validation');

        if($validationFront['status'] !== '200'){
           return response()->json(['status' => 400]);
        }else{
            $completeName = $request->post('completeName');
            $newEmail = $request->post('newEmail');
            $newPassword = $request->post('newPassword');

            $request->validate([
                'newPassword' => ['required'],
                'newEmail' => ['required'],
                'completeName' => ['required'],
            ]);
        }
        
    }
        

    
}
