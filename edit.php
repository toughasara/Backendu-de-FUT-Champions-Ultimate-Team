<?php
    include 'connect.php';

    $name = "";
    $photo = "";
    $club = "";
    $nationality = "";
    $position = "";

    $ratingnot = "";
    $pacing = "";
    $shooting = "";
    $passing = "";
    $dribbling = "";
    $defending = "";
    $physical = "";

    $ratinggk = "";
    $diving = "";
    $handling = "";
    $kicking = "";
    $reflexes = "";
    $speed = "";
    $positioning = "";

    $errorMessage = "";
    $successMessage = "";

    if($_SERVER['REQUEST8METHOD'] == 'POST'){
        $name = $_POST["name"];
        $photo = $_POST["photo"];
        $club = $_POST["club"];
        $nationality = $_POST["nationality"];
        $position = $_POST["position"];
    
        $ratingnot = $_POST["ratingnot"];
        $pacing = $_POST["pacing"];
        $shooting = $_POST["shooting"];
        $passing = $_POST["passing"];
        $dribbling = $_POST["dribbling"];
        $defending = $_POST["defending"];
        $physical = $_POST["physical"];

        $ratinggk = $_POST["ratinggk"];
        $diving = $_POST["diving"];
        $handling = $_POST["handling"];
        $kicking = $_POST["kicking"];
        $reflexes = $_POST["reflexes"];
        $speed = $_POST["speed"];
        $positioning = $_POST["positioning"];

        <!-- do{
            if(empty($name) || empty($name)){
                $errorMessage = "All the fields are required";
                break;
            }

            //add new player to database
            $name = "";
            $photo = "";
            $club = "";
            $nationality = "";
            $position = "";

            $ratingnot = "";
            $pacing = "";
            $shooting = "";
            $passing = "";
            $dribbling = "";
            $defending = "";
            $physical = "";

            $ratinggk = "";
            $diving = "";
            $handling = "";
            $kicking = "";
            $reflexes = "";
            $speed = "";
            $positioning = "";

            $successMessage = "player added correctly";

        }while(false); -->
        <!-- $nationality_id = $conn->insert_id ?: $conn->query("SELECT id FROM nationalities WHERE name = '{$nationality}'")->fetch_assoc()['id']; -->

        <!-- nationalities -->
        $sql = "INSERT INTO nationality (nom_natio, flag)"
                "VALUES ('$nationality')";
        $result = $connection->query($sql);

        <!-- clubs -->
        $sql = "INSERT INTO clubs (name_club, logo)"
        "VALUES ('$club')";
        $result = $connection->query($sql);

        <!-- players -->
        $sql = "INSERT INTO players (id_club, id_natio, name_player, photo, position)"
                "VALUES ('$id_club','$id_natio','$name','$photo','$position')";
        $result = $connection->query($sql);

        <!-- statistiques -->
        if ($position === "GK"){
            $sql = "INSERT INTO goalkeeper (id_player, rating, diving, handling, kicking, reflexes, speed, positioning)"
                    "VALUES ('$id_player','$ratinggk','$diving','$handling','$kicking','$reflexes','$speed','$positioning')";
            $result = $connection->query($sql);
        }
        else {
            $sql = "INSERT INTO other_players (id_player, rating, pace, shooting, passing, dribbling, defending, physical)"
                    "VALUES ('$id_player','$ratingnot','$pacing','$shooting','$passing','$dribbling','$defending','$physical')";
            $result = $connection->query($sql);
        }
    }
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <!-- icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main class="my-5 row admin">
        <section id="dashbord" class="col-3">
            <div class="choix">
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>players</strong></button>
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>clubs</strong></button>
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>nationality</strong></button>
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>gk</strong></button>
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>no_gk</strong></button>
                <button id="all_players" type="button" class="btn btn-secondary w-75" onclick="clique()"><strong>team</strong></button>
            </div>
        </section>
        <section id="contenu" class="row col-9">
            <div class="formulaire">
                <?php
                    if(!empty($errorMessage)){
                        echo "
                        <div class="row mb-3">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>$errorMessage</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                            </div>
                        </div>
                        ";
                    }
                ?>
                <form id="add-player-form" method="post" data-player-id="">
                    <h3>choose your formation</h3>
                    <select id="formatio" class="btn btn-secondary">
                        <option value="4-3-3" selected>4-3-3</option>
                        <option value="4-4-2">4-4-2</option>
                    </select>
                    <h3>add a player</h3>

                    <!-- innfoooormaaatiionnnnn -->
                    <div class="input-group">
                        <label for="player-name">the name:</label>
                        <input type="text" id="player-name" class="infos" name="name" value="<?php echo $name; ?>" required>
                        <p id="erreur" class="text-danger d-none">Veuillez remplir ce champ</p>
                    </div>

                    <!-- innfoooormaaatiionnnnn -->
                    <div class="input-group">
                        <label for="player-photo">player photo:</label>
                        <input type="url" id="player-photo" class="urls" name="photo" value="<?php echo $photo; ?>  required>
                    </div>

                    <!-- innfoooormaaatiionnnnn -->
                    <div class="input-group">
                        <label for="player-club">the club URL:</label>
                        <input type="url" id="player-club" class="urls" name="club" value="<?php echo $club; ?> required>
                    </div>

                    <!-- innfoooormaaatiionnnnn -->
                    <div class="input-group">
                        <label for="player-nationality">the nationality URL:</label>
                        <input type="url" id="player-nationality" class="urls" name="nationality" value="<?php echo $nationality; ?> required>
                    </div>

                    <!-- innfoooormaaatiionnnnn -->
                    <div class="input-group">
                        <label for="player-position">the position:</label>
                        <select id="player-position" name="position" class="infos btn btn-success" value="<?php echo $position; ?> required>
                            <option value="" disabled selected>-- Please select a position --</option>
                            <option value="GK">Gardien de but (GK)</option>
                            <option value="LB">Latéral gauche (LB)</option>
                            <option value="CB">Latéral gauche (CB)</option>
                            <option value="RB">Latéral droit (RB)</option>
                            <option value="CM">Milieux centraux (CM)</option>
                            <option value="LW">Ailier gauche (LW)</option>
                            <option value="ST">Attaquant central (ST)</option>
                            <option value="RW">Ailier droit (RW)</option>
                        </select>
                    </div>
                    <!-- staaaaatiiiiiquuuuueeeee not-->
                    <div class="static d-none" id="form1">
                        <div class="input-group">
                            <label for="player-rating">the rate:</label>
                            <input type="number" id="player-rating" class="numerosnot" name="ratingnot" value="<?php echo $ratingnot; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-pace">the pace:</label>
                            <input type="number" id="player-pace" class="numerosnot" name="pacing" value="<?php echo $pacing; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-shooting">the shooting:</label>
                            <input type="number" id="player-shooting" class="numerosnot" name="shooting" value="<?php echo $shooting; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-passing">the passing:</label>
                            <input type="number" id="player-passing" class="numerosnot" name="passing" value="<?php echo $passing; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-dribbling">the dribbling:</label>
                            <input type="number" id="player-dribbling" class="numerosnot" name="dribbling" value="<?php echo $dribbling; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-defending">the defending:</label>
                            <input type="number" id="player-defending" class="numerosnot" name="defending" value="<?php echo $defending; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-physical">the physical:</label>
                            <input type="number" id="player-physical" class="numerosnot" name="physical" value="<?php echo $physical; ?> min="10" max="100" required>
                        </div>  
                    </div>
        
                    <!-- staaaaatiiiiiquuuuueeeee GK-->
                    <div class="static d-none" id="form2">
                        <div class="input-group">
                            <label for="player-rating">the rate:</label>
                            <input type="number" id="player-rating" class="numerosgk" name="ratinggk" value="<?php echo $ratinggk; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-diving">the diving:</label>
                            <input type="number" id="player-diving" class="numerosgk" name="diving" value="<?php echo $diving; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-handling">the handling:</label>
                            <input type="number" id="player-handling" class="numerosgk" name="handling" value="<?php echo $handling; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-kicking">the kicking:</label>
                            <input type="number" id="player-kicking" class="numerosgk" name="kicking" value="<?php echo $kicking; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-reflexes">the reflexes:</label>
                            <input type="number" id="player-reflexes" class="numerosgk" name="reflexes" value="<?php echo $reflexes; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-speed">the speed:</label>
                            <input type="number" id="player-speed" class="numerosgk" name="speed" value="<?php echo $speed; ?> min="10" max="100" required>
                        </div>
        
                        <div class="input-group">
                            <label for="player-positioning">the positioning:</label>
                            <input type="number" id="player-positioning" class="numerosgk" name="positioning" value="<?php echo $positioning; ?> min="10" max="100" required>
                        </div>
                    </div>
                    <?php
                        if(!empty($successMessage)){
                            echo "
                            <div class="row mb-3">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>$successMessage</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                                </div>
                            </div>
                            ";
                        }
                    ?>
                    <div class="d-flex justify-content-center">
                        <button id="add-player-button" type="submit" class="btn btn-secondary w-75" onclick="clique()"><strong>add palyer</strong></button>
                    </div>   
                </form>
            </div>
            <div id="players" class="row">
            <div id="team" ></div>
        </section>
        <!-- js -->
        <script src="assests/js/main.js"></script>
        <!-- <?php 
            include 'connect.php';
        ?> -->
</body>
</html>