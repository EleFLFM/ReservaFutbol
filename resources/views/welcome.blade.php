<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReservaFutbol - Reserva tu cancha</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 260px;
            background-color: #0c2340;
            color: white;
            padding: 20px 0;
        }

        .logo {
            padding: 20px;
        }

        .logo img {
            width: 100px;
            height: 100px;
            border-radius: 8px;
        }

        .nav-menu {
            margin-top: 30px;
        }

        .nav-item {
            padding: 15px 25px;
            color: #fff;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s;
        }

        .nav-item:hover,
        .nav-item.active {
            background-color: #183456;
        }

        .main-content {
            flex: 1;
            background-color: white;
        }

        .header {
            display: flex;
            justify-content: flex-end;
            padding: 20px;
            gap: 15px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s;
        }

        .btn-outline {
            border: 1px solid #ccc;
            background: none;
            color: #666;
        }

        .btn-outline:hover {
            border-color: #999;
            color: #333;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .content {
            padding: 40px;
        }

        .title {
            font-size: 2.5rem;
            font-weight: normal;
            margin-bottom: 15px;
        }

        .title span {
            color: #ff0000;
        }

        .description {
            color: #666;
            margin-bottom: 40px;
            font-size: 1.1rem;
            line-height: 1.5;
        }

        .illustration {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            position: relative;
            margin-top: 60px;
        }

        .field {
            width: 400px;
            height: 200px;
            background-color: #1a472a;
            border-radius: 100px;
            position: relative;
            overflow: hidden;
        }

        .field::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: rgba(255, 255, 255, 0.3);
            transform: translateX(-50%);
        }

        .field::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            width: 80px;
            height: 80px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .player {
            width: 120px;
            height: 180px;
            background-color: #f0f0f0;
            border-radius: 8px;
        }

        .clock {
            position: absolute;
            top: -40px;
            right: 0;
            width: 40px;
            height: 40px;
            border: 2px solid #ccc;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="/api/placeholder/100/100" alt="ReservaFutbol Logo">
            </div>
            <nav class="nav-menu">
                <a href="#" class="nav-item">Inicio</a>
                <a href="#" class="nav-item active">Horario cancha</a>
            </nav>
        </div>

        <div class="main-content">
            <header class="header">
                <button class="btn btn-outline">Registrarse</button>
                <button class="btn btn-primary">Iniciar sesión</button>
            </header>

            <main class="content">
                <h1 class="title">
                    Que horario le gustaria <span>reservar</span>?
                </h1>
                <p class="description">
                    ¡Reserva tu espacio para jugar fútbol con tus amigos! Consulta la
                    disponibilidad de nuestra cancha y asegurate de disfrutar de un gran partido.
                </p>

                <div class="illustration">
                    <div class="player"></div>
                    <div class="field"></div>
                    <div class="player"></div>
                    <div class="clock"></div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>