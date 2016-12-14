<!DOCTYPE html>
<html>
<body>

<form action="/imageupload" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    {{ csrf_field() }}
</form>

</body>
</html>