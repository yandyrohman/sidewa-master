<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <form method="POST" action="/import/bkd" enctype="multipart/form-data">
    @csrf()
    <input name="file" type="file">
    <button type="submit">IMPORT BKD</button>
  </form>

  <p>====</p>
  <form method="POST" action="/import/bpkad" enctype="multipart/form-data">
    @csrf()
    <input name="file" type="file">
    <button type="submit">IMPORT BPKAD</button>
  </form>

</body>
</html>