<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/img/ravenclaw.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b5b631b881.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
            window.axeptioSettings= {
            clientId:"66d8dd0c45644072527b0c95",
            cookiesVersion:"crypt'air-fr-EU",
            googleConsentMode:{
            default:{
            analytics_storage:"denied",
            ad_storage:"denied",
            ad_user_data:"denied",
            ad_personalization:"denied",
            wait_for_update:500
        }
        }
        };

            (function(d,s) {
            var t = d.getElementsByTagName(s)[0],e = d.createElement(s);
            e.async = true; e.src = "//static.axept.io/sdk.js";
            t.parentNode.insertBefore(e, t);
        })(document, "script");
    </script>
</head>
<body class="bg-gray-900 text-white">

<header class="bg-gray-800 shadow">
    <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <a href="index.php" class="flex items-center">
                <img src="img/logo.png" alt="Logo" class="h-10 w-10" />
            </a>
        </div>
        <div class="hidden md:block">
            <ul class="flex space-x-6">
                <li><a href="apropos.php" class="text-lg md:text-xl font-bold hover:text-gray-300 transition-transform duration-200 transform hover:scale-105">À propos</a></li>
                <li><a href="projets.php" class="text-lg md:text-xl font-bold hover:text-gray-300 transition-transform duration-200 transform hover:scale-105">Expériences / Projets</a></li>
                <li><a href="competences.php" class="text-lg md:text-xl font-bold hover:text-gray-300 transition-transform duration-200 transform hover:scale-105">Compétences</a></li>
                <li><a href="contact.php" class="text-lg md:text-xl font-bold hover:text-gray-300 transition-transform duration-200 transform hover:scale-105">Contact</a></li>
            </ul>
        </div>
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </nav>
    <div id="mobile-menu" class="hidden md:hidden bg-gray-800">
        <ul class="flex flex-col space-y-2 p-4">
            <li><a href="apropos.php" class="text-lg md:text-xl font-bold block hover:text-gray-300 transition-transform duration-200 transform hover:scale-105">À propos</a></li>
            <li><a href="projets.php" class="text-lg md:text-xl font-bold block hover:text-gray-300 transition-transform duration-200 transform hover:scale-105">Expériences / Projets</a></li>
            <li><a href="competences.php" class="text-lg md:text-xl font-bold block hover:text-gray-300 transition-transform duration-200 transform hover:scale-105">Compétences</a></li>
            <li><a href="contact.php" class="text-lg md:text-xl font-bold block hover:text-gray-300 transition-transform duration-200 transform hover:scale-105">Contact</a></li>
        </ul>
    </div>
</header>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
</body>
</html>
