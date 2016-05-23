jQuery(document).ready(function() {
 
	//sliders imagen destacado:
	
	jQuery('#slider_image_trigger').on('click', function() {
			window.send_to_editor = function(html) {
			//imgurl = jQuery('img',html).attr('src');
			
			var regex = /<img.*?src=['"](.*?)['"]/;
			var imgurl = regex.exec(html)[1];

			jQuery('#slider_image').val(imgurl);
			jQuery('#slider_image_actual').attr('src', imgurl);
			tb_remove();
		}
		tb_show('', 'media-upload.php?post_id=1&amp;type=image&amp;TB_iframe=true');
		return false;
	});

	//sliders imagen alternativa móviles:
	
	jQuery('#slider_mobile_image_trigger').on('click', function() {
			window.send_to_editor = function(html) {
			//imgurl = jQuery('img',html).attr('src');
			
			var regex = /<img.*?src=['"](.*?)['"]/;
			var imgurl = regex.exec(html)[1];

			jQuery('#slider_mobile_image').val(imgurl);
			jQuery('#slider_mobile_image_actual').attr('src', imgurl);
			tb_remove();
		}
		tb_show('', 'media-upload.php?post_id=1&amp;type=image&amp;TB_iframe=true');
		return false;
	});

	//artistas imagen banner destacado:
	
	jQuery('#artist_image_trigger').on('click', function() {
			window.send_to_editor = function(html) {
			var regex = /<img.*?src=['"](.*?)['"]/;
			var imgurl = regex.exec(html)[1];

			jQuery('#artist_image').val(imgurl);
			jQuery('#artist_image_actual').attr('src', imgurl);
			tb_remove();
		}
		tb_show('', 'media-upload.php?post_id=1&amp;type=image&amp;TB_iframe=true');
		return false;
	});

	//artistas imagen listados:
	
	jQuery('#artist_image_lists_trigger').on('click', function() {
			window.send_to_editor = function(html) {
			var regex = /<img.*?src=['"](.*?)['"]/;
			var imgurl = regex.exec(html)[1];

			jQuery('#artist_image_lists').val(imgurl);
			jQuery('#artist_image_actual_lists').attr('src', imgurl);
			tb_remove();
		}
		tb_show('', 'media-upload.php?post_id=1&amp;type=image&amp;TB_iframe=true');
		return false;
	});

	// launches_pictures
	
	jQuery('#launchesPictures').delegate('.launches_pictures_trigger', 'click', function() {

		var screenshotId = parseInt(jQuery(this).attr('data-rel'));

		window.send_to_editor = function(html) {
			//imgurl = jQuery('img',html).attr('src');
			var regex = /<img.*?src=['"](.*?)['"]/;
			var imgurl = regex.exec(html)[1];
console.log(imgurl);
			jQuery('#launches_pictures-'+screenshotId).val(imgurl);
			jQuery('#launches_pictures_image-'+screenshotId).attr('src', imgurl);
			tb_remove();
		}
		tb_show('', 'media-upload.php?post_id=1&amp;type=image&amp;TB_iframe=true');
		return false;
	});
	
	// location add new screenshots:	
	jQuery('#addLaunchesPictures').on('click', function() {
		
		var screenshotId = parseInt(jQuery(this).attr('data-rel'));
		var table = jQuery('table#launchesPictures');
		
		jQuery(this).attr('data-rel', screenshotId+1);
				
		$tr = 	"<tr>";
		$tr +=	"	<td style=\"vertical-align: top;\">";
		$tr +=	"		<label for=\"launches_pictures\">Imagen " + parseInt(screenshotId+1) + ":</label>";
		$tr +=	"		<p><input type=\"text\" value=\"\" name=\"launches_pictures[" + screenshotId + "]\" id=\"launches_pictures-" + screenshotId + "\" style=\"width:98%\" /></p>";
		$tr +=	"		<p><button class=\"launches_pictures_trigger button button-primary\" data-rel=\"" + screenshotId + "\">Subir imagen</button>";
		$tr +=	"		<a href=\"#\" class=\"deletePicture button\" rel=\"" + screenshotId + "\"><span class=\"dashicons dashicons-trash\"></span> Eliminar imagen " + parseInt(screenshotId+1) + "</a></p>";
		$tr +=	"	</td>";
		$tr +=	"	<td style=\"vertical-align: top;\" align=\"right\">";
		$tr +=	"		<img src=\"\" alt=\"\" id=\"launches_pictures_image-" + screenshotId + "\"  style=\"width: 300px\"/></p>";
		$tr +=	"	</td>";
		$tr +=	"</tr>";

		table.append($tr);
		
		return false;
	});

	//delete valor imagen uploader
	jQuery('#launchesPictures').delegate('a.deletePicture', 'click', function() {
		var rel = jQuery(this).attr('rel');
		jQuery('#launches_pictures-'+rel).attr('value', '');
		//jQuery('#launches_pictures_image-'+rel).remove();
		jQuery(this).parent('p').parent('td').parent('tr').remove();
		var screenshotId = parseInt(jQuery('#addLaunchesPictures').attr('data-rel'));
		jQuery('#addLaunchesPictures').attr('data-rel', screenshotId-1);
		return false;
	});

});
