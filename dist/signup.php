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
                        <div class="plan-choice">
                            <h2 class="h2">Choose your plan:</h2>
                            <div>
                                <label class="radio-btn-container">
                                <input type="radio" name="price-plan" value="basic">
                                <span class="checkmark"></span>
                                Basic</label>
                                <label class="radio-btn-container">
                                <input type="radio" name="price-plan" value="advanced">
                                <span class="checkmark"></span>
                                Advanced</label>
                                <label class="radio-btn-container">
                                <input type="radio" name="price-plan" value="premium">
                                <span class="checkmark"></span>
                                Premium</label>
                            </div>
                        </div>
                        <div class="signup-wrap">
                            <input class="input signup-input" type="text" name="name" placeholder="Name" required>
                            <input class="input signup-input" type="text" name="surname" placeholder="Surname" required>
                            <input class="input signup-input" type="text" name="email" placeholder="Email" required>
                            <input class="input signup-input" type="text" name="company" placeholder="Company name" required>
                            <input class="input signup-input" type="text" name="company" placeholder="[Subdomain].ezuro.com" required>
                            <button class="button green-button">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div id="fourth-spot" class="spot"></div>
                <div id="fifth-spot" class="spot"></div>
	    	</section>

	    	<?php include'includes/footer.html'; ?>
    	</div>
    </body>

    <!-- Scripts -->
    <script type="text/javascript" src="js/scripts.min.js"></script>
</html>