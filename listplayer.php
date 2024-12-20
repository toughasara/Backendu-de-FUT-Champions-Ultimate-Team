<?php
    include 'connect.php';

    $sql = " SELECT players.id, players.name_player as name, players.position, players.photo, nationality.flag as flag, clubs.logo as logo
        FROM players
        JOIN nationality ON players.id_natio = nationality.id
        JOIN clubs ON players.id_club = clubs.id";

    $result = $conn->query(query: $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="alt">
    <title>FUT Champions Web App Ultimate Team</title>
    <!-- css -->
    <link rel="stylesheet" href="assests/css/dashbord.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <!-- icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main class="my-5 row admin">
        <section id="dashbord" class="col-3">
            <div class="choix">
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>ADD PLAYER</strong></button>
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>players</strong></button>
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>nationality</strong></button>
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>clubs</strong></button>
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>statistiques</strong></button>
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>team</strong></button>
            </div>
        </section>
        <section id="contenu" class="row col-9">
            <div class="liste">
                <h2>list of players</h2>
            <a class="btn btn-primary btn-sm" href="/" role="button">New Client</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>photo</th>
                        <th>natio</th>
                        <th>club</th>
                        <th>position</th>
                        <th>crud</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $result->fetch_assoc()){
                            echo '
                            <tr>
                                <td>' . $row['id'] . '</td>
                                <td>' . $row['name'] . '</td>
                                <td><img src="' . $row['photo'] . '" alt="Player Photo" class="w-12 h-12 rounded-full object-cover"></td>
                                <td><img src="' . $row['flag'] . '" alt="Player Photo" class="w-12 h-12 rounded-full object-cover"></td>
                                <td><img src="' . $row['logo'] . '" alt="Player Photo" class="w-12 h-12 rounded-full object-cover"></td>
                                <td>' . $row['position'] . '</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/edit.php?id=$row[id]">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="/delete.php?id=$row[id]">Delete</a>
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
            </table>
            </div>
        </section>
            <!-- <?php 
                include 'connect.php';
            ?> -->
    </body>
    </html>