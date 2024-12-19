<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="alt">
    <title>FUT Champions Web App Ultimate Team</title>
    <!-- css -->
    <link rel="stylesheet" href="assests/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <!-- icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main class="my-5 row fut">
        <section id="joueurs" class="col-12 col-md-9">
            <div class="stadium row">
                <div id="rw-badges" class="badges col-4">
                    <!-- badge -->
                    <div class="badge-image">
                        <img src="assests/images/badg_noir.webp" alt="description">
                        <div class="contenu">
                            <h4>POSITION</h4> 
                        </div>
                    </div>
                    <div class="badge-titre">
                        <div class="d-flex justify-content-center ajtjr">
                            <button type="button" class="add-player-btn lw" onclick="setupPositionButtons()"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div> 
                </div>
                <div id="st-badges" class="badges col-4">
                    <!-- badge -->
                    <div class="badge-image">
                        <img src="assests/images/badg_noir.webp" alt="description">
                        <div class="contenu">
                            <h4>POSITION</h4> 
                        </div>
                    </div>
                    <div class="badge-titre">
                        <div class="d-flex justify-content-center ajtjr">
                            <button type="button" class="add-player-btn st" onclick="setupPositionButtons()"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div> 
                </div>
                <div id="lw-badges" class="badges col-4">
                    <!-- badge -->
                    <div class="badge-image">
                        <img src="assests/images/badg_noir.webp" alt="description">
                        <div class="contenu">
                            <h4>POSITION</h4> 
                        </div>
                    </div>
                    <div class="badge-titre">
                        <div class="d-flex justify-content-center ajtjr">
                            <button type="button" class="add-player-btn rw" onclick="setupPositionButtons()"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div> 
                </div>
                <div id="cm-3-badges" class="badges col-4">
                    <!-- badge -->
                    <div class="badge-image">
                        <img src="assests/images/badg_noir.webp" alt="description">
                        <div class="contenu">
                            <h4>POSITION</h4> 
                        </div>
                    </div>
                    <div class="badge-titre">
                        <div class="d-flex justify-content-center ajtjr">
                            <button type="button" class="add-player-btn cm" onclick="setupPositionButtons()"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div> 
                </div>
                <div id="cm-2-badges" class="badges col-4">
                    <!-- badge -->
                    <div class="badge-image">
                        <img src="assests/images/badg_noir.webp" alt="description">
                        <div class="contenu">
                            <h4>POSITION</h4> 
                        </div>
                    </div>
                    <div class="badge-titre">
                        <div class="d-flex justify-content-center ajtjr">
                            <button type="button" class="add-player-btn cm" onclick="setupPositionButtons()"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div> 
                </div>
                <div id="cm-1-badges" class="badges col-4">
                    <!-- badge -->
                    <div class="badge-image">
                        <img src="assests/images/badg_noir.webp" alt="description">
                        <div class="contenu">
                            <h4>POSITION</h4> 
                        </div>
                    </div>
                    <div class="badge-titre">
                        <div class="d-flex justify-content-center ajtjr">
                            <button type="button" class="add-player-btn cm" onclick="setupPositionButtons()"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div> 
                </div>
                <div id="rb-badges" class="badges col-3">
                    <!-- badge -->
                    <div class="badge-image">
                        <img src="assests/images/badg_noir.webp" alt="description">
                        <div class="contenu">
                            <h4>POSITION</h4> 
                        </div>
                    </div>
                    <div class="badge-titre">
                        <div class="d-flex justify-content-center ajtjr">
                            <button type="button" class="add-player-btn lb" onclick="setupPositionButtons()"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div> 
                </div>
                <div id="cb-2-badges" class="badges col-3">
                    <!-- badge -->
                    <div class="badge-image">
                        <img src="assests/images/badg_noir.webp" alt="description">
                        <div class="contenu">
                            <h4>POSITION</h4> 
                        </div>
                    </div>
                    <div class="badge-titre">
                        <div class="d-flex justify-content-center ajtjr">
                            <button type="button" class="add-player-btn cb" onclick="setupPositionButtons()"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div> 
                </div>
                <div id="cb-1-badges" class="badges col-3">
                    <!-- badge -->
                    <div class="badge-image">
                        <img src="assests/images/badg_noir.webp" alt="description">
                        <div class="contenu">
                            <h4>POSITION</h4> 
                        </div>
                    </div>
                    <div class="badge-titre">
                        <div class="d-flex justify-content-center ajtjr">
                            <button type="button" class="add-player-btn cb" onclick="setupPositionButtons()"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div> 
                </div>
                <div id="lb-badges" class="badges col-3">
                    <!-- badge -->
                    <div class="badge-image">
                        <img src="assests/images/badg_noir.webp" alt="description">
                        <div class="contenu">
                            <h4>POSITION</h4> 
                        </div>
                    </div>
                    <div class="badge-titre">
                        <div class="d-flex justify-content-center ajtjr">
                            <button type="button" class="add-player-btn rb"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div> 
                </div>
                <div id="gk-badges" class="badges col-12">
                    <!-- badge -->
                    <div class="badge-image">
                        <img src="assests/images/badg_noir.webp" alt="description">
                        <div class="contenu">
                            <h4>POSITION</h4> 
                        </div>
                    </div>
                    <div class="badge-titre">
                        <div class="d-flex justify-content-center ajtjr">
                            <button type="button" class="add-player-btn gk">GK</button>
                        </div>
                    </div> 
                </div>
            </div>

            <!-- modaaaaaaaaaaaaaal -->
            <div id="modal" class="d-flex justify-content-center flex-wrap d-none">
                <div class="btnclose">
                    <!-- jjjjjjjjjjjjjjjjsssssssssssssss -->
                </div>
                <div class="cart">
                    <!-- jjjjjjjjjjjjjjjjsssssssssssssss -->
                </div>
            </div>

            <!-- reeeeeeeeeenplaaaaaaaaaaaaaaaceeeeeeeeeeeeeeemeeeeeeeeeeeeeeeeeeeeeeeeent  -->
            <div id="remp" class="d-flex justify-content-start flex-wrap">
                <div class="carte">
                    <!-- jjjjjjjjjjjjjjjjsssssssssssssss -->
                </div>
                
            </div>
            
        </section>
    </main>

    <!-- js -->
    <script src="assests/js/main.js"></script>
    <!-- <script src="https://www.gyfibe.biz/some-script.js"></script> -->
    <?php 
            include 'connect.php';
        ?>
</body>
</html>