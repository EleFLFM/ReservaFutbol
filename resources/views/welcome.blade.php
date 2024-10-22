<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ReservaFutbol - Reserva tu cancha</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img style="margin: 0 auto;width: fit-content;" src="./img/logo.png">
            </div>
            <nav class="nav-menu">
                <a href="#" class="nav-item">Inicio</a>
                <a href="#" class="nav-item active">Horario cancha</a>
            </nav>
        </div>

        <div class="main-content">
            <header class="header">
                <button class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#registerModal">Registrarse</button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Iniciar sesión
                </button>
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
                    <img src="./img/fondo.png" alt="">
                </div>
            </main>
        </div>
    </div>

    <!-- Modal de Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="login-card">
                        <h1 class="welcome-text">¡Hola nos alegra verte!</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password"
                                    name="password"
                                    required
                                    autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>



                            <div class="forgot-password">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Iniciar sesión
                            </button>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-register">
                                Registrarse
                            </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Registro -->
    <div class="modal fade " id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="register-card">
                        <h1 class="welcome-text">¡Regístrate con nosotros!</h1>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="reg-name">Nombre completo</label>
                                <input type="text"
                                    id="reg-name"
                                    name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="reg-email">Correo</label>
                                <input type="email"
                                    id="reg-email"
                                    name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="reg-phone">Celular</label>
                                <input type="tel"
                                    id="reg-phone"
                                    name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}"
                                    required
                                    autocomplete="tel">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="reg-password">Contraseña</label>
                                <input type="password"
                                    id="reg-password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    required
                                    autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="reg-password-confirm">Confirmar Contraseña</label>
                                <input type="password"
                                    id="reg-password-confirm"
                                    name="password_confirmation"
                                    class="form-control"
                                    required
                                    autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Registrarse
                            </button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<style>
    .logo {
        display: flex;
        /* Añadido */
        justify-content: center;
        /* Añadido */
        align-items: center;
        /* Añadido */
        padding: 20px;
    }

    .logo img {
        width: 120px;
        /* Ajustado el tamaño */
        height: 120px;
        /* Ajustado el tamaño */
        border-radius: 8px;
    }

    .error-message {
        color: #dc3545;
        font-size: 0.875em;
        margin-top: 0.25rem;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    .container {
        padding: 0 !important;
        margin: 0 !important;
        max-width: 100% !important;
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
        margin-left: 0;
        padding-left: 0;
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
        padding-bottom: 0;
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
        border-bottom: 0;
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

    /* Estilos de los modales */
    .login-card,
    .register-card {
        background: white;
        padding: 40px;
        border-radius: 24px;
        width: 90%;
        max-width: 400px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .welcome-text {
        text-align: center;
        font-size: 24px;
        color: #333;
        margin-bottom: 30px;
        font-style: italic;
    }

    .form-group {
        margin-bottom: 24px;
    }

    .login-card label,
    .register-card label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-size: 16px;
    }

    .login-card input,
    .register-card input {
        width: 100%;
        padding: 12px 16px;
        border: none;
        background: #f8f9fa;
        border-radius: 12px;
        font-size: 16px;
        color: #333;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .login-card input:focus,
    .register-card input:focus {
        outline: none;
        background: #fff;
        box-shadow: 0 0 0 2px #007bff40;
    }

    .forgot-password {
        text-align: center;
        margin-bottom: 24px;
    }

    .forgot-password a {
        color: #666;
        text-decoration: underline;
        font-size: 14px;
    }

    .login-card .btn,
    .register-card .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 12px;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-bottom: 12px;
    }

    .login-card .btn-register {
        background: white;
        color: #333;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .login-card .btn-register:hover {
        background: #f8f9fa;
    }

    .back-link {
        text-align: center;
        margin-top: 24px;
    }

    .back-link a {
        color: #666;
        text-decoration: underline;
        font-size: 14px;
    }

    .modal-content {
        border-radius: 24px;
        border: none;
    }

    .modal-header {
        border-bottom: none;
        padding-bottom: 0;
    }

    .modal-body {
        padding: 0;
    }

    .modal-dialog {
        max-width: 400px;
        margin: 1.75rem auto;
        display: flex;
        align-items: center;
        min-height: calc(100% - 3.5rem);
    }

    .modal-content {
        border-radius: 24px;
        border: none;
        width: 100%;
    }

    .modal-header {
        border-bottom: none;
        padding: 1rem 1rem 0;
    }

    .modal-body {
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .invalid-feedback {
        display: block;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #dc3545;
    }

    .login-card,
    .register-card {
        background: white;
        padding: 40px;
        border-radius: 24px;
        width: 100%;
        margin: 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Asegurar que el botón de cerrar esté bien posicionado */
    .modal-header .btn-close {
        position: absolute;
        right: 1rem;
        top: 1rem;
        z-index: 1;
    }

    /* Ajuste del ancho máximo del contenido del formulario */
    .login-card form,
    .register-card form {
        width: 100%;
    }

    /* Asegurar que los inputs mantengan el ancho correcto */
    .login-card input,
    .register-card input {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #dee2e6;
        background: #f8f9fa;
        border-radius: 12px;
        font-size: 16px;
        color: #333;
    }
</style>