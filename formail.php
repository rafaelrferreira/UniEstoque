<?php
    include('rdstation.php');
    $form_data_array = $_POST;
    addLeadConversionToRdstationCrm("2aa435c5e496fdf0ae9f1a8efc6c1e8e", "Formulario de contato", $form_data_array);
	
	$recipient = $_POST['recipient'];

	$antibot = isset($_POST['url-form']) ? $_POST['url-form'] : '';

	if(isset( $recipient ) && $antibot == ' ' ) {
	     // Criação do Destinatário
		if( !isset( $email ) || empty( $email ) ) {
		   $email = $recipient;
		}
		reset( $HTTP_POST_VARS );

	    // Criação da Mensagem
	    $mensagem = null;
	    $mensagem = "<table width=\"450\"  border=\"0\" cellpadding=\"2\" cellspacing=\"1\">
				    <tr bgcolor=\"#f0812d\">
					  <td colspan=\"2\">
					    <font color=\"#FFFFFF\" face=\"trebuchet ms\" size=\"4\">&nbsp;&nbsp;Contato</font>
				      </td>
				    </tr>
				";
					/*
					
						 <tr bgcolor=\"#778899\">
						  <td colspan=\"2\">
						    <font color=\"#FFFFFF\" face=\"trebuchet ms\" size=\"4\">IP: ".$_POST["ip"]."</font>
					      </td>
					    </tr>
					
					 */
		while(list($campo, $conteudo ) = each( $HTTP_POST_VARS ) ) {
			$conteudo  = stripslashes( $conteudo );
			if(($campo != 'recipient' xor $campo != 'sucess' xor $campo != 'error' xor $campo != 'security_newsletter' xor $campo != 'url-form')) {
			$mensagem .= "<tr bgcolor=\"#BEBEBE\">
				            <td width=\"131\" bgcolor=\"#E4E4E4\" valign=\"top\">
						      <b><div align=\"right\"><b><font color=\"#000000\" face=\"verdana\" size=\"2\">$campo:</font></b></div>
						    </td>
				            <td width=\"304\" bgcolor=\"#F4F4F4\">
							  <font color=\"#000000\" face=\"verdana\" size=\"2\">". htmlentities($conteudo,ENT_NOQUOTES,'utf-8')."</font>
							</td>
			              </tr>	\n";			
			}
		}
			 
		$mensagem .= "<tr bgcolor=\"\">
		             <td colspan=\"2\">
					   <div align=\"right\">
					     <a href=\"http://www.alfamaweb.com.br/\" target=\"_blank\">
						   <font color=\"#2e749d\" face=\"trebuchet ms\" size=\"1\">acesse: http://www.alfamaweb.com.br</font>                             </a>
					   </div>
					 </td>
		           </tr>
		         </table>";
					 
	    // Criação do Assunto
	    if( !isset( $assunto ) ) {
	        if( isset( $subject ) ) {
	           $assunto = $subject;
	        } else {
	           $assunto = "Contato do Site";
	        }
	    }

	     // Redirecionamento
	    if( isset( $redirect ) ) {
	        if( !strstr($redirect, "http://") ) {
	           $redirect = "http://".$redirect;
	        }
	    } else {
	        $redirect = SITE;
	    }
		//email para o email
		if($email == "") {
		 	$email = $renasc;
		} else {
		 	$email = $email;
		}
	     // Enfim, envia o e-mail
		$cabecalho  = "From: <".$email.">\n"; 
		$cabecalho .= "AlfamaWeb: http://www.alfamaweb.com.br/\n\n";
		 
		$arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;
		  
		if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)) {
			$fp = fopen($_FILES["arquivo"]["tmp_name"],"rb");
			$anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"]));
			$anexo = base64_encode($anexo);
			fclose($fp);
			$anexo = chunk_split($anexo);

			//Anexo
			$boundary = "XYZ-" . date("dmYis") . "-ZYX"; 

			$mens = "--$boundary\n";
			$mens .= "Content-Transfer-Encoding: 8bits\n";
			$mens .= "Content-Type: text/html; charset=\"ISO-8859-1\"\n\n"; //plain
			$mens .= "$mensagem\n";
			$mens .= "--$boundary\n";
			$mens .= "Content-Type: ".$arquivo["type"]."\n"; 
			$mens .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n"; 
			$mens .= "Content-Transfer-Encoding: base64\n\n"; 
			$mens .= "$anexo\n"; 
			$mens .= "--$boundary--\r\n";
			$headers  = "MIME-Version: 1.0\n"; 
			$headers .= "From: \"$nome\" <$email_from>\r\n"; 
			$headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n"; 
			$headers .= "$boundary\n";
			mail ($recipient, $assunto, $mens, "From: $email\n$headers");
		} else {
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";//utf-8
			$headers .= "X-Mailer: PHP\n";
			$headers .= "From: Contato do Site: <$email>\r\n";
			mail ($recipient, $assunto, $mensagem, $headers);
		}
		// Modifiquei a classe porque a estou incluindo em outra classe q nao posso usar o header.
		// Caso queira usar normalmente habilitar o comando acima
		echo '<script>
				 function recarregar(url){window.location = url;} 
				 recarregar(" '.$_POST['site'].'?form=sucess");
		     </script>';
	    // exit;
	} else {
		echo '<script>
				 function recarregar(url){window.location = url;} 
				 recarregar(" '.$_POST['site'].'?form=error");
		     </script>';
         //Header( "Location: http://site.nassal.alfamaweb.com.br" );
   	} // sem preenchimento
?>
