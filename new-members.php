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
<title>Personnel Department: New Members</title>

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
	<h2>New Members</h2>
<!--
If you choose to have a quote on your page please add it here. If you do
not want a quote please deletethe line below.
-->	
	<p class="epigraph">"One who asks a question is a fool for five minutes; one who does not ask a question remains a fool forever. -- Chinese Proverb</p>

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
	<h1>Where now?</h1>
	<p>There are many resources here at STF that are designed to simply help members and allow them to get the best out of being here. But sometimes these can be confusing and daunting to say the least. So, to help you out the Personnel Department has created this page to point you in the right direction. Read through the descriptions of each of the resources and see if it is right for you.</p>
	
	<div class="sectionbar"><hr/></div>
	
	<h1>Resources</h1>
	
	<h2>Mentors</h2>
	<ul>
		<li><a href="http://www.star-fleet.com/pd/mentors.php">Sign Up for a Mentor!</a> - A mentor will be a personal guide to STF.  They are available to answer any questions, help you with your role playing, or just be a friend and contact!</li>
	</ul>

	<h2>STF Academy</h2>
	<p><em>If you are looking for somewhere to give you that helping hand that we all need sometimes, the Academy is the place to go. Whether you signed up to start off in the Academy or you decided to go mainstream, the Academy has a lot to offer and is a good starting point for anyone.</em></p>
	<ul>
		<li><a href="http://www.star-fleet.com/library/bookshelf/handbook/index.html">Player's Handbook</a> - This guide will get you on your feet and role playing before you know it!  It has a lot of valuable information and frequently asked questions answered inside of it, so it should be the New Member's first stop.  Take a look around.</li>
		<li><a href="http://www.star-fleet.com/library/bookshelf/textbook/">Academy Courses</a> - This is a collection of Academy Courses.  Each department has a course, with lots of good information on how to role play within that role.  You can take a test at the end if you want, and if you pass, you will be eligible for promotion!</li>
		<li><a href="http://www.star-fleet.com/webb/acad">Academy Ship</a> - The Academy ship is where you can ask any questions and read up on discussion that are currently going on concerning the Academy. You will also find links to the various Academy resources such as the courses and the gradutes lists.</li>
	</ul>

	<h2>Information Resources</h2>

	<h3>STF Library</h3>
	<p><em>The Library is STF's way of colating information and putting it into one easy to find place for new members and old hands alike. Here you will find information ranging from how the elections are run to the profiles of races created by our very own members. It is continuously developing and being added to, so don't forget to return periodically to see what is new.</em></p>
	<ul>
		<li><a href="http://www.star-fleet.com/library/">Library Main Page</a> - This is just what it sounds like- a library of all STF books!</li>
		<li><a href="http://www.star-fleet.com/library/bookshelf/rm/">Reference Manual</a> - This manual is a list of all role playing aspects that are unique to STF, that aren't technical in nature.  It lists unique species, planets, and societies, as well as some Trek science information.</li>
	</ul>

	<h3>STF Engineering Engeneering</h3>
	<p><em>STF has a great engineering tradition of creating our own custom technology and even ships. All of the designs and specifications used in our roleplay areas are original creations by our members - a fact we are proud of. Every one is encouraged to take part in reviewing, designing or even just reading through the specifications.</em></p>
	<ul>
		<li><a href="http://www.star-fleet.com/library/bookshelf/tm/index.html">Technical Manual</a> - This manual serves as the definitive list of all ships and technologies approved by the STF Engineering Department. Everything in this manual is unique to STF, and submissions are open to anyone!</li>
		<li><a href="http://www.star-fleet.com/webb/command/ed">Engineering Department Ship</a> - This is the main area for discussion engineering related. Here all our proposals for new ship classes are reviewed by the membership before they are put into the Technical Manual and actually used in our roleplay areas.</li>
		<li><a href="http://star-fleet.com/library/bookshelf/textbook/textbook-engineering.html">STF Engineering Exam</a> - This designed for anyone who wants to further their knowledge of engineering in the Star Trek universe. It isn't limited to engineering officers either!</li>
	</ul>

	<h3>Office of the President</h3>
	<p><em>STF has a President who is elected by the membership every 8 months. The Office of the President website houses a whole collection historical documentation in the form of edicts and reports.</em></p>
	<ul>
		<li><a href="http://www.star-fleet.com/prez/pastprez.html">Past Presidential Edicts</a> - This is a database, sorted by time, of all the STF Edicts.  Just click on a president's name to see their edicts. Edicts are the rules of our club, so every rule that exists in written form is found here.</li>
		<li><a href="http://www.star-fleet.com/prez/reports/">Report Archive</a> - Reports are submitted by every department and every ship (the Fleet reports) at the end of each month. These are useful for a number of reasons, including when deciding on whether to join a ship or not. The report archive contains all the reports submitted over the past several years.</li>
	</ul>

	<h3>STF IRC Chat</h3>
	<p><em>The IRC room is used in an OOC fashion in STF and is a place for all members to have fun and get to know each other away from the roleplaying on the ships. Everyone and anyone is welcome in the IRC room, even if your not a member (yet! :P).</em></p>
	<ul>
		<li><a href="http://www.star-fleet.com/id/irc/javachat">IRC JavaChat</a> - You don't need to download any software to participate!  This is a chat room that anyone is welcome in.  There will almost always be someone in there that can help you with any questions or problems you have!  Stop by and say hi sometime.</li>
		<li><a href="http://www.star-fleet.com/id/irc">IRC Rules</a> - These are the rules, make sure to read them before entering!</li>
	</ul>
	
	<h2>Other stuff</h2>
	
	<h3>Second Character</h3>
	<p><em>If you enjoy STF, you might decide you wish to take on a second character on a different ship. We allow and encourage this, unless you have been assigned to the academy. As a member of the Academy, you have to wait until you have graduated to take on additional characters. <strong>Please note that any additional characters you take on must be added to your current login ID. Please do not fill out another membership form when you are requesting an additional character.</strong> Instead, you can email the captain of the ship you wish to join. Their email address will be on the ship's main page.</em></p>
	<ul>
		<li><a href="http://www.star-fleet.com/pd/ship-profiles.php">Ship Profiles</a> - These are a profile for each of the mainstream ships in STF which have information like the vacancies on a ship, who the CO is and their email, as well as a little description. Using the ship profiles is your best bet at finding yourself a home for your second chracter. If you are looking for a specific position it can be sorted by position too!</li>
		<li><a href="http://www.star-fleet.com/webb/command/pd">Personnel Department Ship</a> - Here you can see any adverts posted for open positions. Check back regularlly as COs post new vacancies here often.</li>
		<li><a href="mailto:pdept@star-fleet.com">Email the Personnel Department</a> - Failing all of the above you can email us and we will do the leg work for you! Just give us your top three prefences for a position, a chracter name and a species and we will do the rest! However we can only place you as a Ensign as promoting is upto the individual ship COs.</li>
	</ul>
	
	<h3>Project Module</h3>
	<p><em>Once you are logged in you may notice that there is a link called 'Project' in your primary links area at the top. This where we can track task to do with the different departmens as well as report any bugs in the system or make requests for new features.If you have issues with a part of the site that falls under a specific department, make sure you post it under the departments project.</em></p>
	<ul>
		<li><a href="http://www.star-fleet.com/webb/project/">Projects Page</a> - This where you'll find a link to all th projects and their related issues.</li>
		<li><a href="http://www.star-fleet.com/webb/node/add/project-issue/webbspace">Submit WeBBspace Issue</a> - Here you can submit bug reports and feature requests for our system, WeBBspace.</li>
		<li><a href="http://www.star-fleet.com/webb/node/add/project-issue/idept">Submit Issue to the Internet Department</a> - The Internet Department deals with generic issues to do with the rest of the site. This includes updating email forwards as well as the President's edict and report archives.</li>
	</ul>
	
	<div class="sectionbar"><hr/></div>
	
	<h1>Afterword</h1>
	
	<p>We hope that all of the above has helped you and makes settling in here at STF just that little bit easier. If you still have question or inqueries then feel free to <a href="mailto:pdept@star-fleet.com">contact us!</a></p>
	
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
