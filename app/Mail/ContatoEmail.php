<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContatoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('teste@teste.com', 'teste')
                    ->subject("Contato Rits")
                    ->view('pages.emailcontato');
                    // Por algum motivo que desconheço, o envio do anexo está causando loop infinito
                    // ->attach(asset('storage/curriculos/' . $this->dados->curriculo->getClientOriginalName()));
    }
}