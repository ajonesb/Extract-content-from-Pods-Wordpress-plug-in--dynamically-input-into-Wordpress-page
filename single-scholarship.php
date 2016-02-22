<?php
//Alan Jones 
//Front Web Developer/Wordpress Developer | Web Designer | Graphic Designer 
// www.limawebdesigner.com

/*****************************************************************************************/

//Description: 

//Created to use with PODS Wordpress Plug in to automatically place content added from plug in into Wordpress page with PHP.
// Find plug in here: https://wordpress.org/plugins/pods/
// Styles used where from client's style kit as shown on container

/*****************************************************************************************/

//ALL THIS DATA SHOWN BELOW WOULD BE FOR A SCHOLARSHIPS PAGE FOR WHICH THIS TYPE OF CERTAIN INFO WOULD BE INPUT THROUGH WP DASHBOARD
//ALL THIS CONTENT WILL LATER BE POPULATED BELOW



// THIS WOULD BE ANOTHER SECTION IN HE PODS ADMIN DASHBOARD WHERE DATA WAS INPUT SUCH AS BANNER TITLE AND TEXT FOR A SCHOLARSHIPS PAGE
$degrees_banner_title = get_post_meta( get_the_ID(), 'banner-title', true);
$degrees_top_intro_text = get_post_meta( get_the_ID(), 'top-intro-text', true);
$degrees_center_program_title = get_post_meta( get_the_ID(), 'center-program-title', true);


// THIS WOULD BE ANOTHER SECTION IN HE PODS ADMIN DASHBOARD WHERE DATA WAS INPUT SUCH AS STARTING SALARY FOR A SCHOLARSHIPS PAGE
$degrees_starting_salary = get_post_meta( get_the_ID(), 'starting-salary', true);

// THIS WOULD BE ANOTHER SECTION IN HE PODS ADMIN DASHBOARD WHERE DATA WAS INPUT SUCH AS JOB TITLE, EMPLOYER NAME, LOCATION FOR A SCHOLARSHIPS PAGE
$degrees_job_title = get_post_meta( get_the_ID(), 'job-title', true);
$degrees_employer_name = get_post_meta( get_the_ID(), 'employer-name', true);
$degrees_location_of_job = get_post_meta( get_the_ID(), 'job-location', true);

// THIS WOULD BE ANOTHER SECTION IN HE PODS ADMIN DASHBOARD WHERE DATA WAS INPUT SUCH AS SCHOLARSHIP NAME, AMOUNT, DEADLINE
$degrees_scholarship_name = get_post_meta( get_the_ID(), 'scholarship-name', true);
$degrees_scholarship_amount = get_post_meta( get_the_ID(), 'scholarship-amount', true);
$degrees_scholarship_deadline = get_post_meta( get_the_ID(), 'scholarship-deadline', true);


// Remember to use the exact names as above on the ponds dashboard. 

// Below you will continue to put all the fields you created on the ponds dashboard and create additional echos which then you will
// put the echos in the required area below that will already have it's own custom css styles. 
?>



<!--CONTENT  OF PAGE WILL GO HERE-->

		<div class="internships text-23 bold">
			<img src="http://testblog.creditsesame.com/wp-content/uploads/2015/11/internshipicon.png"/>Internships Students Can Apply For: 
			<div class="text-19 jobtitle bold" style="padding-top: 4px; color:#606060;">Job Title:
				<span class="text-19" style="font-weight: normal!important; margin-left: 20px;"><?php echo $scholarship_job_title; ?></span></div>
			<div class="text-19 jobtitle bold" style="padding-top: 4px; color:#606060;">Employer Name:
				<span class="text-19" style="font-weight: normal!important; margin-left: 20px;"><?php echo $scholarship_employer_name; ?></span></div>
			<div class="text-19 jobtitle bold" style="padding-top: 4px; color:#606060;">Location of Job:
				<span class="text-19" style="font-weight: normal!important; margin-left: 20px;"><?php echo $scholarship_location_of_job; ?></span></div>
		</div>

		<div class="scholarships text-23 bold">
			<img src="http://testblog.creditsesame.com/wp-content/uploads/2015/11/scholarshipicon.png"/>Scholarships: 
			<div class="text-19 jobtitle bold" style="padding-top: 4px; color:#606060;">Scholarship Name:<span class="text-19" style="font-weight: normal!important; margin-left: 20px;">Lorem Ipsum Dolem</span></div>
			<div class="text-19 jobtitle bold" style="padding-top: 4px; color:#606060;">Scholarship Amount:<span class="text-19" style="font-weight: normal!important; margin-left: 20px;">Lorem Ipsum Dolem</span></div>
			<div class="text-19 jobtitle bold" style="padding-top: 4px; color:#606060;">Scholarship Deadline:<span class="text-19" style="font-weight: normal!important; margin-left: 20px;">Lorem Ipsum Dolem</span></div>
		</div>		


<!-- END OF CONTENT OF PAGE -->



	<div class="clear-float"></div>

<?php get_footer();

