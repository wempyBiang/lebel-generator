<!DOCTYPE html>
<html>
<head>
    <title>Upload Excel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Print Lebel</h1>
    <section class="section-box">
        <h2>Regular Label</h2>
        <form action="/import" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="lebel">
            <button type="submit">Upload</button>
        </form>
    </section>

    <section class="section-box">
        <h2>Grosir Label</h2>
        <form action="/grosir" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="lebel">
            <button type="submit">Upload</button>
        </form>
    </section>
</body>
</html>