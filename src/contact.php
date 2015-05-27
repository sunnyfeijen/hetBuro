<?php
    include "header.html";
    $thisPage="contact";
    include "navigation.php";
?>

    <body>
    	<section class="contact">
	    	<section class="contact_informatie">
	    		<h1>Contactpersoon</h1>
	    		<p>Suzanne van Kuijk<br />
	    		s.vankuijk@fontys.nl</p>
	    	</section>

	    	<section class="contact_formulier">
		    	<?php 
					if (isset($_POST["submit"])) {
						$name = $_POST["name"];
					    $email = $_POST["email"];
					    $telephone = $_POST["telephone"];
					    $message = $_POST["message"];

					    $from = "From: contactformulier"; 
					    $to = "s.vankuijk@fontys.nl"; // Suzanne haar mail. Veranderen?
					    $subject = "Contactformulier Het Buro";
								
					    $body = "Naam: $name\n Email: $email\n Tel: $telephone\n\n Bericht:\n $message";
					    // mail ($to, $subject, $body, $from);

					 	
					    if (mail ($to, $subject, $body, $from)) { 
					        echo "<p class='mail_check'>Je bericht is verzonden!</p>";
					    } else { 
					        echo "<p class='mail_check'>Foutje! Probeer het opnieuw!</p>"; 
					    }
						
					}
				?>

		    	<form action="" method="POST">
			        <label for="name">Naam<span class="required"> *</span></label><br/>
			        <input type="text" name="name" value="" placeholder="John Doe" required autofocus="autofocus" /><br/>
			         
			        <label for="email">Email<span class="required"> *</span></label><br/>
			        <input type="email" name="email" value="" placeholder="johndoe@example.com" required /><br/>
			         
			        <label for="telephone">Telefoon</label><br/>
			        <input type="tel" name="telephone" value="" /><br/>
			         
			        <label for="message">Bericht<span class="required"> *</span></label><br/>
			        <textarea id="message" name="message" required></textarea><br/>
			         
			        <input type="submit" name="submit" value="Verzenden" id="submit-button" /><br/>
			        <p id="req-field-desc"><span class="required">* </span>Verplicht</p><br/>
		    	</form>
	    	</section>
	    </section>
    </body>
</html>