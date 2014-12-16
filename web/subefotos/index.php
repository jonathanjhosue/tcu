<?php 
//require_once("connection.php");
//RS Albums
/*
mysql_select_db($database_cnx_2night,$cnx_2night);
$qr_album="SELECT id, nombre FROM tblAlbum ORDER BY id DESC";
$rs_album=mysql_query($qr_album,$cnx_2night)or die(mysql_error());
$row_album=mysql_fetch_assoc($rs_album);
$total_album=mysql_num_rows($rs_album);
 * *
 */
?>


<link href="css/swfupload.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/swfupload.js"></script>
<script type="text/javascript" src="js/swfupload.queue.js"></script>
<script type="text/javascript" src="js/fileprogress.js"></script>
<script type="text/javascript" src="js/handlers.js"></script>
<script type="text/javascript">
		var swfu;

		window.onload = function() {
			var settings = {
				flash_url : "js/swfupload.swf",
				upload_url: "upload.php",	// Relative to the SWF file
				post_params: {"PHPSESSID" : "<?php echo session_id(); ?>","galeria_id" : "<?php echo $_GET['galeria'];?>"},
				file_size_limit : "100 MB",
				file_types : "*.*",
				file_types_description : "All Files",
				file_upload_limit : 100,
				file_queue_limit : 0,
				custom_settings : {
					progressTarget : "fsUploadProgress",
					cancelButtonId : "btnCancel"
				},
				debug: false,

				// Button settings
				button_image_url: "images/upload_btn.png",	// Relative to the Flash file
				button_width: "88",
				button_height: "29",
				button_placeholder_id: "spanButtonPlaceHolder",
				button_text: '<span class="theFont">  </span>',
				button_text_style: ".theFont { font-size: 12px;}",
				button_text_left_padding: 12,
				button_text_top_padding: 3,
				
				// The event handler functions are defined in handlers.js
				file_queued_handler : fileQueued,
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_start_handler : uploadStart,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				queue_complete_handler : queueComplete	// Queue plugin event
			};

			swfu = new SWFUpload(settings);
	     };
</script>




<table width="600" align="center" class="txt">
  <tr>
    <td colspan="2">
    <form id="form1" action="" method="post" enctype="multipart/form-data">
		<p>Elija aqu&iacute; las fotos que va a subir. <br/>
                    Cuando terminen los env&iacute;os puede abandonar esta secci&oacute;n</p>

			<div class="fieldset flash" id="fsUploadProgress">
			<span class="legend">Archivos pendientes</span>			</div>
		<div id="divStatus">0 Archivos Subidos</div>
			<div>
				<span id="spanButtonPlaceHolder"></span>
				<br />
                <br />
                <input id="btnCancel" type="button" value="Cancelar envíos" onclick="swfu.cancelQueue();" disabled="disabled" style="font-size: 8pt; height: 29px;" />
			</div>
            </form> 
            </td>
    </tr>
</table>
