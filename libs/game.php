<?php


function getAllGames(): array
{
    $games = [
        ["titreJeu" => "Spider-Man 2", "description" => "Incarnez le célèbre super-héros dans une nouvelle aventure pleine d\'action. Balancez-vous à travers la ville"],
        ["titreJeu" => "Like a Dragon: Infinite Wealth", "description" => "Explorez un monde ouvert rempli de possibilités et de défis. Incarnez un héros."],
        ["titreJeu" => "Red Dead Redemption 2", "description" => "Plongez dans une épopée western à la fin du XIXe siècle. Incarnez Arthur Morgan et participez à des braquages"],
    ];
    return $games;
}

function getGame(int $id): array
{

    $games = getAllGames();

    return $games[$id];
}
