<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($podcast, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php if ($sf_user->hasCredential('God')): ?>
<?php echo $helper->linkToDelete($podcast, array(  'credentials' => 'God',  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
<?php endif; ?>

  </ul>
</td>
