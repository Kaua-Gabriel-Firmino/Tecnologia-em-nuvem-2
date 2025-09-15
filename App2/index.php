<head>
<meta charset="UTF-8">
<title>Formulário de Contato</title>
</head>
<body>
<h1>Fale conosco</h1>
<form method="post" action="">
<label for="nome">Nome:</label><br>
<input type="text" name="nome" id="nome" required><br><br>

<label for="email">Email:</label><br>
<input type="text" name"email" id="email" required><br><br>

<label for="mensagem">Mensagem:</label><br>
<textarea> type="text" name"mensagem" id="nome" rows="5" required></textarea><br><br>

<input type="submit" value="Enviar">
</form>

<?php
if($server["REQUEST_METHOD"] == "POST"){
//coleta os dados do formulário
$nome=htmlspecialchars($_POST["nome"]);
$email=htmlspecialchars($_POST["email"]);
$mensagem=htmlspecialchars($_POST["mensagem"]);

//exibe os dados(em uma aplicaçãorea, você poderia salvar ou enviar por email)

echo"<h2>Dados Recebidos:</h2>";
echo"<p><strong>Nome</strong>$nome</p>";
echo"<p><strong>emial</strong>$email</p>";
echo"<p><strong>mensagem</strong>$mensagem</p>";

}
?>
</body>
