<?php
ini_set('display_errors', '1');
 error_reporting(-1);
 
 session_start();
 
 include "header.html";
    $thisPage="index";
 include "navigation.php";

 $name;
 $email;
 $ingelogd = false;
 
 if (!isset($_SESSION['ingelogd']) || $_SESSION['ingelogd'] != true){
	 //header('Location: login.php');
	 //Als je altijd wil inloggen moet je dit aanzetten.
 } else {
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
	$ingelogd = true;
 }
 if (isset($_POST['uitloggen'])){
	
	session_destroy();
	session_start();
	header('Location: index.php');
 }
?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>Het Buro</title>
	<script src="script/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="script/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<script src=" https://code.jquery.com/jquery-2.1.3.min.js"></script>
   
	
</head>
<body>
<section class="search">
            <?php if ($ingelogd != true){?><a href="login.php" class="uploadbutton">Upload Portfolio</a><?php } ?>

            <a href="#">

                <!--                <img class="searchbutton" src="img/magnifying-glass32.png">-->             
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                	 viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" class="searchbutton">

                	<circle stroke-miterlimit="10" cx="20.4" cy="19.8" r="16.3"/>
                	<line stroke-miterlimit="10" x1="31.3" y1="31.9" x2="45.9" y2="46.5"/>

                </svg>
            </a>
            
            <form class="searchbar">
                <input type="submit" name="klas" value="M41" class="classbutton">
                <input type="submit" name="klas" value="M41T" class="classbutton">
                <input type="submit" name="klas" value="M42" class="classbutton">
                <input type="text" name="naam" class="searchfield" placeholder="search here">
            </form>
        </section>
        
        <section class="memberarea">
<?php if($ingelogd == true) {
			Connect();
			$sql = 'SELECT * FROM buro WHERE email LIKE "'.$email.'"';
			$result = mysqli_query($GLOBALS['connection'], $sql);
			if(mysqli_num_rows($result) == 0) 
			{
	//EERSTE KEER UPLOADEN
?>
	<form action="" method="post" enctype="multipart/form-data">
	<label for="bestand">Bestand:</label><br>
					<input type="file" name="bestand" id="bestand"><br>	
	<br>
	Klas:<select  name="klas">
			<option>M41</option>
			<option>M42</option>
			<option>M41T</option>
		  </select><br>
	Website:<input type="text" value="www." name="url">	<br><br>
	 <input type="submit" value="uploaden" name="postdata">
	 <input type="submit" value="uitloggen" name="postdata">
	</form>
	
	

<?php 
			//DATA VERNIEUWEN
			}else{
			Connect();
			$sql = 'SELECT * FROM buro WHERE email LIKE "'.$email.'"';
			$result = mysqli_query($GLOBALS['connection'], $sql);
			if(mysqli_num_rows($result) != 0) 
			{
				$data_field = mysqli_fetch_assoc($result);
				
																										// class="previewimg"
				?>
				<h1><?php echo $data_field['naam']; ?></h1>
				<?php
				if ($data_field['thumb_url'] != null){
					// AFBEELDING VERWIJDEREN
				?>
				<img src="upload/<?php echo $data_field['thumb_url']; ?> " alt="foto" class="previewimg">
				<form action="" method="post" enctype="multipart/form-data">
				<input type="submit" value="verwijder afbeelding" name="postdata">
				</form>
				<?php
				}
				else{
					//AFBEELDING UPLOADEN
					?>
					<form action="" method="post" enctype="multipart/form-data">
					<label for="bestand">Bestand:</label><br>
					<input type="file" name="bestand" id="bestand"><br>
					<input type="submit" value="afbeelding uploaden" name="postdata">
					</form>
					<?php
					
				}
				?>
				 <br>
				Klas: <?php echo $data_field['klas']; 
				// KLAS UPLOADEN
				?>
							<form action="" method="post">
							<select  name="klas">
							<option>M41</option>
							<option>M42</option>
							<option>M41T</option>
							</select>
							<input type="submit" value="verander klas" name="postdata">
							</form>

				<br>
				Portfolio URL: <?php echo $data_field['web_url'];
								// PORTFOLIO WEBSITE UPLOADEN							
								?>
								<form action="" method="post">
								<input type="text" value="www." name="url">	
								<input type="submit" value="verander url" name="postdata">
								</form>
								<?php
								
								?>
				<?php
				
			}
			else{
				echo "Je hebt nog geen afbeelding geupload!";
			}
			// UITLOGGEN
			?>
			<br><br>
			<form action="" method="post">
			<input type="submit" value="uitloggen" name="postdata">
			</form>
			<?php
			}

}  ?>


</section>

<?php 
//PORTFOLIO'S LATEN ZIEN
Connect();

if (isset($_GET['naam'])){//Op naam sorteren
	// query voor portfolio's
	$query = 'SELECT * FROM buro WHERE naam LIKE "%'.$_GET['naam'].'%"';
	$result = mysqli_query($GLOBALS['connection'], $query);
	
	if(mysqli_num_rows($result) != 0) 
			{
				while($dataresult = mysqli_fetch_assoc($result))
				{
					//query voor likes
					$query1 = 'SELECT SUM(ratings) AS like FROM ratings WHERE UID = "'.$dataresult['naam'].'"';
					$result1 = mysqli_query($GLOBALS['connection'], $query);
					$dataresult1 = mysqli_fetch_assoc($result1);
				echo "	<section class='galleryitem'>
							<img class='portfoliothumb' src='upload/".$dataresult['thumb_url']."'>
							<div class='description'>
								<h1>".$dataresult['naam']."</h1>
								<a href='?ID=".$dataresult['ID']."'><svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
	 viewBox='0 0 50 50' enable-background='new 0 0 50 50' xml:space='preserve' class='hearticon'>
	               <path d='M47,20.2v0.1c0,14.8-21.9,25.5-21.9,25.5H25c0,0-21.3-10.5-21.9-24.9
		c0-0.2,0-0.4,0-0.6v-0.1c0-6.6,5.4-12,12-12c4.1,0,7.8,2.1,9.9,5.2c2.2-3.2,5.8-5.2,9.9-5.2C41.6,8.2,47,13.6,47,20.2z'/>
                    </svg></a>
								<p class='aantal'>
									10x
								</p>
							</div>
						</section>";
				}
			}
			else{
				echo "<span class='melding'>Je zoekopdracht heeft geen resultaten opgeleverd!</span>";
			}
}
else if (isset($_GET['klas'])){//Op klas sorteren
	
	$query = 'SELECT * FROM buro WHERE klas = "'.$_GET['klas'].'"';
	$result = mysqli_query($GLOBALS['connection'], $query);
	if(mysqli_num_rows($result) != 0) 
			{
				while($dataresult = mysqli_fetch_assoc($result))
				{
				echo "	<section class='galleryitem'>
							<img class='portfoliothumb' src='upload/".$dataresult['thumb_url']."'>
							<div class='description'>
								<h1>".$dataresult['naam']."</h1>
								<a href='?ID=".$dataresult['ID']."'><svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
	 viewBox='0 0 50 50' enable-background='new 0 0 50 50' xml:space='preserve' class='hearticon'>
	               <path d='M47,20.2v0.1c0,14.8-21.9,25.5-21.9,25.5H25c0,0-21.3-10.5-21.9-24.9
		c0-0.2,0-0.4,0-0.6v-0.1c0-6.6,5.4-12,12-12c4.1,0,7.8,2.1,9.9,5.2c2.2-3.2,5.8-5.2,9.9-5.2C41.6,8.2,47,13.6,47,20.2z'/>
                    </svg></a>
								<p class='aantal'>
									10x
								</p>
							</div>
						</section>";
				}
			}
			else{
				echo "<span class='melding'>Je zoekopdracht heeft geen resultaten opgeleverd!</span>";
			}
}
else{
	$query = "SELECT * FROM buro";
	$result = mysqli_query($GLOBALS['connection'], $query);
	
	
	if(mysqli_num_rows($result) != 0) 
			{
				while($dataresult = mysqli_fetch_assoc($result))
				{
					$querys = "SELECT SUM(rating) AS cijfer FROM ratings WHERE PID = '".$dataresult['ID']."'";
					$results = mysqli_query($GLOBALS['connection'], $querys);
					
					
				echo "	<section class='galleryitemwrap'><section class='galleryitem'>
							<img class='portfoliothumb' src='upload/thumb/".$dataresult['thumb_url']."' ></section>
							<div class='description'>
								<h1>".$dataresult['naam']."</h1>
								<a href='?ID=".$dataresult['ID']."'><svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
	 viewBox='0 0 50 50' enable-background='new 0 0 50 50' xml:space='preserve' class='hearticon'>
	               <path d='M47,20.2v0.1c0,14.8-21.9,25.5-21.9,25.5H25c0,0-21.3-10.5-21.9-24.9
		c0-0.2,0-0.4,0-0.6v-0.1c0-6.6,5.4-12,12-12c4.1,0,7.8,2.1,9.9,5.2c2.2-3.2,5.8-5.2,9.9-5.2C41.6,8.2,47,13.6,47,20.2z'/>
                    </svg></a>
								<p class='aantal'> ";
				if(mysqli_num_rows($results) != 0){
									$dataresults = mysqli_fetch_assoc($results)	or die ("verbinden mislukt". mysqli_error($GLOBALS['connection']));
									echo $dataresults['cijfer'];
									
									
									}
							echo "</p>
							</div>
						</section>";
						 
				}
			}
			else{
				echo "<span class='melding'>Er is iets mis gegaan!</span>";
			}
}
Disconnect();
//---------------------------------------------------------------- FUNCTIES --------------------------------------------------------------------
if (isset($_POST['postdata']))
{
	switch($_POST['postdata'])
	{
		case "uploaden" :
			Connect();
			upload();
			Disconnect();
			break;	
		case "verander url" :
			Connect();
			urlupload();
			Disconnect();
			break;
		case "verander klas" :
			Connect();
			klasupload();
			Disconnect();
			break;	
		case "verwijder afbeelding" :
			Connect();
			deleteimg();
			Disconnect();
			break;
		case "afbeelding uploaden" :
			Connect();
			newimg();
			Disconnect();
			break;
		case "uitloggen" :
			uitloggen();
			break;				
	}
}
else
{
	
}



//UITLOG EN DATABASE VERBINDINGEN

function uitloggen(){
	session_destroy();
	session_start();
	header('Location: index.php');
}

function Connect()
{
	$GLOBALS['connection'] = mysqli_connect("localhost", "i274003_i274003", "jumpinggiants", "i274003_buro")
		or die ("verbinden mislukt". mysqli_connect_error());
}
function Disconnect()
{
	@mysqli_close($GLOBALS['connection']);	
}


//EERSTE KEER UPLOADEN

function upload(){
	
	// variabelen aanmaken voor alle gegevens
	$klas = mysqli_real_escape_string($GLOBALS['connection'],$_POST['klas']);	
	$url = mysqli_real_escape_string($GLOBALS['connection'],$_POST['url']);	
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];


	if($_FILES["bestand"]["size"] < 5242880) { // Controle of het formulier is verstuurd en niet groter is dan 50 kB.

	if ($_FILES["bestand"]["error"] > 0) // Controle of er geen fouten zijn
	  {
	  echo "Error: " . $_FILES["bestand"]["error"] . "<br>";
	  }
	else
	  {
		

	   if (file_exists("upload/" . $_FILES["bestand"]["name"])) // Controle of het bestand al bestaat
		  {
		  $_SESSION['status'] = $_FILES["bestand"]["name"] . " bestaat al. ";
		  
		  }
		else // Verplaats het tijdelijke bestand naar de juiste folder 
		  {
			  
			
		  $urlfoto = mysqli_real_escape_string($GLOBALS['connection'], $_FILES["bestand"]["name"]);
		  $query1 = "INSERT INTO buro (thumb_url, klas, naam, email, web_url) VALUES ('$urlfoto', '$klas', '$name', '$email', '$url')";
		  mysqli_query($GLOBALS['connection'], $query1) or die ("verbinden mislukt". mysqli_error($GLOBALS['connection']));
		  
		  
		  move_uploaded_file($_FILES["bestand"]["tmp_name"], "upload/" . $_FILES["bestand"]["name"]);
		  make_thumb("upload/" . $_FILES["bestand"]["name"], $_FILES["bestand"]["name"], 720);
		  echo "<span style='color:green;'>Versturen geslaagd!</span>";
		  }


	
}
}
else{
	
echo "<span style='color:red;'>bestand is te groot!</span>";

}
}

//PLAATJE OPNIEUW UPLOADEN

function newimg(){
	
	
	if($_FILES["bestand"]["size"] < 5242880) { // Controle of het formulier is verstuurd en niet groter is dan 50 kB.

	if ($_FILES["bestand"]["error"] > 0) // Controle of er geen fouten zijn
	  {
	  echo "Error: " . $_FILES["bestand"]["error"] . "<br>";
	  }
	else
	  {
		

	   if (file_exists("upload/" . $_FILES["bestand"]["name"])) // Controle of het bestand al bestaat
		  {
		  echo $_FILES["bestand"]["name"] . " bestaat al. ";
		  
		  }
		else // Verplaats het tijdelijke bestand naar de juiste folder 
		  {
			  
			
		  $nieuwefoto = mysqli_real_escape_string($GLOBALS['connection'], $_FILES["bestand"]["name"]);
		  $query =  "UPDATE buro SET thumb_url = '$nieuwefoto' WHERE email = '".$_SESSION['email']."'";
		  mysqli_query($GLOBALS['connection'], $query) or die ("verbinden mislukt". mysqli_error($GLOBALS['connection']));
		  
		  
		  move_uploaded_file($_FILES["bestand"]["tmp_name"], "upload/" . $_FILES["bestand"]["name"]);
		  make_thumb("upload/" . $_FILES["bestand"]["name"], $_FILES["bestand"]["name"], 720);
		  echo "<span style='color:green;'>Versturen geslaagd!</span>";
		  }


	
}
}
else{
	
echo "<span style='color:red;'>bestand is te groot!</span>";

}
}

// THUMBNAIL MAKEN

function make_thumb($src, $dest, $desired_height) {
		
		/* read the source image */
		$source_image = imagecreatefromjpeg($src);
		$width = imagesx($source_image);
		$height = imagesy($source_image);
		
		/* find the "desired height" of this thumbnail, relative to the desired width  */
		$desired_width = floor($width * ($desired_height / $height));
		
		/* create a new, "virtual" image */
		$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
		
		/* copy source image at a resized size */
		imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
		
		/* create the physical thumbnail image to its destination */
		imagejpeg($virtual_image, "upload/thumb/".$dest);
	}

//URL OPNIEUW UPLOADEN

function urlupload(){
	$url = $_POST['url'];
	
	
	$query = "UPDATE buro SET web_url = '$url' WHERE email = '".$_SESSION['email']."'";
	mysqli_query($GLOBALS['connection'], $query) or die ("verbinden mislukt". mysqli_error($GLOBALS['connection']));
}

//KLAS OPNIEUW UPLOADEN

function klasupload(){
	$klas = $_POST['klas'];
	
	
	$query = "UPDATE buro SET klas = '$klas' WHERE email = '".$_SESSION['email']."'";
	mysqli_query($GLOBALS['connection'], $query) or die ("verbinden mislukt". mysqli_error($GLOBALS['connection']));
}

//AFBEELDING VERWIJDEREN

function deleteimg(){
	// controleren of gebruiker al een plaatje heeft geupload
	$sql = 'SELECT * FROM buro WHERE email LIKE "'.$_SESSION['email'].'"';
			$result = mysqli_query($GLOBALS['connection'], $sql);
			if(mysqli_num_rows($result) != 0) 
			{
				$db_field = mysqli_fetch_assoc($result);
				$target = $db_field['thumb_url'];
				// als het plaatje bestaat deze verwijderen
				if (file_exists("upload/".$target)) {
					unlink("upload/".$target);
					unlink("upload/thumb/".$target);					
				} 
				// nog een keer controleren of het plaatje er nog is.
				if (file_exists($target)) {
					echo "kon " . $target . " niet verwijderen.";
				} else {
					echo  $target . " is verwijderd. ";
				}
				
				$query = "UPDATE buro SET thumb_url = NULL WHERE email = '".$_SESSION['email']."'";
				mysqli_query($GLOBALS['connection'], $query) or die ("verbinden mislukt". mysqli_error($GLOBALS['connection']));
				
			}
}

if ($ingelogd == true && isset($_GET['ID'])){
	Connect();
	$query = 'SELECT * FROM ratings WHERE UID = "'.$_SESSION['name'].'" AND PID = "'.$_GET['ID'].'"';
	$result = mysqli_query($GLOBALS['connection'], $query);
	if(mysqli_num_rows($result) == 0)
	{
		$query = "INSERT INTO ratings (PID, UID, rating)  VALUES ('".$_GET['ID']."', '".$_SESSION['name']."', '1')";
		//zodra een portfolio geliked wordt haalt de GET[ID] het betreffende portfolio uit de url
		mysqli_query($GLOBALS['connection'], $query) or die ("verbinden mislukt". mysqli_error($GLOBALS['connection']));
	}
	Disconnect();
}
?>
	
		


    </body>
</html>




