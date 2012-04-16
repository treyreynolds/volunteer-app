<div class="userGroups view">
<h2><?php  echo __('User Group');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent User Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userGroup['ParentUserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $userGroup['ParentUserGroup']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Group'), array('action' => 'edit', $userGroup['UserGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Group'), array('action' => 'delete', $userGroup['UserGroup']['id']), null, __('Are you sure you want to delete # %s?', $userGroup['UserGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related User Groups');?></h3>
	<?php if (!empty($userGroup['ChildUserGroup'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userGroup['ChildUserGroup'] as $childUserGroup): ?>
		<tr>
			<td><?php echo $childUserGroup['id'];?></td>
			<td><?php echo $childUserGroup['name'];?></td>
			<td><?php echo $childUserGroup['parent_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_groups', 'action' => 'view', $childUserGroup['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_groups', 'action' => 'edit', $childUserGroup['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_groups', 'action' => 'delete', $childUserGroup['id']), null, __('Are you sure you want to delete # %s?', $childUserGroup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child User Group'), array('controller' => 'user_groups', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
