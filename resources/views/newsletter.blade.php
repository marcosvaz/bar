<?php
//Script feito por Lucke
//Configure aqui a conexão:
$host = "robb0262.publiccloud.com.br";
$usuariodb = "h2rr_news";
$senhadb = "News321654#";
$db = "h2rr_news";
$tabela = "clientes";
//Fim

//Conectando:
$conexao=mysql_connect ("$host", "$usuariodb", "$senhadb") or die ("Erro ao conectar!");
$selecionadb= mysql_select_db ("$db") or die ("Erro ao selecionar a DB!");
//Fim

//Recebe dados via get
$email = $_POST['email'];

//Verificando se algo foi digitado:
if ($email>"1"){
$query = mysql_query("SELECT * FROM $tabela WHERE email='$email'");
$numeros = mysql_num_rows ($query);
if ($numeros>"0"){
echo "<style>body {background-color:#222;} h2{color:#fff; font-family: Arial; text-align:center; margin-top:80px;}</style><h2>Email ja Cadastrado<h2>";
    echo "<style>.button {
    background-color: #e8e6bd;
    border: none;
    color: #484848;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top:-30px;
    cursor: pointer;
}</style><a class='button' href='http://bararterestaurante.com.br'>Voltar a home !!</a>";
}
else{

$query = mysql_query("INSERT INTO `clientes` ( `nome` , `email` ) VALUES ('$nome', '$email')");
echo "<style>body {background-color:#222;} h2{color:#fff; font-family: Arial; text-align:center; margin-top:80px;}</style><h2>Inscrito com sucesso !!!<h2>";
    echo "<style>.button {
    background-color: #e8e6bd;
    border: none;
    color: #484848;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top:-30px;
    cursor: pointer;
}</style><a class='button' href='http://bararterestaurante.com.br'>Voltar a home !!</a>";
}
}
//Fim
?>
