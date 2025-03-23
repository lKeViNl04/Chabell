<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\User;

class AdminController extends Controller
{
    public function indexArticle(Request $request)
    {
        $paginados = $request->get('page', 1); 

        $Articulos_por_paginado = Articulo::orderBy('id_product', 'desc')
            ->paginate(6, ['*'], 'page', $paginados);

        $countproduct = $Articulos_por_paginado->total();

        $maxpaginado_producto = $Articulos_por_paginado->lastPage();

        return view("admin.article.adminArticle", [
            'Articulos_por_paginado' => $Articulos_por_paginado,
            'countproduct' => $countproduct,
            'maxpaginado_producto' => $maxpaginado_producto,
            'paginaActual' => $paginados
        ]);
    }

    public function indexUser(Request $request){

        $paginados = $request->get('page', 1); 

        $User_por_paginado = User::orderBy('role', 'asc')
            ->paginate(6, ['*'], 'page', $paginados);

        $countUser = $User_por_paginado->total();

        $maxpaginado_User = $User_por_paginado->lastPage();

        return view("admin.User.adminUser", [
            'User_por_paginado' => $User_por_paginado,
            'countUser' => $countUser,
            'maxpaginado_User' => $maxpaginado_User,
            'paginaActual' => $paginados
        ]);
    }

    public function indexConsult(Request $request){
        $paginados = $request->get('page', 1); 

        $consultas_por_paginado = Contacto::orderBy('id_contact', 'desc')
            ->paginate(6, ['*'], 'page', $paginados);

        $countConsultas = $consultas_por_paginado->total();

        $maxpaginado_Consultas = $consultas_por_paginado->lastPage();

        return view("admin.consult.adminConsult", [
            'Consultas_por_paginado' => $consultas_por_paginado,
            'CountConsultas' => $countConsultas,
            'maxpaginado_Consultas' => $maxpaginado_Consultas,
            'paginaActual' => $paginados
        ]);
    }


    public function updateRoleAdmin(int $id, Request $request){
        
        $validated = $request->validate([
            'role' => 'required|in:Cliente,Administrador',
        ],[
            'role.required' => 'el rol debe tener un valor',
            'role.in' => 'el valor debe estar entre Cliente o Administrador'  
        ]);

        $roleMapping = [
            'Cliente' => 2,
            'Administrador' => 1,
        ];
        $role = $roleMapping[$validated['role']];

        $user = User::findOrFail($id);
        $user->role = $role;
        $user->save();

        return redirect()
            ->route('adminUser')
            ->with('feedback.message', 'El rol del usuario '.e($user->name).' se actualizo con exito');
    
    }

}
