<?php
function addUtilisateur(PDO $pdo, string $pseudoUtilisateur, string $mailUtilisateur, string $mdpUtilisateur): bool
{
    $query = $pdo->prepare("INSERT INTO `utilisateur` (`mailUtilisateur`, `mdpUtilisateur`, `pseudoUtilisateur`) VALUES (:mailUtilisateur, :mdpUtilisateur, :pseudoUtilisateur)");

    $mdpUtilisateur = password_hash($mdpUtilisateur, PASSWORD_DEFAULT);

    $query->bindValue(':mailUtilisateur', $mailUtilisateur);
    $query->bindValue(':pseudoUtilisateur', $pseudoUtilisateur);
    $query->bindValue(':mdpUtilisateur', $mdpUtilisateur);

    return $query->execute();
}


function verifyUtilisateur(array $utilisateur): array
{

    $errors = [];

    if (isset($utilisateur["pseudoUtilisateur"])) {
        if ($utilisateur["pseudoUtilisateur"] === "") {
            $errors["pseudoUtilisateur"] = "Le champ pseudo ne doit pas être vide";
        }
    } else {
        $errors["pseudoUtilisateur"] = "Il manque le pseudo";
    }
    return $errors;
}
