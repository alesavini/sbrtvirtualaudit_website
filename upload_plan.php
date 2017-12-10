<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>AIFM Virtual Audit</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css"/>
	<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
	<link href="style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>

<body>

	<div id="wrapper">
		<?php include 'header_body.html';?>
		<!-- end #header -->
		<?php include 'menu_bar.html';?>
		<!-- end #menu -->
		<div id="page">
			<div id="page-bgtop">
				<div id="page-bgbtm">
					<div id="page-content">
						<div id="content">
							<div class="post">
								<h2 class="title"> Upload your plan here </h2>
								<div class="entry">
									<p>Please zip your RTPLAN and RTDOSE (total dose) in a single archive and upload it using the following form:</p>
									<div align="center">
										<form action="scripts/upload.php" method="post" enctype="multipart/form-data">
											<!-- <input type="hidden" name="MAX_FILE_SIZE" value="3" /> -->
											Select file to upload:
											<input type="file" name="fileToUpload" id="fileToUpload"/>
											<input type="submit" value="Upload File" name="submit"/>
										</form>
									</div>
									<div align="center">
										<p>(MAX FILE SIZE = 15MB)</p>
									</div>

								</div>
							</div>
							<div style="clear: both;">&nbsp;</div>
						</div>
						<!-- end #content -->
						<div id="sidebar">
							<ul>
								<?php include 'side_news.html';?>
							</ul>
						</div>
						<!-- end #sidebar -->
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
			</div>
		</div>
		<!-- end #page -->
	</div>
	<div id="footer">
		<?php include("footer.html") ?>
	</div>
	<!-- end #footer -->
</body>

</html>