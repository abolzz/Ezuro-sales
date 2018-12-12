<!doctype html>
<html lang="en-US">
<?php $title = "Pricing"; include'includes/head.php'; ?>
    <body>
    	<?php include'includes/header.html'; ?>
    	<div class="wrapper pricing-page">
    	<section>
    		<div class="pricing-section" data-aos="fade-up">
	    		<h1 class="h1">Price plans</h1>
	    		<div class="pricing-model-wrap">
		    		<div class="price-model" data-aos="fade-up">
		    			<h2 class="price-model-name">Basic</h2>
		    			<div class="price-model-inner">
			    			<div class="price-tag">
			    				<p><span class="euros">3<sup class="cents">99</sup></span>
			    				eur<span class="note-text"> / per user a month</span></p>
			    			</div>
			    			<p class="package-desc">Includes following <strong>modules</strong>:</p>
			    			<ul class="modules-list">
			    				<li>Employees</li>
			    				<li>Processes</li>
			    				<li>Responsibilities</li>
			    				<li>Instructions</li>
			    				<li>Job positions</li>
			    			</ul>
		    			</div>
		    			<a href="signup.php" class="button green-button">Sign Up</a>
		    		</div>

		    		<div class="price-model" data-aos="fade-up">
		    			<h2 class="price-model-name">Advanced</h2>
		    			<div class="price-model-inner">
			    			<div class="price-tag">
			    				<p><span class="euros">5<sup class="cents">99</sup></span>
			    				eur<span class="note-text"> / per user a month</span></p>
			    			</div>
			    			<p class="package-desc">All from <span class="package-name">Basic</span> package <strong>plus:</strong></p>
			    			<ul class="modules-list">
			    				<li>Schedules</li>
			    				<li>News</li>
			    				<li>Statistics</li>
			    				<li>Tasks</li>
			    				<li>Absence</li>
			    			</ul>
		    			</div>
		    			<a href="signup.php" class="button green-button">Sign Up</a>
		    		</div>

		    		<div class="price-model" data-aos="fade-up">
		    			<h2 class="price-model-name">Premium</h2>
		    			<div class="price-model-inner">
			    			<div class="price-tag">
			    				<p><span class="euros">6<sup class="cents">99</sup></span>
			    				eur<span class="note-text"> / per user a month</span></p>
			    			</div>
			    			<p class="package-desc">All from <span class="package-name">Advanced</span> package <strong>plus:</strong></p>
			    			<ul class="modules-list">
			    				<li>Records / contracts</li>
			    				<li>Car park</li>
			    				<li>Occurences</li>
			    			</ul>
		    			</div>
		    			<a href="signup.php" class="button green-button">Sign Up</a>
		    		</div>
	    		</div>
	    		<div class="custom-solution" data-aos="fade-up">
	    			<h3 class="package-desc">Not quite what you were looking for?</h3>
	    			<p class="package-desc">Feel free to <a href="#question-section" class="contact-link"><strong>contact us</strong></a> and we will find a right solution for your particular needs.</p>
	    		</div>
    		</div>
    		<div id="fifth-spot" class="spot"></div>
    	</section>

    	<section>
    		<h1 class="h1" data-aos="fade-up">FAQ</h1>
    		<div class="faq-section" data-aos="fade-up">
	    		<h2 class="category">Pricing</h2>
	    		<div class="question-wrap">
		    		<p class="question">Is it possible to have a custom pricing plan?<button><img class="down-arrow" src="img/down-arrow.svg" alt="Down arrow"></button></p>
		    		<div class="answer-wrap d-none">
			    		<p class="answer">Absolutely yes.</p>
			    		<p class="answer">We are open to make a custom plan that would meet your particular needs. Different modules and features can be combined to find the best solution.</p>
			    		<p class="answer"><a href="#question-section">Send us a message</a> with your request and we will contact you within 24h.</p>
			    		<p class="note-text">Note - some modules are not possible to exclude on their own as they are connected to others.</p>
		    		</div>
	    		</div>

	    		<div class="question-wrap">
		    		<p class="question">Will I need to insert my credit card information to sign up?<button><img class="down-arrow" src="img/down-arrow.svg" alt="Down arrow"></button></p>
		    		<div class="answer-wrap d-none">
		    			<p class="answer">No, you won't have to insert any billing information until you decide to buy any of the packages.</p>
		    		</div>
	    		</div>

	    		<div class="question-wrap">
		    		<p class="question">What if the number of users change?<button><img class="down-arrow" src="img/down-arrow.svg" alt="Down arrow"></button></p>
		    		<div class="answer-wrap d-none">
		    			<p class="answer">Our system is flexible for any changes. For example, if in the current month the number of users is smaller then also the bill will be reduced according to that.</p>
		    		</div>
	    		</div>

	    		<div class="question-wrap">
		    		<h2 class="category">Technical</h2>
		    		<p class="question">Is it possible to get help with setting up?<button><img class="down-arrow" src="img/down-arrow.svg" alt="Down arrow"></button></p>
		    		<div class="answer-wrap d-none">
		    			<p class="answer">Yes, even though our system is very intuitive, we don't expect you to do it all on your own. Our support team will help you to setup and get going with Ezuro as quickly as possible.</p>
		    		</div>
	    		</div>

    		</div>
    		<div id="fourth-spot" class="spot"></div>
    	</section>

    	<section id="question-section">
    		<div class="question-section" data-aos="fade-up">
	    		<h1 class="h1">Got questions?</h1>
	    		<p class="question-desc">Send us a message and we wil answer as soon as possible.</p>
	    			<form action="send-mail.php" id="question-form" name="question-form" class="form question-form" method="post">
		    			<input id="name" class="input" type="text" name="name" placeholder="Name..." required>
		    			<input id="email" class="input" type="email" name="email" placeholder="Email..." required>
		    			<textarea id="message" class="input text-input" type="text" placeholder="Message..." required></textarea>
		    			<button class="button green-button" id="send-mail" type="submit" name="submit" value="Submit">Send</button>
		    		</form>
	    	</div>
	    	<div id="second-spot" class="spot"></div>
    	</section>

    	<div class="mail-sent-message d-none">
    		<div class="close-icon-wrap">
	    		<button class="close-icon">
	    			<span></span>
	    			<span></span>
	    		</button>
    		</div>
    		<div class="inner">
    			<img class="checkmark" src="img/checkmark.svg" alt="Checkmark">
		    	<p>Thank you! Your message was sent!</p>
		    </div>
		  </div>

    	<?php include'includes/footer.html'; ?>
    	</div>

    	<!-- Scripts -->
    <script src="js/scripts.min.js"></script>
    </body>

</html>