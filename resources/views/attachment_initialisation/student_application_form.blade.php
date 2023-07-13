<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attachment Application</title>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <style type="text/css">
        .form-style-10 {
            width: 450px;
            padding: 30px;
            margin: 40px auto;
            background: #FFF;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
            -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
            -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
        }

        .form-style-10 .inner-wrap {
            padding: 30px;
            background: #F8F8F8;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .form-style-10 h1 {
            background: #8c6653;
            padding: 20px 30px 15px 30px;
            margin: -30px -30px 30px -30px;
            border-radius: 10px 10px 0 0;
            -webkit-border-radius: 10px 10px 0 0;
            -moz-border-radius: 10px 10px 0 0;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
            font: normal 30px 'Bitter', serif;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            border: 1px solid #257C9E;
        }

        .form-style-10 h1>span {
            display: block;
            margin-top: 2px;
            font: 13px Arial, Helvetica, sans-serif;
        }

        .form-style-10 label {
            display: block;
            font: 13px Arial, Helvetica, sans-serif;
            color: #888;
            margin-bottom: 15px;
        }

        .form-style-10 input[type="text"],
        .form-style-10 input[type="date"],
        .form-style-10 input[type="datetime"],
        .form-style-10 input[type="email"],
        .form-style-10 input[type="number"],
        .form-style-10 input[type="search"],
        .form-style-10 input[type="time"],
        .form-style-10 input[type="url"],
        .form-style-10 input[type="password"],
        .form-style-10 textarea,
        .form-style-10 select {
            display: block;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border: 2px solid #fff;
            box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
            -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
            -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
        }

        .form-style-10 .section {
            font: normal 20px 'Bitter', serif;
            color: #8c6653;
            margin-bottom: 5px;
        }

        .form-style-10 .section span {
            background: #8c6653;
            padding: 5px 10px 5px 10px;
            position: absolute;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border: 4px solid #fff;
            font-size: 14px;
            margin-left: -45px;
            color: #fff;
            margin-top: -3px;
        }

        .form-style-10 input[type="button"],
        .form-style-10 input[type="submit"] {
            background: #8c6653;
            padding: 8px 20px 8px 20px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
            font: normal 30px 'Bitter', serif;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            border: 1px solid #257C9E;
            font-size: 15px;
        }

        .form-style-10 input[type="button"]:hover,
        .form-style-10 input[type="submit"]:hover {
            background: #2A6881;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
        }

        .form-style-10 .privacy-policy {
            float: right;
            width: 250px;
            font: 12px Arial, Helvetica, sans-serif;
            color: #4D4D4D;
            margin-top: 10px;
            text-align: right;
        }
    </style>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>

<body>
    <div class="form-style-10">
        <h1>Attachment Application<span>Please provide the following details</span></h1>
        <form action="{{ route('student_application') }}" method="POST">
            @csrf
            <div class="section"><span>1</span>Organization Details</div>
            <div class="inner-wrap">
                <label>Organization's Full Name <input type="text" name="name" /></label>
                <label>Branch <input type="text" name="branch" /></label>
                <label>Address<input type="text" name="address" /></label>
                <label>Country
                    <select id="country-dd" class="form-control" name="country">
                        <option value="">Select Country</option>
                        @foreach($counteries as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                </label>
                <label>State
                    <select id="state-dd" class="form-control" name="state"></select>
                </label>
                <label>City
                    <select id="city-dd" class="form-control" name="city"></select>
                </label>
                <label>Description <textarea name="description"></textarea></label>
            </div>

            <div class="section"><span>2</span>Attachment Details</div>
            <div class="inner-wrap">
                <label>Type
                    <select name="type">
                        <option value="">Select Type</option>
                        <option value="SBL">Service Based Learning</option>
                        <option value="WBL">Work Based Learning</option>
                    </select>
                </label>
                <label>Duration<input type="text" class="form-control js-daterangepicker" name="date_range"></label>
                <label>Hours Per Week <input type="number" name="hours" /></label>
                <label>Anticipated Activities<textarea name="activities"></textarea></label>
                <label>Anticipated skills to be gained<textarea name="skills"></textarea></label>
            </div>

            <div class="button-section">
                <input type="submit" name="Sign Up" />
            </div>
        </form>
    </div>

    <script type="text/javascript">
        //date range
        $('input[name="date_range"]').daterangepicker();


        //country,city, county
        $(document).ready(function() {
            $('#country-dd').change(function(event) {
                var idCountry = this.value;
                $('#state-dd').html('');

                $.ajax({
                    url: "/api/fetch-state",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        country_id: idCountry,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        $('#state-dd').html('<option value="">Select State</option>');
                        $.each(response.states, function(index, val) {
                            $('#state-dd').append('<option value="' + val.id + '"> ' + val.name + ' </option>')
                        });
                        $('#city-dd').html('<option value="">Select City</option>');
                    }
                })
            });
            $('#state-dd').change(function(event) {
                var idState = this.value;
                $('#city-dd').html('');
                $.ajax({
                    url: "/api/fetch-cities",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        state_id: idState,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        $('#city-dd').html('<option value="">Select State</option>');
                        $.each(response.cities, function(index, val) {
                            $('#city-dd').append('<option value="' + val.id + '"> ' + val.name + ' </option>')
                        });
                    }
                })
            });
        });
    </script>

</body>


</html>