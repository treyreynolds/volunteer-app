<div class="applications form">
<?php echo $this->Form->create('Application');?>
	<fieldset>
		<legend><?php echo __('Edit Application'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('street_address');
		echo $this->Form->input('city');
		echo $this->Form->input('postal_code');
		echo $this->Form->input('state');
		echo $this->Form->input('country');
		echo $this->Form->input('home_phone');
		echo $this->Form->input('cell_phone');
		echo $this->Form->input('gender');
		echo $this->Form->input('email_address');
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
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Application.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Application.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
