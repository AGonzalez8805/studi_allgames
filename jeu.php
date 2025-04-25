<?php
require_once "libs/game.php";
require_once "templates/header.php";


$id = (int) $_GET["id"];

$game = getGame($id);



?>

<section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 pt-10 mx-auto flex flex-wrap">
        <h1 class="title-font font-medium text-3xl mb-2 text-white"><?= $game["titreJeu"] ?></h1>
    </div>
    <div class="container px-5 py-4 mx-auto flex flex-wrap">
        <div class="lg:w-2/3 sm:w-2/3 w-full overflow-hidden mt-6 mr-6 sm:mt-0">
            <img class="object-cover object-center w-full h-full" src="https://dummyimage.com/600x300" alt="stats">
        </div>
        <div class="flex flex-wrap -mx-4 lg:w-1/3 sm:w-1/3 content-start sm:pr-10">
            <div class="w-full px-4 mb-35">
                <img class="object-cover object-center w-full h-full mb-5" src="https://dummyimage.com/450x200" alt="stats">
                <div class="leading-relaxed"><?= $game["description"] ?></div>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/3 w-1/2">
                <h2 class="title-font font-medium text-lg text-white">Très positive</h2>
                <p class="leading-relaxed">Evaluations</p>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/3 w-1/2">
                <h2 class="title-font font-medium text-lg text-white">1.2k</h2>
                <p class="leading-relaxed">Telechargement</p>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/3 w-1/2">
                <h2 class="title-font font-medium text-lg text-white">2025</h2>
                <p class="leading-relaxed">Sortie</p>
            </div>
        </div>
    </div>
    <div class="container px-5 pt-10 mx-auto flex flex-wrap">
        <a href="/jeux.php" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1 m-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
            Ajouter à la liste</a>
    </div>
</section>




<?php require_once "templates/footer.php"; ?>