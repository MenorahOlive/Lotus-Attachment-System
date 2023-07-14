@extends('layouts.studentlayout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css">

    <link rel="stylesheet" href="{{ URL::asset('css/results.css') }}">

    <style>
        body {
            margin: 2em;
        }

        #snip1168 {
            text-align: center;
            font-weight: 600;
            font-size: 14px;
        }

        #snip1168 * {
            box-sizing: border-box;
        }

        #snip1168 li {
            display: inline-block;
            list-style: outside none none;
            margin: 10px 10px 5px;
            padding: 0;
        }

        #this {
            padding: 0.5em 0;
            color: #8c6653;
            position: relative;
            letter-spacing: 1px;
            text-decoration: none;
        }

        #this1 {

            color: #8c6653;

        }

        #this1:hover {
            color: black;
        }

        #this:before,
        #this:after {
            position: absolute;
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
        }

        #this:before {
            top: 0;
            display: block;
            height: 3px;
            width: 0%;
            content: "";
            background-color: #8c6653;
        }

        #this:after {
            left: 0;
            top: 0;
            padding: 0.35em 0;
            position: absolute;
            content: attr(data-hover);
            color: black;
            white-space: nowrap;
            max-width: 0%;
            overflow: hidden;
        }

        #this:hover:before,
        #snip1168 .current a:before {
            opacity: 1;
            width: 100%;
        }

        #this:hover:after,
        #snip1168 .current a:after {
            max-width: 100%;
        }

        #status {
            text-align: center;
        }

        .status {

            margin-right: 1em;
        }
    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=showMap"></script>


    <title>My Applications</title>
</head>

<body>
    <div class="main-content">

        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Supervisor</th>
                    <th>Attachment Type</th>
                    <th>Organisation Name</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Dates</th>
                    <th>Attachment Details</th>
                </tr>
            </thead>

            @foreach($data as $data)

            <?php
            $lat = $data->address_latitude;
            $long = $data->address_longitude;
            ?>
            <tbody>
                <tr onclick="showMap(<?php echo $lat ?>,<?php echo $long ?>)">
                    @if(!$data2->isEmpty())
                    @foreach($data2 as $data2)
                    <td>{{$data2->name}}</td>
                    @endforeach
                    @else
                    <td>Not assigned</td>
                    @endif
                    <td>{{$data->type}}</td>
                    <td>{{$data->org_name}}</td>
                    <td>{{$lat}}</td>
                    <td>{{$long}}</td>
                    <td>{{$data->date}}</td>
                    <td><a id="this1" href="{{ route('student_view_attachment_details2' ,$data->id)}}">View Details</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <div class="container mb-5">
            <div id="map" style="width:100%;height:300px;"></div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            //Only needed for the filename of export files.
            //Normally set in the title tag of your page.
            document.title = 'Rejected Attachment Applications';
            // DataTable initialisation
            $('#example').DataTable({
                "dom": '<"dt-buttons"Bf><"clear">lirtp',
                "paging": true,
                "autoWidth": true,
                "buttons": [
                    'colvis',
                    'copyHtml5',
                    'csvHtml5',
                    'excelHtml5',
                    'pdfHtml5',
                    'print'
                ]
            });
        });

        function showMap(lat, long) {
            var coord = {
                lat: lat,
                lng: long
            };

            var map = new google.maps.Map(
                document.getElementById("map"), {
                    zoom: 10,
                    center: coord
                }
            );

            new google.maps.Marker({
                position: coord,
                map: map
            })
        }
        showMap(0, 0);
    </script>
</body>

</html>
@endsection