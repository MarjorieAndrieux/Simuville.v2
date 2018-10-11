<!doctype html>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Simuville</title>
</head>
<body>
<!-- Titre toujours visible -->
    <div id="titre" class="row">
      <h1 class="col-12 bg-light text-center font-weight-bold">Bienvenue sur le Simuville, le site de simulation de villes</h1>
    </div>


<!-- Interface d'initialisation -->
  <div id="iniPartie">


<!-- Initialisation partie -->
    <div id="partie">
      <div class="row">
      <div class="col-1"></div>
        <div class="col-10">
          <div class="form">
            <div class="form-group">
              <label for="partieNbrVille">Déterminer le nombre de ville:</label>
              <input type="number" class="form-control" id="partieNbrVille" min="1" max="3">


            <label for="partieNbrAnnSimu">Déterminer le nombre d'années de la simulation:</label>
            <input type="number" class="form-control" id="partieNbrAnnSimu" min="1" max="20000">
            </div>
          </div>

<!-- Bouton paramétrage des villes -->
          <button type="submit" id="btnParamVille" class="btn btn-dark">Paramétrer les villes</button>
<!-- Fin bouton paramétrage des villes -->

        </div> 
      <div class="col-1"></div>
      </div>
    </div>
<!-- Fin initialisation partie -->

<!-- Initialisation ville -->
    <div id="iniVille" class="row mt-3">
      <div class="col-1"></div>

<!-- ville 1 -->
      <div id="ville1" class="col-3">
        <h3>Ville 1</h3>
        <div class="form">
          <div class="form-group">
            <label for="popIni1">Population initiale</label>
            <input type="number" class="form-control" id="popIni1" min="2" max="5000">


            <label for="txNatalite1">Taux de natalité</label>
            <input type="number" class="form-control" id="txNatalite1" step="0.001" min="0" max="1">

            <label for="txMortalite1">Taux de mortalité</label>
            <input type="number" class="form-control" id="txMortalite1" step="0.001" min="0" max="1">

          </div>
        </div>
      </div>

<!-- ville 2 -->
      <div id="ville2" class="col-3">
        <h3>Ville 2</h3>
        <div class="form">
            <div class="form-group">
              <label for="popIni2">Population initiale</label>
              <input type="number" class="form-control" id="popIni2" min="2" max="5000">
  
  
              <label for="txNatalite2">Taux de natalité</label>
              <input type="number" class="form-control" id="txNatalite2" step="0.001" min="0" max="1">
  
              <label for="txMortalite2">Taux de mortalité</label>
              <input type="number" class="form-control" id="txMortalite2" step="0.001" min="0" max="1">
  
            </div>
          </div>
      </div>

<!-- ville 3 -->
      <div id="ville3" class="col-3">
        <h3>Ville 3</h3>
        <div class="form">
            <div class="form-group">
              <label for="popIni3">Population initiale</label>
              <input type="number" class="form-control" id="popIni3" min="2" max="5000">
  
  
              <label for="txNatalite3">Taux de natalité</label>
              <input type="number" class="form-control" id="txNatalite3" step="0.001" min="0" max="1">
  
              <label for="txMortalite3">Taux de mortalité</label>
              <input type="number" class="form-control" id="txMortalite3" step="0.001" min="0" max="1">
  
            </div>
          </div>
      </div>

      <div class="col-2">

<!-- Bouton lancement de simulation-->
        <button id="btnLancmtSimu" type="button" class="btn btn-danger h-100 w-100 mr-3">Lancer la simulation</button>
<!-- Fin bouton lancement de simulation -->

      </div>
      <!-- <div class="col-1"></div> -->

    </div>

<!-- Fin initialisation ville -->

  </div>

<!-- Fin interface d'initialisation -->

<!-- Interface de simulation -->
  <div id="simuPartie">
    <div id="simuChrono" class="row">
      <div class="col-1"></div>
      <h3 id="chrono" class="col-10 text-center"></h3>
      <div class="col-1"></div>
    </div>
    <div class="row">
      <div class="col-1"></div>
      <div id="simuVille1" class="col">
        <div class="row">
          <div class="col-12">Ville 1</div>
        </div>
        <div class="row">
          <div id="simuPop1" class="col-12">Population: </div>
        </div>
        <div class="row">
          <div id="simuCata1" class="col-12">Catastrophe: </div>
        </div>
        <div class="row">
          <div class="col-12">Bâtiment</div>
        </div>
      </div>

      <div id="simuVille2" class="col">
        <div class="row">
          <div class="col-12">Ville 2</div>
        </div>
        <div class="row">
          <div id="simuPop2" class="col-12">Population: </div>
        </div>
        <div class="row">
          <div id="simuCata2" class="col-12">Catastrophe: </div>
        </div>
        <div class="row">
          <div class="col-12">Bâtiment</div>
        </div>
      </div>

      <div id="simuVille3" class="col">
        <div class="row">
          <div class="col-12">Ville 3</div>
        </div>
        <div class="row">
          <div id="simuPop3" class="col-12">Population: </div>
        </div>
        <div class="row">
          <div id="simuCata3" class="col-12">Catastrophe: </div>
        </div>
        <div class="row">
          <div class="col-12">Bâtiment</div>
        </div>
      </div>
    
      <div class="col-1"></div>
    </div>
  </div>

  <!-- Fin interface de simulation -->

  <!-- Interface de statistique -->
  <div id="stat" class="row mt-4">
  <div class="col-1"></div>

  <div class="col-10">
    <div class="row">
    <h6 class="col-12">Voici le résumé de votre simulation: </h6>
    </div>

    <div class="row">
      <div class="col-12">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Paramètres</th>
              <th scope="col">Ville 1</th>
              <th scope="col">Ville 2</th>
              <th scope="col">Ville 3</th>
            </tr>
          </thead>
          <tbody>
            <!-- <tr>
              <th scope="row">Nombre d'années de simulation</th>
              <td>Blabla</td>
              <td>Blabla</td>
              <td>Blabla</td>
            </tr> -->
            <tr>
              <th scope="row">Population initiale</th>
              <td id='inipop1'></td>
              <td>Blabla</td>
              <td>Blabla</td>
            </tr>
            <tr>
              <th scope="row">Taux de natalité</th>
              <td id='txnat1'></td>
              <td>Blabla</td>
              <td>Blabla</td>
            </tr>
            <tr>
              <th scope="row">Taux de mortalité</th>
              <td id='txmort1'></td>
              <td>Blabla</td>
              <td>Blabla</td>
            </tr>
            <!-- <tr> -->
              <!-- <th scope="row">Catastrophe</th>
              <td>Blabla</td>
              <td>Blabla</td>
              <td>Blabla</td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
    <div id="btnFinSimu" class="row">
      <div class="col-2">
        <button type="button" id="btnRcommencer" class="btn btn-success">Recommencer</button>
      </div>
      <div class="col-2">
        <button type="button" id="btncsv" class="btn btn-primary">Exporter en csv</button>
      </div>
      <div class="col-8"></div>
    </div>
  </div>
  <div class="col-1"></div>
  </div>




  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>
</html>