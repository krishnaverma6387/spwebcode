$(document).ready(function() {

    $("#submitForm").on('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this);
        if ($(this).parsley().isValid()) {
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $("#submitBtn").attr("disabled", true);
                    $('#submitSpin').show();
                },
                success: function(response) {
                    console.log(response);
                    $("#submitBtn").removeAttr("disabled");
                    $('#submitSpin').hide();
                    var response = JSON.parse(response);
                    if (response[0].isMsg == true) {
                        if (response[0].wayOfMsg == 'notify') {
                            $('.notifyjs-wrapper').remove();
                            $("#submitBtn").notify("" + response[0].msg + "", "" + response[0].res + "");
                        } else if (response[0].wayOfMsg == 'swal') {
                            Swal.fire("" + (response[0].res).charAt(0).toUpperCase() + (response[0].res).slice(1) + " !", "" + response[0].msg + "", "" + response[0].res + "");
                        }
                    }

                    if (response[0].isRedirect == true) {
                        if (response[0].wayOfRedirect == 'reload') {
                            window.setTimeout(function() {
                                window.location.reload();
                            }, 800);
                        } else if (response[0].wayOfRedirect == 'redirect') {
                            window.setTimeout(function() {
                                window.location.href = response[0].redirectLink;
                            }, 800);
                        }
                    }
                },
                error: function() {
                    // window.location.reload();
                    $("#submitBtn").removeAttr("disabled");
                    $('#submitSpin').hide();
                    console.log('Something Went Wrong ! Please Try Again.');
                }
            });
        } else {
            return false;
        }

    });


});

/******************************
---------Extra Without Form---
*******************************/
function Status(e, url, table, where_column, where_value, column, value, status) {
    if ($(e).prop("checked")) {
        var status = 'Activate';
        var value = 'true';
    } else {
        var status = 'Deactivate';
        var value = 'false';
    }
    isStatus(url, table, where_column, where_value, column, value, status);
}

function isStatus(url, table, where_column, where_value, column, value, status) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to " + status + " this ! ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, ' + status + ' it!'
    }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                type: 'POST',
                url: url,
                data: { 'table': table, 'where_column': where_column, 'where_value': where_value, 'column': column, 'value': value },
                success: function(response) {
                    console.log(response);
                    var response = JSON.parse(response);
                    if (response[0].isMsg == true) {
                        if (response[0].wayOfMsg == 'notify') {
                            $('.notifyjs-wrapper').remove();
                            $.notify("" + response[0].msg + "", "" + response[0].res + "");
                        } else if (response[0].wayOfMsg == 'swal') {
                            Swal.fire("" + (response[0].res).charAt(0).toUpperCase() + (response[0].res).slice(1) + " !", "" + response[0].msg + "", "" + response[0].res + "");
                        }
                    }

                    if (response[0].isRedirect == true) {
                        if (response[0].wayOfRedirect == 'reload') {
                            window.setTimeout(function() {
                                window.location.reload();
                            }, 800);
                        } else if (response[0].wayOfRedirect == 'redirect') {
                            window.setTimeout(function() {
                                window.location.href = response[0].redirectLink;
                            }, 800);
                        }
                    }
                },
                error: function() {
                    console.log('Something Went Wrong ! Please Try Again.');
                }
            });

        }
    })
}

function isDelete(url, table, where_column, where_value, unlink_folder, unlink_column) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to Delete this ! ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                type: 'POST',
                url: url,
                data: { 'table': table, 'where_column': where_column, 'where_value': where_value, 'unlink_folder': unlink_folder, 'unlink_column': unlink_column },
                success: function(response) {
                    console.log(response);
                    var response = JSON.parse(response);
                    if (response[0].isMsg == true) {
                        if (response[0].wayOfMsg == 'notify') {
                            $('.notifyjs-wrapper').remove();
                            $.notify("" + response[0].msg + "", "" + response[0].res + "");
                        } else if (response[0].wayOfMsg == 'swal') {
                            Swal.fire("" + (response[0].res).charAt(0).toUpperCase() + (response[0].res).slice(1) + " !", "" + response[0].msg + "", "" + response[0].res + "");
                        }
                    }

                    if (response[0].isRedirect == true) {
                        if (response[0].wayOfRedirect == 'reload') {
                            window.setTimeout(function() {
                                window.location.reload();
                            }, 800);
                        } else if (response[0].wayOfRedirect == 'redirect') {
                            window.setTimeout(function() {
                                window.location.href = response[0].redirectLink;
                            }, 800);
                        }
                    }
                },
                error: function() {
                    console.log('Something Went Wrong ! Please Try Again.');
                }
            });

        }
    })
}