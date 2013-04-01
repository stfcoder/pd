<?php /* Smarty version 2.6.16, created on 2009-01-09 15:30:09
         compiled from recommendation.tpl */ ?>
<h2><?php echo $this->_tpl_vars['Recommendation']['name']; ?>
</h2>
<p><strong>Recommended By</strong>: <a href="mailto:<?php echo $this->_tpl_vars['Recommendation']['recommenderemail']; ?>
"><?php echo $this->_tpl_vars['Recommendation']['recommender']; ?>
</a>, <?php echo $this->_tpl_vars['Recommendation']['recommenderposition']; ?>
<br />
<strong>Recommender's Comments</strong>: <?php echo $this->_tpl_vars['Recommendation']['comments']; ?>
</p>
<p><a href="mailto:<?php echo $this->_tpl_vars['Recommendation']['email']; ?>
">Contact <?php echo $this->_tpl_vars['Recommendation']['name']; ?>
</a></p>
<p><em>This recommendation was added on <?php echo $this->_tpl_vars['Recommendation']['date']; ?>
.</em></p>