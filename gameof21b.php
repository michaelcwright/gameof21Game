<script type="text/javascript">

var playerCard = 0;
var playerCard2 = 0;
var playerCard3 = 0;
var dealerCard = 0;
var dealerCard2 = 0;
var randomNumber1 = 0;
var randomNumber2 = 0;
var randomNumber3 = 0;
var randomNumber4 = 0;
var randomNumber5 = 0;
var sumCards = 0;
var sumCards2 = 0;

function loadResults(){
		document.getElementById("loaderPic").innerHTML = ("<img src='images/loading2.gif'></img>");
		document.getElementById("resultsd").innerHTML = " ";
		document.getElementById("content").innerHTML = " ";
		document.getElementById("content2").innerHTML = " ";
		document.getElementById("content3").innerHTML = " ";
		document.getElementById("contentd2").innerHTML = " ";
		document.getElementById("contentd").innerHTML = " ";
		document.getElementById("button1").disabled = true;	
		
		setTimeout(function(){
			document.getElementById("loaderPic").innerHTML = (" ");
			dealCards();
		},5000);

}

function dealCards(){

playerCard = 0;
playerCard2 = 0;
playerCard3 = 0;
dealerCard = 0;
dealerCard2 = 0;

randomNumber1 = (Math.floor(Math.random() * 13)) + 1;
randomNumber2 = (Math.floor(Math.random() * 13)) + 1;

if (randomNumber1 == randomNumber2)
{
	randomNumber1 = (Math.floor(Math.random() * 13)) + 1;
	randomNumber2 = (Math.floor(Math.random() * 13)) + 1;
}

randomNumber3 = (Math.floor(Math.random() * 13)) + 1;
randomNumber4 = (Math.floor(Math.random() * 13)) + 1;

if (randomNumber3 == randomNumber4)
{
	randomNumber3 = (Math.floor(Math.random() * 13)) + 1;
	randomNumber4 = (Math.floor(Math.random() * 13)) + 1;
}



switch(randomNumber3)
{
	case 1:
	playerCard = 2;
	playerCardName = 2;
	break;

	case 2:
	playerCard = 3;
	playerCardName = 3;
	break;
	
	case 3:
	playerCard = 4;
	playerCardName = 4;
	break;

	case 4:
	playerCard = 5;
	playerCardName = 5;
	break;

	case 5:
	playerCard = 6;
	playerCardName = 6;
	break;

	case 6:
	playerCard = 7;
	playerCardName = 7;
	break;

	case 7:
	playerCard = 8;	
	playerCardName = 8;
	break;

	case 8:
	playerCard = 9
	playerCardName = 9;
	break;

	case 9:
	playerCard = 10;
	playerCardName = 10;
	break;

	case 10:
	playerCard = 10;
	playerCardName = "Jack";
	break;

	case 11:
	playerCard = 10;
	playerCardName = "Queen";
	break;

	case 12:
	playerCard = 10;
	playerCardName = "King";
	break;

	case 13:
	playerCard = 11;
	playerCardName = "Ace";
	break;
}

switch(randomNumber4)
{
	case 1:
	playerCard2 = 2;
	playerCardName2 = 2;
	break;

	case 2:
	playerCard2 = 3;
	playerCardName2 = 3;
	break;
	
	case 3:
	playerCard2 = 4;
	playerCardName2 = 4;
	break;

	case 4:
	playerCard2 = 5;
	playerCardName2 = 5;
	break;

	case 5:
	playerCard2 = 6;
	playerCardName2 = 6;
	break;

	case 6:
	playerCard2 = 7;
	playerCardName2 = 7;
	break;

	case 7:
	playerCard2 = 8;	
	playerCardName2 = 8;
	break;
	
	case 8:
	playerCard2 = 9
	playerCardName2 = 9;
	break;

	case 9:
	playerCard2 = 10;
	playerCardName2 = 10;
	break;

	case 10:
	playerCard2 = 10;
	playerCardName2 = "Jack";
	break;

	case 11:
	playerCard2 = 10;
	playerCardName2 = "Queen";
	break;

	case 12:
	playerCard2 = 10;
	playerCardName2 = "King";
	break;

	case 13:
	playerCard2 = 11;
	playerCardName2 = "Ace";
	break;
}

document.getElementById("question").innerHTML = ("<p>Do you want another card?</p><p><input type='button' value='Yes' onclick='yesAnswer();'/><input type='button' value='No' onclick='continueX()'/></p>" );
document.getElementById("content").innerHTML = playerCardName;
document.getElementById("content2").innerHTML = playerCardName2;

}



function continueX(){

document.getElementById("question").innerHTML = ("<p></p>");

switch(randomNumber1)
{
	case 1:
	dealerCard = 2;
	dealerCardName = 2;
	break;

	
	case 2:
	dealerCard = 3;
	dealerCardName = 3;
	break;
	
	
	case 3:
	dealerCard = 4;
	dealerCardName = 4;
	break;

	
	case 4:
	dealerCard = 5;
	dealerCardName = 5;
	break;

	
	case 5:
	dealerCard = 6;
	dealerCardName = 6;
	break;

	
	case 6:
	dealerCard = 7;
	dealerCardName = 7;
	break;

	
	case 7:
	dealerCard = 8;	
	dealerCardName = 8;
	break;

	
	case 8:
	dealerCard = 9
	dealerCardName = 9;
	break;

	
	case 9:
	dealerCard = 10;
	dealerCardName = 10;
	break;

	case 10:
	dealerCard = 10;
	dealerCardName = "Jack";
	break;

	case 11:
	dealerCard = 10;
	dealerCardName = "Queen";
	break;

	case 12:
	dealerCard = 10;
	dealerCardName = "King";
	break;

	case 13:
	dealerCard = 11;
	dealerCardName = "Ace";
	break;
}

switch(randomNumber2)
{
	case 1:
	dealerCard2 = 2;
	dealerCardName2 = 2;
	break;

	
	case 2:
	dealerCard2 = 3;
	dealerCardName2 = 3;
	break;
	
	
	case 3:
	dealerCard2 = 4;
	dealerCardName2 = 4;
	break;

	
	case 4:
	dealerCard2 = 5;
	dealerCardName2 = 5;
	break;

	
	case 5:
	dealerCard2 = 6;
	dealerCardName2 = 6;
	break;

	
	case 6:
	dealerCard2 = 7;
	dealerCardName2 = 7;
	break;

	
	case 7:
	dealerCard2 = 8;	
	dealerCardName2 = 8;
	break;

	
	case 8:
	dealerCard2 = 9
	dealerCardName2 = 9;
	break;

	
	case 9:
	dealerCard2 = 10;
	dealerCardName2 = 10;
	break;

	case 10:
	dealerCard2 = 10;
	dealerCardName2 = "Jack";
	break;

	case 11:
	dealerCard2 = 10;
	dealerCardName2 = "Queen";
	break;

	case 12:
	dealerCard2 = 10;
	dealerCardName2 = "King";
	break;

	case 13:
	dealerCard2 = 11;
	dealerCardName2 = "Ace";
	break;
}


document.getElementById("contentd").innerHTML = dealerCardName;
document.getElementById("contentd2").innerHTML = dealerCardName2;


sumCards = playerCard + playerCard2 + playerCard3;
sumCards2 = dealerCard + dealerCard2;


if (sumCards > 21)
{
		document.getElementById("resultsd").innerHTML = "<h3>Your cards exceed 21 You lose!</h3>";
		document.getElementById("button1").disabled = false;
}else{
	if (sumCards == sumCards2){
		document.getElementById("resultsd").innerHTML = "<h3>It's a tie. Nobody wins!</h3>";
		document.getElementById("button1").disabled = false;
		}

	else{	
		if ((sumCards <= 21) && (sumCards > sumCards2))
		{
			document.getElementById("resultsd").innerHTML = "<h3>You win!</h3>";
			document.getElementById("button1").disabled = false;	
		}
		if ((sumCards2 <= 21) && (sumCards2 > sumCards))
		{
			document.getElementById("resultsd").innerHTML = "<h3>You lose!</h3>";
			document.getElementById("button1").disabled = false;	
		}
	}
}
	
	
} 



function yesAnswer()
{

document.getElementById("question").innerHTML = ("<p></p>" );

randomNumber5 = (Math.floor(Math.random() * 13)) + 1;
 			
if ((randomNumber5 == randomNumber4) || (randomNumber5 == randomNumber3))
{
	randomNumber5 = (Math.floor(Math.random() * 13)) + 1;
}


switch(randomNumber5)
{
	case 1:
	playerCard3 = 2;
	playerCardName3 = 2;
	break;

	case 2:
	playerCard3 = 3;
	playerCardName3 = 3;
	break;
	
	case 3:
	playerCard3 = 4;
	playerCardName3 = 4;
	break;

	case 4:
	playerCard3 = 5;
	playerCardName3 = 5;
	break;

	case 5:
	playerCard3 = 6;
	playerCardName3 = 6;
	break;

	case 6:
	playerCard3 = 7;
	playerCardName3 = 7;
	break;

	case 7:
	playerCard3 = 8;	
	playerCardName3 = 8;
	break;
	
	case 8:
	playerCard3 = 9
	playerCardName3 = 9;
	break;

	case 9:
	playerCard3 = 10;
	playerCardName3 = 10;
	break;

	case 10:
	playerCard3 = 10;
	playerCardName3 = "Jack";
	break;

	case 11:
	playerCard3 = 10;
	playerCardName3 = "Queen";
	break;

	case 12:
	playerCard3 = 10;
	playerCardName3 = "King";
	break;

	case 13:
	playerCard3 = 11;
	playerCardName3 = "Ace";
	break;
}

	
document.getElementById("content3").innerHTML = playerCardName3;

continueX(); 

}

 </script>

<div class="bodytopG">
	<div class="bodytopadjG">
		<p><h1>Game of 21</h1></p>
		<br />
		<p>Do you think you are good? Or just lucky in general? Show the Dealer how good you are! </p>
		<span class="subText"><p>In this game you will play the Game of 21. You play it against the dealer and your main object is to get the highest sum closest to 21. 
		Remember cards from 2 to 10 have the same value, and face cards are 10. The Ace to simplify the game has a value of 11. If there is a tie nobody wins. 
		If you ask for a third card and it exceeds 21 you automatically lose. Good luck!</p></span>
		<br />
	</div>
</div> 
 

<div class="containerx">
<div class="bodylowd">

<br /><br /><br />

<ul>

<!-- PLAYER -->
<li>

	<p><span class="playerTitle"><h3>Player</h3></span></p>
	<br />

		<div class="cardFront">
		<br />
		<p>Card 1</p>
		<p><div id="content"></div></p>
		</div>	
	
		<div class="cardFront">
		<br />
		<p>Card 2</p>
		<p><div id="content2"></div></p>
		</div>

		<div class="cardFront">
		<br />
		<p>Card 3</p>
		<p><div id="content3"></div></p>
		</div>




</li>


<!-- CONTROL -->
<li>
<br /><br />



	<div id="startWrapper">
	<div id="loaderPic"></div>
	
	<div id="results">
	<div id="resultsd"></div>
	</div>
	
	<p><input type="button"  class="btn btn-default" id="button1" value="Start!" onclick="loadResults()" /></p>
	<p><div id="question"></div></p>
	<p><input type="button" class="btn btn-default" value="Go back" onclick="location.href='index.php?page=games'"; /></p>
	</div>

</li>


<!-- COMPUTER -->
<li>

	<p><span class="playerTitle"><h3>Dealer</h3></span></p>
	<br />
		<div class="cardFront">
		<br />
		<p>Card 1</p>
		<p><div id="contentd"></div></p>
		</div>
	
		<div class="cardFront">
		<br />
		<p>Card 2</p>
		<p><div id="contentd2"></div></p>
		</div>


		<div class="cardFront">
		<br />
		<p>Card 3</p>
		<p><div id="contentd3"></div></p>
		</div>



</li>





</ul>


</div>
</div> 

<!-- CLOSE -->