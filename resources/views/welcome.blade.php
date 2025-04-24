<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-lg text-center">
        <h1 class="text-3xl font-extrabold mb-2 text-gray-800">
            Hello, {{ Auth::user()->name }} 👋
        </h1>

        <p class="text-gray-600 mb-6 text-lg">
            Bienvenue sur ton espace personnel.
        </p>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600 transition duration-200">
                Se déconnecter
            </button>
        </form>
    </div>

</body>
</html>
