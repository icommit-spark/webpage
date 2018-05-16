<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iCommit</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/datatables.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <link rel="stylesheet" href="css/custom.css">
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css"> -->
<div class="mainbody container-fluid">
    <?php
    session_start();
    include 'include/header.php';
    include 'include/navbar.php';
    ?>

    <div class="row">
        <div style="padding-top:30px;"> </div>
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h3><strong>Bio</strong></h3>
                            <textarea rows="7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</textarea>
                            <hr>
                            <h3><strong>Location</strong></h3>
                            <p>Earth</p>
                            <hr>
                            <h3><strong>Gender</strong></h3>
                            <p>Unknown</p>
                            <hr>
                            <h3><strong>Birthday</strong></h3>
                            <p>January 01 1901</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span>
                        <h1 id="usernameText" class="panel-title pull-left" style="font-size:30px;"> <small id='emailText'></small> <i class="fa fa-check text-success" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="John Doe is sharing with you"></i></h1>
                    </span>
                    <br><br>
                </div>
            </div>
            <hr>
            <!-- Simple post content example. -->
            <div id="listPledges" class="panel panel-default">
                <table id="pledgesTable" class="display" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Pledge</th>
                            <th>Status</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
// ajax call to get the session data
var session;
$.ajaxSetup({cache: false})
// get the session variable
$.get('database/getSessionData.php', function (data) {
    // parse the values as json
    session = $.parseJSON(data);
    // get the profile data as json by passing the username
    var request = $.ajax({
      url: "database/getProfileData.php",
      type: "POST",
      data: {username : session.username},
      dataType: "json"
    });
    request.done(function(msg) {
        // update the username dynamically
        $('#usernameText').text('Welcome, ' + msg.username).append(' <small>('+msg.email_address+')</small>');
        // append different pledges to the page
        var pledges = $.ajax({
            url: "database/getPledges.php",
            type: "POST",
            data: {username: msg.username},
            dataType: "json"
        });
        pledges.done(function(pledge) {
            // populate the pledges from the table
            $.each(pledge, function(index, value) {
                if (value.status == 'False') {
                    var timeStatus = '<small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> ' + moment(value.creation_date).fromNow() + '</i></a></small></small>'
                    $('#pledgesTable').append('<tr><td>' + value.id + '</td><td>' + value.category + '</td><td>' + value.pledge + '</td><td><input type="checkbox"><span> Incomplete</span></td><td>' + timeStatus + '</td></tr>')
                } else {
                    var timeStatus = '<small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> ' + moment(value.completion_date).fromNow() + '</i></a></small></small>'
                    $('#pledgesTable').append('<tr><td>' + value.id + '</td><td>' + value.category + '</td><td>' + value.pledge + '</td><td><input type="checkbox" checked><span> Complete</span></td><td>' + timeStatus + '</td></tr>')
                }
            });
            // create a datatable for the pledges
            $('#pledgesTable').DataTable();

            $("input[type='checkbox']").on('click', function (e) {
                var pledgeId = $(this).closest('tr').find('td:first').text();
                if($(this).is(":checked")) {
                    var pledgeStatusChange = $(this).closest('tr').find('td:nth-child(4)').find('span:first').text(' Complete');
                    var statusBool = 'True';
                } else {
                    // var pledgeId = $(this).closest('tr').find('td:first').text();
                    var pledgeStatusChange = $(this).closest('tr').find('td:nth-child(4)').find('span:first').text(' Incomplete');
                    var statusBool = 'False';
                }
                // change the status of the pledge to true or false in the database
                var pledgeChangeAjax = $.ajax({
                        url: "database/changePledges.php",
                        type: "POST",
                        data: {pledgeId: pledgeId, status: statusBool},
                        dataType: "json"
                });

                pledgeChangeAjax.done(function(change){
                    console.log(change);
                });
            });
        });
        pledges.fail(function(jqXHR, textStatus){
            alert( "Request Failed: " + textStatus);
        });



        // console.log(msg);
    });
    request.fail(function(jqXHR, textStatus) {
      alert( "Request failed: " + textStatus );
    });


});
</script>