<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicios extends Controller
{
    // RETORNO DE LA VISTA INICIO PRINCIPAL

    public function inicio()
    {
        return view('livewire.inicio');
    }

    // RETORNO DE LAS VISTAS DE CADA BLOQUE EN EL INICIO

    public function finanzas()
    {
        return view('iniciobloques.finanzas');
    }

    public function farmacia()
    {
        return view('iniciobloques.farmacia');
    }

    public function corporativo()
    {
        return view('iniciobloques.corporativo');
    }

    public function centros()
    {
        return view('iniciobloques.centros');
    }

    public function viviendas( )
    {
        return view('iniciobloques.vivienda');
    }

    public function convenios()
    {
        return view('iniciobloques.convenios');
    }

    public function club()
    {
        return view('iniciobloques.club');
    }

    public function socios()
    {
        return view('iniciobloques.socios');
    }

    public function estetica()
    {
        return view('iniciobloques.estetica');
    }

    public function valegas()
    {
        return view('iniciobloques.valegas');
    }

    public function anexos()
    {
        return view('iniciobloques.anexos');
    }

    public function documentos()
    {
        return view('iniciobloques.documentos');
    }

    // RETORNO DEL DETALLE DE CADA VISTA DE CADA BLOQUE EN EL INICIO EN CENTROS RECREACIONALES

    public function tongoy()
    {
        return view('iniciobloques.insidebloques.centros.tongoy');
    }

    public function cascabeles()
    {
        return view('iniciobloques.insidebloques.centros.cascabeles');
    }

    public function casona()
    {
        return view('iniciobloques.insidebloques.centros.casona');
    }

    public function walung()
    {
        return view('iniciobloques.insidebloques.centros.walung');
    }

    public function mirador()
    {
        return view('iniciobloques.insidebloques.centros.mirador');
    }

    public function pelancura()
    {
        return view('iniciobloques.insidebloques.centros.pelancura');
    }

    public function olmue()
    {
        return view('iniciobloques.insidebloques.centros.olmue');
    }
    public function sansebastian()
    {
        return view('iniciobloques.insidebloques.centros.sansebastian');
    }

    public function clubcampo()
    {
        return view('iniciobloques.insidebloques.centros.clubcampo');
    }

    public function baita()
    {
        return view('iniciobloques.insidebloques.centros.baita');
    }

    public function peumayen()
    {
        return view('iniciobloques.insidebloques.centros.peumayen');
    }

    public function licanray()
    {
        return view('iniciobloques.insidebloques.centros.licanray');
    }

    public function nevados()
    {
        return view('iniciobloques.insidebloques.centros.nevados');
    }

    // RETORNO DEL DETALLE DE CADA VISTA DE CADA BLOQUE EN EL INICIO EN CONVENIOS

    public function salud()
    {
        return view('iniciobloques.insidebloques.convenios.salud');
    }

    public function hogar()
    {
        return view('iniciobloques.insidebloques.convenios.hogar');
    }

    public function vestuario()
    {
        return view('iniciobloques.insidebloques.convenios.vestuario');
    }

    public function deporte()
    {
        return view('iniciobloques.insidebloques.convenios.deporte');
    }

    public function turismo()
    {
        return view('iniciobloques.insidebloques.convenios.turismo');
    }

    public function educacion()
    {
        return view('iniciobloques.insidebloques.convenios.educacion');
    }

    public function finanza()
    {
        return view('iniciobloques.insidebloques.convenios.finanzas');
    }

    public function automotriz()
    {
        return view('iniciobloques.insidebloques.convenios.automotriz');
    }

    public function funerarias()
    {
        return view('iniciobloques.insidebloques.convenios.funerarias');
    }

    public function perfumeria()
    {
        return view('iniciobloques.insidebloques.convenios.perfumeria');
    }

    public function servicios()
    {
        return view('iniciobloques.insidebloques.convenios.servicios');
    }

    public function entretencion()
    {
        return view('iniciobloques.insidebloques.convenios.entretencion');
    }

    // RETORNO DEL DETALLE DE PRECIOS EN BLOQUE CENTRO DE ESTETICA

    public function esteticas()
    {
        return view('iniciobloques.insidebloques.estetica.precios');
    }
}
