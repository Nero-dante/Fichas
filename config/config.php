<?php
//RENAME TO "config.php"
function con()
{
    $servername = "x71wqc4m22j8e3ql.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "pb1s9tfx62isn5hq";
    $password = "bi8jpd4c99i5r0wz";
    $db = "zkoqblypztcxg7le";
    $con = new mysqli($servername, $username, $password, $db);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    return $con;
}

function cryptthis($string): string
{
    return md5($string); // create your scheme..
}

const RootDir = "/";











$rinom = '';//nome
$riele = '';//elemento
$ricir = '';//circulo
$riexe = '';//execução
$rialc = '';//alcance
$rialv = '';//alvo
$ridur = '';//duração
$rides = '';//descrição

