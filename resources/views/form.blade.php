<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario Contacto</title>

<style>
    body{
        margin:0;
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(135deg, #667eea, #764ba2);
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
    }

    .card{
        background:white;
        padding:40px;
        border-radius:12px;
        width:350px;
        box-shadow:0px 10px 30px rgba(0,0,0,0.2);
        text-align:center;
    }

    h2{
        margin-bottom:25px;
        color:#333;
    }

    .form-group{
        text-align:left;
        margin-bottom:20px;
    }

    label{
        display:block;
        margin-bottom:5px;
        font-weight:bold;
        color:#555;
    }

    input, textarea{
        width:100%;
        padding:10px;
        border-radius:6px;
        border:1px solid #ccc;
        font-size:14px;
        transition:0.3s;
    }

    input:focus, textarea:focus{
        border-color:#667eea;
        outline:none;
        box-shadow:0 0 5px rgba(102,126,234,0.4);
    }

    textarea{
        resize:none;
        height:100px;
    }

    button{
        width:100%;
        padding:12px;
        border:none;
        border-radius:6px;
        background:#667eea;
        color:white;
        font-size:16px;
        cursor:pointer;
        transition:0.3s;
    }

    button:hover{
        background:#5563d1;
    }
</style>

</head>

<body>

<div class="card">

<h2>Contacto</h2>

<form method="POST" action="">
    @csrf

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="ejemplo@email.com" required>
    </div>

    <div class="form-group">
        <label>Mensaje</label>
        <textarea name="mensaje" placeholder="Escribe tu mensaje..." required></textarea>
    </div>

    <button type="submit">Enviar</button>

</form>

</div>

</body>
</html>
