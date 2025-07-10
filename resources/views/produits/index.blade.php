<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
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
        .batman-btn {
            background: #181818;
            color: #FFD600;
            border: 2px solid #FFD600;
            font-weight: bold;
            padding: 0.5rem 1.5rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: 0.2s;
            box-shadow: 0 2px 8px #000a;
            display: inline-block;
            text-decoration: none;
        }
        .batman-btn:hover {
            background: #FFD600;
            color: #181818;
            box-shadow: 0 0 16px #FFD60099, 0 2px 8px #000a;
        }
        .batman-table {
            background: #222;
            color: #FFD600;
            border: 2px solid #FFD600;
            border-radius: 12px;
            overflow: hidden;
            width: 100%;
            margin: 0 auto;
        }
        .batman-table th, .batman-table td {
            border: 1px solid #FFD600;
            padding: 0.5rem 1rem;
        }
        .batman-table thead {
            background: #181818;
            color: #FFD600;
        }
        .batman-table tbody tr:hover {
            background: #333;
            color: #fff;
        }
        .text-center {
            text-align: center;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        .alert-success {
            background: #222;
            color: #FFD600;
            border: 1px solid #FFD600;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="batman-header">
        <svg class="batman-header-logo" viewBox="0 0 64 32" fill="none" xmlns="http://www.w3.org/2000/svg"><ellipse cx="32" cy="16" rx="32" ry="16" fill="#FFD600"/><path d="M16 16c0-4 4-8 16-8s16 4 16 8-4 8-16 8-16-4-16-8z" fill="#181818"/><path d="M32 8l2 8h-4l2-8z" fill="#181818"/></svg>
        <span class="batman-header-title">Liste des produits</span>
    </div>
    <div class="container">
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('produits.create') }}" class="batman-btn">Créer un produit</a>
        <table class="batman-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                </tr>
            </thead>
            <tbody>
            @forelse($produits as $produit)
                <tr>
                    <td>{{ $produit->id }}</td>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->description }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>{{ $produit->quantite }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Aucun produit trouvé.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
