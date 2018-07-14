<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->

<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iCommit</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
    <link rel="stylesheet" href="css/custom.css">
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
<div class="mainbody container-fluid">
    <?php
    $current = 'profile';
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
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

            </div>
            <div><button id="printPledges" type="button" class="btn btn-success">Print</button></div>
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
        $('#listPledges').append('<div class="panel-body"><div class="pull-left"><a href="#"><img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;"></a></div><h4><a href="#" style="text-decoration:none;"><strong id=usernameText>' + msg.username + '</strong></a></h4><hr><div class="post-content"><p id="completedPledges">Completed Pledges:</p><hr><p id="incompletePledges">Incomplete Pledges:</p></div></div>');
        pledges.done(function(pledge) {
            $.each(pledge, function(index, value) {
                if (value.status == 'False' || value.status == 'Incomplete') {
                    console.log();
                    $('#incompletePledges').append('<ul>' + value.pledgeText + ' – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> ' + moment(value.creation_date).fromNow() + ' </i></a></small></small></ul>');
                } else {
                    $('#completedPledges').append('<ul>' + value.pledgeText + ' – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> ' + moment(value.completion_date).fromNow() + '</i></a></small></small></ul>');
                }
                console.log(value.status);
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

$('#printPledges').on("click", function() {
    window.print();
})
</script>