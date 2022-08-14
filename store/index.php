<?php
$_POST['$title'] = "Gypsy Swing Revue | Store!";
include("../views/header.php");
include("../views/background.php");
include("../views/navigation.php");
?>


<div class="row">
	<div class="medium-12 columns">
		<div class="panel mypanel">

			<div class="row">
				<div class="medium-8 columns">
					<p>Purchases use secure, encrypted PayPal or credit card!<br>
						Only available in the United States.
					</p>
				</div>

				<div class="medium-4 columns">
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
            ">
						<button type="submit" name="submit" alt="PayPal - The safer, easier way to pay online!">View Cart</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!--I Love Paris-->
<div class="row">
	<div class="medium-12 columns">
		<div class="panel mypanel">
			<h5>I Love Paris</h5>

			<div class="row">
				<div class="medium-4 columns">
					<img src="/img/CD-ILoveParis.jpg" width="100%" height="100%" alt="" />
				</div>

				<div class="medium-4 columns">
					<ol class="albumlist">
						<li><a href="/store/ILoveParis/I Love Paris.mp3">I Love Paris</li>
						<li>Cheek To Cheek</li>
						<li>Beyond The Sea</li>
						<li>Under Paris Skies</li>
						<li><a href="/store/ILoveParis/Les Étoiles.mp3">Les Étoiles</li>
						<li>Joseph! Joseph!</li>
						<li>C'est Si Bon</li>
						<li>Softly, As In A Morning Sunrise</li>
						<li><a href="/store/ILoveParis/Happy Feet.mp3">Happy Feet</li>
						<li><a href="/store/ILoveParis/C'est Magnifique.mp3">C'est Magnifique</li>
						<li>La Vie En Rose</li>
						<li>Exactly Like You</li>
						<li>Digga Digga Doo</li>
					</ol>
				</div>

				<div class="medium-4 columns">
					<p>
						I Love Paris<br>
						$15.00<br>
						includes shipping in the United States<br>
					</p>
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="LT4ZSCYCFQGQ6">
						<button type="submit" name="submit" alt="PayPal - The safer, easier way to pay online!">Add to Cart</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<!--END I Love Paris-->

<!--Puttin' On The Ritz-->
<div class="row">
	<div class="medium-12 columns">
		<div class="panel mypanel">
			<h5>Puttin' On The Ritz</h5>
			<div class="row">

				<div class="medium-4 columns">
					<img src="/img/CD-PuttinOnTheRitz.jpg" width="100%" height="100%" alt="" />
				</div>

				<div class="medium-4 columns">
					<ol class="albumlist">
						<li>Coquette</li>
						<li><a href="/store/PuttinOnTheRitz/ThereWillNeverBeAnotherYou.mp3">There Will Never Be Another You</li>
						<li>Troublant Bolero</li>
						<li><a href="/store/PuttinOnTheRitz/JoJoSwing.mp3">Jojo Swing</li>
						<li><a href="/store/PuttinOnTheRitz/VipersDream.mp3">Viper's Dream</li>
						<li>Zapala</li>
						<li><a href="/store/PuttinOnTheRitz/Farewell.mp3">Farewell</li>
						<li>Swing Gitan</li>
						<li><a href="/store/PuttinOnTheRitz/NumberOne.mp3">Number One</li>
						<li>Puttin' On the Ritz</li>
						<li><a href="/store/PuttinOnTheRitz/UnfortunateRendezvous.mp3">Unfortunate Rendezvous</li>
					</ol>

				</div>

				<div class="medium-4 columns">
					<p>
						Puttin' On The Ritz<br>
						$15.00<br>
						includes shipping in the United States<br>
					</p>
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="CUTSUUYBYSZMG">
						<button type="submit" name="submit" alt="PayPal - The safer, easier way to pay online!">Add to Cart</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<!--END Puttin' On The Ritz-->

<!--Some Of These Days-->
<div class="row">
	<div class="medium-12 columns">
		<div class="panel mypanel">
			<h5>Some Of These Days</h5>

			<div class="row">
				<div class="medium-4 columns">
					<img src="/img/CD-SomeOfTheseDays.jpg" width="100%" height="100%" alt="" />
				</div>

				<div class="medium-4 columns">
					<ol class="albumlist">
						<li>Minor Swing</li>
						<li><a href="/store/SomeOfTheseDays/SomeOfTheseDays.mp3">Some Of These Days</li>
						<li><a href="/store/SomeOfTheseDays/ValseDeQuatroColinas.mp3">Vals De Cuatro Colinas</li>
						<li><a href="/store/SomeOfTheseDays/BossaDorado.mp3">Bossa Dorado</li>
						<li><a href="/store/SomeOfTheseDays/Jattendrai.mp3">J'attendrai</li>
						<li>Dark Eyes</li>
						<li>Melodie Au Crepuscule</li>
						<li>Without That Gal</li>
						<li>Melancholia</li>
						<li>Avalon</li>
						<li>Desperate</li>
						<li><a href="/store/SomeOfTheseDays/StompinAtDecca.mp3">Stompin' At Decca</li>
						<li>Russian Lullaby</li>
						<li><a href="/store/SomeOfTheseDays/IveFoundANewBaby.mp3">I've Found A New Baby</li>
					</ol>
				</div>

				<div class="medium-4 columns">
					<p>
						Some Of These Days<br>
						$15.00<br>
						includes shipping in the United States<br>
					</p>
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="4S7C74RE6JH94">
						<button type="submit" name="submit" alt="PayPal - The safer, easier way to pay online!">Add to Cart</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<!--END Some Of These Days-->

</div>


<?php
include("../views/footer.php");
?>