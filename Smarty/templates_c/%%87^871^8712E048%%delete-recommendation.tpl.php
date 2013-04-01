<?php /* Smarty version 2.6.16, created on 2009-01-11 13:30:18
         compiled from delete-recommendation.tpl */ ?>
<form method="post" action="delete-recommendation.php">
	<select name="deletedrec">
		<?php echo $this->_tpl_vars['recselector']; ?>

	</select>
	<input type="submit" value="Delete" />
</form>