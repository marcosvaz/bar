<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;

class EmailController extends Controller
{
    /**
     * Dados que serão usados para enviar os emails
     *
     */
     // Email de Contato
    // $emailDeContato = "contato@bararterestaurante.com.br";

    // Transformar Nome
    function nome( $nome ){
        if( strlen( trim( $nome ) ) > 5 ){
            return ucwords( strtolower( $nome ) );
        }
        return false;
    }

    // Transformar Email
    function email( $email ){
        if( strlen( trim( $email ) ) > 8 || strstr($email, "@") || strstr($email, ".com") ){
            return strtolower( trim( $email ) );
        }
        return false;
    }

    // Transformar Telefone
    function telefone( $telefone ){
        if( strlen( trim( $telefone ) ) == 11 ){
            $telefoneNumeros = str_split($telefone);

            $telefone = '(' . $telefoneNumeros[0] . $telefoneNumeros[1] . ')' . $telefoneNumeros[2] .
            $telefoneNumeros[3] . $telefoneNumeros[4] . $telefoneNumeros[5] . $telefoneNumeros[6] . '-' .
            $telefoneNumeros[7] . $telefoneNumeros[8] . $telefoneNumeros[9] . $telefoneNumeros[10];

            return $telefone;
        }
        return false;
    }

    // Mensagem de Erro
    // $erro = false;
    // $mensagemErro = "";

    // Email
    function enviarEmail( $de, $assunto, $mensagem){
        $headers = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: $de \r\n";
        $envio = mail("marcosvazdeveloper@gmail.com.br", $assunto, $mensagem, $headers);

        if( $envio ){
            return "Obrigado!";
        } else {
            return "Erro!";
        }
    }

    /**
     * Email / Contato
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contato(Request $req)
    {
        // NOME
        if( nome( $req->input('nome') != false ) ){
            $nome = $req->input('nome');
            // $mensagemErro = "Insira o nome corretamente!";
        }
        // SOBRENOME
        if( nome( $req->input('sobrenome') != false ) ){
            $sobrenome = $req->input('sobrenome');
            // $mensagemErro = "Insira o sobrenome corretamente";
        }
        // TELEFONE
        if( telefone( $req->input('telefone') != false ) ){
            $telefone = $req->input('telefone');
            // $mensagemErro = "Insira o telefone corretamente!";
        }
        // EMAIL
        if( email( $req->input('email') != false ) ){
            $email = $req->input('email');
            // $mensagemErro = "Insira o email corretamente!";
        }
        // MENSAGEM
        if( ! ( strlen( trim( $req->input('mensagem') ) ) < 10 ) ){
            $mensagem = ucfirst( strtolower( $req->input('mensagem') ) );
            // $mensagemErro = "Insira uma mensagem!";
        }
        $erro = true;

        // Enviar Email
        if( $erro == false ){
            // De:
            $de = $nome . " " . $sobrenome;
            // Assunto:
            $assunto = "Nova mensagem de BAR | Arte | Restaurante";
            // Mensagem:
            $texto = "De: " . $nome . " " . $sobrenome . " <" . $email . ">\r\n" . "Telefone: $telefone" . "\r\n" . $mensagem;
            enviarEmail($de, $assunto, $texto);
        }
    }

    /**
     * Email / WhatsApp
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function whatsappJK(Request $req)
    {
        // NOME
        $nome = $req->input('nome');
        if( strlen( trim( $nome ) ) > 5 ){
            $nome = ucwords( strtolower( $nome ) );
        }
        // TELEFONE
        if( strlen( trim( $req->input('telefone') ) ) == 11 ){
            $telefoneNumeros = str_split($req->input('telefone'));

            $telefone = '(' . $telefoneNumeros[0] . $telefoneNumeros[1] . ')' . $telefoneNumeros[2] .
            $telefoneNumeros[3] . $telefoneNumeros[4] . $telefoneNumeros[5] . $telefoneNumeros[6] . '-' .
            $telefoneNumeros[7] . $telefoneNumeros[8] . $telefoneNumeros[9] . $telefoneNumeros[10];
        }
        if( $req->input('convidados') > 0 || $req->input('convidados') < 100){
            $convidados = $req->input('convidados');
        }
        // DATA
        $data = $req->input('data');
        // EMAIL
        if( strlen( trim( $req->input('email') ) ) > 8 || strstr($req->input('email'), "@") || strstr($req->input('email'), ".com") ){
            $email = strtolower( trim( $req->input('email') ) );
        }
        $erro = true;

        // Enviar Email
        if( $erro == false ){
            // De:
            $de = $nome . " " . $sobrenome;
            // Assunto:
            $assunto = "Nova reserva em BAR | Arte | Restaurante";
            // Mensagem:
            $texto = "De: " . $nome . " <" . $email . ">\r\n" . "Telefone: $telefone" . "\r\n" . "Reserva para o dia " . $data . " com " . $convidados . " convidados";
            enviarEmail($de, $assunto, $texto);
        }

        // Redirecionar para Whatsapp
        return '<script>window.parent.open("http://web.whatsapp.com/send?phone=+5511984096119&text=Olá%20meu%20nome%20é%20'.$nome.'!%20Eu%20gostaria%20de%20reservar%20o%20espaço%20do%20Itaim%20Bibi%20no%20dia%20'.$data.'%20para%20'.$convidados.'%20convidados.%20Meu%20email%20é%20'.$email.'%20e%20meu%20telefone%20é%20'.$telefone.'.");</script>';
    }

    /**
     * Email / WhatsApp
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function whatsappVM(Request $req)
    {
        // NOME
        $nome = $req->input('nome');
        if( strlen( trim( $nome ) ) > 5 ){
            $nome = ucwords( strtolower( $nome ) );
        }
        // TELEFONE
        if( strlen( trim( $req->input('telefone') ) ) == 11 ){
            $telefoneNumeros = str_split($req->input('telefone'));

            $telefone = '(' . $telefoneNumeros[0] . $telefoneNumeros[1] . ')' . $telefoneNumeros[2] .
            $telefoneNumeros[3] . $telefoneNumeros[4] . $telefoneNumeros[5] . $telefoneNumeros[6] . '-' .
            $telefoneNumeros[7] . $telefoneNumeros[8] . $telefoneNumeros[9] . $telefoneNumeros[10];
        }
        if( $req->input('convidados') > 0 || $req->input('convidados') < 100){
            $convidados = $req->input('convidados');
        }
        // DATA
        $data = $req->input('data');
        // EMAIL
        if( strlen( trim( $req->input('email') ) ) > 8 || strstr($req->input('email'), "@") || strstr($req->input('email'), ".com") ){
            $email = strtolower( trim( $req->input('email') ) );
        }
        $erro = true;

        // Enviar Email
        if( $erro == false ){
            // De:
            $de = $nome . " " . $sobrenome;
            // Assunto:
            $assunto = "Nova reserva em BAR | Arte | Restaurante";
            // Mensagem:
            $texto = "De: " . $nome . " <" . $email . ">\r\n" . "Telefone: $telefone" . "\r\n" . "Reserva para o dia " . $data . " com " . $convidados . " convidados";
            enviarEmail($de, $assunto, $texto);
        }

        // Redirecionar para Whatsapp
        return '<script>window.parent.open("http://web.whatsapp.com/send?phone=+5511984096119&text=Olá%20meu%20nome%20é%20'.$nome.'!%20Eu%20gostaria%20de%20reservar%20o%20espaço%20da%20Vila%20Madalena%20no%20dia%20'.$data.'%20para%20'.$convidados.'%20convidados.%20Meu%20email%20é%20'.$email.'%20e%20meu%20telefone%20é%20'.$telefone.'.");</script>';
    }

    /**
     * Email / Reservas
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reserva(Request $req)
    {
        // De:
        $de = $req->input('name');
        // Assunto:
        $assunto = "Nova reserva em BAR | Arte | Restaurante";
        // Mensagem:
        $texto = "De: " . $req->input('name') . " <" . $req->input('email') . ">\r\n" . "Data: $req->input('date'), para $req->input('persone') pessoas, no horario das $req->input('time'), na casa $req->input('house') \r\n" . "Telefone: $req->input('telefone')" . "\r\n" . $req->input('mensagem');
        $headers = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: $de \r\n";
        $envio = mail("marcosvazdeveloper@gmail.com.br", $assunto, $texto, $headers);

        if( $envio ){
            return "Obrigado!";
        } else {
            return "Erro!";
        }
    }
}
