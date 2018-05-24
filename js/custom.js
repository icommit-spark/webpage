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
function populateCommits() {
    jQuery(document).ready(function() {

        "use strict";
        var session;
        $.ajaxSetup({
            cache: false
        });
        // get the session variable
        
        // will use this to disable the iCommit buttons of already commited ones
        $.get('database/getSessionData.php', function(data) {
            $('#leftRow').append('<div id="leftRow" class="row"><div class="col-md-6"><div class="item"><div class="probootstrap-featured-news-box"><div class="probootstrap-text"><h3><br> </h3><p>Call state senators about issues you care about.</p><p><a href="#" class="btn btn-primary iCommit">iCommit</a> <span class="enrolled-count">2,928 committed!</span></p></div></div></div><div class="item"><div class="probootstrap-featured-news-box"><div class="probootstrap-text"><h3><br> </h3><p>Call representatives about issues you care about.</p><p><a href="#" class="btn btn-primary iCommit">iCommit</a> <span class="enrolled-count">2,928 committed!</span></p></div></div></div></div>');
            session = $.parseJSON(data);
            console.log(session.username);
        });
    });
}