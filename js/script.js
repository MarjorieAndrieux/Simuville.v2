// Fonction affichant ou cachant les interfaces au chargement
function hideInterface() {
  $("#iniPartie").show()
  $("#iniVille",).hide()
  $("#ville1").hide()
  $("#ville2").hide()
  $("#ville3").hide()
  $("#simuPartie").hide()
  $("#simuVille1").hide()
  $("#simuVille2").hide()
  $("#simuVille3").hide()
  $("#stat").hide()
};

hideInterface();

// Déclaration des différentes variables utilisées
var iniVille;
var startSimu;
var endSimu;
var elem;
var timerId;
var showNbrSimuVille;
var elemPop;

// ******Interface initialisation ville/partie*************************************


// Au click btn, affichage de la div d'initialisation de la ville
$( "#btnParamVille" ).click(function InitialisationVille() {
  $("#btnParamVille").hide();
  $("#iniVille").show();

// Récupération  de la valeur du nombre de ville
  iniVille = $("#partieNbrVille").val();
  // console.log(iniVille)
  
// Affichage des div de paramétrage des villes dynamiquement
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
$( "#btnLancmtSimu" ).click(function showSimulaton() {
  $("#iniPartie").hide();
  $("#simuPartie").show();
  $("#simuVille1").hide();
  $("#simuVille2").hide();
  $("#simuVille3").hide();

  var anneeSimu = parseInt($("#partieNbrAnnSimu").val());

  // Récupération des valeurs des inputs de la ville 1
    var popInitiale1 = parseInt($("#popIni1").val());
    var tauxNatalite1 = parseFloat($("#txNatalite1").val());
    var tauxMortalite1 = parseFloat($("#txMortalite1").val());
    var calculpop1 = (popInitiale1+(popInitiale1*tauxNatalite1)-(popInitiale1*tauxMortalite1));
    var tab = [popInitiale1, tauxNatalite1, tauxMortalite1];

    envoisAjax(tab);
  
    // console.log("données: ", anneeSimu, popInitiale1, tauxNatalite1, tauxMortalite1);
    // console.log("calcul pop: ", calculpop1);
  
    // Récupération des valeurs des inputs de la ville 2
    var popInitiale2 = parseInt($("#popIni2").val());
    var tauxNatalite2 = parseFloat($("#txNatalite2").val());
    var tauxMortalite2 = parseFloat($("#txMortalite2").val());
    var calculpop2 = (popInitiale2+(popInitiale2*tauxNatalite2)-(popInitiale2*tauxMortalite2));
  
    // console.log("données: ", anneeSimu, popInitiale2, tauxNatalite2, tauxMortalite2);
    // console.log("calcul pop: ", calculpop2);

  // Récupération des valeurs des inputs de la ville 3
      var popInitiale3 = parseInt($("#popIni3").val());
      var tauxNatalite3 = parseFloat($("#txNatalite3").val());
      var tauxMortalite3 = parseFloat($("#txMortalite3").val());
      var calculpop3 = (popInitiale3+(popInitiale3*tauxNatalite3)-(popInitiale3*tauxMortalite3));
    
      // console.log("données: ", anneeSimu, popInitiale3, tauxNatalite3, tauxMortalite3);
      // console.log("calcul pop: ", calculpop3);

// Au click, lancement du chrono de simulation
  startSimu = 0;
  endSimu = $("#partieNbrAnnSimu").val();
  elem = document.getElementById('chrono');
  elemPop = document.getElementById('simuPop1');
  timerId = setInterval(chronoSimu, 100);
    
  function chronoSimu() {

    if (startSimu == endSimu) {
      clearTimeout(timerId);
      // $("#simuPartie").hide();
      $("#stat").show();
    } else {
      elem.innerHTML = "Année: " + startSimu;
      startSimu++;


    }
    };

  // Affichage des div de simulation des villes dynamiquement
  // function showSimuVille() {
  showNbrSimuVille = $("#partieNbrVille").val();
  
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

// Envois de données ville en base
function envoisAjax(tab){
  $.ajax({
    type: 'POST',
    url: 'creationVille.php',
    data: {paramVille:tab},
    success: function(data){
      // console.log('data: ', data);
      var json = JSON.parse(data);
      // console.log('json:', json);
      insertParam(json);
    }
  });

}

function insertParam(json){
  $('#inipop1').html(json[0]);
  $('#txnat1').html(json[1]);
  $('#txmort1').html(json[2]);
}