<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel</title>

    <style>

        body{
            font-family:Arial;
            background:#f4f4f4;
            padding:40px;
        }

        .container{
            max-width:700px;
            margin:auto;
            background:white;
            padding:30px;
            border-radius:12px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        input[type=text],
        textarea{
            width:100%;
            padding:12px;
            margin-top:10px;
            margin-bottom:20px;
            border:1px solid #ccc;
            border-radius:8px;
        }

        button{
            background:#007bff;
            color:white;
            border:none;
            padding:12px 20px;
            border-radius:8px;
            cursor:pointer;
        }

    </style>
</head>
<body>

<div class="container">

    <h1>Edit Artikel</h1>

    <form action="" method="post">

        <p>Judul Artikel</p>

        <input type="text"
               name="judul"
               value="<?= $artikel['judul']; ?>">

        <p>Isi Artikel</p>

        <textarea name="isi"
                  rows="10"><?= $artikel['isi']; ?></textarea>

        <button type="submit">
            Update Artikel
        </button>

    </form>

</div>

</body>
</html>