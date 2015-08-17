<?php require HEADER; ?>

<style>

#aboutbody
{
	font-family: 'Roboto', sans-serif;
	line-height: normal;
	color: rgba(43,43,43,1.00);
	font-size: 16px;
	padding-bottom: 100px;
}

.abouth1
{
	font-family: 'Roboto';
	font-weight: 700;
	color: #636363;
	text-transform: uppercase;
	font-size: 30px;
	text-align: center;
	border-bottom: solid 1px #636363;
	padding-top: 50px;
	clear: both;
}

/*NmaesTeam*/
.abouth2
{
	font-family:'Roboto';
	font-weight:700;
	color:#636363;
	text-transform:uppercase;
	font-size:20px;
}

/*Role-Designation-Red*/
.abouth3
{
	font-family:'Roboto';
	font-weight:700;
	color:#f00423;
	text-transform:uppercase;
	font-size:14px;
	padding-bottom:5px;
}

/*Role-Gray*/
.abouth4
{	
	font-family:'Roboto';
	font-weight:700;
	color:#636363;
	text-transform:uppercase;
	font-size:14px;
	padding-bottom:5px;
}

/*Tagline School*/
.abouth5
{
	font-family:'Roboto';
	font-weight:300italic;
	color:#636363;
	font-size:14px;
	clear:both;
	float: right;
}

.aboutp
{
	font-family: 'Roboto';
	font-weight: 300;
	color: #636363;
	font-size: 14px;
	line-height: 30px;
	text-align: justify;
}

  
.clearfix:before, .clearfix:after
{
	content: " ";
	display: table;
}

.clearfix:after
{
	clear: both;
}

#aboutnav
{
	display: block;
}

aboutnav ul li
			{
				float: left;
				margin-left: 40px;
				margin-top: 30px;
			}
			
				aboutnav ul li a
				{
					color: #636363;
					text-decoration: none;
					text-transform: uppercase;
					font-size: 14px;
				}
				
				aboutnav ul li a:hover,
				aboutnav ul li a.current
				{
					text-decoration: underline;
					color: #f00423;	
				}

.abouta
{
	text-decoration: none;
	color: #979797;	
}

	.abouta:hover,
	.abouta.current
	{	
		color:#f00423;
	}

#abouthead_bar
		{
	font-family: 'Roboto';
	font-weight: 700;
	position : fixed;
	font-size:20px;
	top : 0;
	width: 100%;
	z-index:1;
		}

	#aboutwrapper
	{
		width: 960px;
		margin: 0px auto;
		overflow:visible;
	}
	
	#abouthumber
	{
		margin-top: 100px;
		padding:20px;
		background-color:#FFFFFF;
	}
	
	#abouthumber h1
	{
		padding-top:0 !important;
	}
	
	.humbercontent
	{
		margin-top:20px;
		padding:30px;
		background-color:#FFFFFF;
	}
	
	.humbercontent h3
	{
		text-align:right;
	}
	
	.humbercontent h4
	{
		text-align:right;
	}
	
	#abouthumber p img
	{
		padding-bottom: 10px;
	}
	
	
.aboutprofile
{
	width:300px;
	float:left;
}

	.aboutprofile img
	{
		margin-bottom:20px;
		margin-top:20px;
		filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 3.5+ */
  		filter: gray; /* IE6-9 */
  		-webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */
	}
	
		.aboutprofile img:hover
		{
			filter: none;
			-webkit-filter: grayscale(0%);
  			-moz-filter: grayscale(0%);
  			-ms-filter: grayscale(0%);
  			-o-filter: grayscale(0%);
  			filter: grayscale(0%);
  			filter: gray; /* IE 6-9 */;
		}
	
	.aboutprofile a
	{
		margin-right:10px;
	}

.aboutteamblank
{
	margin-left:30px;
	margin-right:30px;
}
				
.aboutdeveloper
{
	margin-top:20px;
	float:left;
	width:48%;
	height:80px;
	background:#fff;
	text-align:center;
	
}

.aboutblank
{
	margin-top:20px;
	float:left;
	width:36px;;
	height:80px;
}

	.aboutdeveloper img
	{
		float:left;
		margin-top:20px;
		margin-left:20px;
	}
	
	.aboutdeveloper h2
	{
		margin-top: 30px;
	}
	
.forhumber
{
	margin-top:20px;
	float:left;
	width:48%;
	height:50px;
	background:#fff;
	text-align:center;
}

.forhumber h2
	{
		margin-top: 13px;
	}
	
	.humberblank
{
	margin-top:10px;
	float:left;
	width:35px;;
	height:50px;
}

.aboutgen
{
	margin-top:20px;
	float:left;
	width:48%;
	height:30px;
	background:#fff;
	text-align:center !important;
}

	.aboutgenblank
	{
		margin-top:10px;
		float:left;
		width:35px;
		height:30px;
	}
	
	.aboutgen h4
	{
		margin-top:7px;
	}
	

.aboutatthead
{
	margin-top:33px;
	float:left;
	width:100%;
	height:30px;
	background:#fff;
	text-align:center !important;	
}

.aboutatthead h2
{
	margin-top:3px;
}
	
</style>

<div id="aboutbody" class="clearfix">
    
    <div id="aboutwrapper">
        <div id="abouthumber">
            <p style="text-align:center;"><img src="<?php echo IMAGE_PATH; ?>HumberLogo.png" alt=""></p>
            <h1 class="abouth1">Transmedia Fellowship</h1>
        </div>
        
        <div class="humbercontent">
        	<p class="aboutp">Humber’s Transmedia Fellowship The Transmedia Fellowship offers Humber students the opportunity to create multi-platform narratives and research the way in which this new form of storytelling is engaging its audience. The Fellowship reflects the commitment of the School of Media Studies and Information Technology to provide students with innovative learning opportunities to prepare them for the challenges of storytelling in a rapidly changing digital landscape. The Fellowship brought together six students from across academic programs and presented them with the challenge of creating a multi-platform story over a 15 week period. The students were given access to the school’s equipment, labs and facilities and were supported by two faculty advisors. The project that resulted was conceived and executed solely by the students who demonstrated a willingness to push the boundaries of traditional narrative and the capacity to quickly form a cohesive and effective working group. We are very proud of their efforts.</p>
            <h3 class="abouth3">Basil Guinane</h3>
            <h4 class="abouth4">Associate Dean</h4>
            <h5 class="abouth5">School of Media Studies and Information Technology</h5>
        </div>
        
       
        
<!-- Need HELP with this Div -->

        <div id="aboutteam">
        	<h1 class="abouth1">Humber's Transmedia 2015 Team</h1>
            
            <div class="aboutprofile">
            	<img src="<?php echo IMAGE_PATH; ?>Brian1.png" alt="">
                <h2 class="abouth2">Brian Lee</h2>
                <h3 class="abouth3">Creator</h3>
                <p class="aboutp">Following his passion for storytelling, Brian studied in the Film Studies Program at Concordia University and York University before enrolling in the Bachelor of Journalism Program at Humber College. Brian gives media projects a forward momentum by utilizing his experience in a variety of production processes. His production knowledge ranges from film, news, podcasts, written articles, and graphic design. Brian’s awareness of current issues and his understanding of the power of narratives give a purpose and direction to every project he is part of. He is excited to see what kind of stories he will be telling in the form of transmedia.</p>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>web.png" alt=""></a>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>FB2.png" alt=""></a>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>LI.png" alt=""></a>
                
            </div>
            
            <div class="aboutprofile aboutteamblank">
            	<img src="<?php echo IMAGE_PATH; ?>Hiren2.png" alt="">
                <h2 class="abouth2">Hiren Sindhvad</h2>
                <h3 class="abouth3">Creator</h3>
                <p class="aboutp">Hiren has a Commerce Degree from Mumbai University in India. However, it was his love of design, and the fact that Hiren is a self-described “technology freak” that drove him to pursue a diploma in 3D Animation and Graphics from Maya Academy of Advanced Cinematics in India, and has worked as a graphic designer for two years. Hiren then headed to Humber College to study Multimedia Design and Development.  The idea of transmedia excites Hiren, because it provides an opportunity to use his creative thinking and vast technical skills on a single platform.</p>
                <a href="http://hirensindhvad.com/" target="_blank"><img src="<?php echo IMAGE_PATH; ?>web.png" alt=""></a>
                <a href="https://www.facebook.com/sindhvadhiren" target="_blank"><img src="<?php echo IMAGE_PATH; ?>FB.png" alt=""></a>
                <a href="https://www.linkedin.com/pub/hiren-sindhvad/51/281/423" target="_blank"><img src="<?php echo IMAGE_PATH; ?>LI.png" alt=""></a>
                <a href="https://www.behance.net/hirensindhvad" target="_blank"><img src="<?php echo IMAGE_PATH; ?>b.png" alt=""></a>
            </div>
            
            
            
            <div class="aboutprofile">
            	<img src="<?php echo IMAGE_PATH; ?>Miles4.png" alt="">
                <h2 class="abouth2">Miles Mungo</h2>
                <h3 class="abouth3">Creator</h3>
                <p class="aboutp">A renaissance man, Miles uses his knowledge of a number of media to enhance every project he's involved in. With an advanced diploma in Animation Arts from Seneca College and a degree in Film and Media Production from Humber College (graduating 2016), Miles has an understanding of communication and storytelling on multiple platforms. He has worked as a web designer, web developer, writer, animator, graphic designer, video game artist, photographer and illustrator. Miles is also a member of Global Leadership Interlink: a network of professionals and university students committed to transformation in society through the development of values-based leaders. He has directed seven short films and looks forward to what his future holds in the realm of transmedia.</p>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>web.png" alt=""></a>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>FB.png" alt=""></a>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>LI.png" alt=""></a>
            </div>
            
            <div class="aboutprofile">
            	<img src="<?php echo IMAGE_PATH; ?>Laura3.png" alt="">
                <h2 class="abouth2">Laura Mulrine</h2>
                <h3 class="abouth3">Creator</h3>
                <p class="aboutp">Laura earned an honours Bachelor of Arts in History and English from St. Francis Xavier University before heading to the University of Glasgow for her Bachelor of Education in Secondary Teaching. Her experience as a copywriter led her to take Media Communications at Humber College. She is excited about this project because it has given Laura an opportunity to write and to tell a great story.</p>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>web.png" alt=""></a>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>FB.png" alt=""></a>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>LI.png" alt=""></a>
            </div>
            
            <div class="aboutprofile aboutteamblank">
            	<img src="<?php echo IMAGE_PATH; ?>Rich5.png" alt="">
                <h2 class="abouth2">Rich Dowsett</h2>
                <h3 class="abouth3">Creator</h3>
                <p class="aboutp">Hailing from New Zealand, Rich has a Bachelor of Arts in Film Production from the University College of Creative Arts in the United Kingdom, and has just completed a Postgraduate Certificate in Radio Broadcasting at Humber College. He has a background in writing and performing comedy. Rich likes the idea of cross-platform storytelling and has enjoyed the challenge of putting together a transmedia project.</p>
                <a href="https://soundcloud.com/rychie-d" target="_blank"><img src="<?php echo IMAGE_PATH; ?>SC.png" alt=""></a>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>FB.png" alt=""></a>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>LI.png" alt=""></a>
            </div>
            
            <div class="aboutprofile">
            	<img src="<?php echo IMAGE_PATH; ?>Rachel6.png" alt="">
                <h2 class="abouth2">Rachel Shnier</h2>
                <h3 class="abouth3">Creator</h3>
                <p class="aboutp">Rachel studied at the University of Guelph for a Bachelor of Arts, before switching to Humber College for Media Communications. With a background in theatre production, Rachel has found a new stage to tell stories on through transmedia. Her passion for marketing and social media will help teach more people about transmedia, and how they can tell their own stories through transmedia.</p>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>web.png" alt=""></a>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>FB.png" alt=""></a>
                <a href="#"><img src="<?php echo IMAGE_PATH; ?>LI.png" alt=""></a>
            </div>
            
        </div>
        
<!-- Need HELP with this Div ENDS -->
        
        <div class="abouthumber">
        	<h1 class="abouth1">For Humber College</h1>
            <div class="forhumber"><h2 class="abouth2">Guillermo Acosta<a class="abouth3"> - Dean</a></h2></div>
            <div class="humberblank"></div>
            <div class="forhumber"><h2 class="abouth2">Basil Guinane<a class="abouth3"> - Associate Dean</a></h2></div>
            <div class="forhumber"><h2 class="abouth2">jeffrey berman<a class="abouth3"> - Project Manager</a></h2></div>
            <div class="humberblank"></div>
            <div class="forhumber"><h2 class="abouth2">Bernie Monette<a class="abouth3"> - Project Advisor</a></h2></div>
            <div class="forhumber"><h2 class="abouth2">Sean Doyle<a class="abouth3"> - Project Manager</a></h2></div>
        </div>
        
        <div id="webdeveloper">
        	<h1 class="abouth1">Web Developer</h1>
            <div class="aboutdeveloper"><img src="<?php echo IMAGE_PATH; ?>DevImg-30.png"><h2 class="abouth2">Corey Stanford<a class="abouth3"> - Lead</a></h2></div>
            <div class="aboutblank"></div>
            <div class="aboutdeveloper"><img src="<?php echo IMAGE_PATH; ?>DevImg-30.png"><h2 class="abouth2">Tavo Asenjo</h2></div>
            <div class="aboutdeveloper"><img src="<?php echo IMAGE_PATH; ?>DevImg-30.png"><h2 class="abouth2">Sean Doyle</h2></div>
            <div class="aboutblank"></div>
            <div class="aboutdeveloper"><img src="<?php echo IMAGE_PATH; ?>DevImg-30.png"><h2 class="abouth2">Hiren Sindhvad</h2></div>     
       </div>
       
       <div id="cast">
       	<h1 class="abouth1">Cast</h1>
       
        <div class="aboutgen"><h4 class="abouth4">Layna Taylor - Taylor Magee</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Health Minister - Pat Bianco</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Board Room Member - Helen Cashin</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Security Guard - Frank DeFrancesco</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Dr. Dowsett - Cheryl DeLuca</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Newscaster - Rich Dowsett</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Newscaster - Brian Lee</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Young Layna - Maria Moga</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Jeremiah - Miles D. Mungo</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Barry - Mladen Obradovic</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Newscaster - Chelsea Scherer</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Jeff - Matt Schichter</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Receptionist - Tabitha Tao</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Layna's Father - Armand Ursomarzo</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Voice - Rich Dowsett</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Voice - Dieter Friesen </h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Voice - Cody Gregory</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Voice - Andrew Mazzolin</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Voice - Matt Schichter</h4></div>
        <div class="aboutgenblank"></div>
       
       </div>
        
    
    
    <div id="aboutthanks">
    	<h1 class="abouth1">Special Thanks</h1>
        
        <div class="aboutgen"><h4 class="abouth4">Administrative Assistance - Camelia Caceres‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Graphic Design - Carlos Kiss</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Graphic Design - Gilda Samaniego‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Group Discussion Setup - Matthew Stevens</h4></div>
       
        <div class="aboutgen"><h4 class="abouth4">Group workshop (Zoom) and consultant - Susan Murray</h4></div>
        
    </div>
    
    <div id="aboutatt">
    	<h1 class="abouth1">Attribution</h1>
    	
        <div class="aboutatthead"><h2 class="abouth2">Public Domain</h2></div>
        
        <div class="aboutgen"><h4 class="abouth4">Annonymous  - <a class="abouta" href="https://commons.wikimedia.org/wiki/File:Lung_tissue_during_legionellosis.tif">Lung tissue during legionellosis</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Annonymous  - <a class="abouta" href="https://www.flickr.com/photos/circasassy/7184796864/in/photolist-bWTXN1-6E9dDk-hjHSSj-qVjo2Z-fn1ZyH-dHuDb3-vHjySz-vqQx5T-aML9QH-7WDa6m-dRNbwd-ttoMkQ-gRvCi3-pCYRsM-bGrfNp-666dHK-hmHW6u-e3fVeA-629ZFc-8mXw5p-bXvc6m-bk7tsD-e8xX8A-djYDVf-bC31xk-bThcXi-neKz25-vHjivT-uNEUUU-bAaCbg-vqH4ru-8Zb1ES-qsQ1zh-r8ku2R-dtTPrj-7rrhNi-o6zhX1-5xsdCY-ixj2HW-3Vgkkf-bF8vcM-duieSA-e5izhc-6aywQs-q2wo9p-k4aHAm-rKGRFH-e3abdk-pC6uhJ-7Ebxyp">Old Man - my title</a></h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Annonymous  - <a class="abouta" href="https://commons.wikimedia.org/wiki/File:Speaker_Icon.svg#file">Speaker Icon</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Buzanowski, Jennifer - <a class="abouta" href="https://commons.wikimedia.org/wiki/File:Old_man_in_Kyrgyzstan,_2010.jpg">Old man in Kyrgyzstan, 2010</a></h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Cannady, Darnell T. - <a class="abouta" href="https://commons.wikimedia.org/wiki/File:Spectators_watch_a_parade_as_part_of_the_Okinawa_City_International_Carnival_Nov._30,_2013,_outside_Kadena_Air_Base%27s_Gate_2_in_Okinawa,_Japan_131130-F-LI951-118.jpg">Parade of Okinawa City Carnival</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Duncan, Patricia D. - <a class="abouta" href="https://www.flickr.com/photos/usnationalarchives/4011608687/">Mrs. Betty Dorrell</a></h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Schulke, Flip - <a class="abouta" href="https://www.flickr.com/photos/usnationalarchives/4726907749/in/photolist-8cGCZt-kEYMeu-bDkvM1-kjQmAZ-nQFMfU-4juBoM-4juBXH-9uq9ZK-7x6Dde-5WY9rS-asNb2a-8cGJDD-m21B3e-9Pvo8k-7uX8mz-ffCC8y-7JxcsE-afpgCJ-afpgB5-edEtVu-edEsDd-5YLqgu-6Xgz8U-6XczGF-6XczxP-tMno9B-4Tokon-cM4VJ3-bmGuBj-8cGEDM-8qXK8w-oeXVYC-oesNp7-pVa2Hh-6XcyfD-ehTSJm-ejv3fH-bUBnjY-6XgzJs-6XcAaP-qKtLi4-bWy7ag-ouoHCh-ouVSUh-gtHcpJ-8EHshe-6XczjF-oumfPS-gtJ4Ah-6XgxQq/">Family in a Park at Sleepy Eye, Minnesota</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Swallowtail Garden Seeds - <a class="abouta" href="https://www.flickr.com/photos/swallowtailgardenseeds/16725377578/in/photolist-rtXW3W-aDQeMP-aDQf4D-65cpMv-p9K7vo-nkdrkp-q3AZX-7eEjYN-dtfGoT-5B1UQV-aCFXWr-8WKv9b-mdTXaP-a9uM7z-8SzxFw-4BeZ7w-c7ZsuU-946q1n-ouscDY-pUvkdv-mhxmZw-8t4nNN-afV7Xk-9dejQc-3YN9Jj-dcN3XP-781FXt-693kQy-79oMRf-dwHeKo-8pEsVG-dKuYvb-vkyqiK-bv87av-GAHqn-65Xua-4CZxqT-8TgJWL-hqyMFE-4obbNj-spRoxc-a8BJ17-77XnxE-nt99i2-wigRJo-brK2c4-8GF3Lx-iGF5Yi-4mG5Fc-68Ya6H">Mrs. Betty Dorrell</a></h4></div>
        
        <div class="aboutatthead"><h2 class="abouth2"><a class="abouta" href="https://creativecommons.org/licenses/by/2.0/legalcode">CREATIVE COMMONS ATTRIBUTION 2.0 GENERIC</a></h2></div>
        
        <div class="aboutgen"><h4 class="abouth4">Diarra, Marta - <a class="abouta" href="https://www.flickr.com/photos/119670994@N05/17151324707/in/photolist-s8B2hX-6K4aMZ-ps3zwy-3n3rFa-2GxWxR-brUEAi-fFSMMA-o7kMNU-tTaTGU-4qerzW-bAAKw4-fkhUmy-6iznTT-gKtS8u-9iQ1m6-bamJnD-cYjK8J-7hdMB-8bqiiE-8bqhL7-8bqh4o-4XbnA8-4QGf1S-dMh5oj-mYjoEc-nuFKZx-fki9ph-nsXfU9-nuFH3R-nsUKkK-nsXf8j-6k9fnY-fki5XJ-nsXgFQ-fk3YGZ-4QC2XP-dMFjZG-6A9rWy-6U3fxh-dukmqg-7rAtkj-66gaXz-66gaa4-66gawF-7hoRus-oFFJN5-6gzQgW-r1ytjT-fki93L-fk3ZF2">Birthday Boy (image border cropped)</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Harris, Duncan - <a class="abouta" href="https://www.flickr.com/photos/duncanh1/8506986371/">The City from the Shard</a></h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Hatfield, Amanda - <a class="abouta" href="https://www.flickr.com/photos/dust/3877154580/in/photolist-6UBqYL-2vH8DF-NerL1-2ixpjF-Nevut-6vn1cx-3DBYCy-4uzs2J-4uD4uh-LVPVv-vesKn-Xj4BF-7VkxeY-9UC9jh-Nerzj-333Sp1-53cbAb-eucgh-4ep5qg-33431f-gy7Wk5-5ysg11-7BjA9-dGvcgv-maTWK-amEWzN-8UCBi-bCn2jP-bCn1V8-bps4A5-bps6CL-bps5gE-bps4DY-bps6LC-bCn2fT-bCn1hr-bps5qy-bCn1yc-bps6nU-bps4d9-bps64L-bps49q-bps4Lq-bCn1MH-bCmZYB-bps4wA-bCn1Ga-bps5dj-bps4Ty-bps6b1">JellyNYC's Pool Party (cropped)</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Kansasphoto - <a class="abouta" href="https://www.flickr.com/photos/34022876@N06/3171795081/in/photolist-5Qhhb6-ci64LG-ci5WQu-j6rrnW-oEi16i-b4dGf8-9t8GtH-5FYozL-4ZPck8-e5topn-e5to7D-e8qqeK-bAUrQK-9RZoUU-9sUFpn-5fYu1W-rQKanU-9J3isx-4F4LVH-9sWWdR-D9Rrz-7JVVBB-nCif5x-4fPCdj-cBdwHu-5ZQNg8-ci5ZAh-fKbgWu-fSAC9B-5h62Z4-ap9A12-e5XdFE-qgVWjq-77boFU-">South Shore (modified)</a></h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Melaugh, Ryan - <a class="abouta" href="https://www.flickr.com/photos/120632374@N07/13974181800/in/photolist-nhRkoY-gTSYuR-gTRXRS-5JLemg-gPDja5-jsZp4A-9VTTtu-jSQRwD-8djX17-8rTDgK-gTRXiL-gPUoTx-gTSmKL-aizeTt-j9HbdW-gPST7H-HdEYX-gTScLJ-4NWvnA-gTTyUH-6cNAoy-FE7JK-gPUoDK-7ubs6z-gTSdGn-gPUp1r-gPSTnT-7PzLEj-39AJbz-dXVPjK-ankD3Q-TnAy-dBbfdz-6h7GZp-6jPTiy-7ir23q-gPUpfK-6HDhCv-gPUojX-gPST7x-nLiKsS-7Ui6Mb-7Gu9LE-cwbsxS-5Nt3Xa-7z4XfA-s1EUoh-nN4cNR-5Zavff-5u4XTe">Depression (image cropped)</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Parekh, Neetal - <a class="abouta" href="https://www.flickr.com/photos/44313045@N08/6290270129/in/photolist-azRhag-5B5vP3-gkMLXV-6TDV5Y-bVVxgE-7U2J5n-7vgRR3-b9edw2-6FMmSR-8DuajD-7diHKF-4eiUdt-c7E7if-eE7eoK-8XtAU9-3fRmqL-c3oH7u-9Bjkan-4tWrFQ-7UnYDS-c4nv5q-4xyU-4Ngd21-8iZxZj-gJSaQ-rLVhbJ-7kz3b4-d9nqbJ-rwsn2g-i1s1K5-avPt2S-9nhhno-avPto1-avLNSr-avLNXX-qA3VKQ-89zqsj-7gar7W-aujeL8-knLfb-js3osM-tRkGQ1-tRkG5J-HWWcg-85LaAF-dFUz9Q-fb3MAB-gppVnm-avLNQx-avLP4e">Jobs Help Wanted (image cropped)</a></h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Slack, Brian K. - <a class="abouta" href="https://www.flickr.com/photos/mdgovpics/7315143938/in/photolist-c9q2rm-9XhXLn-7Zfsv7-5wYpxA-aMeTu4-ptoyWg-sq4csB-qAemCY-d9soWC-aqAoNU-6ZfzxN-9LBN2U-rhyZBJ-6FULZ7-dLxjv5-4ptDiZ-d2TmHm-6uLkBR-7Jx7sx-9VPtbT-4uYW7E-pRYhnx-bf5epr-ecbyFp-9rji9c-42CKni-q6Myr5-skZa76-8rJop6-8rJogv-8rJoc2-bmm8h6-xmtLD-8rJo7R-oDBoAt-85fndj-6fXnvm-p1qxES-btgjYn-dt28dn-dv4ngf-b7YPGZ-9GuAfn-6YNutS-btvJkP-hqMVT-727RT5-4Pm2bT-bjoQfx-72nqz8">Health and Disparities Press Conference</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Spiske, Markus - <a class="abouta" href="https://www.flickr.com/photos/markusspiske/14185397280/in/photolist-nBvSpb-7ySpNU-ooL9yX-cxdEFJ-8HEwRG-7tDHwV-auDiGB-fWMRRc-aeECtp-5FSjow-9Q5ng-4oPrjr-2hdAHJ-aE4GYn-o1cWP8-pUPd1j-ePp5oZ-8YntSU-c5oXR3-axqxZy-dzyLgc-5wo2Nw-ebiM84-nqnBXp-pE8L5A-c5oPjW-c5oLdN-c5oLYm-c5oMJE-i8v3X2-pE8HFh-7ZWVcp-dVSgpp-rnUYPo-4kTpBh-4YyfVp-9jRJ6z-nGGFjN-nGJgwp-avkxrV-gk3do-9TH5Um-avox6N-avkArv-k839ta-7zCpU-ahDnER-6TmmZR-gtm3ke-eZ8tFQ">Record Player (image cropped)</a></h4></div>
        
        <div class="aboutatthead"><h2 class="abouth2"><a class="abouta" href="https://creativecommons.org/licenses/by-sa/2.0/legalcode">CREATIVE COMMONS ATTRIBUTION SHARE ALIKE 2.0 GENERIC </a></h2></div>
        
        <div class="aboutgen"><h4 class="abouth4">Dombrowski, Lynn - <a class="abouta" href="https://www.flickr.com/photos/lynndombrowski/8207541759/in/photolist-dvgNdF-6ksTNq-dvni8v-bof11T-bof3TD-rhNCrL-6ccnyA-jh7RnP-4nwKXp-cN69a9-dNp6U-73PuxQ-oUkru4-q2oqwT-pmQvtJ-51CA51-7ZV6RT-5cSi9p-vHcasF-aDc8QP-aDfZLq-6QLueH-6K56TK-7Xw94z-cbxh8W-aDbz8z-5Lhktf-6pzXbu-aDc5ie-5UQ6Cu-5pu9uL-aDc5F4-vYoMzi-bo5Ptj-nkDugi-8VdWk9-8EXbBE-nttfGH-3KEaEM-b3zvoX-avZVuR-bo5PDW-c1HNt9-qhnP7d-856Brt-859JfS-3kRXwV-7EMYZX-oZmPK-91mVWo">Strawberry rhubarb pie (image cropped)</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Georgette, Bess - <a class="abouta" href="https://www.flickr.com/photos/46724642@N07/8637993927/in/photolist-eaiYDM-r1dEPq-se52JT-7VYazh-asZqyM-oNF1wL-fJA2eE-sdVrYE-pHr6x9-dWpTCQ-sbSMqC-fE86PC-jHLNh7-5YYFPS-6WQdA2-jHJVGm-r1dER9-vj642f-fGvtDZ-kPBsTR-54Awet-8iDBo9-88sNVC-88sPk9-88sNxA-88sPzL-88pzX4-fGvtAz-pgCKJ8-fGvtwX-88pyUD-88pzFt-kMMWXZ-r9dqs3-9GarAR-9JXzgR-rJBaBX-9nHgEw-88sP49-88sPHA-9GCXZ5-iRZT8w-ac4Hd4-ac3Set-o3CzYe-9xcfe2-iS4QG1-9ZY1DT-njXApa-aBJ7sw">Floral patchwork dress (image croppped)</a></h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Georgette, Bess - <a class="abouta" href="https://www.flickr.com/photos/46724642@N07/8660920433/in/photolist-ecktUn-eaiYDM-r1dEPq-se52JT-7VYazh-asZqyM-oNF1wL-fJA2eE-sdVrYE-pHr6x9-dWpTCQ-sbSMqC-fE86PC-jHLNh7-5YYFPS-6WQdA2-jHJVGm-r1dER9-vj642f-fGvtDZ-kPBsTR-54Awet-8iDBo9-88sNVC-88sPk9-88sNxA-88sPzL-88pzX4-fGvtAz-pgCKJ8-fGvtwX-88pyUD-88pzFt-kMMWXZ-r9dqs3-9GarAR-9JXzgR-rJBaBX-9nHgEw-88sP49-88sPHA-9GCXZ5-iRZT8w-ac4Hd4-ac3Set-o3CzYe-9xcfe2-iS4QG1-9ZY1DT-njXApa">Dress with original tags (image croppped)</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Georgette, Bess - <a class="abouta" href="https://www.flickr.com/photos/46724642@N07/10701077104/in/photolist-hiBPpo-8bjnVY-7iMmVE-7iMmQY-7iHsui-7iHszi-7yC3KX-6fDWRB-kGsg7U-qXnhJ4-8NqGeL-ecktUv-7yC3Se-9JYw4L-7LKRr3-6HybDz-7Gtd2u-7LFUy2-8WY73P-eFFL7V-7iMmCW-bPFgyp-nkUjP7-bdZs8H-bBJQ4R-bBJQ6D-5TMHiT-g7Ujkk-8yTDv1-qLd3UR-93NQH5-6NMWbc-6tVV6Z-6TvBhH-fzL3Ag-8yTDx7-br3pbF-7V8o1Y-6TvTGP-7iMmGh-dxd9hy-6HCfm7-8bjnPh-6JKq9p-8bg634-8bjnXo-8X27Us-bhNSJD-8kthYL-gTDJs8">Dress by Carol Brent (image croppped)</a></h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Georgette, Bess - <a class="abouta" href="https://www.flickr.com/photos/46724642@N07/8637994027/in/photolist-eaiYFv-8yTDXJ-dLWzAr-8oEP5r-97enhR-dM38Hd-u4BepU-9Qbqke-gms2Eh-ecktUn-eaiYDM-r1dEPq-se52JT-7VYazh-asZqyM-oNF1wL-fJA2eE-sdVrYE-pHr6x9-dWpTCQ-sbSMqC-fE86PC-jHLNh7-5YYFPS-6WQdA2-jHJVGm-r1dER9-vj642f-fGvtDZ-kPBsTR-54Awet-8iDBo9-88sNVC-88sPk9-88sNxA-88sPzL-88pzX4-fGvtAz-pgCKJ8-fGvtwX-88pyUD-88pzFt-kMMWXZ-r9dqs3-9GarAR-9JXzgR-rJBaBX-9nHgEw-88sP49-88sPHA">Dress with ric rac trim (image croppped)</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">McGee, Shannon - <a class="abouta" href="https://www.flickr.com/photos/shan213/12745928285/in/photolist-kqjdqe-qXQL5B-5WuD3M-izKnBw-kjHGyg-4xSKzt-izL1Dr-kLDwrW-7aue9x-97aedy-v9qix-btgn9t-7jSqKg-cFcys1-7oy3Bj-9qakfe-akgZwQ-8urFji-aJPKxM-9d9hUM-akgZEL-ndcjx-8E715f-bwfoK5-akgZCf-akgZys-akecZx-aked5x-b9vNgn-7NHThS-5bYPY7-9FLWjY-5tshhD-dR84pP-ajfd3c-c6QSq1-ppepDf-dL2FYJ-5HDfMF-5GY76j-9XEyoA-e1Lb4h-5cjfMq-9DSiBD-5a45Kw-bGxZ3M-bGxZEK-oSsDsJ-9j7ReE-oJMmQy">Birthday Addition!! (image cropped)</a></h4></div>
        
        <div class="aboutatthead"><h2 class="abouth2"><a class="abouta" href="https://creativecommons.org/licenses/by-nc/2.0/legalcode">CREATIVE COMMONS ATTRIBUTION NON-COMMERCIAL 2.0</a></h2></div>
        
        <div class="aboutgen"><h4 class="abouth4">Kearney, Terry - <a class="abouta" href="https://www.flickr.com/photos/oneterry/16711663295/in/photolist-rsKDgM-9FUKfq-suHhih-r6ip1G-j3fACu-8qwP9e-7jA6z8-gHZbw7-69kJa5-7XFuXv-6F1vzG-aUqNfk-iskJo2-A3EaX-81m2ig-8GXvNx-duLYDR-5cCXV1-dAZxeX-ghnoDc-p1z8Wz-q6JkG2-dp6D4X-4nj6YZ-7Pesb4-as426h-8tuadK-4iDRAs-66233M-gigtVU-8KrU1R-bk94WJ-4iDRVY-mG4Wdr-b6cUjp-gx9bsh-zeT59-bwPb6v-cRtGFo-e6kMmg-6cFVL4-dUnj3M-9L4DC-4FqFGV-bxYo9Z-vwLQyz-4rERmC-2YtFPx-cmYE8b-9e3hbr">Books of Library Liverpool (modified)</a></h4></div>
        
        <div class="aboutatthead"><h2 class="abouth2"><a class="abouta" href="https://creativecommons.org/licenses/by-sa/4.0/legalcode">CREATIVE COMMONS ATTRIBUTION-SHARE ALIKE 4.0 INTERNATIONAL</a></h2></div>
        
        <div class="aboutgen"><h4 class="abouth4">Anonymous - <a class="abouta" href="https://commons.wikimedia.org/wiki/File:House_fire_with_smoke.jpg">House fire with smoke</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Elango, Yercaud - <a class="abouta" href="https://commons.wikimedia.org/wiki/File:Labrador-5-chandra_hotel-yercaud-salem-India.JPG">Labrador-5-salem-India</a></h4></div>
        
        <div class="aboutatthead"><h2 class="abouth2"><a class="abouta" href="https://commons.wikimedia.org/wiki/Commons:GNU_Free_Documentation_License,_version_1.2">GNU FREE DOCUMENTATION LICENSE V1.2</a></h2></div>
        
        <div class="aboutgen"><h4 class="abouth4">Anonymous - <a class="abouta" href="https://commons.wikimedia.org/wiki/File:Amateur_footballer.jpg">Amateur footballer</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        
        <div class="aboutatthead"><h2 class="abouth2"><a class="abouta" href="https://www.pixelscrapper.com/support/nuts-bolts/licensing-tou">PIXEL SCRAPPER LICENSE</a></h2></div>
        
        <div class="aboutgen"><h4 class="abouth4">Lerin, Melissa - <a class="abouta" href="https://www.pixelscrapper.com/marisa-lerin/designs/tea-cup-shape-1-template-mask-teacup">Tea Cup Shape 1</a>‎</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">Lerin, Melissa - <a class="abouta" href="https://www.pixelscrapper.com/marisa-lerin/designs/tea-cup-shape-3-template-mask-teacup">Tea Cup Shape 2</a></h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">Reid, Sheila - <a class="abouta" href="https://www.pixelscrapper.com/sheila-reid/designs/at-the-beach-hibiscus-paper-asset-ocean-sand-summer-vacation-coastal-tan-green">At the Beach - Hibiscus Paper</a></h4></div>
        
        <div class="aboutatthead"><h2 class="abouth2">USED WITH PERMISSION</h2></div>
        
        <div class="aboutgen"><h4 class="abouth4">Lee, Brian - <a class="abouta" href="https://www.pixelscrapper.com/sheila-reid/designs/at-the-beach-hibiscus-paper-asset-ocean-sand-summer-vacation-coastal-tan-green">Hiren of the Valley</a></h4></div>
        
        <div class="aboutatthead"><h2 class="abouth2"><a class="abouta" href="http://www.iamfree.bandcamp.com">Featuring music Composed and Performed by IAMFREE</a></h2></div>
        
        <div class="aboutatthead"><h2 class="abouth2">from the album “Through Manes”: Used by permission.</h2></div>
        
        <div class="aboutgen"><h4 class="abouth4">"Ceyx"</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">"Please Panic"</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">"Two in Two"</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">"I Will be King"</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">"Don't Let Me Go"</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">"Against Oblivion"</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">"Communication in Chaos"</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">"Wake"</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">"Keta"</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">"Within Delicate"</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">"Winking Sunset"</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">"Halycon"</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">"Communication in Chaos"</h4></div>
        
        <div class="aboutatthead"><h2 class="abouth2"><a class="abouta" target="_blank" href="http://www.ethanmyers.net">Featuring music Composed and Performed by Ethan Myers</a></h2></div>
        
        <div class="aboutatthead"><h2 class="abouth2">from the album “Thematic Compositions for Visual Media”: Used by permission.</h2></div>
        
        <div class="aboutgen"><h4 class="abouth4">"Into the Fray"</h4></div>
        <div class="aboutgenblank"></div>
        <div class="aboutgen"><h4 class="abouth4">"We are the Prey"</h4></div>
        
        <div class="aboutgen"><h4 class="abouth4">"The Fallen Will Rise Again"</h4></div>
        
        <div class="aboutatthead"><h2 class="abouth2">PSA Music</h2></div>
        
        <div class="aboutgen"><h4 class="abouth4">Boddy, Tom "Thoughtful Reflections" - <a class="abouta" target="_blank" href="www.audionetwork.com">Audio One Work</a></h4></div>
        
        <div class="aboutatthead"><h2 class="abouth2">Newscast Graphics <a class="abouta" target="_blank" href="http://www.editingcorp.com/motion-graphics-stock-elements-after-effects/">Motion Graphics Stock Elements 1.0 Copyright (c) 2014 Editing Corp.</a></h2></div>
        
        <div class="aboutatthead"><h2 class="abouth2">Videos</h2></div>
        <div class="aboutgen"><h4 class="abouth4"><a class="abouta" target="_blank" href="http://www.Videoblocks.com">PSA videos provided by Videoblocks.com</a></h4></div>
        
        </div>
    </div>
    
</div>

<?php require FOOTER; ?>