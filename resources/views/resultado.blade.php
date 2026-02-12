<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario recibido</title>

<style>
    body{
        margin:0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg,#667eea,#764ba2);
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
    }

    .card{
        background:white;
        padding:30px;
        border-radius:12px;
        width:350px;
        box-shadow:0 10px 30px rgba(0,0,0,0.2);
        text-align:center;
    }

    p{
        margin:10px 0;
        color:#333;
        word-wrap: break-word;
    }

    a{
        display:inline-block;
        margin-top:15px;
        padding:10px 20px;
        background:#667eea;
        color:white;
        text-decoration:none;
        border-radius:6px;
    }

    a:hover{
        background:#5563d1;
    }
</style>
</head>

<body>
    <div class="card">
        <h2>Formulario recibido</h2>

        <p><strong>Nombre:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Mensaje:</strong> {{ $message }}</p>

        <a href="/contact">Volver</a>
    </div>
</body>
</html>
