<?php
require_once DVWA_LEVEL_HIGH_HEADERS;
if (isset($_POST['Upload'])) {

			$target_path 	= DVWA_WEB_PAGE_TO_ROOT."hackable/uploads/";
			$uploaded_name 	= $_FILES['uploaded']['name'];
			$check 	= $_FILES['uploaded']['tmp_name'];
			$uploaded_size 	= $_FILES['uploaded']['size'];
			$uploaded_type 	= $_FILES['uploaded']['type'];
			$uploaded_ext 	= substr($uploaded_name, strrpos($uploaded_name, '.') + 1);
			$target_path 	= $target_path . md5(uniqid()).".".$uploaded_ext;
			

			if (($uploaded_ext == "jpg" || $uploaded_ext == "JPG" || $uploaded_ext == "jpeg" || $uploaded_ext == "JPEG") && ($uploaded_size < 100000) && ($uploaded_type == "image/jpeg") && getimagesize($check)){


				if(!move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path)) {
					
					$html .= '<pre>';
					$html .= 'Your image was not uploaded.';
					$html .= '</pre>';
				
      			} else {
				
					$html .= '<pre>';
					$html .= $target_path . ' succesfully uploaded!';
					$html .= '</pre>';
					
					}
			}
			
			else{
				
				$html .= '<pre>';
				$html .= 'Your image was not uploaded.';
				$html .= '</pre>';

			}
		}

?>
