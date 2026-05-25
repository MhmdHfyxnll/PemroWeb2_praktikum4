<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            padding:40px;
        }

        .container{
            max-width:1000px;
            margin:auto;
        }

        h1{
            margin-bottom:30px;
        }

        .top-action{
            margin-bottom:20px;
        }

        .btn{
            display:inline-block;
            padding:10px 18px;
            border-radius:8px;
            text-decoration:none;
            color:white;
            margin-bottom:20px;
        }

        .btn-add{
            background:#28a745;
        }

        .btn-edit{
            background:#007bff;
        }

        .btn-delete{
            background:#dc3545;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            border-radius:10px;
            overflow:hidden;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        table th,
        table td{
            padding:15px;
            border-bottom:1px solid #ddd;
            text-align:left;
        }

        table th{
            background:#333;
            color:white;
        }

        .search-box{
            margin-bottom:20px;
        }

        .search-box input{
            padding:10px;
            width:300px;
            border-radius:8px;
            border:1px solid #ccc;
        }

        .search-box button{
            padding:10px 15px;
            border:none;
            background:#007bff;
            color:white;
            border-radius:8px;
            cursor:pointer;
        }

        .pagination{
            margin-top:20px;
        }

    </style>
</head>
<body>

<div class="container">

    <h1><?= $title; ?></h1>

    <form method="get" class="search-box">

        <input type="text"
               name="q"
               value="<?= $q; ?>"
               placeholder="Cari artikel">

        <button type="submit">
            Cari
        </button>

    </form>

    <div class="top-action">

        <a class="btn btn-add"
           href="/admin/artikel/add">
            + Tambah Artikel
        </a>

        <a class="btn btn-delete"
           href="/user/logout"
           style="margin-left:10px;">
            Logout
        </a>

    </div>

    <table>

        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>

        <?php foreach($artikel as $row): ?>

        <tr>

            <td><?= $no++; ?></td>

            <td><?= $row['judul']; ?></td>

            <td>

                <a class="btn btn-edit"
                   href="/admin/artikel/edit/<?= $row['id']; ?>">
                   Edit
                </a>

                <a class="btn btn-delete"
                   href="/admin/artikel/delete/<?= $row['id']; ?>">
                   Hapus
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </table>

    <div class="pagination">
        <?= $pager->only(['q'])->links(); ?>
    </div>

</div>

</body>
</html>