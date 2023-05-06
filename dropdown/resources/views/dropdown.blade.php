<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Dynamic Dependent Dropdown using Ajax</title>
    <style type="text/css">
        body{
            background-color: #d2d2d2 !important;
        }
        .dropdown{
            background-color: #fff;
        }
    </style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 justify-content-center">
        <div class="row">
            <div class="col-md-12 dropdown rounded p-5 mt-5">
                <div class="row">
                    <div class="col-md-8 mb-3">
                       <h4>Laravel Dynamic Dependent Dropdown using Ajax</h4>
                    </div>
                </div>
                <form>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="county">County</label>
                        <select  id="county-dropdown" class="form-control">
                            <option value="">-- Select County --</option>
                            @foreach ($counties as $data)
                                <option value="{{$data->id}}">
                                    {{$data->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-control-label" for="constituency">Constituency</label>
                        <select id="constituency-dropdown" class="form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="ward">Ward</label>
                        <select id="ward-dropdown" class="form-control">
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        /*------------------------------------------
        --------------------------------------------
        Country Dropdown Change Event
        --------------------------------------------
        --------------------------------------------*/
        $('#county-dropdown').on('change', function () {
            var idCounty = this.value;
            $("#constituency-dropdown").html('');
            $.ajax({
                url: "{{url('api/fetch-states')}}",
                type: "POST",
                data: {
                    county_id: idCounty,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#constituency-dropdown').html('<option value="">-- Select Constituency --</option>');
                    $.each(result.constituencies, function (key, value) {
                        $("#constituency-dropdown").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    $('#ward-dropdown').html('<option value="">-- Select Ward --</option>');
                }
            });
        });

        /*------------------------------------------
        --------------------------------------------
        State Dropdown Change Event
        --------------------------------------------
        --------------------------------------------*/
        $('#state-dropdown').on('change', function () {
            var idConstituency = this.value;
            $("#ward-dropdown").html('');
            $.ajax({
                url: "{{url('api/fetch-cities')}}",
                type: "POST",
                data: {
                    constituency_id: idConstituency,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#ward-dropdown').html('<option value="">-- Select Ward --</option>');
                    $.each(res.wards, function (key, value) {
                        $("#ward-dropdown").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });
</script>
</html>