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
<title>Personnel Department</title>

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
<!--
If you choose to have a quote on your page please add it here. If you do
not want a quote please deletethe line below.
-->	
	<p class="epigraph">"People, even more than things, have to be restored, renewed, revived, reclaimed, and redeemed; never throw out anyone." -- Audrey Hepburn</p>

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
		<h1>What is STF?</h1>

		<p>STF, a distorted acronym for Star-Fleet.com, is a club for people who want to role play within a universe similar to, but not exactly like, the universe from Star Trek. However we are more than just a Role Playing game. Within this club, you could try designing a ship for our universe, a new piece of technology, or even an entire new race of aliens! You can take courses in our Academy, pass exams and gain promotions. If you like to write and have a creative imagination, we have a training program for Gamemasters. There is also a social side to the club, which encompasses everything from political discussions to holy soda and jello wars! We even have our own chat room in IRC, and many members swap IM screen names. If you're not into chatting, you can contact people through e-mail, or even an Out of Character (OOC) area on the bulletin boards. Because you can't always be a 24th century alien, sometimes it's just nice to be yourself.</p>
		<p>Every eight months we vote for a new President, who is elected from the membership. The Election Ship pulls into the Command Fleet and campaigning begins. Debates, testimonials and scandal, we have it all! Prima Donnas throw their tantrums, would be politicians give their speeches and at the end of the Election Month we all vote. Whether you listen to them waffle on or not is your choice but voting is simply a matter of pressing a button once before posting, during the week of elections.</p>
		
		<p>Oh and don't forget, STF is not a live-chat sim! Please be patient while waiting for replies to your posts to appear. We are a club of people from all parts of the world, who live in different timezones, so when you're awake and posting, the person you are interacting with could be fast asleep in bed. Likewise, some of our members' main language is not English, so be aware that the person you are talking to may be using what to them is a foreign language! It is this diversity and willingness to accept people from all cultures that makes STF unique, interesting, and fun!</p>
		
		<div class="sectionbar"><hr/></div>
	</div>
	
	<div class="section">
		<h1>Choosing a Ship</h1>

		<p>We have six fleets and an Academy fleet to choose from. Fleet Two (The Great White Fleet) as well as the USS Apollo in the Academy is where you will find slower paced roleplaying, which means that the speed of the RPG there is slower than average. If you want to post daily or even faster, take a look at the Discovery in the Academy or one of few mainstream ships marked as fast. Each ship has it's own unique character, so look around and find a ship that suits you! If you are not sure what ship suits you, then the staff of the Personnel Department is here to help.</p>
		
		<p>You don't have to be logged in to look at all the ships in STF or even read their notes, so feel free to browse!</p>
		
		<div class="sectionbar"><hr/></div>

	</div>
	
	<div class="section">
		<h1>The Personnel Department</h1>

		<p>The Personnel Department is responsible for initial "IC" (in-character) assignments, and "OOC" (out of character) records. It is charged with the sometimes daunting task of allocating new accounts to new members, making initial ship assignments, ensuring compliance with the <a href="http://www.star-fleet.com/webb/legal">STF Terms of Service</a>, and other tasks relating to members and their accounts. As such, it is probably the only department within STF that any member is guaranteed to have contact with at some time, even if that contact is just sending out the initial login details. If you're having a problem on a ship, come and talk to us, because we might be able to help with advice and support. STF is just like life in the sense that you have to find your place in it, but once you do we guarantee you'll quickly get hooked, and before you know it you'll be standing in an election for President.</p>
		
		<p>Browse around the Personnel Department website with the links above, or the other department websites with the links below. Enjoy, and if you have any questions, please feel free to <a href="mailto:pdept@star-fleet.com">contact us!</a></p>
		
		<div class="sectionbar"><hr/></div>
	</div>
	
	<div class="section">
		<p style="text-align: center;"><a href="login.php">Department Administration Page</a> (Authorized Users Only)</p>
		
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
