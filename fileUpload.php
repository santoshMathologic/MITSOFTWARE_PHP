
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Administration Panel</title>

<script type="text/javascript">

function setnewpicidvalue(divid)
{
clickid = "imageuploadform" + divid;
document.getElementById(clickid).click();
}
</script>
</head>
<body>
<form id="uploadform1" name="form1" action="DocumentFileUpoad.php" method="post" enctype="multipart/form-data" target="upload_target1" onChange="this.submit()" onSubmit="startUpload();">
		<div id="uploadpic1" class="thumbimgtest">
			<a href=""  onClick="setnewpicidvalue('1');">
			<img class="thumb" src="" alt="filenotF">
			</a>
			<input class="imageselectinput" id="imageuploadform1" type="file" name="picture" />
		</div>
		<input type="hidden" name="divid" value="1">
		<div><input type="submit" value="SUBMIT" /></div>
	</form>
    </body>