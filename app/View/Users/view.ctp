<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $user['UserGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Applications');?></h3>
	<?php if (!empty($user['Application'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Street Address'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Postal Code'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('Cell Phone'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('Length Of Stay'); ?></th>
		<th><?php echo __('Intended Start Date'); ?></th>
		<th><?php echo __('Stay Comments'); ?></th>
		<th><?php echo __('Command Of English'); ?></th>
		<th><?php echo __('Educational Qualifications'); ?></th>
		<th><?php echo __('Work Experience'); ?></th>
		<th><?php echo __('Volunteer Experience'); ?></th>
		<th><?php echo __('Other Qualifications'); ?></th>
		<th><?php echo __('Why Gga'); ?></th>
		<th><?php echo __('Area Of Interest'); ?></th>
		<th><?php echo __('Interests Or Hobbies'); ?></th>
		<th><?php echo __('Personal Strengths'); ?></th>
		<th><?php echo __('Personal Weaknesses'); ?></th>
		<th><?php echo __('Religious Beliefs'); ?></th>
		<th><?php echo __('Challenges'); ?></th>
		<th><?php echo __('Valid Passport'); ?></th>
		<th><?php echo __('Passport Number'); ?></th>
		<th><?php echo __('Reference 1 Name'); ?></th>
		<th><?php echo __('Reference 1 Email'); ?></th>
		<th><?php echo __('Reference 1 Relationship'); ?></th>
		<th><?php echo __('Reference 1 Phone'); ?></th>
		<th><?php echo __('Reference 2 Name'); ?></th>
		<th><?php echo __('Reference 2 Email'); ?></th>
		<th><?php echo __('Reference 2 Relationship'); ?></th>
		<th><?php echo __('Reference 2 Phone'); ?></th>
		<th><?php echo __('Applied With Gga Before'); ?></th>
		<th><?php echo __('Volunteered With Gga Before'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Application'] as $application): ?>
		<tr>
			<td><?php echo $application['id'];?></td>
			<td><?php echo $application['first_name'];?></td>
			<td><?php echo $application['last_name'];?></td>
			<td><?php echo $application['date_of_birth'];?></td>
			<td><?php echo $application['street_address'];?></td>
			<td><?php echo $application['city'];?></td>
			<td><?php echo $application['postal_code'];?></td>
			<td><?php echo $application['state'];?></td>
			<td><?php echo $application['country'];?></td>
			<td><?php echo $application['home_phone'];?></td>
			<td><?php echo $application['cell_phone'];?></td>
			<td><?php echo $application['gender'];?></td>
			<td><?php echo $application['email_address'];?></td>
			<td><?php echo $application['length_of_stay'];?></td>
			<td><?php echo $application['intended_start_date'];?></td>
			<td><?php echo $application['stay_comments'];?></td>
			<td><?php echo $application['command_of_english'];?></td>
			<td><?php echo $application['educational_qualifications'];?></td>
			<td><?php echo $application['work_experience'];?></td>
			<td><?php echo $application['volunteer_experience'];?></td>
			<td><?php echo $application['other_qualifications'];?></td>
			<td><?php echo $application['why_gga'];?></td>
			<td><?php echo $application['area_of_interest'];?></td>
			<td><?php echo $application['interests_or_hobbies'];?></td>
			<td><?php echo $application['personal_strengths'];?></td>
			<td><?php echo $application['personal_weaknesses'];?></td>
			<td><?php echo $application['religious_beliefs'];?></td>
			<td><?php echo $application['challenges'];?></td>
			<td><?php echo $application['valid_passport'];?></td>
			<td><?php echo $application['passport_number'];?></td>
			<td><?php echo $application['reference_1_name'];?></td>
			<td><?php echo $application['reference_1_email'];?></td>
			<td><?php echo $application['reference_1_relationship'];?></td>
			<td><?php echo $application['reference_1_phone'];?></td>
			<td><?php echo $application['reference_2_name'];?></td>
			<td><?php echo $application['reference_2_email'];?></td>
			<td><?php echo $application['reference_2_relationship'];?></td>
			<td><?php echo $application['reference_2_phone'];?></td>
			<td><?php echo $application['applied_with_gga_before'];?></td>
			<td><?php echo $application['volunteered_with_gga_before'];?></td>
			<td><?php echo $application['user_id'];?></td>
			<td><?php echo $application['created'];?></td>
			<td><?php echo $application['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'applications', 'action' => 'view', $application['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'applications', 'action' => 'edit', $application['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'applications', 'action' => 'delete', $application['id']), null, __('Are you sure you want to delete # %s?', $application['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
