<?php
if(isset($_POST['submit'])){

       $to = "oliverobrador@gmail.com";
       $subject = "New enquiry form submission from UPF website";
       $error_message = "";

           // validation expected data exists
       if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])) {
        $error_message = '<p>We are sorry, but there appears to be a problem with the form you submitted.</p>';
       }

       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];

       $error_message = "";

       $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
       if(!preg_match($email_exp,$email)) {
              $error_message .= '<p>The Email Address you entered does not appear to be valid.</p>';
       }

       $string_exp = "/^[A-Za-z .'-]+$/";
       if(!preg_match($string_exp,$name)) {
              $error_message .= '<p>The Name you entered does not appear to be valid. Please do not enter numbers and symbols</p>';
       }

       $email_message = "";

       $email_message .= "Name: ". $name."\n";

       $email_message .= "Email: ". $email."\n";

       $email_message .= "Message: ". $message."\n";

       $headers = 'From: '.$email."\r\n".

       'Reply-To: '.$email."\r\n" .

       'X-Mailer: PHP/' . phpversion();

       @mail($email_to, $subject, $email_message, $headers);

       if(empty($error_message)){
          $success_message = "<p>Thanks for your message! We will get back to you shortly</p>";
       }
}

?>


<?php $page_title_fixed = "Urban Photo Fest"; ?>
<?php $page_title = "Contact"; ?>
<?php $meta_description = "Urban photography is an interdisciplinary field of visual practice concerned
        with the evocation and representation of urban spaces and the lives of those
        living, working and moving through such spaces"; ?>
<?php include_once 'includes/head.php'; ?>
<?php include_once 'includes/header-start.php'; ?>
<?php include_once 'includes/menu.php'; ?>
<?php include_once 'includes/header-end.php'; ?>

    <div id="main" class="clearfix">

        <div class="text">

            <h1>Contact</h1>

            <p>For more information or any other issue please use our contact form:</p>

          <?php if(isset($error_message) && !empty($error_message)){print '<div class="label error">' . $error_message . '</div>';} ?>
          <?php if(isset($success_message)){print '<div class="label success">' . $success_message . '</div>';} ?>

          <form action="contact.php" method="post">

				  <div class="form-field">
					  <label for="name">Name:</label>
					  <input type="text" name="name" id="name" value="<?php echo (isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''); ?>" required>
				  </div>

				  <div class="form-field">
					  <label for="Email">Email:</label>
					  <input type="email" name="email" id="email" value ="<?php echo (isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''); ?>" required>
				  </div>

				  <div class="form-field">
					  <label for="Message">Message:</label><br />
					  <textarea name="message" rows="20" cols="20" id="message" required><?php echo (isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''); ?></textarea>
					  <input type="submit" name="submit" value="Submit" />
				  </div>

			  </form>

    	</div>

    <div class="images-right">
	</div>

	</div>

<?php include_once 'includes/footer.php'; ?>
