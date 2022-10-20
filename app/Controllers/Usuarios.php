<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Seeds\UsuarioFakerSeeder;

class Usuarios extends BaseController
{
    private $UsuarioModel;

    public function __construct()
    {
        $this->UsuarioModel = new \App\Models\UsuarioModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Listando os usuários do sistema',
        ];

        return view('Usuarios/index', $data);
    }

    public function recuperaUsuarios()
    {
        $atributos = [
            'id',
            'nome',
            'email',
            'ativo',
            'imagem',
        ];

        $usuarios = $this->UsuarioModel->select($atributos)
            ->findAll();
    }
}
