<?
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$mensagem = $_POST['mensagem'];

$conteudo = "Nome: $name <br>Sobrenome: $surname <br>E-mail: $email<br>Telefone: $phone<br>Mensagem: $mensagem";
$seuemail = "dugonzalez@live.com"; 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: $email \r\n"; 
$assunto = "Contato do site";
$enviar = mail($seuemail, $assunto, $conteudo, $headers); 

if($enviar) {
echo "<script type='text/javascript'> alert('Contato Enviado com Sucesso!'); window.location.href='contato.html'; </script>";
else
echo "<script type='text/javascript'> alert('Ocorreu algum erro ao enviar o formul&aacute;rio'); </script>";
}

?> 

