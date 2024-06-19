<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, 'your-email', FILTER_SANITIZE_EMAIL);
	$accept_offers = filter_input(INPUT_POST, 'accept-offers', FILTER_VALIDATE_BOOLEAN);
    // Validate the input
    if ($email) {
        $to = 'contact@pattbol.fr';
        $subject = 'Nouveau message de contact de ' . $name;
		$accept_offers_text = $accept_offers ? 'Oui' : 'Non';
        $body = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html>
	<head>
		<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
		<title>Message de $name</title>
		
		
		<style>	@media only screen and (max-width: 300px){ 
				body {
					width:218px !important;
					margin:auto !important;
				}
				.table {width:195px !important;margin:auto !important;}
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}		
				span.title{font-size:20px !important;line-height: 23px !important}
				span.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}		
				td.box p{font-size: 12px !important;font-weight: bold !important;}
				.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
					display: block !important; 
				}
				.table-recap{width: 200px!important;}
				.table-recap tr td, .conf_body td{text-align:center !important;}	
				.address{display: block !important;margin-bottom: 10px !important;}
				.space_address{display: none !important;}	
			}
	@media only screen and (min-width: 301px) and (max-width: 500px) { 
				body {width:308px!important;margin:auto!important;}
				.table {width:285px!important;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}	
				.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
					display: block !important; 
				}
				.table-recap{width: 295px !important;}
				.table-recap tr td, .conf_body td{text-align:center !important;}
				
			}
	@media only screen and (min-width: 501px) and (max-width: 768px) {
				body {width:478px!important;margin:auto!important;}
				.table {width:450px!important;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}			
			}
	@media only screen and (max-device-width: 480px) { 
				body {width:308px!important;margin:auto!important;}
				.table {width:285px;margin:auto!important;}	
				.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
				
				.table-recap{width: 295px!important;}
				.table-recap tr td, .conf_body td{text-align:center!important;}	
				.address{display: block !important;margin-bottom: 10px !important;}
				.space_address{display: none !important;}	
			}
</style>

	</head>
	<body style=\"-webkit-text-size-adjust:none;background-color:#fff;width:650px;font-family:Open-sans, sans-serif;color:#555454;font-size:13px;line-height:18px;margin:auto\">
		<table class=\"table table-mail\" style=\"width:100%;margin-top:10px;-moz-box-shadow:0 0 5px #afafaf;-webkit-box-shadow:0 0 5px #afafaf;-o-box-shadow:0 0 5px #afafaf;box-shadow:0 0 5px #afafaf;filter:progid:DXImageTransform.Microsoft.Shadow(color=#afafaf,Direction=134,Strength=5)\">
			<tr>
				<td class=\"space\" style=\"width:20px;padding:7px 0\">&nbsp;</td>
				<td align=\"center\" style=\"padding:7px 0\">
					<table class=\"table\" bgcolor=\"#ffffff\" style=\"width:100%\">
						<tr>
							<td align=\"center\" class=\"logo\" style=\"border-bottom:4px solid #333333;padding:7px 0\">
								<a title=\"Patt'bol\" href=\"https://pattbol.fr/\">
									<img src=\"https://pattbol.fr/assets/images/logo2.svg\" alt=\"Logo Patt'Bol\" />
								</a>
							</td>
						</tr>
<tr>
	<td align=\"center\" class=\"titleblock\" style=\"padding:7px 0\">
		<font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
			<span class=\"title\" style=\"font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px\">Demande d'information du site internet Patt'Bol</span>
		</font>
	</td>
</tr>
<tr>
	<td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
	<td class=\"box\" style=\"border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0\">
		<table class=\"table\" style=\"width:100%\">
			<tr>
				<td width=\"10\" style=\"padding:7px 0\">&nbsp;</td>
				<td style=\"padding:7px 0\">
					<font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
						<span style=\"color:#333\"><strong>Bonjour,<br/><br/>Une nouvelle demande d'inscription à la newsletter du site a été postée sur le site Internet Patt'Bol</strong></span><br /><br />
							<span style=\"color:#333\"><strong>Adresse mail : </strong></span>$email<br /><br />
							<span style=\"color:#333\"><strong>Message RGPD validé : </strong></span>$accept_offers_text<br /><br />
							<span style=\"color:#333\"><strong>Cet e-mail a été envoyé via le formulaire de newsletter de Patt'Bol. Cordialement</strong></span><br /><br />						
					</font>
				</td>
				<td width=\"10\" style=\"padding:7px 0\">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>

						<tr>
							<td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
						</tr>
						<tr>
							<td class=\"footer\" style=\"border-top:4px solid #333333;padding:7px 0\">&nbsp;</td>
						</tr>
					</table>
				</td>
				<td class=\"space\" style=\"width:20px;padding:7px 0\">&nbsp;</td>
			</tr>
		</table>
	</body>
</html>";

        $headers = [
            'From' => $email,
            'Reply-To' => $email,
			'Content-type' => 'text/html; charset=UTF-8',
            'X-Mailer' => 'PHP/' . phpversion()
        ];

        $headers_string = '';
        foreach ($headers as $key => $value) {
            $headers_string .= $key . ': ' . $value . "\r\n";
        }
        // Send the email
        if (mail($to, $subject, $body, $headers_string)) {
            header("Location: ../inscriptionenvoyee.html");
            exit();
        } else {
            echo "Erreur lors de l'envoi du message.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
} else {
    echo "Méthode de requête non autorisée.";
}
?>