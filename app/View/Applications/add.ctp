<?php echo $this->TwitterBootstrap->page_header("Volunteer Application"); ?>
<div class="applications form">
<?php echo $this->Form->create('Application');?>
	<?php echo $this->TwitterBootstrap->progress(array("width" => 1, "striped" => true, "active" => true)); ?>
	
	
	<ul class="nav nav-tabs">
	    <li><a href="#personal" data-toggle="tab">1. Personal Information</a></li>
	    <li><a href="#stay" data-toggle="tab">2. Stay Details</a></li>
	    <li><a href="#qualifications" data-toggle="tab">3. Qualifications</a></li>
	    <li><a href="#questions" data-toggle="tab">4. Questions</a></li>
	    <li><a href="#references" data-toggle="tab">5. References</a></li>
    </ul>
    
    <div class="tab-content">
	<!-- Begin Personal Section -->
	<div class="tab-pane active" id="personal">
		<div class="well">
			<h2>1. Personal Information <small>Let us know how to contact you. <strong>Bold Fields</strong> are required. </small></h2>
			<div class="row">	
				<?php echo $this->Form->input("first_name", array(
				    "label" => "<strong>First Name</strong>",
				    "div" => array('class'=>'span3')
				)); 
				echo $this->Form->input("last_name", array(
				    "label" => "<strong>Last Name</strong>",
				    "div" => array('class'=>'span3')
				));
				echo $this->Form->input("date_of_birth", array(
				    "label" => "<strong>Date of Birth</strong>",
				    "div" => array('class'=>'span3'),
				    "type" => "text",
				    "id" => "dateOfBirth",
				    "size" => 10
				)); 
				?>
			</div>
			
			<div class="row">
				<?php 
				echo $this->Form->input("street_address", array(
				    "label" => "Street Address",
				    "div" => array('class'=>'span3'),
				)); 
				echo $this->Form->input('city', array(
				    "label" => "City",
				    "div" => array('class'=>'span3'),
				));
				echo $this->Form->input('state', array(
				    "label" => "State (if applicable)",
				    "div" => array('class'=>'span3'),
				));
				
				?>
			</div>
	
			<div class="row">
				<?php 
				echo $this->Form->input("country", array(
				    "label" => "<strong>Country</strong>",
				    "type" => "text",
				    "div" => array('class'=>'span3'),
				    "class" => 'countrydrop',
				    "data-provide" => 'typeahead'
				)); 
				echo $this->Form->input('home_phone', array(
				    "label" => "Home Phone",
				    "div" => array('class'=>'span3'),
				));
				echo $this->Form->input('cell_phone', array(
				    "label" => "Cell Phone",
				    "div" => array('class'=>'span3'),
				));
				
				?>
			</div>
			
			<div class="row">
		<?php
			echo $this->Form->input('email_address', array(
					"id" => 'emailAddress',
				    "label" => "<strong>Email Address</strong>",
				    "div" => array('class'=>'span3'),
				    "after" => "<div class='emailSuggestion'></div>"
				    
			));
				
			echo $this->Form->input('gender', array(
				    "label" => "<strong>Gender</strong>",
				    "options" => array('Female'=>'Female','Male'=>'Male'),
				    "div" => array('class'=>'span3')
			));
					
		?>
			</div>
			<div class="form-actions"><a href="#qualifications" class="btn btn-primary btn-large">Save and Continue »</a></div>

		</div>
	</div><!-- End Personal Section -->
	
	<!-- Begin Stay Section -->
	<div class="tab-pane" id="stay">
		<div class="well">
		<h2>2. Stay Details <small>Tell us when and why you want to be here.</small></h2>
		<?php
		echo $this->Form->input('length_of_stay');
		echo $this->Form->input('intended_start_date');
		echo $this->Form->input('valid_passport');
		echo $this->Form->input('passport_number');
		echo $this->Form->input('stay_comments');
		echo $this->Form->input('why_gga');
		?>
			<div class="form-actions"><a href="#qualifications" class="btn btn-primary btn-large">Save and Continue »</a></div>
		</div>
	</div><!-- End Stay Section -->
	
	<!-- Begin Qualifications Section -->
	<div class="tab-pane" id="qualifications">
		<div class="well">
		<h2>3. Your Qualifications <small>Tell us a little about your history.</small></h2>
		<?php
		echo $this->Form->input('command_of_english');
		echo $this->Form->input('educational_qualifications');
		echo $this->Form->input('work_experience');
		echo $this->Form->input('volunteer_experience');
		echo $this->Form->input('other_qualifications');
		?>
			<div class="form-actions"><a href="#qualifications" class="btn btn-primary btn-large">Save and Continue »</a></div>
		</div>
	</div><!-- End Qualifications Section -->
	
	<!-- Begin Questions Section -->
	<div class="tab-pane" id="questions">
		<div class="well">
		<h2>4. Harder Questions <small>Let us know you are right for the job.</small></h2>
		<?php
		echo $this->Form->input('area_of_interest');
		echo $this->Form->input('interests_or_hobbies');
		echo $this->Form->input('personal_strengths');
		echo $this->Form->input('personal_weaknesses');
		echo $this->Form->input('religious_beliefs');
		echo $this->Form->input('challenges');
		?>
			<div class="form-actions"><a href="#qualifications" class="btn btn-primary btn-large">Save and Continue »</a></div>
		</div>
	</div><!-- End Questions Section -->


	<!-- Begin References Section -->
	<div class="tab-pane" id="references">
		<div class="well">
		<h2>5. References <small>Give us someone who will say how great you are.</small></h2>
		<?php
		echo $this->Form->input('reference_1_name');
		echo $this->Form->input('reference_1_email');
		echo $this->Form->input('reference_1_relationship');
		echo $this->Form->input('reference_1_phone');
		echo $this->Form->input('reference_2_name');
		echo $this->Form->input('reference_2_email');
		echo $this->Form->input('reference_2_relationship');
		echo $this->Form->input('reference_2_phone');
		echo $this->Form->input('applied_with_gga_before');
		echo $this->Form->input('volunteered_with_gga_before');
		?>
		
		<div class="form-actions"><?php echo $this->TwitterBootstrap->button("Save", array("style" => "primary", "size" => "large")); ?> &nbsp;<?php echo $this->TwitterBootstrap->button("Submit Application", array("style" => "success", "size" => "large")); ?></a>
		<?php echo $this->Form->end();?>
</div>
		</div>
	</div><!-- End References Section -->
	</div>


</div>

<script type="text/javascript">
$(document).ready(function() {
	var countries = <?php echo "['".implode("','",$countries)."']"; ?>
	
  $("#dateOfBirth").mask("99-99-9999");
  $(".countrydrop").typeahead({source: countries<?php //echo json_encode($countries); ?>});

  $("a[href='#personal']").click(function(){
  	$(".bar").css({"width": "10%"});
  });
  
  $("a[href='#stay']").click(function(){
  	$(".bar").css({"width": "20%"});
  });
  
  $("a[href='#qualifications']").click(function(){
  	$(".bar").css({"width": "30%"});
  });
  
  $("a[href='#questions']").click(function(){
  	$(".bar").css({"width": "50%"});
  });
  
  $("a[href='#references']").click(function(){
  	$(".bar").css({"width": "90%"});
  });
  
  $('#ApplicationAddForm').sisyphus({
	  customKeyPrefix: '',
	  timeout: 5,
	  onSave: function() {},
	  onRestore: function() {},
	  onRelease: function() {},
	  excludeFields: null
 });
 
 var domains = ['yahoo.com', 'google.com', 'hotmail.com', 'gmail.com', 'me.com', 
 				'aol.com', 'mac.com', 'live.com', 'comcast.net', 'googlemail.com', 
 				'msn.com', 'hotmail.co.uk', 'yahoo.co.uk', 'facebook.com', 'verizon.net', 
 				'sbcglobal.net', 'att.net', 'gmx.com','mail.com', 'gmx.de', 'telkomsa.net',
 				'web.de', 'google.co.za', 'godsgoldenacre.org'];
 				
 $('#emailAddress').on('blur', function() {
	$(this).mailcheck({
		domains: domains,   // optional
	    suggested: function(element, suggestion) {
	      console.log(suggestion);
	      
	      $('.emailSuggestion').html("<p><small>Did you mean <a class='suggestedEmail' href='#'><em>" + 
	      						suggestion.full + '</em></a>?</small></p>');
	    	
	    	that = this;
	    	// Pass the value from the email suggestion back to the input
	    	$('.suggestedEmail').click(function(){
	    		// $('#emailAddress').value(that.value);
	    		alert(this);
	    	});
	    	},
	    empty: function(element) {
	      // callback code
	      $('.emailSuggestion').html('');
	    }
	});
 });
  
});
</script>

