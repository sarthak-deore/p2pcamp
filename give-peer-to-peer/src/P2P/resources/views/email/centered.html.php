<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title><?php echo $siteName ?: ''; ?></title>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="
	background-color: #f6f6f6;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
">
<div style="
	width:100%;
	-webkit-text-size-adjust:none !important;
	margin:0;
	padding: 30px 0 50px 0;
">
	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
		<tr>
			<td align="center" valign="top">
				<div id="template_header_image"><p style="margin-top:0;"><img style="max-width:450px;max-height:150px;"
																			  src="<?php echo $logo ?: ''; ?>"
																			  alt="<?php echo $siteName ?: ''; ?>"/></p></div>
				<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container" style="
					box-shadow:0 0 0 1px #f3f3f3 !important;
					border-radius:3px !important;
					background-color: #ffffff;
					border: 1px solid #e9e9e9;
					border-radius:3px !important;
					padding: 20px;
				">
					<tr>
						<td align="center" valign="top">
							<!-- Header -->
							<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_header" bgcolor="#ffffff" style="
								color: #00000;
								border-top-left-radius:3px !important;
								border-top-right-radius:3px !important;
								border-bottom: 0;
								font-weight:bold;
								line-height:100%;
								text-align: center;
								vertical-align:middle;
							"
							>
								<tr>
									<td>
										<h1 style="
											color: #000000;
											margin:0;
											padding: 28px 24px;
											display:block;
											font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
											font-size:32px;
											font-weight: 500;
											line-height: 1.2;
										"><?php echo $emailTitle ?: ''; ?></h1>
									</td>
								</tr>
							</table>
							<!-- End Header -->
						</td>
					</tr>
					<tr>
						<td align="center" valign="top">
							<!-- Body -->
							<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
								<tr>
									<td valign="top" style="
										border-radius:3px !important;
										font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
									">
										<!-- Content -->
										<table border="0" cellpadding="20" cellspacing="0" width="100%">
											<tr>
												<td valign="top">
													<div style="
														color: #000000;
														font-size:14px;
														font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
														line-height:150%;
														text-align:left;
														text-align:center;
													">
														<?php echo $emailContent ?: ''; ?>
													</div>
												</td>
											</tr>
										</table>
										<!-- End Content -->
									</td>
								</tr>
							</table>
							<!-- End Body -->
						</td>
					</tr>
					<tr>
						<td align="center" valign="top">
							<!-- Footer -->
							<table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer" style="
								border-top:0;
								-webkit-border-radius:3px;
							">
								<tr>
									<td valign="top">
										<table border="0" cellpadding="10" cellspacing="0" width="100%">
											<tr>
												<td colspan="2" valign="middle" id="credit" style="
													border:0;
													color: #000000;
													font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
													font-size:12px;
													line-height:125%;
													text-align:center;
												">
													<p><a href="<?php echo $siteURL ?: ''; ?>"><?php echo $siteName ?: ''; ?></a></p>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<!-- End Footer -->
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
</body>
</html>
