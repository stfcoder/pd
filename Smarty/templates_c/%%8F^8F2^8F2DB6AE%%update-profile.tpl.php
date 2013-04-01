<?php /* Smarty version 2.6.16, created on 2009-01-11 13:30:18
         compiled from update-profile.tpl */ ?>
<form method="post" action="<?php echo $this->_tpl_vars['action']; ?>
">
	<input type="hidden" name="oldshipname" value="<?php echo $this->_tpl_vars['Update']['shipname']; ?>
" />
	<p><strong>Ship Name:</strong> <input type="text" name="shipname" value= "<?php echo $this->_tpl_vars['Update']['shipname']; ?>
" /></p>
	<p><strong>Fleet:</strong> <input type="text" name="fleet" value="<?php echo $this->_tpl_vars['Update']['fleet']; ?>
" size="1" /> <em>(1, 2, 3, etc.)</em></p>
	<p><strong>CO Name:</strong> <input type="text" name="co" value="<?php echo $this->_tpl_vars['Update']['co']; ?>
" /></p>
	<p><strong>CO Email:</strong> <input type="text" name="email" value="<?php echo $this->_tpl_vars['Update']['email']; ?>
" /></p>
	<p><strong>Posting Speed:</strong> <input type="text" name="postingspeed" value="<?php echo $this->_tpl_vars['Update']['postingspeed']; ?>
" /> <em>Frequent, Average, Slow</em></p>
	<p><strong>Accepts New Members?</strong> <select name="newmembers">
												<?php if ($this->_tpl_vars['Update']['newmembers'] == 'Yes'): ?>
													<option value="Yes" selected="selected">Yes</option>
													<option value="No">No</option>
												<?php else: ?>
													<option value="No" selected="selected">No</option>
													<option value="Yes">Yes</option>
												<?php endif; ?>
											</select></p>
	<p><strong>Vacancies:</strong></p>
	<table width="50%">
		<tr>
			<td width="10%">
				<?php if ($this->_tpl_vars['Update']['vacancyxo'] == 1): ?>
					<input type="checkbox" name="vacancyxo" checked="checked" />
				<?php else: ?>
					<input type="checkbox" name="vacancyxo" />
				<?php endif; ?>
			</td>
			<td width="40%">Executive Officer</td>
			<td width="10%"></td>
			<td width="40%"></td>
		</tr>
		<tr>
			<td>
				<?php if ($this->_tpl_vars['Update']['vacancyce'] == 1): ?>
					<input type="checkbox" name="vacancyce" checked="checked" />
				<?php else: ?>
					<input type="checkbox" name="vacancyce" />
				<?php endif; ?>
			</td>
			<td>Chief Engineer</td>
			<td>				
				<?php if ($this->_tpl_vars['Update']['vacancyeng'] == 1): ?>
					<input type="checkbox" name="vacancyeng" checked="checked" />
				<?php else: ?>
					<input type="checkbox" name="vacancyeng" />
				<?php endif; ?>
			</td>
			<td>Engineers</td>
		</tr>
		<tr>
			<td>
				<?php if ($this->_tpl_vars['Update']['vacancycmo'] == 1): ?>
					<input type="checkbox" name="vacancycmo" checked="checked" />
				<?php else: ?>
					<input type="checkbox" name="vacancycmo" />
				<?php endif; ?>			
			</td>
			<td>Chief Medical Officer</td>
			<td>
				<?php if ($this->_tpl_vars['Update']['vacancymed'] == 1): ?>
					<input type="checkbox" name="vacancymed" checked="checked" />
				<?php else: ?>
					<input type="checkbox" name="vacancymed" />
				<?php endif; ?>			
			</td>
			<td>Doctors</td>
		</tr>
		<tr>
			<td>
				<?php if ($this->_tpl_vars['Update']['vacancycos'] == 1): ?>
					<input type="checkbox" name="vacancycos" checked="checked" />
				<?php else: ?>
					<input type="checkbox" name="vacancycos" />
				<?php endif; ?>			
			</td>
			<td>Chief of Security</td>
			<td>
				<?php if ($this->_tpl_vars['Update']['vacancysec'] == 1): ?>
					<input type="checkbox" name="vacancysec" checked="checked" />
				<?php else: ?>
					<input type="checkbox" name="vacancysec" />
				<?php endif; ?>			
			</td>
			<td>Security Officers</td>
		</tr>
		<tr>
			<td>
				<?php if ($this->_tpl_vars['Update']['vacancycso'] == 1): ?>
					<input type="checkbox" name="vacancycso" checked="checked" />
				<?php else: ?>
					<input type="checkbox" name="vacancycso" />
				<?php endif; ?>			
			</td>
			<td>Chief Science Officer</td>
			<td>
				<?php if ($this->_tpl_vars['Update']['vacancysci'] == 1): ?>
					<input type="checkbox" name="vacancysci" checked="checked" />
				<?php else: ?>
					<input type="checkbox" name="vacancysci" />
				<?php endif; ?>			
			</td>
			<td>Scientists</td>
		</tr>
	</table>
	<p><strong>Other Vacancies:</strong> <input type="text" name="vacancyother" value="<?php echo $this->_tpl_vars['Update']['vacancyother']; ?>
" /></p>
	<p><strong>Ship Description:</strong><br /><textarea name="description" rows="5" cols="50" style="font-family: 'Times New Roman', Times, serif;"><?php echo $this->_tpl_vars['Update']['description']; ?>
</textarea></p>
	<p><input type="submit" name="<?php echo $this->_tpl_vars['value']; ?>
" value="<?php echo $this->_tpl_vars['value']; ?>
" />
</form>