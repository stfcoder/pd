<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--
Before you change anything on this page, please read the following instructions.

Anywhere you see the comment tag (it's the one before this comment) it means that
this is a varible you change.  If you have any questions about this page
please email the Internet Director idir@star-fleet.com.
-->

<!-- This line links to the main stylesheet, which is what makes the page pretty.
Do not remove it.  However, if you want to add your own stylesheet in addition to it,
copy and paste the line below and then edit the copy to point to your file. -->
<link rel="stylesheet" type="text/css" href="http://www.star-fleet.com/styles/main.css" />

<!--
This is where you put the Page topic that shows up at the top of browsers.
-->
<title>Personnel Department Administration</title>

</head>
<body>

<div id="header">
	<div id="stflogo">
		<a href="http://www.star-fleet.com/">
			<img src="http://www.star-fleet.com/images/logos/stf-logo.png" alt="STF Main Page" />
		</a>
	</div>
<!--
Okay, here is where you change the Graphic to reflect the main page of your area.
For example: For the Internet Dept this would go to http://www.star-fleet.com/id
and the Alt in the image would say "IDept Main Page".
-->	
	<div id="deptlogo">
		<a href="http://www.star-fleet.com/pd/">
			<img src="http://www.star-fleet.com/pd/images/pd-logo.png" alt="PDept Home Page" />
		</a>
	</div>

<!--
Page Title = This is the name of the page that appears at the top of the page
between the two graphics.
-->
	<h1>Personnel Department</h1>
	<h2>Administration</h2>
<!--
If you choose to have a quote on your page please add it here. If you do
not want a quote please deletethe line below.
-->	
	<p class="epigraph">"One machine can do the work of fifty ordinary men. No machine can do the work of one extraordinary man."<br />- Elbert Hubbard</p>
<!--
Internal Links.  These are links to other major pages within the department,
not to sections within this page.  Just add new links as another list item.
All the styling is handled by the CSS file so that you don't have to worry about it.
-->
	<div id="nav">
		<ul class="links">
			<li><a href="recommendations.php">Recommendations</a></li>
			<li><a href="vacancies.php">Vacancies</a></li>
		</ul>
	</div>

	<ul class="deptdir">
		<li><a href="mailto:pdir@star-fleet.com">{$pdir}</a></li>
		<li><a href="mailto:apdir@star-fleet.com">{$apdir}</a></li>
	</ul>

</div>

<div id="content">

<!--
This is the section-break bar.  It goes at the end of each
section block to make it look pretty.
-->
<div class="sectionbar"><hr /></div>

<!--
Here is where you start Editing the page.  Copy and paste an entire "section" div,
then edit its contents however you need.  Delete any you don't want.  The "h1"
text will appear as the section header.  An "h2" will appear as a sub-header.
Be sure to wrap all paragraphs in <p> ... </p>  The closing tag is important!
Leave the "sectionbar" line inteact as the last item in each section.

If you have any questions with coding please email the Internet Department.

Happy coding!
-->
	<div class="section">

		<div class="sectionbar"><hr /></div>
	</div>

<!--
End coding. Please, do not change the information below, EXCEPT for
the "last updated" text.
-->

</div>

<div id="footer">

	<ul class="links">
		<li><a href="http://www.star-fleet.com/">Main Page</a></li>
		<li><a href="http://www.star-fleet.com/webb/user/register">STF Join Form</a></li>
		<li><a href="http://www.star-fleet.com/prez/">Office of the President</a></li>
	</ul>
	
	<ul class="links">
		<li><a href="http://www.star-fleet.com/acad/">Academy</a></li>

		<li><a href="http://www.star-fleet.com/ed/">Engineering Dept</a></li>
		<li><a href="http://www.star-fleet.com/gmd/">GameMaster Dept</a></li>
		<li><a href="http://www.star-fleet.com/pd/">Personnel Dept</a></li>
		<li><a href="http://www.star-fleet.com/id/">Internet Dept</a></li>
	</ul>

</div>

<ul id="standards">
	<li><a href="http://www.w3.org/TR/xhtml1/"><img src="http://www.star-fleet.com/images/bragbuttons/button-xhtml.png" alt="Valid XHTML 1.0 Strict"/></a></li>
	<li><a href="http://www.w3.org/Style/CSS/"><img src="http://www.star-fleet.com/images/bragbuttons/button-css.png" alt="Valid CSS 2.0" /></a></li>
	<li><a href="http://www.getfirefox.com/"><img alt="Get Firefox!" title="Get Firefox!" src="http://sfx-images.mozilla.org/affiliates/Buttons/80x15/white_2.gif"/></a></li>
</ul>

</body>

</html>
