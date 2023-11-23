<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
            $update->sis_tokenFecha = now();
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

            if(User::where('sis_usuario', $request->post('newEmail')) !== 1){
                return response()->json(['status' => 400,'message' => 'El Usuario ya Existe']);
            }else{
                $newUserPlatform = new User;
                $newUserPlatform->sis_nombreCompleto = $request->post('completeName');
                $newUserPlatform->sis_usuario = $request->post('newEmail');
                $newUserPlatform->sis_password = Hash::make($request->post('newPassword'));
                $newUserPlatform->sis_tokenCreado = $this->apiToken;
                $newUserPlatform->save();
                return response()->json(['status' => 200, 'message' => 'Usuario Registrado']);
            }
         
        }
        
    }
        

    
}
