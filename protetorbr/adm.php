<!--------------------------------------------------------------------------------><!--
 PEDIMOS PARA QUE NÃO COPIE OU DIVULGUE OS CODIGOS DO FÓRUM SEM AUTORIZAÇÃO --><!--
------------------------------------------------------------------------------><!--
---- TODO TRABALHO E DEDICAÇAO NAO MERECE SER DIVULGADO POR INTRECEIROS ------><!--
------------------ Brsociety.com.br | Victor Menezes --------------------><!--
------------------------------------------------------------------------------><!--
 PEDIMOS PARA QUE NÃO COPIE OU DIVULGUE OS CODIGOS DO FÓRUM SEM AUTORIZAÇÃO --><!--
------------------------------------------------------------------------------>
<!--//protetor simples by brsociety
// Autor : Dev4ster
//Site: https://brsociety.com.br/
//github profile https://github.com/Dev4ster/
// project link : https://github.com/Dev4ster/SimplesProtetorDeLinks/
// version : 1.0
-->
<html>
<head><title> Criar Links</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

</head>
<body>
<script>
//link do protetor com parâmetro
var protetor = "http://localhost/p/protetorbr/?url=";
//funcao inicial
$(document).ready(function () {
	//funcao to hex
	function toHex(str) {
	var hex = '';
	for(var i=0;i<str.length;i++) {
		hex += ''+str.charCodeAt(i).toString(16);
	}
	return hex;
}
//mostrando o resultado
var message = document.getElementById("message");
document.getElementById("myButton").addEventListener("click", function() {
document.write(protetor+toHex(message.value));
var iraolink = protetor+toHex(message.value);
document.write('<br><a href="'+iraolink+'" target="_blank">ir ao link</a>');
document.write('<br><a href="javascript:location.reload()">Voltar</a>');
});

});
</script>
<br>
<center>
<br>
<!--inicio do formulário-->
<h3> Coloque o link de download </h3>
<br>
<input type="text" id="message" value="">
<br>
<button id="myButton" type="button">Enviar</button></center>
<!--by dev4ster brsociety.com.br--->
</body>
</html>