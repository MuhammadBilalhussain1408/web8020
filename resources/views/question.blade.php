<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Website Questionnaire Form - 8020 Eatery</title>
    <style>
        /*custom font*/
        @import url(https://fonts.googleapis.com/css?family=Montserrat);

        /*basic reset*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            background-color: #DCD9D4;
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), radial-gradient(at 50% 0%, rgba(255, 255, 255, 0.10) 0%, rgba(0, 0, 0, 0.50) 50%);
            background-blend-mode: soft-light, screen;
            background-repeat: no-repeat;
        }

        body {
            font-family: montserrat, arial, verdana, serif;
            background: transparent;
            height: 100vh;
            width: 100%;
            overflow-x: hidden;
            position: absolute;
            transform: scale(90%);
        }

        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            padding-bottom: 4rem;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            box-sizing: border-box;
            width: 80%;
            margin: 0 10%;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        /*inputs*/
        #msform input,
        #msform textarea {
            padding: 15px;
            border: 1px solid #818181;
            border-radius: 0px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: "Poppins", serif;
            font-weight: 500;
            font-size: 15px;
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            box-shadow: 0 0 20px 0px rgb(0 0 0 / 20%);
            border: 1px solid #ee0979;
            outline-width: 0;
            transition: All 0.5s ease-in;
            -webkit-transition: All 0.5s ease-in;
            -moz-transition: All 0.5s ease-in;
            -o-transition: All 0.5s ease-in;
        }

        /*buttons*/
        #msform .action-button {
            width: 100px;
            background: #e1612e;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 6px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
        }

        #msform .action-button-previous {
            width: 100px;
            background: black;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 6px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
        }

        /*headings*/
        .fs-title {
            font-size: 30px;
            text-transform: uppercase;
            color: black;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .fs-subtitle {
            font-weight: bold;
            font-size: 20px;
            color: black;
            padding-bottom: 3rem;
        }

        /*progressbar*/
        #progressbar {
            padding-bottom: 40px;
            overflow: hidden;
            /*CSS counters to number the steps*/
            counter-reset: step;
            padding-top: 1rem;
        }

        #progressbar li {
            list-style-type: none;
            color: #000000;
            text-transform: uppercase;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            letter-spacing: 1px;
            font-weight: bold;
            font-family: 'Poppins', serif;
        }

        #progressbar li:before {
            content: counter(step);
            counter-increment: step;
            width: 26px;
            height: 26px;
            line-height: 26px;
            display: block;
            font-size: 18px;
            color: #333;
            background: white;
            margin: 0 auto 10px auto;
        }

        /*progressbar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 4px;
            background: #FF5722;
            position: absolute;
            left: -50%;
            top: 9px;
            z-index: -1;
            /*put it behind the numbers*/
        }

        #progressbar li:first-child:after {
            /*connector not needed before the first step*/
            content: none;
        }

        /*marking active/completed steps green*/
        /*The number of the step and the connector before it = green*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #000000;
            color: #ffffff;
        }


        /* Not relevant to this form */
        .dme_link {
            margin-top: 30px;
            text-align: center;
        }

        .dme_link a {
            background: #FFF;
            font-weight: bold;
            color: #ee0979;
            border: 0 none;
            border-radius: 25px;
            cursor: pointer;
            padding: 5px 25px;
            font-size: 12px;
        }

        .dme_link a:hover,
        .dme_link a:focus {
            background: #C5C5F1;
            text-decoration: none;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 0;
            padding-bottom: 10px;
            font-family: "Poppins", serif;
            font-weight: 600;
            font-size: 18px;
        }

        @media only screen and (min-width: 360px) and (max-width: 740px),
        only screen and (min-width: 412px) and (max-width: 915px),
        only screen and (min-width: 767px) and (max-width: 991px) {

            #progressbar li {
                font-size: 11px;
            }

            #msform fieldset {
                width: 100%;
                margin: auto;
            }

        }
    </style>

</head>

<body>


    <!-- MultiStep Form -->
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('storeQuestions') }}" method="POST" id="msform">
                @csrf
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Personal Details</li>
                    <li>Project Details</li>
                    <li>Content & Functionality</li>
                    <li>Additional Information</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <h2 class="fs-title">Basic Information</h2>
                    <h3 class="fs-subtitle">Tell us something more about you</h3>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fullname">Full Name</label>
                            <input name="full_name" type="text" id="fullname" value="{{old('full_name')}}" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email Address</label>
                            <input name="email" type="email" id="email" value="{{old('email')}}" placeholder="Email Address">
                            @error('email')
                                <span class="text-danger">
                                    {{ $errors->first('email') }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone Number</label>
                            <input name="phone" type="tel" id="phone" value="{{old('phone')}}" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="companyname">Company/Business Name</label>
                            <input name="company_name" type="text" value="{{old('company_name')}}" id="companyname"
                                placeholder="Company/Business Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Industrytype">Industry Type</label>
                            <input name="industry_type" type="text" value="{{old('industry_type')}}" id="Industrytype" placeholder="Industry Type">
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Project Details</h2>
                    <h3 class="fs-subtitle">Tell us something more about your project details</h3>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="primarypurpose">What is the primary purpose of the website?</label><br>
                            <h5 style="font-size: 16px;color: black;font-weight: 800;margin: 0;padding-bottom: 1.8rem;">
                                (e.g., e-commerce, portfolio, blog, informational, lead generation)</h5>
                            <input name="purpose" type="text" id="primarypurpose" value="{{old('purpose')}}"
                                placeholder="What is the primary purpose of the website?">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="existingwebsite">Do you have an existing website?</label><br>
                            <h5 style="font-size: 16px;color: black;font-weight: 800;margin: 0;padding-bottom: 1.8rem;">
                                If yes, please provide the URL:</h5>
                            <input name="existing_website" type="text" id="existingwebsite" value="{{old('existing_website')}}"
                                placeholder="Do you have an existing website?">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="specificdesign">Do you have specific design preferences or examples of websites
                                you like?</label>
                            <input name="example_website" type="text" id="specificdesign" value="{{old('example_website')}}"
                                placeholder="Do you have specific design preferences or examples of websites you like?">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="existinglogo">Do you have an existing logo?</label>
                            <input name="existing_logo" type="text" id="existinglogo" value="{{old('existing_logo')}}"
                                placeholder="Do you have an existing logo?">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="assistance">Do you need assistance with content creation?</label>
                            <input name="req_assistance" type="text" id="assistance" value="{{old('req_assistance')}}"
                                placeholder="Do you need assistance with content creation?">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Content & Functionality</h2>
                    <h3 class="fs-subtitle">Please share more details about Content & Functionality</h3>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="imagesvideos">Please provide text, images, videos that you would like to appear
                                on your website?</label>
                            <input name="appear_data" type="text" value="{{old('appear_data')}}" id="imagesvideos"
                                placeholder="Please provide text, images, videos that you would like to appear on your website?">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="keyfeatures">List 3-5 Key features you would like to have on your
                                website?</label><br>
                            <h5
                                style="font-size: 16px;color: black;font-weight: 800;margin: 0;padding-bottom: 1.8rem;">
                                (e.g., contact forms, online booking, payment gateways, live chat, blog)</h5>
                            <input name="req_key_feature" type="text"  value="{{old('req_key_feature')}}"id="keyfeatures"
                                placeholder="List 3-5 Key features you would like to have on your website?">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="integrations">Do you need any integrations?</label>
                            <input name="req_integration" type="text" id="integrations" value="{{old('req_integration')}}"
                                placeholder="(e.g., social media, email marketing, CRM, analytics)">
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous"
                        value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Additional Information</h2>
                    <h3 class="fs-subtitle">Tell us something more</h3>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="hostingprovider">Do you have a domain name and hosting provider?</label><br>
                            <input name="existing_hosting_domain" type="text" value="{{old('existing_hosting_domain')}}" id="hostingprovider"
                                placeholder="Do you have a domain name and hosting provider?">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="completiondate">What is your desired project completion date?</label><br>
                            <input name="req_completed_date" type="text" id="completiondate" value="{{old('req_completed_date')}}"
                                placeholder="What is your desired project completion date?">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="information">Is there any other information you’d like to share about your
                                project?</label>
                            <input name="other_project_info" type="text" id="information" value="{{old('other_project_info')}}"
                                placeholder="Is there any other information you’d like to share about your project?">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="multiplepages">Are you interested in getting a One Pager website made or a
                                website with multiple pages?</label>
                            <input name="one_or_multiple_page" type="text" id="multiplepages" value="{{old('one_or_multiple_page')}}"
                                placeholder="Are you interested in getting a One Pager website made or a website with multiple pages?">
                        </div>
                        <div class="form-group form-check col-md-12">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="agree_terms"
                                style="width: auto;" {{ old('agree_terms') ? 'checked' : '' }}>
                            <label class="form-check-label" for="exampleCheck1">
                                Do you agree to our terms and conditions for website development services?
                            </label>
                        </div>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous"
                        value="Previous" />
                    <button type="submit" name="submit" class="submit action-button" disabled id="submitBtn"
                        value="Submit">Submit</button>
                    </fieldset>
                    <input type="hidden" name="g-recaptcha-token" id="g-recaptcha-token">
            </form>
        </div>
    </div>
    <!-- /.MultiStep Form -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script> --}}

    <script>
        $(document).ready(function() {
            // Initialize form validation
            $("#msform").validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    full_name: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 15
                    },
                    company_name: {
                        required: true
                    },
                    industry_type: {
                        required: true
                    },
                    purpose: {
                        required: true
                    },
                    existing_website: {
                        required: true
                    },
                    example_website: {
                        required: true
                    },
                    existing_logo: {
                        required: true
                    },
                    assistance: {
                        required: true
                    },
                    appear_data: {
                        required: true
                    },
                    req_key_feature: {
                        required: true
                    },
                    req_integration: {
                        required: true
                    },
                    existing_hosting_domain: {
                        required: true
                    },
                    req_completed_date: {
                        required: true
                    },
                    req_assistance: {
                        required: true
                    },
                    other_project_info: {
                        required: true
                    },
                    one_or_multiple_page: {
                        required: true
                    },
                    agree_terms: {
                        required: true
                    },
                },
                messages: {
                    full_name: {
                        required: "This field is required",
                        minlength: "Name must be at least 3 characters."
                    },
                    email: {
                        required: "Please enter your email address.",
                        email: "Please enter a valid email address."
                    },
                    phone: {
                        required: "This field is required",
                        // minlength: "Phone number must be at least 10 digits.",
                        // maxlength: "Phone number cannot exceed 15 digits."
                    },
                    company_name: {
                        required: "This field is required"
                    },
                    purpose: {
                        required: "This field is required"
                    },
                    industry_type: {
                        required: "This field is required"
                    },
                    existing_website: {
                        required: "This field is required"
                    },
                    example_website: {
                        required: "This field is required"
                    },
                    existing_logo: {
                        required: "This field is required"
                    },
                    assistance: {
                        required: "This field is required"
                    },
                    appear_data: {
                        required: "This field is required"
                    },
                    req_key_feature: {
                        required: "This field is required"
                    },
                    req_integration: {
                        required: "This field is required"
                    },
                    req_assistance: {
                        required: "This field is required"
                    },
                    existing_hosting_domain: {
                        required: "This field is required"
                    },
                    req_completed_date: {
                        required: "This field is required"
                    },
                    other_project_info: {
                        required: "This field is required"
                    },
                    one_or_multiple_page: {
                        required: "This field is required"
                    },
                    agree_terms: {
                        required: "You Must Agree with terms before proceed"
                    },
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                    error.addClass('text-danger');
                }
            });

            // Custom next button click event
            $(".next").click(function() {
                if (!$("#msform").valid()) {
                    return false; // Prevent navigation if the form is invalid
                }

                // Animation logic for fieldsets
                var current_fs = $(this).parent();
                var next_fs = $(this).parent().next();
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now, mx) {
                        scale = 1 - (1 - now) * 0.2;
                        left = (now * 50) + "%";
                        opacity = 1 - now;
                        current_fs.css({
                            'transform': 'scale(' + scale + ')',
                            'position': 'absolute'
                        });
                        next_fs.css({
                            'left': left,
                            'opacity': opacity
                        });
                    },
                    duration: 800,
                    complete: function() {
                        current_fs.hide();
                    },
                    easing: 'easeInOutBack'
                });
                next_fs.show();
            });

            $(".previous").click(function() {
                var current_fs = $(this).parent();
                var previous_fs = $(this).parent().prev();
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now, mx) {
                        scale = 0.8 + (1 - now) * 0.2;
                        left = ((1 - now) * 50) + "%";
                        opacity = 1 - now;
                        current_fs.css({
                            'left': left
                        });
                        previous_fs.css({
                            'transform': 'scale(' + scale + ')',
                            'opacity': opacity
                        });
                    },
                    duration: 800,
                    complete: function() {
                        current_fs.hide();
                    },
                    easing: 'easeInOutBack'
                });
                previous_fs.show();
            });
        });

        //   $(".submit").click(function(){
        //       return false;
        //   })
        $('#exampleCheck1').on('change',function(){
            if(this.checked){
                $('#submitBtn').attr('disabled',false);
            }else{
                $('#submitBtn').attr('disabled',true);
            }
        })
        $('#submitBtn').on('click',function(){
            this.value = 'Wait...'
            $('#submitBtn').text('Wait...');
        })
    </script>
 <script src="https://www.google.com/recaptcha/api.js?render=6LeZ8bAqAAAAANEGvcL4p8RkFZ2lttgNdj14cilT"></script>
 <script>
     grecaptcha.ready(function() {
         grecaptcha.execute('6LeZ8bAqAAAAANEGvcL4p8RkFZ2lttgNdj14cilT', {
             action: 'submit'
         }).then(function(token) {
             document.getElementById('g-recaptcha-response').value = token;
             if(document.getElementById('g-recaptcha-token'))
             document.getElementById('g-recaptcha-token').value = token;
         });
     });

</script>
<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

</body>

</html>
