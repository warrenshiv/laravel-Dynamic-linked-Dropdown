<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Dropdowns</title>
    <!-- Include jQuery from a CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form>
            @csrf
            <div class="form-group">
                <label for="county">County</label>
                <select class="form-control" id="county" name="county">
                    <option value="">Select County</option>
                    @foreach ($counties as $county)
                        <option value="{{ $county->id }}">{{ $county->county_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="subcounty">Subcounty</label>
                <select class="form-control" id="subcounty" name="subcounty" disabled>
                    <option value="">Select Subcounty</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ward">Ward</label>
                <select class="form-control" id="ward" name="ward" disabled>
                    <option value="">Select Ward</option>
                </select>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('#county').change(function () {
                var countyId = $(this).val();
                if (countyId) {
                    $.ajax({
                        url: '/getSubcounties/' + countyId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            $('#subcounty').empty().attr('disabled', false);
                            $.each(data, function (key, value) {
                                $('#subcounty').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('#subcounty').empty().attr('disabled', true);
                    $('#ward').empty().attr('disabled', true);
                }
            });

            $('#subcounty').change(function () {
                var subcountyId = $(this).val();
                if (subcountyId) {
                    $.ajax({
                        url: '/get-wards/' + subcountyId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            $('#ward').empty().attr('disabled', false);
                            $.each(data, function (key, value) {
                                $('#ward').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('#ward').empty().attr('disabled', true);
                }
            });
        });
    </script>
    
    <!-- Include Bootstrap JS (jQuery should be loaded before this) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
