<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Input\Input;

class ControllerUser extends BaseController { 

    public function buscar(){
       $filtro = request()->Input('filtro');
        
        $html = '<ul>';
        $arrayName = array(['name'  => 'capsula globaltec',
        'obs'  => 'aprovado pelo teste',
        'date'  => '12-04-2018', 
        'desc'  => 'aparelho tecnologico',
        'nano'  => 'yes'],
        ['name'  => 'capsula regional',
        'obs'  => 'aprovado pelo teste',
        'date'  => '20-06-2018', 
        'desc'  => 'aparelho tecnologico',
        'nano'  => 'yes'],
        ['name'  => 'capsula estadual',
        'obs'  => 'aprovado pelo teste',
        'date'  => '22-05-2018', 
        'desc'  => 'aparelho tecnologico',
        'nano'  => 'no'],
        ['name'  => 'capsula municipal',
        'obs'  => 'aprovado pelo teste',
        'date'  => '21-01-2017', 
        'desc'  => 'aparelho tecnologico',
        'nano'  => 'no'],
        ['name'  => 'capsula global',
        'obs'  => 'aprovado pelo teste',
        'date'  => '08-03-2014', 
        'desc'  => 'aparelho tecnologico',
        'nano'  => 'no']);


       
        return  view('user')->with(['user' => $arrayName])->with(['filtro' => $filtro]) ;

}

  
}
