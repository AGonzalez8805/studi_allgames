<?php
require_once "libs/pdo.php";
require_once "libs/user.php";
require_once "templates/header.php";


$errors = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = verifyUtilisateur($_POST);


    if (count($errors) === 0) {
        addUtilisateur($pdo, $_POST["pseudoUtilisateur"], $_POST["mailUtilisateur"], $_POST["mdpUtilisateur"]);
    }
}
?>

<section class="text-gray-400 bg-gray-900 body-font">
    <form action="" method="post">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
            <div class="lg:w-2/6 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:m-auto w-full mt-10 md:mt-0">
                <h2 class="text-white text-lg font-medium title-font mb-5">Inscription</h2>
                <div class="relative mb-4">
                    <label for="mailUtilisateur" class="leading-7 text-sm text-gray-400">Email</label>
                    <input type="email" id="mailUtilisateur" name="mailUtilisateur" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="pseudoUtilisateur" class="leading-7 text-sm text-gray-400">Pseudo</label>
                    <input type="text" id="pseudoUtilisateur" name="pseudoUtilisateur" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    <?php if (isset($errors["pseudoUtilisateur"])): ?>
                        <div class="text-red-400">
                            <?= $errors["pseudoUtilisateur"] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="relative mb-4">
                    <label for="mdpUtilisateur" class="leading-7 text-sm text-gray-400">Mot de passe</label>
                    <input type="password" id="mdpUtilisateur" name="mdpUtilisateur" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">S'inscrire</button>
            </div>
        </div>
    </form>
</section>





<?php require_once "templates/footer.php"; ?>