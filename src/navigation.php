<nav>
    <h1>
        <a href="index.php" class="logo">het<br/> Buro</a>
    </h1>
    
    <div>
    	<ul>
	        <li><a href="index.php" <?php if ($thisPage=="index") 
			echo " class=\"current\""; ?>>Portfolio's</a></li>
	        <li><a href="over.php" <?php if ($thisPage=="over") 
			echo " class=\"current\""; ?>>Over het Buro</a></li>
	        <li><a href="event.php" <?php if ($thisPage=="event") 
			echo " class=\"current\""; ?>>Het event</a></li>
	        <li><a href="contact.php" <?php if ($thisPage=="contact") 
			echo " class=\"current\""; ?>>Contact</a></li>
	    </ul>
    </div>
    
    <ul>
        <li><a href="index.php" <?php if ($thisPage=="index") 
echo " class=\"current\""; ?>>Portfolio's</a></li>
        <li><a href="over.php" <?php if ($thisPage=="over") 
echo " class=\"current\""; ?>>Over het Buro</a></li>
        <li><a href="event.php" <?php if ($thisPage=="event") 
echo " class=\"current\""; ?>>Het event</a></li>
        <li><a href="contact.php" <?php if ($thisPage=="contact") 
echo " class=\"current\""; ?>>Contact</a></li>
    </ul>
</nav>