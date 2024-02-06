<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function Welcome(){
        return view('welcome');
    }

    public function Quienes_Somos(){
        return view('pages.quienes-somos');
    }

    public function Mision_Vision(){
        return view('pages.mision-vision');
    }

    public function Legalidad(){
        return view('pages.legalidad');
    }

    public function Convenios(){
        return view('pages.convenios');
    }

    public function Contactos(){
        return view('pages.contactos');
    }

    public function Historia(){
        return view('pages.historia');
    }

    public function Virtual(){
        return view('pages.virtual');
    }

    public function Portafolio(){
        
    }

    public function Tecnico_Presencial(){
        return view('pages.presencial.tecnico-laboral');
    }

    public function Curso_Presencial(){
        return view('pages.presencial.curso');
    }

    public function Diplomados(){
        return view('pages.presencial.diplomado');
    }
    public function Seminarios(){
        return view('pages.presencial.seminario');
    }
    public function Cursos_Cortos(){
        return view('pages.presencial.cursos-cortos');
    }


    //Programas Tecnicos

    public function AuxAdmin(){
        return view('pages.presencial.tecnicos.aux-admin');
    }

    public function AuxInfancia(){
        return view('pages.presencial.tecnicos.aux-infancia');
    }

    public function Seguridad(){
        return view('pages.presencial.tecnicos.seguridad');
    }
    public function Mecanica(){
        return view('pages.presencial.tecnicos.mecanica');
    }
    public function Operador(){
        return view('pages.presencial.tecnicos.operador');
    }
    

    //Virtual
    public function Virtual_auxadmin(){
        return view('pages.virtual.aux-admin');
    }

    public function Virtual_auxinfancia(){
        return view('pages.virtual.aux-infancia');
    }

    public function Virtual_seguridad(){
        return view('pages.virtual.seguridad');
    }
    

}
