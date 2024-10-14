<!DOCTYPE html>
<html>
<head>
    <title>Redefinir Senha</title>
</head>
<body>
<h1>Recuperação de Senha</h1>
<p>Clique no link abaixo para redefinir sua senha:</p>
<a href="{{ url('/reset-password/'.$token.'/'.$email) }}">Redefinir Senha</a>
</body>
</html>
