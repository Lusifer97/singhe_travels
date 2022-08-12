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
    var psw1 = $('#lpass1').val();
    var psw2 = $('#lrepass').val();
    // console.log(psw1,psw2);

    if (psw1 == psw2) {
        $('.nir-btn').html("sending");
        if ($('.custom-control-input').is(":checked")) {
            postAsync(url + "user/register", formData).then(function(response) {
                // console.log(response.data);


                if (response.data.status == true) {

                    alert('You are successfully registered on our site. Please check your email inbox to get your confirmation code.');
                    $('#contactform1').html('');
                    $('#contactform1').append(`<form onsubmit="activateUser(event,this)">
                    <div class="form-group mb-2">
                        <input type="text" name="c_code" class="form-control"  placeholder="Confirmation Code">
                    </div>
                    <div class="comment-btn mb-2 pb-2 text-center border-b">
                        <input type="submit" class="nir-btn w-100" id="submit3" value="Submit">
                    </div>
                </form>`);
                    // window.open(url + "user/confirmation", "_self");
                    // location.load(url + "user/confirmation");


                } else {
                    alert('Your email address is all ready exist.. Use other email for registration');
                    $(form).trigger('reset');
                    $('#contact_b').html("Register Now");
                }
            });
        } else {
            alert("Please read our terms & conditions");
        }

    } else {
        alert("Password not equal...please re enter your password...!");
        $('#lpass1').val("");
        $('#lrepass').val("");
    }





}

function activateUser(e, form) {
    $('#submit3').html("sending");
    e.preventDefault();
    var formData = new FormData(form);
    postAsync(url + "user/activateUser", formData).then(function(response) {
        // console.log(response.data);


        if (response.data.status == true) {
            alert('You user account successfully activated..! Please login again to proceed..');
            window.open(url, "_self");

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
            window.open(url, "_self");

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

function loadm() {

    postAsync(url + "packages/selectAll", null).then(function(response) {

        $('#loadpackages').html('');
        $('#pall').html('All');
        $.each(response.data, function(key, value) {

            $('#loadpackages').append(`<div  class="col-lg-6 col-md-6 mb-4 mainp">
            <div class="trend-item rounded box-shadow">
                <a href="${url}packages/details/${btoa(value.id)}">
                    <div class="trend-image position-relative">
                        <img src="${PUBLIC_URL}images/trending/trending2.jpg" alt="image" class="">
                        <div class="color-overlay"></div>
                    </div>
                    <div class="trend-content p-4 pt-5 position-relative">
                        <div class="trend-meta bg-theme white px-3 py-2 rounded">
                            <div class="entry-author">
                                <i class="icon-calendar"></i>
                                <span class="fw-bold"> ${value.duration} Days Tours</span>
                            </div>
                        </div>
                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> ${value.status}</h5>
                        <h3 class="mb-1"><a href="${url}packages/details/${btoa(value.id)}">${value.name}</a></h3>

                        <p class=" border-b pb-2 mb-2">${value.description.substr(0,60)}..</p>
                        <div class="entry-meta">
                            <div class="entry-author d-flex align-items-center">
                                <p class="mb-0"><span class="theme fw-bold fs-5"> $${value.price}.00</span> | Per person</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>`);

        });
        $('#loadpackages').append(`<div class="col-lg-12">
        <div class="text-center">

            <button id="ls" onclick="loadl()" class="nir-btn"><i class="fa fa-long-arrow-alt-left"></i> Load Less </button>
            <button id="lm" onclick="loadm()" class="nir-btn">Load More <i class="fa fa-long-arrow-alt-right"></i></button>

        </div>
    </div>`);

    });

}

function loadl() {

    postAsync(url + "packages/selectSix", null).then(function(response) {

        $('#loadpackages').html('');
        $('#pall').html('1-6');
        $.each(response.data, function(key, value) {

            $('#loadpackages').append(`<div  class="col-lg-6 col-md-6 mb-4 mainp">
            <div class="trend-item rounded box-shadow">
                <a href="${url}packages/details/${btoa(value.id)}">
                    <div class="trend-image position-relative">
                        <img src="${PUBLIC_URL}images/trending/trending2.jpg" alt="image" class="">
                        <div class="color-overlay"></div>
                    </div>
                    <div class="trend-content p-4 pt-5 position-relative">
                        <div class="trend-meta bg-theme white px-3 py-2 rounded">
                            <div class="entry-author">
                                <i class="icon-calendar"></i>
                                <span class="fw-bold"> ${value.duration} Days Tours</span>
                            </div>
                        </div>
                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> ${value.status}</h5>
                        <h3 class="mb-1"><a href="${url}packages/details/${btoa(value.id)}">${value.name}</a></h3>

                        <p class=" border-b pb-2 mb-2">${value.description.substr(0,60)}..</p>
                        <div class="entry-meta">
                            <div class="entry-author d-flex align-items-center">
                                <p class="mb-0"><span class="theme fw-bold fs-5"> $${value.price}.00</span> | Per person</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>`);

        });
        $('#loadpackages').append(`<div class="col-lg-12">
        <div class="text-center">

            <button id="ls" onclick="loadl()" class="nir-btn"><i class="fa fa-long-arrow-alt-left"></i> Load Less </button>
            <button id="lm" onclick="loadm()" class="nir-btn">Load More <i class="fa fa-long-arrow-alt-right"></i></button>

        </div>
    </div>`);

    });

}

function packageFilterForm(e, form) {
    e.preventDefault();
    var formData = new FormData(form);
    postAsync(url + "packages/filtter", formData).then(function(response) {
        $('#loadpackages').html('');
        if (response.data == "") {
            $('#pall').html('No data');
            $('#loadpackages').append(`<div class="alert alert-info p5" role="alert" style="padding: 3%;color: #000;">
            <h4 class="alert-heading">Something Went Wrong!</h4>
            <p>Most probably there are no packages in that category under package status that you are selected..please try again
            selecting different category or status.</p>
            <hr>
            <p class="mb-0">Singhe Travels - Sri Lanka</p>
          </div>`);

        } else {

            $.each(response.data, function(key, value) {
                // var id = ;
                $('#pall').html(value.status);
                $('#loadpackages').append(`<div  class="col-lg-6 col-md-6 mb-4 mainp">
                <div class="trend-item rounded box-shadow">
                    <a href="${url}packages/details/${btoa(value.id)}">
                        <div class="trend-image position-relative">
                            <img src="${PUBLIC_URL}images/trending/trending2.jpg" alt="image" class="">
                            <div class="color-overlay"></div>
                        </div>
                        <div class="trend-content p-4 pt-5 position-relative">
                            <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                <div class="entry-author">
                                    <i class="icon-calendar"></i>
                                    <span class="fw-bold"> ${value.duration} Days Tours</span>
                                </div>
                            </div>
                            <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> ${value.status}</h5>
                            <h3 class="mb-1"><a href="${url}packages/details/${btoa(value.id)}">${value.name}</a></h3>
    
                            <p class=" border-b pb-2 mb-2">${value.description.substr(0,60)}..</p>
                            <div class="entry-meta">
                                <div class="entry-author d-flex align-items-center">
                                    <p class="mb-0"><span class="theme fw-bold fs-5"> $${value.price}.00</span> | Per person</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>`);

            });
            $('#loadpackages').append(`<div class="col-lg-12">
        <div class="text-center">

            <button id="ls" onclick="loadl()" class="nir-btn"><i class="fa fa-long-arrow-alt-left"></i> Load Less </button>
            <button id="lm" onclick="loadm()" class="nir-btn">Load More <i class="fa fa-long-arrow-alt-right"></i></button>

        </div>
    </div>`);
        }



    });
}

$(document).ready(function() {
    if (user != "") {
        $('.lrbutton').css("display", "none")
    }
});

function people() {
    var people = $('#getPeople').val();
    var singlePrice = $('#singlePrice').html();
    var subTotal = singlePrice * people;
    $('#people').html(people);
    console.log(subTotal);
    $('#subTotal').html('$ ' + subTotal + '.00');
}