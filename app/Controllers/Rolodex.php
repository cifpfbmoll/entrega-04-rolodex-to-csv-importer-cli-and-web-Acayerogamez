<?php

namespace App\Controllers;
// NO NECESITAMOS EL MODELO AHORA, ASÍ QUE LO PODRÍAMOS HASTA QUITAR
// use App\Models\ContactModel;

class Rolodex extends BaseController
{
    public function index()
    {
        // --- INICIO DE LA SOLUCIÓN RÁPIDA ---
        // EN LUGAR DE CONECTAR A LA BASE DE DATOS, CREAMOS DATOS FALSOS

        // $model = new ContactModel();
        // $data['contacts'] = $model->findAll();

        // CREAMOS UN ARRAY DE CONTACTOS DE PRUEBA
        $fake_contacts = [
            [
                'id' => 1,
                'name' => 'Juan Pérez (Prueba)',
                'phone' => '123456789',
                'email' => 'juan@example.com'
            ],
            [
                'id' => 2,
                'name' => 'Maria García (Prueba)',
                'phone' => '987654321',
                'email' => 'maria@example.com'
            ]
        ];

        $data['contacts'] = $fake_contacts;
        
        // --- FIN DE LA SOLUCIÓN RÁPIDA ---

        return view('rolodex_view', $data);
    }

    public function create()
    {
        // La función de crear no hará nada, simplemente nos redirigirá a la página principal
        return redirect()->to('/');
    }
}
