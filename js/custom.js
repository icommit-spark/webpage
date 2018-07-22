jQuery(document).ready(function() {

    "use strict";
    // Your custom js code goes here.
    // After clicking on the login button (the id is login), open a modal for registration/signin

    // $("#login-button-clicker").leanModal({
    // 	top: 100,
    // 	overlay: 0.6,
    // 	closeButton: ".modal_close"
    // });
    // $('#modal').parent().on('show.bs.modal', function(e){ $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); })

    $('#login-button-clicker').click(function(e) {
        $('#modal').show();
    });
    // });
    // On the press of the closeModal button, hide the modal
    $("#closeModal").click(function(e) {
        $("#modal").hide();
        // window.open();
    });
    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

    // for adding commits
    $('.iCommit').on('click', function() {
        var commitment = $(this).parent().prev().text();
        console.log(commitment);
    });

    // for profile page

    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if (idFor.is(':visible')) {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            } else {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

});
// populate commits on different pages
function populateCommits(topic) {
    jQuery(document).ready(function() {
        "use strict";
        var session;
        $.ajaxSetup({
            cache: false
        });
        // get the session variable

        // will use this to disable the iCommit buttons of already commited ones
        $.get('database/getSessionData.php', function(msg) {
            session = $.parseJSON(msg);
            var pledges = $.ajax({
                url: "database/getPledges.php",
                type: "POST",
                data: {
                        username: session.username,
                        category: topic
                    },
                dataType: "json"
            });
            // console.log(pledges);
            pledges.done(function(pledge) {
                console.log(pledge);
                // populate the pledges from the table
                $.each(pledge, function(index, value) {
                    var getPledgedStatus = $.ajax({
                        url: "database/getPledgedStatus.php",
                        type: "POST",
                        data: {
                            username: session.username,
                            pledgeText: value.pledgeText,
                            category: topic
                        },
                        dataType: "json"
                    });
                    if (value.status == 'False') {
                        var timeStatus = '<small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> ' + moment(value.creation_date).fromNow() + '</i></a></small></small>'
                        $('#pledgesTable').append('<tr><td>' + value.id + '</td><td>' + value.category + '</td><td>' + value.pledgeText + '</td><td></td><td>' + value.points + '</td><td>' + timeStatus + '</td></tr>')
                    } else {
                        var timeStatus = '<small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> ' + moment(value.completion_date).fromNow() + '</i></a></small></small>'
                        $('#pledgesTable').append('<tr><td>' + value.id + '</td><td>' + value.category + '</td><td>' + value.pledgeText + '</td><td><input type="checkbox"><span> Pledged</span></td><td>' + value.points + '</td><td>' + timeStatus + '</td></tr>')
                    }
                    getPledgedStatus.done(function(pledgeStatusValue) {
                        var currIndex = index + 1;
                        console.log(pledgeStatusValue)
                        // if the current status is incomplete or true, tick the checkbox
                        if (pledgeStatusValue.status == 'True' || 'Incomplete') {
                            $('#pledgesTable tr:eq('+currIndex+') td:eq(3)').html('<input type="checkbox" checked><span> Pledged</span>');
                        } else {
                            $('#pledgesTable tr:eq('+currIndex+') td:eq(3)').html('<input type="checkbox"><span> Pledged</span>');
                        }
                    });
                    getPledgedStatus.fail(function(jqXHR, textStatus){
                        console.log( "Request Failed1: " + textStatus);
                    });
                });
                // create a datatable for the pledges
                $('#pledgesTable').DataTable();
                // using delegate for dynamically created content
                $("#pledgesTable").on('click',"input[type='checkbox']", function (e) {
                    var pledgeId = $(this).closest('tr').find('td:first').text();
                    var pledgeText = $(this).closest('tr').find('td:nth-child(3)').text();
                    var pledgeStatusChange = $(this).closest('tr').find('td:nth-child(4)').find('span:first').text(' Pledged');
                    var pledgeScore = $(this).closest('tr').find('td:nth-child(5)').text();
                    if($(this).is(":checked")) {
                        // set the status to Complete
                        var statusBool = 'Incomplete';
                    } else {
                        // set the status text to Incomplete
                        var statusBool = 'False';
                    }
                    // change the status of the pledge to true or false in the database
                    // using the id of the pledge and the value of the pledge
                    // to-do dynamically change the "Time" to the updated one
                    var pledgeChangeAjax = $.ajax({
                            url: "database/addToPledges.php",
                            type: "POST",
                            data: {
                                pledgeId: pledgeId,
                                pledgeText:pledgeText,
                                pledgeStatus: statusBool,
                                pledgeScore: pledgeScore,
                                category: topic
                            },
                            dataType: "json"
                    });
                    pledgeChangeAjax.done(function(change){
                        console.log(change);
                    });
                    pledgeChangeAjax.fail(function(jqXHR, textStatus){
                        console.log( "Request Failed2: " + textStatus);
                    });
                });
            });
            pledges.fail(function(jqXHR, textStatus){
                console.log( "Request Failed3: " + textStatus);
            });
            session = $.parseJSON(msg);
        });
    });
}