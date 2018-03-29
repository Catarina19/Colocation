$(document).ready(function () {
    var boutonCommune = $("#boutonCommune"),
        boutonVille = $("#boutonVille");

    // Définition de l'état initial des champs
    $("#commune").hide();
    $("#ville").hide();

    // Quand on clique sur un des boutons
    boutonCommune.click(function () {
        $("#commune").fadeIn().attr("required", "true");
        $("#ville").fadeOut().attr("required", "false");
    });
    boutonVille.click(function () {
        $("#commune").fadeOut().attr("required", "false");
        $("#ville").fadeIn().attr("required", "true");
    })
});