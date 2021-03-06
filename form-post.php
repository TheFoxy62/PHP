<?php
// données non envoyées
// $post = flase;

// données envoyées
$post = true;

// aucune erreur
$errors = []

// erreur dans le champ test
// $errors = [
//     'test' => "Le champ n'est pas correctement rempli.",
// ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" /> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Form post</h1>

                <form action="/form-validate.php" method="post">

                <!--version avec php-->
            
                    <!-- version formulaire vierge -->
                        <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control 
                        " type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champs</div>

                    <!-- version formulaire correct -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control is-valid" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champs</div>
                        <div class="valid-feedback">
                            Le champ est correctement rempli.
                        </div>
                    </div>

                    <!-- version formulaire erreur -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control is-invalid" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champs</div>
                        <div class="invalid-feedback">
                            Le champ n'est pas correctement rempli.
                        </div>
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="text" name="login" id="login" placeholder="votre nom d'utilisateur"required>
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="text" name="password" id="password" placeholder="votre mots de passe"required>
                    </div>


                    <div class="mb-3">
                        <p>Votre fruit prefere</p>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="fruit" id="fruit_1" value="Ananas">
                        <label class="form-check-label" for="fruit_1">Ananas</label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="fruit" id="fruit_2" value="Apple">
                        <label class="form-check-label" for="fruit_2">Apple</label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="fruit" id="fruit_3" value="Kiwi">
                        <label class="form-check-label" for="fruit_3">Kiwi</label>
                    </div>

                    <div class="mb-3">
                        <p>Vous plat préfere:</p>
                        <div class="form-check">
                        <input class="form-check-input" type="checbox" name="plat[]" id="plat_1" value="lasagne">
                        <label class="form-check-label" for="plat_1">lasagne</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="checbox" name="plat[]" id="plat_2" value="Ramen">
                        <label class="form-check-label" for="plat_2">Ramen</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="checbox" name="plat[]" id="plat_3" value="Entrecote">
                        <label class="form-check-label" for="plat_3">Entrecote</label>
                    </div>


                    <div class="mmb-3">
                        <p> Votre film prefere<p>
                            <select name="film" id="film">
                                <option value="interstellar">insterstellar</option>
                                <option value="fight club">fight club</option>
                                <option value="Shinning" selected>Shinning</option>
                            </select>


                            <div class="mb-3">
                                <p>Vos chanteurs preferes : <p>
                                    <select name="singers[]" id="singers" multiple>
                                        <option id="singer_1" value="celine dion">Céline Dion</option>
                                        <option id="singer_1" value="linkin park">Linkin Park</option>
                                        <option id="singer_1" value="jean-jacque goldman">Jean-Jacques Goldman</option>



                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>