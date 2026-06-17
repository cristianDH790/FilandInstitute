
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Mantenimiento</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Inter", system-ui, Arial;
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: radial-gradient(circle at top, #1e293b, #0f172a);
        color: #e2e8f0;
        overflow: hidden;
    }

    /* Fondo animado */
    .bg-glow {
        position: absolute;
        width: 600px;
        height: 600px;
        background: rgba(59,130,246,0.25);
        filter: blur(120px);
        border-radius: 50%;
        animation: move 6s infinite alternate ease-in-out;
    }

    @keyframes move {
        from { transform: translate(-100px, -80px); }
        to { transform: translate(120px, 100px); }
    }

    .card {
        position: relative;
        z-index: 2;
        text-align: center;
        max-width: 520px;
        padding: 40px;
        border-radius: 20px;
        background: rgba(15, 23, 42, 0.7);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(148, 163, 184, 0.2);
        box-shadow: 0 20px 60px rgba(0,0,0,0.5);
    }

    .icon {
        font-size: 60px;
        margin-bottom: 15px;
        animation: spin 4s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    h1 {
        font-size: 28px;
        margin-bottom: 10px;
    }

    p {
        color: #94a3b8;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .badge {
        display: inline-block;
        padding: 6px 12px;
        font-size: 12px;
        background: rgba(59,130,246,0.2);
        border: 1px solid rgba(59,130,246,0.4);
        border-radius: 999px;
        color: #60a5fa;
    }

    .footer {
        margin-top: 20px;
        font-size: 12px;
        color: #64748b;
    }
</style>
</head>

<body>

<div class="bg-glow"></div>

<div class="card">
    <div class="icon">⚙️</div>

    <span class="badge">Sistema en actualización</span>

    <h1>Estamos mejorando la plataforma</h1>

    <p>
        Estamos trabajando en nuevas funciones y optimizaciones.<br>
        El servicio volverá en breve con mejoras importantes 🚀
    </p>

    <div class="footer">
        © <?php echo date("Y"); ?> - Mantenimiento en progreso
    </div>
</div>

</body>
</html>