<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan</title>
<style>
    /* .title{
        text-align: center;
        font-size: 24px;
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    } */

    .title,
    .tanggal {
        text-align: center;
        font-size: 24px;
        font-family: sans-serif;
    }
/*
    #table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        bordr-collapse: collapse;
        width: 100%;
    } */

    #table td,
    table th {
        border: 1px solid #add;
        padding: 8px;
        font-size: 13px;
    }

    #table th:hover {
        background-color: #add;
    }

    #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #558595;
            color: white;
            font-size: 13px;
        }
</style>
</head>
<body>
<table width="500" border="0">
        <tr>
            <td>
             <center>
                <h1>Laporan Barang</h1>
             </center>
            </td>
        </tr>
    </table>
    <br></br>
    <table id="table"  width="100%">
    <tr>
        <th>Nama Barang</th>
        <th>Harga Awal</th>
        <th>Deskripsi</th>
    </tr>
    <?php
    $CI =& get_instance();
    foreach($laporan as $l) : ?>
            <tr>
                <td><?= $l->nama_barang; ?></td>
                <td><?= $l->harga_awal; ?></td>
                <td><?= $l->deskripsi_barang; ?></td>
            </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>