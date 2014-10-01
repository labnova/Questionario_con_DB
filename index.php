<html>

<?php






if(isset($_POST['submit'])) {




//action="<?php $_SERVER['PHP_SELF'];



}


?>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style2.css" />
<script type="text/javaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript">

/* $(function() {

	$("#questionario").bind("submit", function(){

	var value=$("#punteggio").val();
	$.post("risultato.php", {punteggio:value}, function(data){
		$(".punteggio").html(data);
		
	});

	return false;


	});

}); */


$(document).ready(function() {
  $("#submit").click(function(){
    var domanda1 = $('input[name=domanda1]:checked').val();
    var domanda2 = $('input[name=domanda2]:checked').val();
    var domanda3 = $('input[name=domanda3]:checked').val();
    var domanda4 = $('input[name=domanda4]:checked').val();
    var domanda5 = $('input[name=domanda5]:checked').val();
    var domanda6 = $('input[name=domanda6]:checked').val();
   
    $.post("risposte.php", { domanda1: domanda1 }, function(msg){ 

    	$("#risultato1").html(msg);

	});

	$.post("risposte.php", { domanda2: domanda2 }, function(msg){ 

    	$("#risultato2").html(msg);

	});

	$.post("risposte.php", { domanda3: domanda3 }, function(msg){ 

    	$("#risultato3").html(msg);

	});

	$.post("risposte.php", { domanda4: domanda4 }, function(msg){ 

    	$("#risultato4").html(msg);

	});

	$.post("risposte.php", { domanda5: domanda5 }, function(msg){ 

    	$("#risultato5").html(msg);

	});

	$.post("risposte.php", { domanda6: domanda6 }, function(msg){ 

    	$("#risultato6").html(msg);

	});
    
     
     //$.post("risposte.php", { domanda4: domanda4 }, function(msg){ $("#risultato4").html(msg); });
     //$.post("risposte.php", { domanda5: domanda5 }, function(msg){ $("#risultato5").html(msg); });
     //$.post("risposte.php", { domanda6: domanda6 }, function(msg){ $("#risultato6").html(msg); });

      //$.post("risposte.php", function(msg){  });

    return false;

});

});

</script>
</head>

<body>


<form id="questionario" class=" row col-md-7 ac-custom ac-radio ac-circle"  method="post" >



<section>


	
	
	<div class="domanda">1. Come si crea un nuovo documento in Dreamweaver?</div>
	<ul>
    	<li><input type="radio"  name="domanda1" value="risposta1" /><label>Esci dal programma e riapri</label></li><br/>
		<li><input type="radio"  name="domanda1" value="risposta2" /><label>Strumenti->Nuovo Documento</label></li><br/>
		<li><input type="radio"  name="domanda1" value="risposta3" /><label>Dreamweaver->Nuovo</label></li><br/>
		<li><input type="radio"  name="domanda1" value="risposta4" /><label>File->Nuovo Documento</label></li><br/>
</ul>




<div id="risultato1"></div>


</section>
	
<section>
	<div class="domanda">2. Come si importa un foglio di stile CSS</div>
		<ul>
			<li><input type="radio" name="domanda2" value="risposta3" /><label>Quando si apre la finestra per il nuovo documento, c'&egrave;<br/>
	        l'apposita casella</label></li><br/>
			<li><input type="radio" name="domanda2" value="risposta2" /><label>Esci dal programma e riapri</label></li><br/>
			<li><input type="radio" name="domanda2" value="risposta1" /><label>File->importa CSS</label></li><br/>
			<li><input type="radio" name="domanda2" value="risposta4" /><label>Quando apri il collegamento per l'HTML, c'&egrave;<br/>
	        l'apposita finestra di importazione</label></li><br/>
		</ul>
	
<div id="risultato2"></div>

</section>
<section>
	<div class="domanda">3. A cosa serve il pannello Inserisci?</div>
		<ul>
			<li><input type="radio" name="domanda3" value="risposta1" /><label>Esci dal programma e riapri</label></li><br/>
			<li><input type="radio" name="domanda3" value="risposta2" /><label>Serve a inserire nuovi tag ed elementi multimediali</label></li><br/>
			<li><input type="radio" name="domanda3" value="risposta3" /><label>Serve per inserire nuove propriet&agrave; CSS</label></li><br/>
			<li><input type="radio" name="domanda3" value="risposta4" /><label>Serve per importare delle nuove immagini</label></li><br/>
		</ul>
	

	<div id="risultato3"></div>


	
</section>
<section>
	<div class="domanda">4. Come imposti una nuova transizione CSS?</div>
		<ul>
			<li><input type="radio" name="domanda4" value="risposta2" /><label>Ricorro all'apposito pannello CSS</label></li><br/>
			<li><input type="radio" name="domanda4" value="risposta1" /><label>Applico la sintassi prevista dalla propriet&agrave; CSS Transform</label></li><br/>
			<li><input type="radio" name="domanda4" value="risposta3" /><label>Lo scrivo da zero e lo importo nel mio CSS gi&agrave; esistente</label></li><br/>
			<li><input type="radio" name="domanda4" value="risposta4" /><label>Lo faccio con il CSS Designer, ma vi sono<br/>
	        grosse limitazioni.</label></li><br/>
		</ul>
	
<div id="risultato4"></div>

<?php




?>
</section>

<section>
	<div class="domanda">5. Come inserisci una nuova immagine?</div>
		<ul>
			<li><input type="radio" name="domanda5" value="risposta1" /><label>Utilizzo il pannello CSS Designer</label></li><br/>
			<li><input type="radio" name="domanda5" value="risposta3" /><label>File->Importa immagini</label></li><br/>
			<li><input type="radio" name="domanda5" value="risposta4" /><label>La trascino sullo stage<br/>
			<li><input type="radio" name="domanda5" value="risposta2" /><label>Utilizzo il pannello Risorse</label></li><br/>
	        </label></li><br/>
		</ul>
	

<div id="risultato5"></div>
<?php




?>
</section>
<section>
	<div class="domanda">6. A cosa serve la barra degli strumenti?</div>
		<ul>
			<li><input type="radio" name="domanda6" value="risposta3" /><label>Serve per importare altri strumenti</label></li><br/>
			<li><input type="radio" name="domanda6" value="risposta4" /><label>Serve per aprire nuovi documenti<br/>
			<li><input type="radio" name="domanda6" value="risposta2" /><label>Serve per importare siti web gi&agrave; esistenti</label></li><br/>
			<li><input type="radio" name="domanda6" value="risposta1" /><label>Serve per gestire meglio l'area di lavoro</label></li><br/>
	        </label></li><br/>
		</ul>
	
<div id="risultato6"></div>

<?php




?>
</section>
<section>
	<div class="domanda">7. A cosa serve la "Modalit&agrave; Progettazione"?</div>
		<ul>
			<li><input type="radio" name="domanda7" value="risposta4" /><label>Serve per riconfigurare un sito.<br/>
			<li><input type="radio" name="domanda7" value="risposta3" /><label>Serve per creare e modificare graficamente il layout di un sito web.</label></li><br/>
			<li><input type="radio" name="domanda7" value="risposta2" /><label>Serve per bloccare graficamente il layout di un sito web.</label></li><br/>
			<li><input type="radio" name="domanda7" value="risposta1" /><label>E' una funzione del pannello File.</label></li><br/>
	        </label></li><br/>
		</ul>
	


<?php

switch ($risultato7) {
		case 'risposta4':
			echo "<br/><p class='sbaglio'>Sbagliato, la riconfigurazione di un sito si fa in altri modi.</p><br/>";
			break;

			case 'risposta3':
			
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta2':
			
			echo "<br/><p class='sbaglio'>Sbagliato, non si può bloccare il layout di un sito.</p><br/>";
			break;

			case 'risposta1':
			
			echo "<br/><p class='sbaglio'>Sbagliato, il pannello file serve per tenere sotto controllo l'organizzazione del sito.</p><br/>";
			
			break;
		
		
	}



?>
</section>
<section>
	<div class="domanda">8. Indicare un esempio di link assoluto.</div>
		<ul>
			<li><input type="radio" name="domanda8" value="risposta3" /><label>#home</label></li><br/>
			<li><input type="radio" name="domanda8" value="risposta2" /><label>http://www.labnova.it/#home</label></li><br/>
			<li><input type="radio" name="domanda8" value="risposta1" /><label>mailto:progettofeb@gmail.com</label></li><br/>
			<li><input type="radio" name="domanda8" value="risposta4" /><label>http://www.labnova.it<br/>
	       </label></li><br/>
		</ul>
	


<?php

switch ($risultato8) {
		case 'risposta3':
			echo "<br/><p class='sbaglio'>Sbagliato, &egrave; un'ancora.</p><br/>";
			break;

			case 'risposta2':
			echo "<br/><p class='sbaglio'>Sbagliato, potrebbe essere un collegamento intratestuale.</p><br/>";
			
			break;

			case 'risposta1':
			
			echo "<br/><p class='sbaglio'>Sbagliato, &egrave; il collegamento a una precisa casella di posta elettronica.</p><br/>";
			break;

			case 'risposta4':
			
			
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			
			break;
		
		
	}



?>
</section>
<section>
	<div class="domanda">9. A cosa serve il tag <<code>ul</code>> </div>
		<ul>
			<li><input type="radio" name="domanda9" value="risposta2" /><label>Apre un collegamento a un'immagine.</label></li><br/>
			<li><input type="radio" name="domanda9" value="risposta3" /><label>Apre una lista non ordinata.</label></li><br/>
			<li><input type="radio" name="domanda9" value="risposta1" /><label>Apre una lista ordinata</label></li><br/>
			<li><input type="radio" name="domanda9" value="risposta4" /><label>Apre una lista domanda/risposta<br/>
	        </label></li><br/>
		</ul>
	


<?php

switch ($risultato9) {
		case 'risposta2':
			echo "<br/><p class='sbaglio'>Sbagliato, quell'operazione &egrave; gestita da un altro tag.</p><br/>";
			break;

			case 'risposta3':
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta1':
			echo "<br/><p class='sbaglio'>Sbagliato, quell'operazione &egrave; gestita da un altro tag.</p><br/>";
			break;

			case 'risposta4':
			echo "<br/><p class='sbaglio'>Sbagliato, quell'operazione &egrave; gestita da un altro tag.</p><br/>";
		
			break;
		
		
	}



?>
</section>
<section>
	<div class="domanda">10. Cosa gestisce la propriet&agrave; CSS "padding"?</div>
		<ul>
			<li><input type="radio" name="domanda10" value="risposta2" /><label>Gestisce lo spazio interno dell'elemento layout su cui &egrave; applicata.</label></li><br/>
			<li><input type="radio" name="domanda10" value="risposta3" /><label>Gestisce lo spazio esterno dell'elemento layout su cui &egrave; applicata.</label></li><br/>
			<li><input type="radio" name="domanda10" value="risposta1" /><label>Gestisce i bordi dell'elemento layout su cui &egrave; applicata.</label></li><br/>
			<li><input type="radio" name="domanda10" value="risposta4" /><label>Gestisce i margini dell'elemento layout su cui &egrave; applicata.<br/>
	        </label></li><br/>
		</ul>
	


<?php

switch ($risultato10) {
		case 'risposta2':
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta3':
			echo "<br/><p class='sbaglio'>Sbagliato, quell'operazione &egrave; gestita da un'altra propriet&agrave;'.</p><br/>";
			break;

			case 'risposta1':
			echo "<br/><p class='giusto'>Sbagliato, quell'operazione &egrave; gestita da un'altra propriet&agrave;'.</p><br/>";
			break;

			case 'risposta4':
			echo "<br/><p class='sbaglio'>Sbagliato, quell'operazione &egrave; gestita da un'altra propriet&agrave;'.</p><br/>";
		
			break;
		
		
	}



?>
</section>

	<br/>
	<br/>
	<br/>




<!-- <script type="text/javascript">
	


</script> -->






<input type="submit" id="submit" class="btn btn-2 btn-2a" name="submit" value="verifica le tue risposte"  />








</div>






	</form>
</div>

<?

switch ($punteggio) {

			
			case '0':
			echo "<div class='row col-md-4 punteggio'>";
			echo "<form  action='index.php' method='post'>";
			echo "<p>Purtroppo non hai risposto in maniera corretta a nessuna delle domande.</p><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='ripeti il test'> ";
			echo "</form>";
			echo "</div>";
			
			break;


			 case '1'; case '2'; case '3':
			$media=calcolaMedia($punteggio);
			$voto="Disastro";
			echo "<div class='row col-md-4 punteggio'>";
			echo "<form  action='index.php' method='post'>";
			echo "<p>$voto</p>";
			echo "<p>Il tuo punteggio &egrave; </p><div class='numero'> " .$media."/60</div><br/>";
			echo "<p>non hai superato la prova. Studia di pi&ugrave;.</p><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='ripeti il test'> ";
			echo "</form>";
			echo "</div>";
			
			break;

			case '4'; case '5'; case '6':
			$voto="Insufficiente";
			$media=calcolaMedia($punteggio);
			echo "<div class='punteggio'>";
			echo "<form  action='index.php' method='post'>";
			echo "<p>$voto</p>";
			echo "<p>Il tuo punteggio &egrave;</p><div class='numero'>  " .$media."/60</div><br/>";
			echo "<p>non hai superato la prova, ma hai delle potenzialit&agrave;.</p><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='ripeti il test'> ";
			echo "</form>";
			echo "</div>"; 
			
			break; 

			case '7'; case '8':
			$voto="Buono";
			$media=calcolaMedia($punteggio);
			echo "<div class='punteggio'>";
			echo "<form action='completato.php' method='post'>";
			echo "<p>$voto</p>";
			echo "<p>Il tuo punteggio &egrave; </p><div class='numero'> " .$media."/60</div><br/>";
			echo "<p>Complimenti!<br/>Inserisci il tuo nome, cognome e la mail per ricevere l'attestato.  ";
			echo "<br/><br/>";
			echo "<input type='text' required='true' name='nome' placeholder='inserisci il nome' /><br/>";
			echo "<input type='text' required='true' name='cognome' placeholder='inserisci il cognome' /><br/>";
			echo "<input type='email' required='true' name='mail' placeholder='inserisci la mail' /><br/>";
			echo "<input type='hidden'  name='voto' value='$media'  /><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='completato' value='Invia'> ";
			echo "</form>";
			echo "</div>";
			
			break;

			case '9'; case '10':
			$voto="Eccellente";
			$media=calcolaMedia($punteggio);
			echo "<div class='punteggio'>";
			echo "<form  action='completato.php' method='post'>";
			echo "<p>$voto</p>";
			echo "<p>Il tuo punteggio &egrave;</p><div class='numero'>  " .$media."/60</div><br/>";
			echo "<p>Complimenti!<br/>Inserisci il tuo nome, cognome e la mail per ricevere l'attestato.";
			echo "<br/><br/>";
			echo "<input type='text' required='true' name='nome' placeholder='inserisci il nome' /><br/>";
			echo "<input type='text' required='true' name='cognome' placeholder='inserisci il cognome' /><br/>";
			echo "<input type='email' required='true' name='mail' placeholder='inserisci la mail' /><br/>";
			echo "<input type='hidden'  name='voto' value='$media'  /><br/>";
			echo "<input type='submit' class='btn btn-2 btn-2a' name='ripeti' value='Invia'> ";
			echo "</form>";
			echo "</div>";
			
			break;
		
	
	}  
	
?>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/svgcheckbx.js"></script>
</div>
</body>


</html>
