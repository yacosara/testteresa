<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // metodos acciones del controlador  del controlador 

    function index() {    	
        //$users =User::all();
        $users =User::orderBy('name','ASC')->paginate(5);
        $title='Listado de Usuarios' ; 
        //return view('usuarios.usuarios',compact('users','title'));
        return view('usuarios.usuarios')
        ->with('users',$users)
        ->with('title',$title);        
        /*
        if (request()->has('empty')) {
            $users=[];
        }else{
            $users=['david','ernesto','Camucha','Carmen','ceccilia','willy','yaco','Abel'];    
        }*/
        //$users = DB::table('users')->get();        
        //dd($users);
/* opcion 1 
        return view('usuarios' , ['users' => $users,'title' => 'Listado de Usuarios']);
 opcion 2 
        return view('usuarios')
             ->with('users',$users) 
             ->with('title','Listado de Usuarios');             
 opcion 3 
            var_dump(compact('users','title')) ; die();
*/            
    }
    // function usuarioslista(){
    //     $user =User::all();            
    //     return view('usuarios.lista',compact('user'));   
    // }
    function ingresosistema(){
        $user =User::find(1);            
        return view('sistema.main',compact('user'));   
    }
    function save(){
        
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
            ], [
            'name.required' =>'El campo es Obligatorio' ,
            'email.required' =>'El campo del correo electronico es obligatorio',
            'password.required' =>'La clave es obligatoria'
            ]);
        /*$data = request()->all();  */
       /* if(empty($data['name'] ) ) { 
           return redirect('usuarios/create')->withErrors([
               'name'=>'El campo es Obligatorio'
            ]) ; 
        }      */

        User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);

        return redirect()->route('usuario.index');
    }
    function viewNoNro($detalle) {
    	return 'mostrando detalles del usuario ' . $detalle;	
    }
	function vista($id) {
        $user =User::find($id);           
        return view('usuarios.vista',compact('user'));
    }
    
    function edit(User $user){
       return view('usuarios.edita',['user'=>$user]) ;
    }

    function update(User $user) {

        $data = request()->validate([
            'name'=>'required',
            //'email'=>'required|email|unique:users,email,'.$user->id,
            'email' => ['required','email', Rule::unique('users')->ignore($user->id)],
            'password'=>'',
            ], [
            'name.required' =>'El campo es Obligatorio' ,
            'email.required' =>'El campo del correo electronico es obligatorio',
            'password.required' =>'La clave no es obligatoria'
            ]);
                

        $data['password']=bcrypt($data['password']);

        $user->update($data);                        

        return redirect()->route('usuario.show',['id'=>$user->id]);
    }

    function create() {
     	return view('usuarios.crea');
    }

    function dato($id) {
    	return 'mostrando detalles del usuario con dato no numerico ' . $id;
    }

    function destroy($id) {
        
        $user =User::find($id);           
        $user->delete();
        return redirect()->route('usuario.index');
    }
}

