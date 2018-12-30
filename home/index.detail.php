<?php
require_once('../database/db.php');
    $result = '';
    $hasil  = array();

    $query = "SELECT * FROM fakta_pembayaran 
        JOIN waktu USING(id_waktu) 
        JOIN pegawai USING(id_pegawai) 
        JOIN nasabah USING(id_nasabah) ";

    if(isset($_POST["date"]))
	{
		$query .= " WHERE tahun IN (".$_POST['year'].") AND bulan IN (".$_POST['month'].") ";
    }
    
    $statement = $connection->prepare($query);
    $statement->execute();
    $detailData = $statement->fetchAll(PDO::FETCH_OBJ);
    $total  = 0;
    $count  = 0;
    $result.= '
    <table class="table">
        <thead class="text-primary">
            <tr>
                <th>Tanggal</th>
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Nasabah</th>
                <th>Pegawai</th>
                <th>Jumlah Bayar</th>
            </tr>
        </thead>
    	<tbody>';

    
    foreach($detailData as $data){    
    $result .=  '
    <tr>
        <td width="15%">'.$data->tanggal.'</td>
        <td width="15%">'.$data->tahun.'</td>
        <td width="15%">'.$data->nama_bulan.'</td>
        <td>'.$data->nama_nasabah.'</td>
        <td>'.$data->nama_pegawai.'</td>
        <td>'.$data->jumlah_pembayaran.'</td>
    </tr>';
    $total   = $total + $data->jumlah_pembayaran;
    $count++;
    }

    $result .= '</tbody>';

    if(!empty($detailData)){
        $hasil["data"]  = $result;
        $hasil["total_data"] = 'Rp. '.$total;
        $hasil["jumlah"] = $count;

        echo json_encode($hasil);
    }
    else {
        $hasil["data"]  = "<h4><center>DATA TIDAK DITEMUKAN!</center></h4>";
        $hasil["total_data"] = "404 Not Found";
        $hasil["jumlah"] = $count;

        echo json_encode($hasil);
    }
?>