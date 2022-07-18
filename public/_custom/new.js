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
    console.log(data.value);
    postAsync(url + "attractions/selectCity/" + data.value, null).then(function(response) {
        console.log(response.data);

        $('#city').html('');
        $.each(response.data, function(key, value) {

            $('#city').append(`<option value="${value.city}">${value.city}</option>`);
        });




    });
    postAsync(url + "attractions/getPrice/" + data.value + "", null).then(function(response) {
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
    postAsync(url + "attractions/filtter", formData).then(function(response) {
        $('#loadattraction').html('');
        $.each(response.data, function(key, value) {
            // var id = ;
            $('#loadattraction').append(`<div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="trend-item2 rounded">
                        <a href="tour-single.html" style="background-image: url(${PUBLIC_URL}images/destination/destination17.jpg);"></a>
                        <div class="color-overlay"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="trend-content position-relative text-md-start text-center">
                        <small>${value.duration} Days</small>
                        <h3 class="mb-1"><a href="tour-single.html">${value.name}</a></h3>
                        <h6 class="theme mb-0"><i class="icon-location-pin"></i> ${value.city}</h6>
                        <p class="mt-4 mb-0">${value.distance} Km<br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="trend-content text-md-end text-center">
                         <br><br>
                        <div class="trend-price my-2">
                            <span class="mb-0">From</span>
                            <h3 class="mb-0">$${value.price}</h3>
                            <small>Per Adult</small>
                        </div>
                        <a href="${url}attractions/details/${value.id}" class="nir-btn">View Detail</a>
                    </div>
                </div>
            </div>
        </div>`);

        });

    });
}

function addcommenttofeedback(e, form) {
    e.preventDefault();
    var formData = new FormData(form);
    postAsync(url + "attractions/feedback", formData).then(function(response) {
        // console.log(response.data);


        if (response.data.status == true) {
            alert('Thank You for Your Valuable comment.Your comment will be appier after administrator review..');
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

function loadmore() {

    postAsync(url + "attractions/selectAll", null).then(function(response) {
        $('#loadattraction').html('');
        $('#all').html('All');
        $.each(response.data, function(key, value) {

            $('#loadattraction').append(`<div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="trend-item2 rounded">
                        <a href="tour-single.html" style="background-image: url(${PUBLIC_URL}images/destination/destination17.jpg);"></a>
                        <div class="color-overlay"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="trend-content position-relative text-md-start text-center">
                        <small>${value.duration} Days</small>
                        <h3 class="mb-1"><a href="tour-single.html">${value.name}</a></h3>
                        <h6 class="theme mb-0"><i class="icon-location-pin"></i> ${value.city}</h6>
                        <p class="mt-4 mb-0">${value.distance} Km<br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="trend-content text-md-end text-center">
                         <br><br>
                        <div class="trend-price my-2">
                            <span class="mb-0">From</span>
                            <h3 class="mb-0">$${value.price}</h3>
                            <small>Per Adult</small>
                        </div>
                        <a href="${url}attractions/details/${value.id}" class="nir-btn">View Detail</a>
                    </div>
                </div>
            </div>
        </div>`);

        });

    });

}

function loadless() {

    postAsync(url + "attractions/selectFive", null).then(function(response) {
        $('#loadattraction').html('');
        $('#all').html('1-5');
        $.each(response.data, function(key, value) {

            $('#loadattraction').append(`<div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="trend-item2 rounded">
                        <a href="tour-single.html" style="background-image: url(${PUBLIC_URL}images/destination/destination17.jpg);"></a>
                        <div class="color-overlay"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="trend-content position-relative text-md-start text-center">
                        <small>${value.duration} Days</small>
                        <h3 class="mb-1"><a href="tour-single.html">${value.name}</a></h3>
                        <h6 class="theme mb-0"><i class="icon-location-pin"></i> ${value.city}</h6>
                        <p class="mt-4 mb-0">${value.distance} Km<br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="trend-content text-md-end text-center">
                         <br><br>
                        <div class="trend-price my-2">
                            <span class="mb-0">From</span>
                            <h3 class="mb-0">$${value.price}</h3>
                            <small>Per Adult</small>
                        </div>
                        <a href="${url}attractions/details/${value.id}" class="nir-btn">View Detail</a>
                    </div>
                </div>
            </div>
        </div>`);

        });

    });

}