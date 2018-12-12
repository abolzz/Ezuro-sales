<!doctype html>
<html lang="en-US">
  	<?php $title = "Sign Up"; include'includes/head.php'; ?>
    <body>
    	<?php include'includes/header.html'; ?>
    	<div class="wrapper signup-page">
	    	<section>
                <h1 class="h1" data-aos="fade-up">Sign Up</h1>
                <div class="signup-section" data-aos="fade-up">
                    <form class="form signup-form">
                        <div class="signup-wrap">
                            <p class="signup-desc">Sign up now and start using Ezuro Premium 30 days for free!</p>
                            <input class="input signup-input" type="text" name="name" placeholder="Name" required>
                            <input class="input signup-input" type="text" name="surname" placeholder="Surname" required>
                            <input class="input signup-input" type="email" name="email" placeholder="Email" required>
                            <input class="input signup-input" type="text" name="company" placeholder="Company name" required>
                            <label>
                                <input class="input signup-input" type="text" name="domain" placeholder="[Subdomain].ezuro.com" required>
                            </label>
                            <button class="button green-button">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div id="fourth-spot" class="spot"></div>
                <div id="fifth-spot" class="spot"></div>
	    	</section>

	    	<?php include'includes/footer.html'; ?>
    	</div>

        <!-- Scripts -->
    <script src="js/scripts.min.js"></script>
    </body>
</html>