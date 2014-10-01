<?php

function calcolaMedia($pun) {



	$punteggio=$pun;
	$domande=10;
	$media=0;
	$risultato=0;

	$media= (($punteggio/$domande)*6);

	

	return $media;


}


	$risultato1= $_POST['domanda1'];
	$risultato2= $_POST['domanda2'];
	$risultato3= $_POST['domanda3'];
	$risultato4= $_POST['domanda4'];
	$risultato5= $_POST['domanda5'];
	$risultato6= $_POST['domanda6'];
	$risultato7= $_POST['domanda7'];
	$risultato8= $_POST['domanda8'];
	$risultato9= $_POST['domanda9'];
	$risultato10= $_POST['domanda10'];
	$risultato11= $_POST['domanda11'];
	$risultato12= $_POST['domanda12'];
	$risultato13= $_POST['domanda13'];
	$risultato14= $_POST['domanda14'];
	$risultato15= $_POST['domanda15'];


$punteggio=0;

switch ($risultato1) {
		case 'risposta1':
			
			echo "<br/><p class='sbaglio'>Sbagliato: cos&igrave; non concludi nulla.</p><br/>";
			
			break;

			case 'risposta2':
			
			echo "<br/><p class='sbaglio'>Sbagliato: non esiste una tale combinazione di scelte.</p><br/>";
			
			break;

			case 'risposta3':
			
			echo "<br/><p class='sbaglio'>Sbagliato: non esiste una tale combinazione di scelte.</p><br/>";
			
			break;

			case 'risposta4':
			
			echo "<br/><p class='giusto'>Bravo, risposta esatta.<br/>";
			$punteggio++;
			break;
		
		
	}

switch ($risultato2) {
		case 'risposta1':
			
			echo "<br/><p class='sbaglio'>Sbagliato: non esiste questa combinazione di scelte.</p><br/>";
			break;

			case 'risposta2':
			
			echo "<br/><p class='sbaglio'>Sbagliato: non concludi nulla.</p><br/>";
			break;

			case 'risposta3':
			
			echo "<br/><p class='giusto'>Bravo, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Sbagliato: la risposta <a href='https://www.youtube.com/watch?v=JU-QZ7yoyd4' target='_blank'>non ha senso.</a></p><br/>";
			break;
		
		
	}



switch ($risultato3) {
		case 'risposta1':
			
			echo "<br/><p class='sbaglio'>Sbagliato: non concludi nulla.</p><br/>";
			break;

			case 'risposta2':
			
			echo "<br/><p class='giusto'>Bravo, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta3':
			
			echo "<br/><p class='sbaglio'>Sbagliato: quelle si inseriscono con il pannello CSS Designer.</p><br/>";
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Sbagliato: quelle si inseriscono con il pannello Risorse.</p><br/>";
			break;
		
		
	}

switch ($risultato4) {
		case 'risposta1':
			echo "<br/><p class='sbaglio'>Sbagliato, la propriet&agrave; CSS Transform disciplina la trasformazione fisica dell'oggetto su cui &egrave; applicata.</p><br/>";
			
			break;

			case 'risposta2':
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			
			
			break;

			case 'risposta3':
			
			echo "<br/><p class='sbaglio'>Lo puoi fare, ma in questo contesto ti complichi la vita.</p><br/>";
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Sbagliato: il pannello CSS Designer non ha ancora i comandi necessari per gestire le transizioni.</p><br/>";
			break;
		
		
	}

switch ($risultato5) {
		case 'risposta1':
			echo "<br/><p class='sbaglio'>Sbagliato, il CSS Designer non &egrave; progettato per importare immagini</p><br/>";
			
			break;

			case 'risposta3':
			echo "<br/><p class='sbaglio'>Non esiste questa combinazione di comandi.</p><br/>";
			
			
			
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Lo puoi fare, ma in questo contesto ti complichi la vita.</p><br/>";
			break;

			case 'risposta2':
			
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			break;
		
		
	}

switch ($risultato6) {
		case 'risposta1':
			echo "<br/><p class='giusto'>Complimenti, risposta esatta.</p><br/>";
			$punteggio++;
			break;

			case 'risposta3':
			echo "<br/><p class='sbaglio'>Sbagliato, puoi decidere diversi tipi di configurazione.</p><br/>";
			break;

			case 'risposta4':
			
			echo "<br/><p class='sbaglio'>Sbagliato, l'operazione in questione si fa in altri modi.</p><br/>";
			break;

			case 'risposta2':
			
			echo "<br/><p class='sbaglio'>Sbagliato, l'operazione in questione si fa in altri modi.</p><br/>";
			
			break;
		
		
	}








?>
