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
<title>Personnel Department: Mentors</title>

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
	<h2>Mentors</h2>
<!--
If you choose to have a quote on your page please add it here. If you do
not want a quote please deletethe line below.
-->	
	<p class="epigraph">"Be the change that you want to see in the world." -- Ghandi</p>

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
	
		<h1>What is the Mentors Program?</h1>
		
		<p>The goal of the Mentors Program is to provide new members with the help and support they might need as they're thrown into the world of Star Fleet. We believe that this support comes best from personal attention in the form of a Mentor. The Mentor's job is to welcome the new member and act as a personal contact (and maybe even friend) to answer questions, solve problems, and help them develop into an excellent role player.</p>

		<p>Whether you're a new member wondering what a Mentor is, or a veteran looking to help out, these pages will have answers for you! Take a look, and if you have any questions afterwards, feel free to email the <a href="mailto:mentors@star-fleet.com">Mentor Coordinator</a> and ask!</p>		
		
		<div class="sectionbar"><hr/></div>
	
	</div>
	
	<div class="section">
	
		<h1>Requesting a Mentor</h1>
		
		<p>So you've come to STF, you've logged in, and suddenly you're dropped off a cliff into an ocean of "What The Hell?". Well we've all been there, even those of us who get to wear big hats had a WTF moment when we first logged into the WeBB, and it's certainly nothing to be ashamed of.</p>
		
		<p>If you've looked at the <a href="http://www.star-fleet.com/library/bookshelf/handbook/">Player's Handbook</a> and still feel like a tribble at a Klingon picnic then there's one more place you can look for help... right here.</p>
		
		<p>Mentors are sort of like a personal Encyclopaedia. They'll answer any questions you might have, they'll explain things tirelessly until you understand what you're doing, and best of all they'll do it in any number of mediums. Whether it be Instant Messengers, Email or Chat Room they'll be at your disposal and will always act in a friendly and courteous manner.</p>
		
		<p>If this looks like the sort of thing you think you need, then feel free to request a mentor from the Personnel Department at <a href="mailto:pdept@star-fleet.com">pdept@star-fleet.com</a> giving your name and your ship name. You'll be assigned a mentor within 24 hours to get you moving along and having fun as soon as possible!</p>
	
		<div class="sectionbar"><hr /></div>
		
	</div>

	<div class="section">
		
		<h1>Becoming a Mentor</h1>

		<p>Being a mentor for STF is one of the most rewarding and fulfilling things you can do in your time with us. You get the unique privilege of guiding new members in their quests to understand the unique and unfathomable nature of the WeBB</p>

		<p>This position is one of great responsibility and isn't for everyone. You have to have a special spark to become a mentor, the ability to explain things in an easy and understandable manner, to offer advice and guidance in a witty and friendly way, and you've got to be able to put in the time and effort that is required by a new member.</p>

		<p>If you think you've got the talent, the skill, the friendly nature and the desire to do something to improve our great club then drop a line to the Personnel Department at pdept@star-fleet.com</p>

		<div class="sectionbar"><hr /></div>
	
	</div>
	
	<div class="section">
	
		<h1>What to Include in your Welcome Email</h1>
		
		<ul>
			<li>Introduce yourself, tell them who you are, what position you hold on the ship</li>
			<li>Reiterate their posting assignment and department.</li>
			<li>Tell them you've been assigned to them as a mentor.</li>
			<li>Welcome them to STF.</li>
			<li>Briefly Explain what a mentor is and why you're here for them.</li>
			<li>Be sure to reiterate that if they have any questions or need any guidance at all they should feel free to contact you.</li>
			<li>Include all Messenger and Chat Room Alias' that you may use. Remember that not everyone uses AIM, so try and branch out your messengers, it's better than email.</li>
			<li>Give them a few helpful links. You should definitely include the players handbook link, and like I've done, include some of the online resources that you've found helpful.</li>
			<li>Always use upbeat and friendly wording.</li>
			<li>Be as informative as possible without overwhelming them.  Remember, brevity is the soul of wit!</li>
		</ul>
		
		<div class="sectionbar"><hr /></div>
	
	</div>
	
	<div class="section">
		<h1>What not to Include in a Welcome Email</h1>

		<ul>
			<li>Never use negative wording. For example, instead of saying 'you shouldn't use present tense' tell them 'we use a past tense posting style, like most novels'. Instead of telling them they shouldn't flame or post in anger tell them they should always treat others as they should wish to be treated.</li>
			<li>Never complain to a mentoree.</li>
			<li>Never lose your temper with a mentoree. If you have problems with them then you should contact the Personnel Department.</li>
			<li>Never insult or disparage a mentoree.</li>
			<li>If you need to critique a mentoree's posting style then always remember to point out what they've done well first, not what they've done wrong. If you need to say something negative then offset it with one of your own experiences of the same situation, and be sure to tell them that everyone goes through the same thing when they are new, that it's nothing to be ashamed of.</li>
			<li>In your emails try not to overwhelm them with information. If they're confronted with a massive email they won't read it all, and they won't take it in. If they ask a question that requires a large answer then offer to answer it over a messenger or warn them that the response will be long at the top of your mail.</li>
			<li>Don't get technical with any mentoree even if you think they'll understand what you're saying. Use simple and straightforward language. Remember that not all members will be of the same ability level as you.</li>
		</ul>
		
		<div class="sectionbar"><hr /></div>

	</div>
	
	<div class="section">
	
		<h1>Welcome Email Template</h1>

		<p>Hello there (Insert Name Here),</p>

		<p>First of all I'd like to take this opportunity to welcome you to star-fleet.com. As you'll have noticed from your welcome mail from the Personnel Department you've been assigned to the (Insert Ship Name Here) as Ensign/Cadet (Delete As Appropriate) (Enter Character Name Here).</p>

		<p>I play (Insert Character Name Here) on the (Insert Ship Name Here) and am the (Insert Position Here) aboard. I've been assigned to you as your mentor</p>

		<p>The purpose of a mentor is to help answer any questions you may have about star-fleet.com, or STF as we call it, and to give you any tips or guidance you might need about posting aboard, navigating through the WeBB, which is our posting system and any other queries you may have.</p>

		<p>To reiterate what was said in your welcome mail I'll post a few links to pages you'll find useful before you start using the WeBB.</p>

		<p>First there is the player's handbook, which will answer most of your initial questions, and give you a rundown on the major acronyms and abbreviations you'll come across</p>

		<p>http://www.star-fleet.com/library/bookshelf/handbook/</p>

		<p>http://www.star-fleet.com/pd/new-members.php  is the star-fleet.com new members page, which gives you a number of useful links that you may want to take a look at when you have some spare time.</p>

		<p>http://www.startrek.com is the official site for Star Trek, which has an extensive library that details more specific technologies and races as well as gives you a synopsis of each episode of Star Trek.</p>

		<p>http://memory-alpha.org/en/wiki/Main_Page is quite possibly the single most extensive resource for all things trek.  There are few things in it that aren't covered, though it takes a few minutes to acquaint yourself with it if you aren't used to the Wiki interface.</p>

		<p>Again, if there are any questions or queries you have then please feel free to contact me whenever you like and I'll get back to you as soon as I can. Welcome to the club, and I know that you'll have a brilliant time with us.</p>

		<p>(Sign Your Name Here! :P. Please include any messenger ID's or Chat Aliases you use)</p>
		
		<div class="sectionbar"><hr /></div>

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
