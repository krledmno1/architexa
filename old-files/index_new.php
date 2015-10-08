<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header-beg.php') ?>
<title>Understand and Document Code - Architexa</title>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header-end.php') ?>

<style type="text/css">

.news li {margin:3px 0px 5px -20px;}
.news {
	list-style-position:outside;
	list-style-image: url("/images/news_icon14.png");
	font-size:14px;
}


	#smallLink { color:#444;}
	#smallLink a:link {color: #444; text-decoration: none; 	}
	#smallLink a:active {color: #444; text-decoration: none;}
	#smallLink a:visited {color: #444; text-decoration: none;}
	#smallLink a:hover {color: #C60; text-decoration: none;}	

#slideshow {
  width: 412px;
  height: 262px;
}

</style>

<script type="text/javascript">
<!--
function img(imgID, imgName) {
	document.images[imgID].src = '/images/' + imgName + '.png';
}
// -->
</script>
<script type="text/javascript" src="/js/jquery.cross-slide.min.js"></script>

<table boder="0"><tr>
<td width="55%" valign="center"><div>
	<!--
	<h1 style="font-size:255%;font-family:Tahoma,Georgia,'Bitstream Vera Serif','Times New Roman',serif">Too Much Code?</h1>
	-->

	<!--<h2>Benefit from powerful interactive <br> exploration of code. 
	</h2><br>-->
	<h1 style="font-size:200%">Code Rots.<br>Prevent Productivity Loss.</h1>
	<!--<p style="font-size:.9em;" >Architexa is a Java based, Eclipse plugin that allows you to generate interactive diagrams of existing code. We also provide a built in system for hosting your diagrams on the web, allowing co-workers to view and understand code concepts remotely. We are currently Java/Eclipse based, but are planning on adding more support for additional languages and IDEs</p>-->

<!--
<p style="font-size:.9em; line-height:1.4em;" >
<b>Architexa</b> is tool suite to help you easily understand large/complex Java code bases by building easy-to-use diagrams directly within the Eclipse IDE. 
</p><p style="font-size:.9em; line-height:1.4em;" >
We allow you to easily share useful diagrams as Architectural Documentation using a simple collaborative site.
</p>
-->
<p style="font-size:.9em; line-height:1.4em;" >
<b>Architexa</b> is an easy-to-use tool suite that helps teams understand and collaboratively document large/complex Java code bases within the Eclipse IDE.
</p>

	<br>
<a href = "http://www.architexa.com/start/index">
<img style = "margin-right: 8px;" src = "/images/getStarted.png" width="200" border="0"/>
</a>
<br />
<p style="font-size:.9em;"><a href="mailto:sales@architexa.com">Contact us</a> for support for additional languages and IDEs.</p>

</div></td>
<td width="5%">&nbsp;</td>
<td height="300">

	<a href="http://www.architexa.com/learn-more/videos/intro/video" onMouseOver="img('play','playIconOn')" onMouseOut="img('play','playIconOff')">

<script>
  $(function() {
    $('#slideshow').crossSlide({
      sleep: 2,
      fade: 1
    }, [
      { src: '/images/lay_hp.png' },
      { src: '/images/seq_hp.png' },
      { src: '/images/class_hp.png' }
    ])
  });

</script>

<div id="slideshow"></div>


	<div style="position:relative">
		<img name="play" src="/images/playIconOff.png" border="0" style="position:absolute;top:-140px;left:180px"/>
	</div>
	<div style="text-align:center">
		<a href="/learn-more/videos/intro/video"><img style="padding-top:10px;" src="/images/thumbnails/watchIntro.png" width="200" border="0"/></a>
	</div>

</a>

</td>
</tr></table>

<hr style = "height: 1px">
<!--<h1>Painlessly Work with Complex Code</h1>-->
<!--
<h1>Understand and Document Code in Seconds</h1>
-->
<div>

<table align="center">
	<tr> 
		<td style="width:254px; vertical-align:top;">
			<div>
			<p style="font-size: 18px; margin:0 0 10px 0;"><b>Powerful Diagramming Tools</b></p>
			<ul style="font-size:14px; margin: 0pt 0pt 0pt 0px;">
				<li> <a href="http://www.architexa.com/learn-more/understand"><b>Understand</b></a> new code with <a href="http://www.architexa.com/learn-more/layered-diagrams"><b>layered</b></a>, <a href="http://www.architexa.com/learn-more/class-diagrams"><b>class</b></a> and <a href="http://www.architexa.com/learn-more/sequence-diagrams"><b>sequence diagrams</b></a></li>
				<li>Review Code(link) faster and handle code bugs effectively</li>
				<!-- <li><a href="http://www.architexa.com/learn-more/layered-diagrams"><b>Get High Level Overviews</b></a> using Layered Diagrams</li>
				<li><a href="http://www.architexa.com/learn-more/class-diagrams"><b>Examine Code Relationships</b></a> in one place by using Class Diagrams</li>
				<li><a href="http://www.architexa.com/learn-more/sequence-diagrams"><b>Decipher Code Behavior</b></a> easily using Sequence Diagrams
				</li> -->
			</ul>
			</div>
		</td>
		<td style="width:40px;"></td>
		<td style="width:254px; vertical-align:top;">
		<div>
			<p style="font-size: 18px; margin:0px 0 10px 0;"><b>Tackle Development Challenges</b></p>
			<ul style="font-size:14px; margin: 0pt 0pt 0pt 0px;">
				<li>Improve project <a href="http://www.architexa.com/solutions/architecture"><b>architecture</b></a> and maintain <a href="http://www.architexa.com/solutions/code-quality"><b>code quality</b></a></li>
				<li><a href="http://www.architexa.com/learn-more/knowledge-transfer"><b>Transfer Knowledge</b></a> easily and effectively <a href = "http://www.architexa.com/learn-more/share"><b>collaborate</b></a> with peers</li>
				<!-- <li><a href="http://www.architexa.com/solutions/code-quality"><b>Quality deterioration</b></a> due to the lack of code visibility</li>
				<li><a href="http://www.architexa.com/solutions/architecture"><b>Architecture management</b></a> challenges while staying Agile</li>
				<li><a href="http://www.architexa.com/solutions/distributed-teams"><b>Distributed development</b></a> problems due to communication overhead</li> -->
			</ul>
			</div>	
		</td>
		<td style="width:40px;"></td>
		<td style="width:254px; vertical-align:top;">
			<p style="font-size: 18px; margin: 0px 0 10px 0;"><b>Improve Team Productivity</b></p>
			<ul style="font-size:14px; margin: 0pt 0pt 0pt 0px;">
			<li>Be Agile and improve communication among <a href="http://www.architexa.com/solutions/distributed-teams"><b>distributed teams</b></a></li>
			<li>Meet project deadlines without compromising project quality(time /money???)</li>
			<!--	<li><a href="http://www.architexa.com/learn-more/understand"><b>Understand code</b></a> thoroughly and easily using familiar diagrams</li>
			<li>
			<a href="http://www.architexa.com/learn-more/maintain"><b>Maintain Effectively</b></a> and deal with bugs and archectural errosion effortlessly
			</li>
			<li>
			<a href="http://www.architexa.com/learn-more/knowledge-transfer"><b>Document code</b></a> architecture effectively and efficiently</li>  -->
			</ul>
		</td>
	</tr>
</table>
</div>
<hr style = "height: 1px">

<table>
<tr>
	<td>	
<table>
	
<tr>
	<td style="width:320px;"> 
	<div  style="margin:0px 0 10 0;">
	<p style="font-size:18px;"><b>News</b> <span id="smallLink" style="font-size:14px; font-weight:normal;"><a target="_blank" href="http://www.architexa.com/forums/forum/announcements">(more)</a></span></p>
	<ul id="smallLink" class="news">
	<?
		// Redirect if email is invalid
		set_include_path(
			get_include_path() . 
			PATH_SEPARATOR . '/home/architexaweb/pear/php'
		);
		require_once "XML/RSS.php";

		$rss =& new XML_RSS($_SERVER['DOCUMENT_ROOT']."/blog-about.xml");
		$rss->parse();
	?>

	<?
	$i=0;
	foreach ($rss->getItems() as $item) {
		if($i>=3) continue;
			echo "<li><a href=\"" . $item['link'] . "\">" . $item['title'] . "</a><span class='date'> ". date("F d",strtotime($item['pubdate'])) ."</span></li>\n";	
		$i++;
	}
	?>
	</ul>
	</div>
	</td>
</tr>

<tr>
	<td style="width:320px;">
	<div style="margin:-10px 0 0 0px;">
	<p style="font-size:18px"><b>Blog Posts</b> <span id="smallLink" style="font-size:14px; font-weight:normal;"><a target="_blank" href="http://blog.architexa.com">(more)</a></span></p>
	<ul id="smallLink" class="news">

	<?php
		$rss =& new XML_RSS($_SERVER['DOCUMENT_ROOT']."/blog.xml");
		$rss->parse();
	?>

	<?
	$i=0;
	foreach ($rss->getItems() as $item) {
		if($i>=3) continue;	
			echo "<li><a href=\"" . $item['link'] . "\">" . $item['title'] . "</a><span class='date'> ". date("F d",strtotime($item['pubdate'])) ."</span></li>\n";	
		$i++;
	}
	?>
	</ul>
	</div> 
	</td>
</tr>

<tr>
	<td align="left">
		<p style="margin:-10px 0 0px 0px; font-size:18px"><b>Sign up for updates</b></p>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/mailchimp-signup.php') ?>
		<!--
		<form name="newsletterAdd" method="post" action="newsletterAdd">
		<table class="testContent" style="padding:10px 4px;">
			<tr><td>
			<input name="referrer" id="referrer" type="hidden" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
			<input name="email" id="email" type="text" value="Enter your email..." style="color:gray; onclick="this.value='';this.style.color='black';" onfocus="this.value=''; this.style.color='black'; this.onfocus=null;">
			<input name="submit" value="Sign Up!" id="updatesSubmit" type="submit"">
		</td></tr></table>
		</form>
		-->
	</td>
</tr>
</table>
	</td>
	<td>
<table align="center" style="margin:0 0 0 50px;">
	
	<tr><td>
		<div style="padding: 10px;">
		<table>
			<tr>
				<td colspan=4>
					<span style="font-size:21px; font-weight:bold; vertical-align:top;text-align:left;">Affiliations and Awards</span>
					<span style="float:right; text-align:right;"><a href="/about/affiliation"><img border="0" src="/images/Large_Finalist.png"></a></span>
				</td>
			</tr>
			<tr>
		<td><a href="/about/affiliation"><img border="0" src="/images/eclipse_logo.png" style="height:45px"></a></td>
		<td><a href="/about/affiliation"><img border="0" src="/images/agile_logo.png" style="height:47px"></a></td>
		<td><a href="/about/affiliation"><img border="0" src="/images/IASA_logo.png"  style="height:47px"></a></td>
		<td><a href="/about/affiliation"><img border="0" src="/images/mit100k.png" style="height:45px"></a></td>		
			</tr>
		</table>
		</div>
	</td></tr>
	<tr align="center"><td align="center">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/quotes.php') ?>
	</td></tr>
</table>	
	</td>
</tr>
</table>

</body>
</html>


<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php') ?>

