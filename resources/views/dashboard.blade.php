<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Batman</title>
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
        .batman-dashboard {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        .batman-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        @media (min-width: 768px) {
            .batman-grid {
                grid-template-columns: 1fr 1fr;
            }
        }
        @media (min-width: 1024px) {
            .batman-grid {
                grid-template-columns: 1fr 1fr 1fr;
            }
        }
        .batman-btn {
            background: #181818;
            color: #FFD600;
            border: 2px solid #FFD600;
            font-weight: bold;
            padding: 1.2rem 1.5rem;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.2s;
            box-shadow: 0 2px 8px #000a;
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .batman-btn svg {
            width: 24px;
            height: 24px;
            margin-right: 0.7rem;
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
        <span class="batman-header-title">Dashboard Batman</span>
    </div>
    <div class="batman-dashboard">
        <h3 style="margin-bottom:2rem; font-size:1.3rem; color:#FFD600;">Navigation rapide</h3>
        <div class="batman-grid">
            <a href="{{ route('produits.index') }}" class="batman-btn">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                Gérer les produits
            </a>
            <a href="{{ route('produits.create') }}" class="batman-btn">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                Ajouter un produit
            </a>
            <a href="{{ route('profile.edit') }}" class="batman-btn">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                Mon profil
            </a>
        </div>
    </div>
</body>
</html>
