<?php include 'head-begin.php'; ?>

Contact

<?php include 'head-end.php'; ?>

<body>

<?php include 'header-start.php'; ?>
<?php include 'menu.php'; ?>
<?php include 'header-end.php'; ?>

    <div id="main">
  
        <div class="text">
        
            <h2>Contact</h2>
            
              <p>For more information and to book a place on the Workshops<br/> please use our contact form:</p>
              
              <form action="email.php" method="post">
              
				  <div class="form-field">	              	
					  <label for="name">Name:</label>
					  <input type="text" name="name" id="name" />
				  </div> 
				
				  <div class="form-field">	              	
					  <label for="Email">Email:</label>
					  <input type="text" name="email" id="email" />
				  </div>	  
				
				  <div class="form-field">	              	
					  <label for="Message">Message:</label><br />
					  <textarea name="message" rows="20" cols="20" id="message"></textarea>
					  <input type="submit" name="submit" value="Submit" />
				  </div>
				  
			  </form>     
        
    	</div>
    
    <div class="images-right">
	</div>

	</div>

<?php include 'footer.php'; ?>
