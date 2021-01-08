<?php 

$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['Telefone'];
$orcamento = $_POST['orcamento'];

$assunto = " ".$nome." solicitando orcamento";

$corpo = "
    Nome: " .$nome."
    Email: " .$email."
    Telefone: " .$telefone." 
    Mensagem: " .$orcamento."
";

if(mail('jonatas.venancio@outlook.com',$assunto,$corpo,'From: contato@encomendaLV.com'.'\r\n'.'Reply-To:'.$email.'\r\n')) {
    echo "Encomenda enviada!";
} else {
    echo "Email não enviado verifique os dados ou entre em contato pelo Whatsapp!";
}



?>