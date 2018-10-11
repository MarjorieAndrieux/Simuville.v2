Récupération  de la valeur du nombre de ville
  var iniVille = $("#partieNbrVille").val();
  console.log(iniVille)
  function affichDynamVille() {
    if (iniVille = '1') {
      $("#iniVille").hide()
      $("#ville1").show()
    }

    else if (iniVille = '2') {
      $("#ville1").show()
      $("#ville2").show()
    }

    else (iniVille = '3') {
      $("#ville1").show()
      $("#ville2").show()
      $("#ville3").show()
    }
  }
  

  var startSimu = 0;
var endSimu = 100;
var elem = document.getElementById('chrono');
var timerId = setInterval(chronoSimu, 1000);

function chronoSimu() {
if (startSimu == endSimu) {
  clearTimeout(timerId);
} else {
  elem.innerHTML = "Année: " + startSimu;
  startSimu++;
}
};

console.log("coucou");

******Interface initialisation ville/partie*************************************

Fonction cachant les interfaces au chargement
function hideInterface() {
  $("#iniVille").hide()
  $("#simuPartie").hide()
  $("#stat").hide()
};

hideInterface();

Au click btn, affichage de la div d'initialisation de la ville
$( "#btnParamVille" ).click(function showIniVille() {
  // $("#btnParamVille").hide();
  $("#iniVille").show();
  $("#ville1").hide();
  $("#ville2").hide();
  $("#ville3").hide();

    // Récupération  de la valeur du nombre de ville
  var iniVille = $("#partieNbrVille").val();
  console.log(iniVille)

  // affichParamVille()
  if (iniVille == 1) {
    $("#ville1").show();
  }

  else if (iniVille == 2) {
    $("#ville1").show();
    $("#ville2").show();
  }
  else {
    $("#ville1").show();
    $("#ville2").show();
    $("#ville3").show();
  }


});




// ******Interface de simulation*************************************

// Au click btn, retrait de la div d'intitialisation de la partie (param partie+param ville) et affichage de la div de simulation de la partie
$( "#btnLancmtSimu" ).click(function showSimu() {
  $("#iniPartie").hide();
  $("#simuPartie").show();
  $("#simuVille1").hide();
  $("#simuVille2").hide();
  $("#simuVille3").hide();
});


// Click bouton de lancement de la simulation
$( "#btnLancmtSimu" ).click(function lancementSimu() {

  // Au click, lancement du chrono de simulation
  var startSimu = 0;
  var endSimu = $("#partieNbrAnnSimu").val();
  var elem = document.getElementById('chrono');
  var timerId = setInterval(chronoSimu, 100);
  
  function chronoSimu() {
  if (startSimu == endSimu) {
    clearTimeout(timerId);
    $("#simuPartie").hide();
    $("#stat").show();
  } else {
    elem.innerHTML = "Année: " + startSimu;
    startSimu++;
  }
  };

  var anneeSimu = $("#partieNbrAnnSimu").val();

// Récupération des valeurs des inputs de la ville 1
  var popInitiale1 = $("#popIni1").val();
  var tauxNatalite1 = $("#txNatalite1").val();
  var tauxMortalite1 = $("#txMortalite1").val();

  console.log("données: ", anneeSimu, popInitiale1, tauxNatalite1, tauxMortalite1);

  // Récupération des valeurs des inputs de la ville 2
  var popInitiale2 = $("#popIni2").val();
  var tauxNatalite2 = $("#txNatalite2").val();
  var tauxMortalite2 = $("#txMortalite2").val();

  console.log("données: ", anneeSimu, popInitiale2, tauxNatalite2, tauxMortalite2);

// Récupération des valeurs des inputs de la ville 3
    var popInitiale3 = $("#popIni3").val();
    var tauxNatalite3 = $("#txNatalite3").val();
    var tauxMortalite3 = $("#txMortalite3").val();
  
    console.log("données: ", anneeSimu, popInitiale3, tauxNatalite3, tauxMortalite3);
});

// Affichage des div de simulation des villes dynamiquement
$( "#btnLancmtSimu" ).click(function showSimuVille() {
  var showNbrSimuVille = $("#partieNbrVille").val();
  console.log(showNbrSimuVille)

  // affichSimuVille()
  if (showNbrSimuVille == 1) {
    $("#simuVille1").show();
  }

  else if (showNbrSimuVille == 2) {
    $("#simuVille1").show();
    $("#simuVille2").show();
  }
  else {
    $("#simuVille1").show();
    $("#simuVille2").show();
    $("#simuVille3").show();
  }

});
