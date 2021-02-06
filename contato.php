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

<div class="form">
            <h1 class="tituloSolicite">Solicite seu Orçamento</h1>
            <form method="post"
              action-xhr="contato.php"
              >
              <fieldset>
                <p>
                    <label>
                    <p><span>Nome Completo:</span></p>
                    <input type="text"
                        name="name"
                        required>
                    </label>
                </p>
                <p>
                    <label>
                    <p><span>Email:</span></p>
                    <input type="email"
                        name="email"
                        placeholder="example@gmail.com"
                        required>
                    </label>
                </p>
                <p>
                    <label>
                        <p><span>Telefone/Whatsapp:</span></p>
                        <input type="number"
                        name="Telefone"
                        placeholder="(15) 9999-9999"
                        required>
                    </label>
                </p>
                <p>
                    <label>
                        <p><span>Deixe aqui seu pedido:</span></p>
                        <textarea name="orcamento" rows="10" cols="33" required></textarea>
                    </label>
                </p>
                <input type="submit"
                  class="botaobtn"
                  value="Enviar">
              </fieldset>
              <div submit-success>
                <template type="amp-mustache">
                    Encomenda enviada!
                </template>
              </div>
              <div submit-error>
                <template type="amp-mustache">
                    Email não enviado verifique os dados ou entre em contato pelo Whatsapp!
                </template>
              </div>
            </form>
        </div>