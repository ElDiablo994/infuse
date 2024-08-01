
<?php 
get_header();
?><!DOCTYPE html>
<?php /* Template Name: HomePage Template */ ?>
<html lang="english">
  <head>
    <title>Infuse Test Assignment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-theme-neutral-dark);
        background-color: var(--dl-color-theme-neutral-light);

        fill: var(--dl-color-theme-neutral-dark);
      }
    </style>
  <body>
    <div>
      <div class="contactus-container">
        <div class="contactus-contactus">
			<div class="contactus-banner">
				<div class="contactus-banner_image inner_contactus-banner">
					<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/microsoftteamsimage93215-feb-800h.png"
					alt="MicrosoftTeamsimage93215"
					class="contactus-microsoft-teamsimage932"
					/>
					<div class="hovering_info-holder">
	  					<h2 class="hovering_info-title">OurCompany, Inc.</h2>
						<div class="hovering_info-description">
						<p>1110 Brickell Avenue,</p>
						<p>Suite 400</p>
						<p>Miami, FL 33131</p>
						</div>
					</div>
				</div>
				<div class="contactus-banner_text inner_contactus-banner">
					<h1 class="contactus-heading">Сontact Us</h1>
					<span class="contactus-subheading">
						We understand the intricacies of the B2B landscape and the
						ever-evolving nature of marketing strategies
					</span>
					<?= do_shortcode('[contact-form-7 id="29cd391" title="Contact form 1"]'); ?>
				</div>
			</div>
			<div class="contacus-companies">
				<div class="companies_video">
					<video
							width="320"
							height="240"
							autoplay
							muted
							loop
							class="contactus-companies_video"
						>
						<source src="<?php echo get_template_directory_uri(); ?>/assets/images/companies-infuse.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
				<div class="companies_image">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/companies_image.jpg"
						alt="IMAGE2part1129"
						class="contactus-image2part1"
						/>
				</div>
			</div>
			<div class="contactus-expiriance">
	  			<h2>Years of Experience <br>& Deep Expertise</h2>
				<div class="contactus-expiriance_content">
					<img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/experiance_bg.jpg"
					alt="IMAGE2part1129"
					class="contactus-image2part1"
					/>
					<div class="hover-expiriance_content">
	  					<div class="inner_hover-content-card">
	  						<p>When you partner with OurCompany,
							you gain access
							to a team of professionals
							who are dedicated to your success
							and have the know-how to drive impactful results</p>
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/chess.jpg"
								alt="Vector361135"
								class="contactus-vector3611"
							/>
						</div>
						<hr>
						<div class="inner_hover-content-card">
	  						<p>With years of experience in supporting leading B2B organizations in challenging markets, OurCompany brings a wealth
							  of knowledge and expertise to the table</p>
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/stars.jpg"
								alt="Vector361135"
								class="contactus-vector3611"
							/>
						</div>
						<hr>
						<div class="inner_hover-content-card">
	  						<p>Our clients rely on us to increase
							their brand awareness, accelerate
							engagement, and generate leads that ultimately help them achieve their goals </p>
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/hill.jpg"
								alt="Vector361135"
								class="contactus-vector3611"
							/>
						</div>
					</div>
				</div>
			</div>
			<div class="contactus-gtm_strategies">
				<div class="gtm_strategies-top">
					<h2 class="gtm_strategies-title">How We Turn Clients’ GTM<br> Strategies Into Success</h2>
					<div class="gtm_strategies-navigation">
						<div class="gtm_left-navigation gtm_navigation">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/left-navigation.png"
								alt="Vector361135"
								class="contactus-vector3611"
							/>
						</div>
						<div class="gtm_right-navigation gtm_navigation">
							<img
								src="<?php echo get_template_directory_uri(); ?>/assets/images/right-navigation.png"
								alt="Vector361135"
								class="contactus-vector3611"
							/>
						</div>
					</div>
				</div>
				<div class="gtm_testemonial-holder">
					<div class="testemonial-card" style="background:url(<?= get_template_directory_uri() . '/assets/images/testemonial_bg.jpg' ?>);">
						<p>The programs have run more efficiently than they promised making it easy for me to hit my targets in advance of my deadlines.</p>
						<div class="testemonial_creator-info">
							<h3>Marketing and Advertising</h3>
							<p>Demand Content</p>
						</div>
					</div>
					<div class="testemonial-card" style="background:url(<?= get_template_directory_uri() . '/assets/images/testemonial_bg.jpg' ?>);">
						<p>This is second text for testemonial. The programs have run more efficiently than they promised making it easy for me to hit my targets in advance of my deadlines.</p>
						<div class="testemonial_creator-info">
							<h3>Marketing and Advertising1</h3>
							<p>Demand Content</p>
						</div>
					</div>
					<div class="testemonial-card" style="background:url(<?= get_template_directory_uri() . '/assets/images/testemonial_bg.jpg' ?>);">
						<p>This is third text for testemonial. The programs have run more efficiently than they promised making it easy for me to hit my targets in advance of my deadlines.</p>
						<div class="testemonial_creator-info">
							<h3>Marketing and Advertising2</h3>
							<p>Demand Content</p>
						</div>
					</div>
					<div class="testemonial-card" style="background:url(<?= get_template_directory_uri() . '/assets/images/testemonial_bg.jpg' ?>);">
						<p>This is forth text for testemonial. The programs have run more efficiently than they promised making it easy for me to hit my targets in advance of my deadlines.</p>
						<div class="testemonial_creator-info">
							<h3>Marketing and Advertising3</h3>
							<p>Demand Content</p>
						</div>
					</div>
				</div>
			</div>
        </div>
      </div>
    </div>
  </body>
  <?= get_footer(); ?>
</html>