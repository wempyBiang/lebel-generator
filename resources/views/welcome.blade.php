<!DOCTYPE html>
<html>
<head>
    <title>Upload Excel</title>
    
</head>
<body>
    <form action="/import" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="lebel">
        <button type="submit">Upload</button>
    </form>
</body>
</html>