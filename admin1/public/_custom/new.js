var cat = [];

function addcomment(e, form) {
    e.preventDefault();
    var formData = new FormData(form);
    postAsync(url + "tours/feedbacks", formData).then(function(response) {
        // console.log(response.data);


        if (response.data.status == true) {
            alert('Thank You for Your Valuable comment');
            $(form).trigger('reset');
            location.reload();

        }
    });
}

function addinquery(e, form) {
    $('#contact_b').html("sending");
    e.preventDefault();
    var formData = new FormData(form);
    postAsync(url + "contactus/inqueries", formData).then(function(response) {
        // console.log(response.data);


        if (response.data.status == true) {
            alert('We will get you soon...');
            $(form).trigger('reset');
            location.reload();

        }
    });
}

function selectCity(data) {
    // console.log(data.value);
    postAsync(url + "destinations/selectCity/" + data.value, null).then(function(response) {
        console.log(response.data);

        $('#city').html('');
        $.each(response.data, function(key, value) {

            $('#city').append(`<option value="${value.city}">${value.city}</option>`);
        });




    });
    postAsync(url + "destinations/getPrice/" + data.value + "", null).then(function(response) {
        // console.log(response.data);

        $('#price').html('');
        $.each(response.data, function(key, value) {

            $('#price').append(`<option value="${value.price}">${value.price}</option>`);
        });




    });

}

function filterForm(e, form) {
    e.preventDefault();
    var formData = new FormData(form);
    postAsync(url + "destinations/filtter", formData).then(function(response) {
        $('#load').html('');
        $.each(response.data, function(key, value) {
            // var id = ;
            $('#load').append(`
            <div class="tourmaster-item-list tourmaster-tour-full tourmaster-item-pdlr clearfix tourmaster-tour-frame">
            <div style="box-shadow: 5px 10px 8px 10px #888888;">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image">
                                                    <a href="${url}destinations/details/${value.id}"><img src="${PUBLIC_URL}images/destination/${value.image}" alt="" width="1280" height="580" /></a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap clearfix gdlr-core-skin-e-background">
                                                    <div class="tourmaster-content-left">
                                                        <h3 class="tourmaster-tour-title gdlr-core-skin-title"><a href="${url}destinations/details/${value.id}">${value.name}</a></h3>
                                                        <div class="tourmaster-tour-info-wrap clearfix">
                                                            <div class="tourmaster-tour-info tourmaster-tour-info-duration-text "><i class="icon_clock_alt"></i>${value.duration}</div>
                                                            <div class="tourmaster-tour-info tourmaster-tour-info-availability "><i class="fa fa-calendar"></i>Availability : Jan 16’ - Dec 16’</div>
                                                            <div class="tourmaster-tour-info tourmaster-tour-info-departure-location "><i class="flaticon-takeoff-the-plane"></i>${value.city}</div>
                                                        </div>
                                                        <div class="tourmaster-tour-content">${value.short_description}</div>
                                                    </div>
                                                    <div class="tourmaster-content-right tourmaster-center-tour-content">
                                                        <div class="tourmaster-tour-price-wrap "><span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$${value.price}</span></span>
                                                        </div>
                                                        <div class="tourmaster-tour-rating tourmaster-tour-rating-empty">0</div><a class="tourmaster-tour-view-more" href="${url}destinations/details/${value.id}">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
            `);
            void

            function() {

            }
        });

    });
}

function addcommenttofeedback(e, form) {
    e.preventDefault();
    var formData = new FormData(form);
    postAsync(url + "destinations/feedback", formData).then(function(response) {
        // console.log(response.data);


        if (response.data.status == true) {
            alert('Thank You for Your Valuable comment');
            $(form).trigger('reset');
            location.reload();

        }
    });
}

function register(e, form) {
    e.preventDefault();
    var formData = new FormData(form);
    var psw1 = $('#psw1').val();
    var psw2 = $('#psw2').val();
    // console.log(psw1,psw2);
    if (psw1 == psw2) {
        $('#contact_b').html("sending");

        postAsync(url + "user/register", formData).then(function(response) {
            // console.log(response.data);


            if (response.data.status == true) {

                alert('You are successfully registered on our site. Please check your email inbox to get your confirmation code.');
                window.open(url + "user/confirmation", "_self");
                // location.load(url + "user/confirmation");


            } else {
                alert('Your email address is all ready exist.. Use other email for registration');
                $(form).trigger('reset');
                $('#contact_b').html("Register Now");
            }
        });
    } else {
        alert("Password not equal...please re enter your password...!");
        $('#psw1').val("");
        $('#psw2').val("");
    }

}

function activateUser(e, form) {
    $('#contact_b').html("sending");
    e.preventDefault();
    var formData = new FormData(form);
    postAsync(url + "user/activateUser", formData).then(function(response) {
        // console.log(response.data);


        if (response.data.status == true) {
            alert('You user account successfully activated..!');
            window.open(url + "user/login", "_self");

        } else {
            alert('Confirmation code was wrong please check again..!');
        }
    });
}

function login(e, form) {
    $('#contact_b').html("sending");
    e.preventDefault();
    var formData = new FormData(form);
    postAsync(url + "user/makeSession", formData).then(function(response) {
        // console.log(response.data);


        if (response.data.status == true) {
            alert('Access Granted..!');
            window.open(url + "index", "_self");

        } else {
            alert('Email or Password invalid.try again..!');
            $(form).trigger('reset');
        }
    });
}