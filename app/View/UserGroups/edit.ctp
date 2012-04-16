<div class="userGroups form">
<?php echo $this->Form->create('UserGroup');?>
	<fieldset>
		<legend><?php echo __('Edit User Group'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('parent_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserGroup.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UserGroup.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
