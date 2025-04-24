<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Créer un compte</h2>

        {{-- Formulaire d'inscription --}}
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="name">Nom</label>
                <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="email">Email</label>
                <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2" for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">
                S'inscrire
            </button>
        </form>

        <div class="my-6 text-center text-gray-500">— ou —</div>

        {{-- Inscription via Google --}}
        <a href="{{ route('auth.google') }}" class="w-full inline-block bg-red-500 hover:bg-red-600 text-white text-center py-2 px-4 rounded-lg transition duration-200">
            Continuer avec Google
        </a>

        <p class="mt-4 text-center text-sm text-gray-600">
            Déjà un compte ? 
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Se connecter</a>
        </p>
    </div>

</body>
</html>
