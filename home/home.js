$(document).ready(function () {
    $.ajax({
        url: "index.detail.php",
        type: "POST",
        dataType: "json",
        success: function (data) {
            $('#tableData').html(data.data);
            $('#totalData').html(data.total_data);
            $('#totalRecords').html(data.jumlah);
        }
    })
})

$('#searchButton').click(function () {
    let month = $('#month').val();
    let year = $('#year').val();
    let date = 1;

    $.ajax({
        url: "index.detail.php",
        type: "POST",
        data: {
            month: month,
            year: year,
            date: date
        },
        dataType: "json",
        success: function (data) {
            $('#tableData').html(data.data);
            $('#totalData').html(data.total_data);
            $('#totalRecords').html(data.jumlah);
        }
    })
})