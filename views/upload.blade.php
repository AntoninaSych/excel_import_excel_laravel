<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Excel</title>
</head>
<body>
<form action="ImportClients" method="post" enctype="multipart/form-data">
    <label>Upload file :</label><br>
    <input type="file" name="file"><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
<input type="submit" value="Upload">
</form>
</body>
</html>