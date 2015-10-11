<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header-beg.php') ?>
<title>Webinar | Architexa</title>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header-end.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/side-menu-support-beg.php') ?>

<!--
<div style="float:right">

<div style= "padding:17px 2px 2px 2px;"> 
		<a href="/start/index"><img src="/images/thumbnails/tryArchitexa.png" width="170" height="60"  border="0"/></a>
</div>

<div style= "padding:2px 2px;"> 
		<a href="/learn-more/videos/intro/video"><img src="/images/thumbnails/watchIntro.png" width="170" height="60" border="0"  /></a>
</div>
</div>
-->

<h1>Rule your Code</h1>
<p>We regularly host short webinars to provide an overview of Architexa, to discuss the challenges of working with large codebases and their solutions. The webinar will consist of a 20-minute walkhrough followed by a 10-minute Q&amp;A session to answer any queries you might have. The next webinar is scheduled for 
<?php echo date('F jS, Y', strtotime('next Wednesday')); ?>. Please sign up below to attend. 
</p>

<br><br>
<div style = "border: 1px solid #E4E4E4; padding: 13px; background-color: white;">
<iframe src="https://spreadsheets.google.com/a/architexa.com/spreadsheet/embeddedform?formkey=dGhOUUxRT2NUNG9rUXdqcm5SS2xPUWc6MQ" width="500" height="828" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>
<br><br>
<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();

		});
</script>


<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/side-menu-footer.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php') ?>
