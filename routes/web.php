<?php

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/mail', function(){
    Mail::raw('Menssagen de teste de e-mail', function(Message $message){
        $message->to('test@gmail.com')
        ->subject('Bem vindo ao meu sistema')
        ->from('rh@manager.com');
    });
    echo 'email enviado com sucesso';
});
