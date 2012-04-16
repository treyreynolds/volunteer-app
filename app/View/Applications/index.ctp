<div class="applications index">
	<h2><?php echo __('Applications');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth');?></th>
			<th><?php echo $this->Paginator->sort('street_address');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('postal_code');?></th>
			<th><?php echo $this->Paginator->sort('state');?></th>
			<th><?php echo $this->Paginator->sort('country');?></th>
			<th><?php echo $this->Paginator->sort('home_phone');?></th>
			<th><?php echo $this->Paginator->sort('cell_phone');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('email_address');?></th>
			<th><?php echo $this->Paginator->sort('length_of_stay');?></th>
			<th><?php echo $this->Paginator->sort('intended_start_date');?></th>
			<th><?php echo $this->Paginator->sort('stay_comments');?></th>
			<th><?php echo $this->Paginator->sort('command_of_english');?></th>
			<th><?php echo $this->Paginator->sort('educational_qualifications');?></th>
			<th><?php echo $this->Paginator->sort('work_experience');?></th>
			<th><?php echo $this->Paginator->sort('volunteer_experience');?></th>
			<th><?php echo $this->Paginator->sort('other_qualifications');?></th>
			<th><?php echo $this->Paginator->sort('why_gga');?></th>
			<th><?php echo $this->Paginator->sort('area_of_interest');?></th>
			<th><?php echo $this->Paginator->sort('interests_or_hobbies');?></th>
			<th><?php echo $this->Paginator->sort('personal_strengths');?></th>
			<th><?php echo $this->Paginator->sort('personal_weaknesses');?></th>
			<th><?php echo $this->Paginator->sort('religious_beliefs');?></th>
			<th><?php echo $this->Paginator->sort('challenges');?></th>
			<th><?php echo $this->Paginator->sort('valid_passport');?></th>
			<th><?php echo $this->Paginator->sort('passport_number');?></th>
			<th><?php echo $this->Paginator->sort('reference_1_name');?></th>
			<th><?php echo $this->Paginator->sort('reference_1_email');?></th>
			<th><?php echo $this->Paginator->sort('reference_1_relationship');?></th>
			<th><?php echo $this->Paginator->sort('reference_1_phone');?></th>
			<th><?php echo $this->Paginator->sort('reference_2_name');?></th>
			<th><?php echo $this->Paginator->sort('reference_2_email');?></th>
			<th><?php echo $this->Paginator->sort('reference_2_relationship');?></th>
			<th><?php echo $this->Paginator->sort('reference_2_phone');?></th>
			<th><?php echo $this->Paginator->sort('applied_with_gga_before');?></th>
			<th><?php echo $this->Paginator->sort('volunteered_with_gga_before');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($applications as $application): ?>
	<tr>
		<td><?php echo h($application['Application']['id']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['street_address']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['city']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['postal_code']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['state']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['country']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['home_phone']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['cell_phone']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['gender']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['email_address']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['length_of_stay']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['intended_start_date']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['stay_comments']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['command_of_english']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['educational_qualifications']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['work_experience']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['volunteer_experience']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['other_qualifications']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['why_gga']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['area_of_interest']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['interests_or_hobbies']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['personal_strengths']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['personal_weaknesses']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['religious_beliefs']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['challenges']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['valid_passport']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['passport_number']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['reference_1_name']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['reference_1_email']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['reference_1_relationship']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['reference_1_phone']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['reference_2_name']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['reference_2_email']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['reference_2_relationship']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['reference_2_phone']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['applied_with_gga_before']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['volunteered_with_gga_before']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($application['User']['username'], array('controller' => 'users', 'action' => 'view', $application['User']['id'])); ?>
		</td>
		<td><?php echo h($application['Application']['created']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $application['Application']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $application['Application']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $application['Application']['id']), null, __('Are you sure you want to delete # %s?', $application['Application']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Application'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
