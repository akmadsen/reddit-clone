# CPNT 262 - Journal File


## A Note to Cameron Falkenhagen 

Hi Cameron. This log is going to be pretty verbose, but I'm writing it for me primarily. This is going to be a good 
tool for accountability to make sure that I'm trying (and failing!) at things every night. 

Thank you for this tool. Honest. 


## General Format 

When writing these journal entries, we need to answer Cameron's questions three. 

1) What challenges you had, and how you overcame them

2) If you weren't challenged, what you did to push yourself

3) What did you do outside of class


## Day 01 - October 23, 2018 

1) What challenges / How did you overcome? 

- One challenge I am having is I do not know how to get started with phpUnit, nor do I understand virtual hosts. 

2) How did you push yourself? 

- Completed all exercises in class that I could manage, just short of PHP Objects 
- Looked into setting up a development environment on Linux
- Set up LAMP stack as components, but still do not understand Virtual Hosts... Checked Online and Text for Documentation
    - Pursued online resource (Udemy) for setting up PHP development environment with Virtual Hosts.... 
    - Called it quits around 10:30/11:00pm. 

3) What did you do outside of class?  

- See above 
    - Udemy, Textbook Work, Surfing internet for docs on setting up a Virtual Host... To no avail. 


## Day 02 - October 24, 2018 

1) What Challenges / Overcome 

- Recalling algorithm design / helping others with the basics of algorithm design (pseudocode) 
- Setting up Laravel/PHP Unit didn't go well at home last night... composer ran into permission issues 
    - Tested at school computer, and worked fine, though. 
- Focussed on setting up Virtual Hosts with some success at home, though - but now we run into the problem that 
    modern browsers depend on having SSH certificates (Chrome will block non-localhost VH's) 
    - So I know it's there, and I can access it with Elinks, but not with any graphical browsers 
    - Efforts and tinkering ended up breaking my LAMP stack... apt-get purges were also unsuccessful... apache2 remained 
        present even though I theoretically apt-get purge'd it off the face of the earth?!?!?! Doesn't parse PHP tho, so 
        obviously something happened. 
    - Ran a vicious apt-get purge on all components of AMP I installed, and installed XAMPP to get my projects limping for now 
        - Seems to work, but feel bad for not understanding how to get the AMP stack functional on its own 

2) How did you Push 

- Completed the FIZZBUZZ challenge in class. Very fun. 
- Installed Laravel / phpUnit on Windows machine at school (home machine to be tomorrow) 
- See (1) for unsuccessful attempts at getting Virtual Hosts running at home 
    - Will consult with Cameron tomorrow about SSH Certificates, then proceed to try tomorrow
- Tapped out at 10:37pm 

3) What did you do outside of class 

- See (1) & (2), but a lot of unsuccessful attempts at getting Virtual Hosts to work on my Linux Box at home 
    - Messing around thoroughly with the guts of the modern AMP stack (and ultimately breaking it... twice)
    - Acknowledging that I'm not much of a System Administrator.... Looking into ways to increase that knowledge base
        - Note: Even failed experimentation is upping that knowledge base, Alex!!! 


## Day 03 - October 25, 2018 

1) Challenges & Overcoming Them 

- Learned new syntax, and how PHP handles Object Oriented Design 
- Surfed docs, ran experiments in class (how inheritance / interfaces handled in PHP, trait classes) 

2) Pushing Yourself 

- Learning the theoretical background of how PHP works, and trying out new things in class 
- Surfing the PHP / Laravel docs & applying knowledge in class

3) Outside Class 

N/A for today - npm was broken on machine at home, need to debug why - spent most of evening on addressing 
    household challenges

## Day 04 - October 26, 2018 

N/A - Forgot to Record during the day, Family Obligations in Evening

## Weekend (a) - October 27. 2018

1) Obstacles & Overcoming Them

- Needed to fix and set up new OS at home (chose to install Fedora 28, hoping it would be easier than Ubuntu) 
    - Success, turns out composer is in the Fedora repos
    - Set up LAMP server (XAMPP plays poorly with fedora), set up composer, laravel projects 
	- Performance issues on Fedora 28 at home, fixed by switching desktop environments 
- Chose to replicate Reddit for midterm assignment 

2) Pushing Yourself 

- Took the time to refresh myself on SASS and try to understand how Reddit composed their webpages 
- Hours spent trying to make the site look awesome 

3) Outside Class 

- Hours and effort put into making the midterm assignment look awesome 

## Weekend (b) - October 28, 2018

1) Obstacles & Overcoming Them 

- Learning the ropes of the i3 desktop environment (really window manager) for faster development time 
    - (Mostly, though, so I can use my 10 year old computer... I really can't afford a new one) 

2) Pushing Yourself 

- Besides housekeeping, today was mostly dedicated to putting in the hours and trying to get my reddit 
    imitation site looking just-so, taking pixel measurements, or adapting the site's style sheets 
- Looking into CSS attributes I didn't fully understand, like the effects of line-height 

3) Outside Class 

- Most of this was, again, an hour dump. Learning i3 was a good challenge on it's own  

## Day 5 - October 29, 2018 

1) Obstacles & Overcoming Them

- Learned how layouts / partials worked in the Laravel Environment

2) Pushing Yourself 

- Got abstract factories up and running for the Subreddit and Post conceptual classes 
	- (chose not to go further, as database knowledge will require a rewrite on that front) 
- Using back-end software for rendering of views seems like a bad code smell
	- browsing google, it seems like I'm not the only one who thinks this way
	- other developers seem to think that Vue / React for the front-end, and laravel for 
	    the back-end seems to be the consensus 

3) Outside Class 

- Got project to a comfortable location... more to do, but I feel it would be best to pursue 
    projects of personal interest. 
	- Spent time on Vim editor course (increasing text editing speed) 
	- Spent time on Node.js / React.js course (learning frontend to pair with laravel) 
- Worked with the first chapters of Laravel book

## Day 9 - November 2, 2018

1) Obstalces & Overcoming Them 

- Debugged database errors for myself and peers during class 
- Learned how to use Factories and Seeders in the Laravel fashion 
	- This also helped debug "What's taking so long?" for my seeders 

2) Pushing Yourself 

- Reading documentation on Authentication, and the like - learned about Gates and Policies 
- Learned more about data _sanitization_, which is not covered in class
	- Looks like 3rd party libraries are recommended 

3) Outside of Class

- Today was devoted to interviews, and interview-related homework 

## Weekend 3 - November 3, 2018 

- This weekend day was devoted to finishing off the interview-related homework 
- Afterwards, I got Twitter up and running on my home machine, and began the second Assignment & related homework
- Finished around midnight... need to start listening to podcasts and the like 
	- Cameron, if you're reading this... What podcasts do you listen to? You seem like a very smart guy, and someone to emulate. Not just saying that. 

## Weekend 4 - November 4, 2018

- Worked on Assignment 4 primarily today 
- Listened to Syntax podcast - 11 Habits of Highly Effective Developers 
	- Expected coding techniques, but actually largely focussed on social aspects
	- Reflecting on debugging techniques, as well as how I may be impacting my peers 
		- Will further make sure I don't come off as condescending to friends and peers when attempting to help 

## Final Day - November 6, 2018 

1) Obstacles & Overcoming 

Deployment was difficult, but with Cameron's help (and guide), it became a smooth process. 

Most of my challenges were putting in the hours to get the assignment overall done. 

2) Pushing yourself 

I tried (and failed) to figure out the AJAX route for the bonus mark on my own. 

With the functionality of the project taken care of (by my checklist), a lot of my time was spent working with our peers
and trying to help them get off the ground. 

3) Outside Class 

Design is a weakspot for me. I'm pretty much a one-trick pony for the top-heaver nav-bar. 

I reviewed an article on WebFX(https://www.webfx.com/blog/web-design/choose-navigation-setup/) regarding good nav-bar design
and when / how to use each. Now I need to practice. 

One thing that really struck home was Cameron's speech on finding something to be passionate about. I need to work on this, a lot. 

Going to a game design meetup tonight to discuss modern adventure gaming, though. Maybe something there? 

## Final Notes to Cameron 

Thank you for this class with PHP, and living life as a programmer. Hopefully we can chat over coffee sometime. 

Take care. 
