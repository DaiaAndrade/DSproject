$("#compareButton").click(function(){
	$(".row .col-md-12 .panel").hide();

});
$("#cleanButton").click(function(){
	$("#projetosSimilares, #comparar").collapse('toggle');
	$(".row .col-md-12 .panel").show();
});
$(document).ready();