<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'login' => ['required', 'string', 'min:5', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cpf' => ['required', 'string', 'min:14', 'unique:users'],
            'datanascimento' => ['required', 'string', 'min:10'],
            'estado' => ['required', 'string', 'max:10'],
            'cidade' => ['required', 'string', 'max:255'],
            'rua' => ['required', 'string', 'max:255'],
            'bairro' => ['required', 'string', 'max:255'],
            'numero' => ['required', 'string', 'min:2'],
            'complemento' => ['string', 'max:255'],
            'cep' => ['required', 'string', 'min:9'],
            'celular' => ['required', 'string', 'min:15', 'unique:users'],
            'imagemperfil' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cpf' => $data['cpf'],
            'datanascimento' => $data['datanascimento'],
            'estado' => $data['estado'],
            'cidade' => $data['cidade'],
            'rua' => $data['rua'],
            'bairro' => $data['bairro'],
            'numero' => $data['numero'],
            'complemento' => $data['complemento'],
            'cep' => $data['cep'],
            'celular' => $data['celular'],
            'imagemperfil' => $data['imagemperfil'],
        ]);

        Validator::make($request->all(),['imagemperfil'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
            $ext = $request->file('imagemperfil')->getClientOriginalExtension();
            $stringImagem = str_replace(" ", "", $request->input(imagemperfil));

            $imagemNome = $stringImagem.".".$ext;
            $imagemCodificada = File::get($request->imagem);
            Storage::disk('local')->put('public/imagens_perfil/'.$imagemNome, $imagemCodificada);

            $novoUsuario = array("imagem"=>$imagemNome);
            $criado = DB::table("users")->insert($novoUsuario);


       
    }
}
