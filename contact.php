<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ATTENTION !!!!!  Ne pas oublier de mettre le code d'intégration fontawesome  -->
    <script src="https://kit.fontawesome.com/<code>.js" crossorigin="anonymous"></script>
    <title>Contact | Billal SAIDI</title>
</head>
<body class="bg-gray-900 text-white font-sans">

<main class="container mx-auto px-4 py-10">
    <h1 class="text-4xl md:text-5xl font-bold text-center mb-8">Contactez-moi</h1>

    <h4 class="text-lg mb-4">Vous pouvez me contactez par</h4>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-gray-800 p-4 rounded-lg shadow-md">
            <h5 class="text-lg font-semibold mb-2">Mes mails :</h5>
            <div class="flex flex-col space-y-2">
                <a href="mailto:billal.saidi136@gmail.com" class="flex items-center bg-gray-700 hover:bg-gray-600 p-2 rounded-lg transition duration-200">
                    <i class="fas fa-envelope text-sky-400 mr-2"></i> billal.saidi136@gmail.com
                </a>
                <a href="mailto:billal.saidi@ynov.com" class="flex items-center bg-gray-700 hover:bg-gray-600 p-2 rounded-lg transition duration-200">
                    <i class="fas fa-envelope text-sky-400 mr-2"></i> billal.saidi@ynov.com
                </a>
            </div>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg shadow-md">
            <h5 class="text-lg font-semibold mb-2">Mes réseaux :</h5>
            <div class="flex flex-col space-y-2">
                <a href="https://www.instagram.com/billal.s_" target="_blank" class="flex items-center bg-gray-700 hover:bg-gray-600 p-2 rounded-lg transition duration-200">
                    <i class="fab fa-instagram text-sky-400 mr-2"></i> Instagram
                </a>
                <a href="https://x.com/BillalSaidi1" target="_blank" class="flex items-center bg-gray-700 hover:bg-gray-600 p-2 rounded-lg transition duration-200">
                    <i class="fab fa-x text-sky-400 mr-2"></i> X
                </a>
                <a href="https://wa.me/33768380660" target="_blank" class="flex items-center bg-gray-700 hover:bg-gray-600 p-2 rounded-lg transition duration-200">
                    <i class="fab fa-whatsapp text-sky-400 mr-2"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>

    <p class="text-lg mb-4 text-center">Par le formulaire de contact ci-dessous :</p>

    <div class="flex justify-center">
        <!-- ATTENTION !!!!!  Ne pas oublier de mettre l'url du formulaire formspree -->
        <form action="https://formspree.io/f/<id_form>" method="POST" class="w-full max-w-lg bg-gray-800 p-6 rounded-lg shadow-md">
            <div class="form-group mb-4">
                <label for="name" class="block text-sm font-semibold mb-2">Nom :</label>
                <input type="text" id="name" name="name" required class="w-full p-2 border border-gray-600 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring focus:ring-sky-500" placeholder="Votre nom">
            </div>
            <div class="form-group mb-4">
                <label for="email" class="block text-sm font-semibold mb-2">Email :</label>
                <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-600 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring focus:ring-sky-500" placeholder="Votre email">
            </div>
            <div class="form-group mb-4">
                <label for="message" class="block text-sm font-semibold mb-2">Message :</label>
                <textarea id="message" name="message" rows="4" required class="w-full p-2 border border-gray-600 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring focus:ring-sky-500" placeholder="Votre message"></textarea>
            </div>
            <button type="submit" class="w-full bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 rounded-lg transition duration-200">Envoyer</button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
