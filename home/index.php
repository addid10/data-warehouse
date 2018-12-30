<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../layout/head.php'); ?>
</head>

<body class="">
    <div class="wrapper ">
        <!-- Sidebar -->
        <?php require_once('../layout/sidebar.php'); ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php require_once('../layout/navigation.php'); ?>

            <!-- Tabel -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">DATA WAREHOUSE INSURANCE</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row" style="width:100%">
                                    <div class="col-sm-4">
                                        <select name="year" class="form-control" id="year">
                                            <option value="2016,2017,2018">Pilih Tahun</option>
                                            <?php require_once('index.year.php'); ?>
                                            <?php foreach($years as $data): ?>
                                            <option value="<?=$data->tahun?>">
                                                <?=$data->tahun?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="month" class="form-control" id="month">
                                            <option value="1,2,3,4,5,6,7,8,9,10,11,12">Pilih Bulan</option>
                                            <?php require_once('index.month.php'); ?>
                                            <?php foreach($months as $data): ?>
                                            <option value="<?= $data->bulan ?>">
                                                <?=$data->nama_bulan?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <button id="searchButton" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div id="tableData"></div>
                                </div>
                                <div class="d-flex bd-highlight">
                                    <div class="mr-auto p-2 bd-highlight">
                                        <h3>Total</h3>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <h3><span id="totalData"></span></h3>
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mb-3">
                                    <div class="mr-auto p-2 bd-highlight">
                                        <h3>Jumlah Records</h3>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <h3><span id="totalRecords"></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <?php require_once('../layout/javascript.php'); ?>
    <script src="home.js"></script>
</body>

</html>