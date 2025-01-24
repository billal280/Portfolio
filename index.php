<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ATTENTION !!!!!  Ne pas oublier de mettre le code d'intégration fontawesome  -->
    <script src="https://kit.fontawesome.com/<code>.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Accueil | Billal SAIDI</title>
</head>
<body class="bg-gray-900 text-white">

<main class="flex items-center justify-center h-screen bg-gradient-to-b from-gray-900 to-gray-800 px-4 md:px-0">
    <div class="text-center w-full max-w-4xl mx-auto"> 
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
            Bienvenue sur mon Portfolio !
        </h1>
        <p class="text-lg md:text-xl mb-6">
            Je m'appelle Billal Saidi, et je suis actuellement Ingénieur DevOps en alternance chez THALES. Je suis passionné par les technologies et l'innovation.
        </p>
        <a href="/projets" class="inline-block px-6 py-3 md:px-8 md:py-4 bg-black text-white rounded-full text-lg md:text-xl font-semibold shadow-lg
          hover:bg-white hover:text-black hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-out">
            Viens découvrir mes projets : )
        </a>
    </div>
</main>

<?php include 'footer.php'; ?>
</body>
</html>
