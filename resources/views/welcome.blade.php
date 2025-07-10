<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue à Gotham</title>
    <style>
        body {
            background: linear-gradient(135deg, #111 60%, #222 100%);
            color: #f5f5f5;
            font-family: 'Arial Black', Impact, sans-serif;
            margin: 0;
            min-height: 100vh;
        }
        .batman-header {
            background: #181818;
            color: #FFD600;
            display: flex;
            align-items: center;
            padding: 1.5rem 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 16px #000a;
            border-bottom: 4px solid #FFD600;
            border-radius: 0 0 24px 24px;
        }
        .batman-header-logo {
            width: 60px;
            height: 40px;
            margin-right: 1rem;
        }
        .batman-header-title {
            font-size: 2.2rem;
            font-weight: 900;
            letter-spacing: 2px;
            text-shadow: 0 2px 8px #000, 0 0 2px #FFD600;
        }
        .batman-welcome {
            max-width: 600px;
            margin: 4rem auto 0 auto;
            background: #181818;
            border: 2px solid #FFD600;
            border-radius: 16px;
            box-shadow: 0 4px 24px #000a;
            color: #FFD600;
            padding: 2.5rem 2rem;
            text-align: center;
        }
        .batman-welcome h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #FFD600;
        }
        .batman-welcome p {
            font-size: 1.2rem;
            color: #f5f5f5;
        }
        .batman-btn {
            background: #181818;
            color: #FFD600;
            border: 2px solid #FFD600;
            font-weight: bold;
            padding: 0.7rem 1.5rem;
            border-radius: 8px;
            margin-top: 2rem;
            cursor: pointer;
            transition: 0.2s;
            box-shadow: 0 2px 8px #000a;
            text-decoration: none;
            font-size: 1.1rem;
        }
        .batman-btn:hover {
            background: #FFD600;
            color: #181818;
            box-shadow: 0 0 16px #FFD60099, 0 2px 8px #000a;
        }
    </style>
</head>
<body>
    <div class="batman-header">
        <svg class="batman-header-logo" viewBox="0 0 64 32" fill="none" xmlns="http://www.w3.org/2000/svg"><ellipse cx="32" cy="16" rx="32" ry="16" fill="#FFD600"/><path d="M16 16c0-4 4-8 16-8s16 4 16 8-4 8-16 8-16-4-16-8z" fill="#181818"/><path d="M32 8l2 8h-4l2-8z" fill="#181818"/></svg>
        <span class="batman-header-title">Bienvenue à Gotham</span>
    </div>
    <div class="batman-welcome">
        <h1>Bienvenue sur ton appli Batman !</h1>
        <p>Gère tes produits, ton profil et plus encore dans une ambiance Gotham City.<br>Utilise la navigation pour accéder aux différentes fonctionnalités.</p>
        <a href="{{ route('dashboard') }}" class="batman-btn">Accéder au dashboard</a>
    </div>
</body>
</html>
