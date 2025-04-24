<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Connexion</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="email">Email</label>
                <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2" for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">
                Se connecter
            </button>
        </form>

        <div class="my-6 text-center text-gray-500">— ou —</div>

        {{-- Connexion via Google --}}
        <a href="{{ route('auth.google') }}" class="w-full inline-block bg-red-500 hover:bg-red-600 text-white text-center py-2 px-4 rounded-lg transition duration-200">
            Se connecter avec Google
        </a>

        <div class="my-6 text-center text-gray-500">
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">S'inscrire</a>
        </div>
    </div>

</body>
</html>
