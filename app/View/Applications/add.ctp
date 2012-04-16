<?php echo $this->TwitterBootstrap->page_header("Volunteer Application"); ?>
<div class="applications form">
<?php echo $this->Form->create('Application');?>
	<?php echo $this->TwitterBootstrap->progress(array("width" => 25, "striped" => true, "active" => true)); ?>
	<!-- Begin Personal Section -->
	<div class="well">
		<h2>Personal Information <small>The Basics</small></h2>
		<div class="row">	
			<div class="span3">
			<?php echo $this->TwitterBootstrap->basic_input("first_name", array(
			    "label" => "First Name",
			    "class" => "span4"
			)); ?>
			</div>
			
			<div class="span3">
			<?php
			echo $this->TwitterBootstrap->basic_input("last_name", array(
			    "label" => "Last Name",
			    "class" => "span4"
			)); ?>
			</div>
		</div>
	
	<?php
	echo $this->TwitterBootstrap->input("date_of_birth", array(
	    "input" => $this->Form->input('date_of_birth', array(
		    'label' => '',
		    'dateFormat' => 'DMY',
		    'minYear' => date('Y') - 90,
		    'maxYear' => date('Y') - 10,
			)),
	    "help_inline" => "",
	    "help_block" => "You must be at least 18 to apply, though preference is given to applicants who are at least 20 years old."
	));
			
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		
		echo $this->Form->input('street_address');
		echo $this->Form->input('city');
		echo $this->Form->input('postal_code');
		echo $this->Form->input('state');
		echo $this->Form->input('country');
		echo $this->Form->input('home_phone');
		echo $this->Form->input('cell_phone');
		echo $this->Form->input('gender');
		echo $this->Form->input('email_address');
	
	?>
	</div><!-- End Personal Section -->
	
	<fieldset>
	<?php
		echo $this->Form->input('length_of_stay');
		echo $this->Form->input('intended_start_date');
		echo $this->Form->input('stay_comments');
		echo $this->Form->input('command_of_english');
		echo $this->Form->input('educational_qualifications');
		echo $this->Form->input('work_experience');
		echo $this->Form->input('volunteer_experience');
		echo $this->Form->input('other_qualifications');
		echo $this->Form->input('why_gga');
		echo $this->Form->input('area_of_interest');
		echo $this->Form->input('interests_or_hobbies');
		echo $this->Form->input('personal_strengths');
		echo $this->Form->input('personal_weaknesses');
		echo $this->Form->input('religious_beliefs');
		echo $this->Form->input('challenges');
		echo $this->Form->input('valid_passport');
		echo $this->Form->input('passport_number');
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
		echo $this->Form->hidden('user_id');
		echo $this->Form->hidden('User.id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
