<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un produit</title>
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
        .batman-card {
            background: #181818;
            border: 2px solid #FFD600;
            border-radius: 16px;
            box-shadow: 0 4px 24px #000a;
            color: #FFD600;
            padding: 2rem;
            max-width: 400px;
            margin: 0 auto;
        }
        .batman-card label {
            color: #FFD600;
            font-weight: bold;
        }
        .batman-card input, .batman-card textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border-radius: 6px;
            border: 1px solid #FFD600;
            background: #222;
            color: #FFD600;
        }
        .batman-btn {
            background: #181818;
            color: #FFD600;
            border: 2px solid #FFD600;
            font-weight: bold;
            padding: 0.5rem 1.5rem;
            border-radius: 8px;
            margin-right: 0.5rem;
            cursor: pointer;
            transition: 0.2s;
            box-shadow: 0 2px 8px #000a;
        }
        .batman-btn:hover {
            background: #FFD600;
            color: #181818;
            box-shadow: 0 0 16px #FFD60099, 0 2px 8px #000a;
        }
        .text-danger {
            color: #ff4444;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="batman-header">
        <svg class="batman-header-logo" viewBox="0 0 64 32" fill="none" xmlns="http://www.w3.org/2000/svg"><ellipse cx="32" cy="16" rx="32" ry="16" fill="#FFD600"/><path d="M16 16c0-4 4-8 16-8s16 4 16 8-4 8-16 8-16-4-16-8z" fill="#181818"/><path d="M32 8l2 8h-4l2-8z" fill="#181818"/></svg>
        <span class="batman-header-title">Créer un produit</span>
    </div>
    <form action="{{ route('produits.store') }}" method="POST" class="batman-card">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required value="{{ old('nom') }}">
        @error('nom') <div class="text-danger">{{ $message }}</div> @enderror

        <label for="description">Description</label>
        <textarea name="description" id="description" required>{{ old('description') }}</textarea>
        @error('description') <div class="text-danger">{{ $message }}</div> @enderror

        <label for="prix">Prix</label>
        <input type="number" name="prix" id="prix" step="0.01" required value="{{ old('prix') }}">
        @error('prix') <div class="text-danger">{{ $message }}</div> @enderror

        <label for="quantite">Quantité</label>
        <input type="number" name="quantite" id="quantite" required value="{{ old('quantite') }}">
        @error('quantite') <div class="text-danger">{{ $message }}</div> @enderror

        <button type="submit" class="batman-btn">Créer</button>
        <a href="{{ route('produits.index') }}" class="batman-btn">Retour</a>
    </form>
</body>
</html>
