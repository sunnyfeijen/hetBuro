<?php
    include "header.html";
    $thisPage="index";
    include "navigation.php";
?>

<body>
        <section class="search">
            <a href="#" class="uploadbutton">Upload Portfolio</a>

            
            
<!--
            <form class="searchbar">
                <a href="#">            
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                	 viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" class="searchbutton">

                	<circle stroke-miterlimit="10" cx="20.4" cy="19.8" r="16.3"/>
                	<line stroke-miterlimit="10" x1="31.3" y1="31.9" x2="45.9" y2="46.5"/>

                </svg>
            </a>
                <input type="submit" name="m41" value="M41" class="classbutton">
                <input type="submit" name="m42" value="M42" class="classbutton">
                <input type="submit" name="m43" value="M43" class="classbutton">
                <input type="text" name="search" class="searchfield" placeholder="search here">
            </form>
-->
            
        <form class="searchbar">
			<a href="#">

                <!--                <img class="searchbutton" src="img/magnifying-glass32.png">-->             
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                	 viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" class="searchbutton">

                	<circle stroke-miterlimit="10" cx="20.4" cy="19.8" r="16.3"/>
                	<line stroke-miterlimit="10" x1="31.3" y1="31.9" x2="45.9" y2="46.5"/>

                </svg>
            </a>			
                <input type="text" name="naam" class="searchfield" placeholder="search here">
			</form>
            <form class="buttonbar">
                <input type="submit" name="klas" value="M41" class="classbutton">
                <input type="submit" name="klas" value="M41T" class="classbutton">
                <input type="submit" name="klas" value="M42" class="classbutton">
			</form>
                
        </section>
        <section class="memberarea">
            
            <img src="upload/" alt="foto" class="previewimg">
				<form action="" method="post" enctype="multipart/form-data">
				<input type="submit" value="verwijder afbeelding" name="postdata" class="button">
				</form>
			
					<form action="" method="post" enctype="multipart/form-data">
					<label for="bestand">Bestand:</label><br>
					<input type="file" name="bestand" id="bestand"><br>
					<input type="submit" value="afbeelding uploaden" name="postdata" class="button">
					</form>
							<form action="" method="post">
                            <label for="klas">Klas:</label><br>
							<select  name="klas">
							<option>M41</option>
							<option>M42</option>
							<option>M41T</option>
							</select><br>
							<input type="submit" value="verander klas" name="postdata" class="button">
							</form>
            
								<form action="" method="post">
                                <label for="url">Url:</label><br>
								<input type="text" value="www." name="url"><br>
								<input type="submit" value="verander url" name="postdata" class="button">
								</form>
								
			<form action="" method="post">
			<input type="submit" value="uitloggen" name="postdata" class="button">
			</form>
			
			
		<!-- Form voor de eerste keer data uploaden. Dit form is alleen zichtbaar na de eerste keer inloggen.-->	
			
			
			<form action="" method="post" enctype="multipart/form-data" id="firstform">
	<label for="bestand">Screenshot <span>(jpeg, max 1Mb)</span>:</label><br>
					<input type="file" name="bestand" id="bestand"><br>
    <label for="klas">Klas:</label><br>
	<select name="klas" class="klas">
			<option>M41</option>
			<option>M42</option>
			<option>M41T</option>
		  </select><br>
    <label for="url">Url:</label><br>
	<input type="text" value="www." name="url" class="url">	<br>
    <input type="submit" value="uploaden" name="postdata" class="button"><br>
	 <input type="submit" value="uitloggen" name="postdata" class="button">
     <input type="button" value="help" name="postdata" class="button help">
	</form>
            
            <div class="trianglewrapper">
                <div class="triangle"></div>
            </div>
        
        </section>
        
        <section class="gallery">

                <section class="galleryitem">
                    <img class="portfoliothumb" src="img/test1.png">
                    <div class="description">
                        <h1>Fons Winters</h1>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" class="hearticon">
                       <path d="M47,20.2v0.1c0,14.8-21.9,25.5-21.9,25.5H25c0,0-21.3-10.5-21.9-24.9
            c0-0.2,0-0.4,0-0.6v-0.1c0-6.6,5.4-12,12-12c4.1,0,7.8,2.1,9.9,5.2c2.2-3.2,5.8-5.2,9.9-5.2C41.6,8.2,47,13.6,47,20.2z"/>
                        </svg>
                        <p class="aantal">
                            10x
                        </p>
                    </div>
                </section>



                <section class="galleryitem">
                    <img class="portfoliothumb" src="img/test1.png">
                    <div class="description">
                        <h1>Fons Winters</h1>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" class="hearticon">
                       <path d="M47,20.2v0.1c0,14.8-21.9,25.5-21.9,25.5H25c0,0-21.3-10.5-21.9-24.9
            c0-0.2,0-0.4,0-0.6v-0.1c0-6.6,5.4-12,12-12c4.1,0,7.8,2.1,9.9,5.2c2.2-3.2,5.8-5.2,9.9-5.2C41.6,8.2,47,13.6,47,20.2z"/>
                        </svg>
                        <p class="aantal">
                            10x
                        </p>
                    </div>
                </section>



                <section class="galleryitem">
                    <img class="portfoliothumb" src="img/test1.png">
                    <div class="description">
                        <h1>Fons Winters</h1>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" class="hearticon">
                       <path d="M47,20.2v0.1c0,14.8-21.9,25.5-21.9,25.5H25c0,0-21.3-10.5-21.9-24.9
            c0-0.2,0-0.4,0-0.6v-0.1c0-6.6,5.4-12,12-12c4.1,0,7.8,2.1,9.9,5.2c2.2-3.2,5.8-5.2,9.9-5.2C41.6,8.2,47,13.6,47,20.2z"/>
                        </svg>
                        <p class="aantal">
                            10x
                        </p>
                    </div>
                </section>



                <section class="galleryitem">
                    <img class="portfoliothumb" src="img/test1.png">
                    <div class="description">
                        <h1>Fons Winters</h1>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" class="hearticon">
                       <path d="M47,20.2v0.1c0,14.8-21.9,25.5-21.9,25.5H25c0,0-21.3-10.5-21.9-24.9
            c0-0.2,0-0.4,0-0.6v-0.1c0-6.6,5.4-12,12-12c4.1,0,7.8,2.1,9.9,5.2c2.2-3.2,5.8-5.2,9.9-5.2C41.6,8.2,47,13.6,47,20.2z"/>
                        </svg>
                        <p class="aantal">
                            10x
                        </p>
                    </div>
                </section>


            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" class="hearticon">
	               <path d="M47,20.2v0.1c0,14.8-21.9,25.5-21.9,25.5H25c0,0-21.3-10.5-21.9-24.9
		c0-0.2,0-0.4,0-0.6v-0.1c0-6.6,5.4-12,12-12c4.1,0,7.8,2.1,9.9,5.2c2.2-3.2,5.8-5.2,9.9-5.2C41.6,8.2,47,13.6,47,20.2z"/>
                    </svg>
                </div>
            </section>

            <section class="galleryitem">
                    <img class="portfoliothumb" src="img/test1.png">
                    <div class="description">
                        <h1>Fons Winters</h1>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" class="hearticon">
                       <path d="M47,20.2v0.1c0,14.8-21.9,25.5-21.9,25.5H25c0,0-21.3-10.5-21.9-24.9
            c0-0.2,0-0.4,0-0.6v-0.1c0-6.6,5.4-12,12-12c4.1,0,7.8,2.1,9.9,5.2c2.2-3.2,5.8-5.2,9.9-5.2C41.6,8.2,47,13.6,47,20.2z"/>
                        </svg>
                        <p class="aantal">
                            10x
                        </p>
                    </div>
                </section>

            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>

            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>

            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>

            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>

            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>

            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Wintedescriptionrs</h1>
                </div>
            </section>

            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>

            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>
            
            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>
            
            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>
            
            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>
            
            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>
            
            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>
            
            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>
            
            <section class="galleryitem">
                <img class="portfoliothumb" src="img/test1.png">
                <div class="description">
                    <h1>Fons Winters</h1>
                </div>
            </section>
        
        </section>

    </body>
</html>




