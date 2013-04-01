<?php /* Smarty version 2.6.16, created on 2009-01-09 15:05:21
         compiled from ship-profiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count_characters', 'ship-profiles.tpl', 7, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['Profile']['shipname']; ?>
</h2>
<p><strong>CO:</strong> <a href="mailto:<?php echo $this->_tpl_vars['Profile']['email']; ?>
"><?php echo $this->_tpl_vars['Profile']['co']; ?>
</a></p>
<p><strong>Posting Speed:</strong> <?php echo $this->_tpl_vars['Profile']['postingspeed']; ?>
</p>
<p><strong>Accepts New Members?</strong> <?php echo $this->_tpl_vars['Profile']['newmembers']; ?>
</p>
<p><strong>Vacancies:</strong></p>
<ul>
	<?php if ($this->_tpl_vars['Profile']['vacancyxo'] == '0' && $this->_tpl_vars['Profile']['vacancyce'] == '0' && $this->_tpl_vars['Profile']['vacancycmo'] == '0' && $this->_tpl_vars['Profile']['vacancycos'] == '0' && $this->_tpl_vars['Profile']['vacancycso'] == '0' && $this->_tpl_vars['Profile']['vacancyeng'] == '0' && $this->_tpl_vars['Profile']['vacancymed'] == '0' && $this->_tpl_vars['Profile']['vacancysci'] == '0' && $this->_tpl_vars['Profile']['vacancysec'] == '0' && ((is_array($_tmp=$this->_tpl_vars['Profile']['vacancyother'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)) == 0): ?>
		<li>No Vacancies!</li>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['Profile']['vacancyxo'] == 1): ?>
		<li>Executive Officer</li>
	<?php endif; ?> 
	<?php if ($this->_tpl_vars['Profile']['vacancyce'] == '1'): ?>
		<li>Chief Engineer</li>
	<?php endif; ?> 
	<?php if ($this->_tpl_vars['Profile']['vacancycmo'] == '1'): ?>
		<li>Chief Medical Officer</li>
	<?php endif; ?> 
	<?php if ($this->_tpl_vars['Profile']['vacancycos'] == '1'): ?>
		<li>Chief of Security</li>
	<?php endif; ?> 
	<?php if ($this->_tpl_vars['Profile']['vacancycso'] == '1'): ?>
		<li>Chief Science Officer</li>
	<?php endif; ?> 
	<?php if ($this->_tpl_vars['Profile']['vacancyeng'] == '1'): ?>
		<li>Engineers</li>
	<?php endif; ?> 
	<?php if ($this->_tpl_vars['Profile']['vacancymed'] == '1'): ?>
		<li>Doctors</li>
	<?php endif; ?> 
	<?php if ($this->_tpl_vars['Profile']['vacancysci'] == '1'): ?>
		<li>Scientists</li>
	<?php endif; ?> 
	<?php if ($this->_tpl_vars['Profile']['vacancysec'] == '1'): ?>
		<li>Security Officers</li>
	<?php endif; ?> 
	<?php if (((is_array($_tmp=$this->_tpl_vars['Profile']['vacancyother'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)) > 0): ?>
		<li><?php echo $this->_tpl_vars['Profile']['vacancyother']; ?>
</li>
	<?php endif; ?>
</ul>
<p><strong>Description:</strong> <?php echo $this->_tpl_vars['Profile']['description']; ?>
</p>