<?php

require_once("includes/department.inc.php");

?>

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
<title>Personnel Department: Policies</title>

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
	<h2>Policies</h2>
<!--
If you choose to have a quote on your page please add it here. If you do
not want a quote please deletethe line below.
-->	
	<p class="epigraph">"The trouble with facts is that there are so many of them." -- Samuel McChord Crothers</p>

<!--
Internal Links.  These are links to other major pages within the department,
not to sections within this page.  Just add new links as another list item.
All the styling is handled by the CSS file so that you don't have to worry about it.
-->
	<div id="nav">
		<?php echo $linksbar; ?>
	</div>

	<ul class="deptdir">
		<li><a href="mailto:pdir@star-fleet.com">PDir <?php echo $pdir; ?></a></li>
		<li><a href="mailto:apdir@star-fleet.com">APDir <?php echo $apdir; ?></a></li>
		<li><a href="mailto:2apdir@star-fleet.com">2APDir <?php echo $sapdir; ?></a></li>

	</ul>
	
</div>

<div id="content">

<!--
This is the section-break bar.  It goes at the end of each
section block to make it look pretty.
-->
<div class="sectionbar"><hr/></div>

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
		<h1>New Member Placements</h1>

		<p>The Personnel Department is the sole department in charge of processing new member accounts. All rules directly concerning our department can be found here: <a href="http://www.star-fleet.com/prez/edicts/robinson/#e26">Personnel Department Edict.</a></p>

		<p>Our goal is to provide the best role playing environment for all new members, while assisting each ship and fleet with it's personnel needs. Therefore, the following policies apply:</p>

		<h1>Placement Policies</h1>


		<p>This mandate dictates the policies that shall be applied in the following situations:<br />
		1) A new member has applied to join STF, and the application has been approved by the Personnel Director.<br />
		2) An existing member has requested the Personnel Department to create a new character for that member on a ship chosen by the Personnel Department. In such cases, the member will only be placed on a non-Academy ship unless prior permission is granted by the Academy Commandant.</p>

		<h2>General Policies</h2>

		<ul>
			<li>All LOA (including indefinite LOAs) and AWOLed crew members still on a ship’s roster will be counted in determining that ship’s totals and that ship’s department totals.</li>
			<li>A ship’s “posting speed” is defined as the average rate of posting by the ship’s crew, and for non-Academy ships, shall be determined by what is listed in that ship’s Profile. A blank entry for a ship’s speed in their Profile shall be considered ‘average’. For Academy ships, “posting speed” shall be determined by relevant Academy policy.</li>
			<li>A ship’s “posting requirements” is defined as the minimum length of time a junior crew member can go without posting a note before they could be considered AWOL.</li>
			<li>No member placed under this mandate shall be placed on an alt-RPG ship.</li>
		</ul>

		<h2>Academy Placements</h2>

		<ul>
			<li>The Personnel Department shall only place a member on an Academy ship at the rank of cadet.</li>
			<li>For the purpose of this mandate, a full department on an Academy ship is a Department Head and three cadets.</li>
			<li>No cadet shall be placed in a department that has a Department Head who is AWOL, on an LOA that will end more than three days from the date of placement, or vacant.</li>
			<li>No cadet shall be placed on an Academy ship that has both its CO and XO as AWOL, on an LOA of any length, and/or vacant.</li>
			<li>Infrequent posters (once per week or less) will only be placed on a Slow Academy ship where such posting is allowed under the ship’s posting requirements. If there is no availability, the Academy Commandant and the infrequent poster will be contacted to ascertain other available options.</li>
			<li>Slow posters will only be placed on an Academy ship with Slow posting speeds, unless there is no availability in any department of their choice, in which case they will only be placed on an Academy ship with Average posting speeds.</li>
			<li>Average or Regular posters will only be placed on an Academy ship with Average posting speeds, unless there is no availability in any department of their choice, in which case they will be placed on an Academy ship with Frequent posting speeds. If there is still no availability in any department of their choice, they will be placed on an Academy ship with Slow posting speeds.</li>
			<li>Frequent posters will only be placed on an Academy ship with Frequent posting speeds, unless there is no availability in any department of their choice in which case they will only be placed on an Academy ship with Average posting speeds.</li>
			<li>The Academy and the Academy’s ship CO and XO shall be informed when a cadet has been placed on an Academy ship.</li>
		</ul>

		<p>A cadet will be placed in the department of their first choice. If there is no availability, they will be placed in the department of their second, and then third choice. If there is still no availability, they will be placed on a non-Academy ship, using the non-Academy placement policies, and will be assigned a mentor. The Academy Commandant shall be notified of such cases.</p>

		<p>If there is more than one available Academy ship, the following rules will be applied to break any ties, in order of priority:<br />
		1) Preference is given to the ship with the fewest cadets in the department.<br />
		2) Preference is given to the ship with the fewest cadets in total.<br />
		3) Preference is given to the ship with the fewest cadets placed in that calendar month.<br />
		4) Preference is given to the ship that has had the longest period since receiving a new cadet.</p>

		<h2>Non-Academy Placements</h2>

		<ul>
			<li>The Personnel Department shall only place a member on a non-Academy ship at the rank of ensign.</li>
			<li>For the purpose of this mandate, a full department on a non-Academy ship is a Department Head and two junior officers.</li>
			<li>No ensign shall be placed in a department that has a Department Head who is AWOL, on an LOA that will end more than thirty days from the date of placement, or vacant.</li>
			<li>No ensign shall be placed in a ship that has both its CO and XO as AWOL, on an LOA of any length, and/or vacant.</li>
			<li>No ensign shall be placed on a ship that has the majority of its crew as AWOL or LOA, or is considered unhealthy in any other way. The Personnel Director shall decide if a ship is unhealthy, and shall confidentially inform that ship’s Fleet Commander of the reasons why.</li>
			<li>Infrequent posters (once per week or less) will only be placed on a ship where such posting is allowed under the ship’s posting requirements. If there is no availability, the infrequent poster will be contacted to ascertain other available options.</li>
			<li>Slow posters will only be placed on ships with Average or Slow posting speeds; Frequent posters will only be placed on ships with Average or Frequent posting speeds; Average and Regular posters will be placed on any available ship regardless of the ship’s posting speed.</li>
			<li>The ship’s CO and XO shall be informed when a new ensign has been placed on their ship.</li>
		</ul>

		<p>An ensign will placed in the department of their first choice. If there is no availability, they will be placed in the department of their second, and then third choice. If there is still no availability, the Club President will be notified.<br />

		<p>If there is more than one available ship, the following rules will be applied to break any ties, in order of priority:<br />
		1) Preference is given to the ship with the fewest junior officers in the department.<br />
		2) Preference is given to the Fleet with the fewest ensign placements in that calendar month.<br />
		3) Preference is given to the ship with the fewest crew members in total (not including GM/GMM/GMT positions).<br />
		4) Preference is given to the ship with the fewest ensign placements in that calendar month.<br />
		5) Preference is given to the ship that has had the longest period since receiving a new ensign.</p>

		<h2>Disputes</h2>

		<p>All disputes will be directed to the Personnel Director. If the Personnel Director’s ship is in question, the Assistant Personnel Director will address the complaint. If both the Personnel Director’s and the Assistant Personnel Director’s ships are in question, the Second Assistant Personnel Director will address the complaint. In all cases, the ruling of the Personnel Department will be final.</p>

		<div class="sectionbar"><hr/></div>
	</div>
	
<!--
End coding. Please, do not change the information below, EXCEPT for
the "last updated" text.
-->

</div>

<div id="footer">
<?php echo $footer; ?>
</div>

<ul id="standards">
	<li><a href="http://www.w3.org/TR/xhtml1/"><img src="http://www.star-fleet.com/images/bragbuttons/button-xhtml.png" alt="Valid XHTML 1.0 Strict"/></a></li>
	<li><a href="http://www.w3.org/Style/CSS/"><img src="http://www.star-fleet.com/images/bragbuttons/button-css.png" alt="Valid CSS 2.0" /></a></li>
	<li><a href="http://www.getfirefox.com/"><img alt="Get Firefox!" title="Get Firefox!" src="http://sfx-images.mozilla.org/affiliates/Buttons/80x15/white_2.gif"/></a></li>
</ul>

</body>

</html>
