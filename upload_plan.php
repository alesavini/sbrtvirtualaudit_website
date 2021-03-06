<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php include 'head.include.html';?>
</head>

<body>

	<div id="wrapper">
		<?php include 'header_body.include.html';?>
		<!-- end #header -->
		<?php include 'menu_bar.include.html';?>
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
									<div class="border_asimg">
									<div align="center" style="margin-top: 14px">
										<form action="scripts/upload.php" method="post" enctype="multipart/form-data">
											<!-- <input type="hidden" name="MAX_FILE_SIZE" value="3" /> -->
											Select file to upload:
											<input type="file" name="fileToUpload" id="fileToUpload"/>
											<input type="submit" value="Upload File" name="submit"/>
										</form>
									</div>
									<div align="center" style="margin-top: 10px">
										<p>(MAX FILE SIZE = 15MB) <br> Please click upload and wait until page refreshes.</p>
									</div>
										</div>
								</div>
							</div>
							<div style="clear: both;">&nbsp;</div>
						</div>
						<!-- end #content -->
						<div id="sidebar">
							<ul>
								<?php include 'side_news.include.html';?>
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
		<?php include("footer.include.html") ?>
	</div>
	<!-- end #footer -->
</body>

</html>