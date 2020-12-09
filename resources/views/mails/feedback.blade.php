<!DOCTYPE html>
<html>
	<head>
		<!--[if (gte mso 9)|(IE)]>
			<xml>
				<o:OfficeDocumentSettings>
					<o:AllowPNG />
					<o:PixelsPerInch>96</o:PixelsPerInch>
				</o:OfficeDocumentSettings>
			</xml>
		<![endif]-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="format-detection" content="date=no" />
		<meta name="format-detection" content="address=no" />
		<meta name="format-detection" content="email=no" />
		<title>THINKIALAB</title>

		<link rel="stylesheet" href="{{ asset('css/email.css') }}">
	</head>

	<body
		style="margin-top:0; margin-bottom:0;padding-top:0;padding-bottom:0;width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;"
	>

		<!-- HEADER -->
		@include('mails.header')

		<!-- 30px Spacer 2 Open -->
		<table
			class="bodyBgColor"
			width="100%"
			border="0"
			align="center"
			cellpadding="0"
			cellspacing="0"
			bgcolor="#F7F7F7"
			style="width:100%;max-width:100%;"
		>
			<tr>
				<td align="center" valign="top">
					<table
						class="row"
						width="700"
						border="0"
						align="center"
						cellpadding="0"
						cellspacing="0"
						style="width:700px;max-width:700px;"
					>
						<tr>
							<td class="whiteBgcolor" align="center" valign="top" bgcolor="#FFFFFF">
								<table
									class="row"
									width="600"
									border="0"
									align="center"
									cellpadding="0"
									cellspacing="0"
									style="width:600px;max-width:600px;"
								>
									<tr>
										<td align="center" valign="middle" height="30" style="font-size:30px;line-height:30px;">&nbsp;</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>


		<!-- Title Description With Line 8 Open -->
		<table
			class="bodyBgColor"
			width="100%"
			border="0"
			align="center"
			cellpadding="0"
			cellspacing="0"
			bgcolor="#F7F7F7"
			style="width:100%;max-width:100%;"
		>
			<tr>
				<td align="center" valign="top">
					<table
						class="row"
						width="700"
						border="0"
						align="center"
						cellpadding="0"
						cellspacing="0"
						style="width:700px;max-width:700px;"
					>
						<tr>
							<td class="whiteBgcolor" align="center" valign="top" bgcolor="#FFFFFF">
								<table
									class="row"
									width="600"
									border="0"
									align="center"
									cellpadding="0"
									cellspacing="0"
									style="width:600px;max-width:600px;"
								>
									<tr>
										<td height="30" align="center" valign="top" style="font-size:30px;line-height:30px;">&nbsp;</td>
									</tr>

									<tr>
										<td class="containerPadding" align="center" valign="top" style="font-size:0;padding:0">
											<table
												class="row"
												border="0"
												width="600"
												align="center"
												cellpadding="0"
												cellspacing="0"
												style="width:600px;max-width:600px;"
											>
												<tr>
													<td
														class="Section Headlines"
														align="center"
														valign="middle"
														style="font-family:'Poppins',Arial,Helvetica,sans-serif;color:#191919;font-size:32px;line-height:44px;font-weight:700;letter-spacing:0px;padding:0px;padding-bottom: 20px;"
													>
														Hola de nuevo {{ $observacion->solucionid->user->name }}!
													</td>
												</tr>

												<tr>
													<td align="center">
														<table
															class="centerFloat"
															border="0"
															align="center"
															cellpadding="0"
															cellspacing="0"
															style="padding:0px;padding-bottom:20px;"
														>
															<tr>
																<td
																	align="center"
																	class="Divider"
																	style="border-bottom:3px solid #5f27cd; line-height:3px;font-size:1px;"
																	height="3"
																	width="80"
																>
																	&nbsp;
																</td>
															</tr>
														</table>
													</td>
												</tr>

												<tr>
													<td
														class="Section Paragraphs"
														align=""
														valign="middle"
														style="font-family:'Poppins', sans-serif;color:#4c5267;font-size:14px;line-height:22px;font-weight:400;letter-spacing:0px;"
													>
														Se ha publicado un feedback para tu solución.<br />
														Te dejamos su email por si quieres contactarlo: {{ $observacion->solucionid->problemaid->user->email }}<br />
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td height="30" align="center" valign="top" style="font-size:30px;line-height:30px;">&nbsp;</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

		<!-- Title Description With Line 8 Close -->

		<!-- Call To Action Open -->
		<table
			class="bodyBgColor"
			width="100%"
			border="0"
			align="center"
			cellpadding="0"
			cellspacing="0"
			bgcolor="#F7F7F7"
			style="width:100%;max-width:100%;"
		>
			<tr>
				<td align="center" valign="top">
					<table
						class="row"
						width="700"
						border="0"
						align="center"
						cellpadding="0"
						cellspacing="0"
						style="width:700px;max-width:700px;"
					>
						<tr>
							<td class="whiteBgcolor" align="center" valign="top" bgcolor="#FFFFFF">
								<table
									class="row"
									border="0"
									width="100%"
									align="center"
									cellpadding="0"
									cellspacing="0"
									style="width:100%;max-width:100%;"
								>
									<tr>
										<td height="30" align="center" valign="top" style="font-size:30px;line-height:30px;">&nbsp;</td>
									</tr>
									<tr>
										<td
											class="bg-cta"
											bgcolor="#5f27cd"
											align="center"
											valign="top"
											style="background-size:cover;background-position:center top;"
										>
											<!-- Outlook Background Image// -->
											<!--[if (gte mso 9)|(IE)]>
									<v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:700px;height:550px;">
									<v:fill type="frame" src="images/bg-cta.png" color="#FFFFFF"></v:fill>
									<v:textbox style="v-text-anchor:middle;" inset="0,0,0,0">
									<![endif]-->

											<table
												class="row"
												width="600"
												border="0"
												align="center"
												cellpadding="0"
												cellspacing="0"
												style="width:600px;max-width:600px;"
											>
												<tr>
													<td height="50" align="center" valign="top" style="font-size:50px;line-height:50px;">
														&nbsp;
													</td>
												</tr>

												<tr>
													<td
														class="ctaTitle"
														align="center"
														valign="middle"
														style="font-family:'Poppins',Arial,Helvetica,sans-serif;color:#FFFFFF;font-size:32px;line-height:42px;font-weight:600;letter-spacing:0px;padding:0;padding-bottom:20px;"
													>
														Ve a revisarlo!<br />
													</td>
												</tr>

												<tr>
													<td align="center" valign="top">
														<table border="0" align="center" cellpadding="0" cellspacing="0" class="centerFloat">
															<tr>
																<td
																	class="Button2"
																	align="center"
																	style="background-color:#FFFFFF;font-family:'Poppins',Arial,Helvetica,sans-serif; font-size:12px; font-weight:600; color:#5f27cd; line-height:24px;letter-spacing:1px;padding:10px 28px;border-radius:0px;"
																>
																	<a href="{{ route('soluciondetalle.ver', $observacion->solucion_id) }}" style="text-decoration:none; color:#5f27cd;"
																		>THINKIALAB</a
																	>
																</td>
															</tr>
														</table>
													</td>
												</tr>

												<tr>
													<td height="50" align="center" valign="top" style="font-size:50px;line-height:50px;">
														&nbsp;
													</td>
												</tr>
											</table>

											<!--[if (gte mso 9)|(IE)]></v:textbox></v:rect><![endif]-->
										</td>
									</tr>
									<tr>
										<td height="30" align="center" valign="top" style="font-size:30px;line-height:30px;">&nbsp;</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

		<!-- FOOTER -->
		{{-- @include('mails.footer') --}}
	</body>
</html>
