<?php

use App\Models\User;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/**
 * TESTE FUNCINAL PARA DISPARO DE E-MAIL
 *
 * # Disparo do trigger adicione /mail na url
 */

// e-mail trigger using mailHog
Route::get('/mail', function(){
    Mail::raw('Menssagen de teste de e-mail', function(Message $message){
        $message->to('test@gmail.com')
        ->subject('Bem vindo ao meu sistema')
        ->from('rh@manager.com');
    });
    echo 'email enviado com sucesso';
});

/**
 * TESTE FUNCIONAL PARA A BUSCA DE UM
 * USUÁRIO COM O ID = 1
 *
 * 1 - Buscar apenas o usuario
 * 2 - buscar o usuario com os dados de details e department
 *
 * #  Disparo do trigger adicione /admin na url
 */

// find all user where id equal 1
Route::get('/admin', function(){
    $admin = User::with('detail', 'department')
                ->find(1);
    dd($admin->toArray());
});


