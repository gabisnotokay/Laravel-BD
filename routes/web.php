<?php

use App\models\agendamentos;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $dados = new agendamentos;
    $dados->NOME = "Rodrigo alves";
    $dados->TELEFONE = "(11)98522-9966";
    $dados->ORIGEM = "Whatsapp";
    $dados->DATA_CONTATO = "2023-03-28";
    $dados->OBSERVACAO = "Entrou em contato no dia 10.03.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10";
    $dados->save();

    return view('welcome');
});
?>
