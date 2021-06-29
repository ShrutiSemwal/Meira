@extends('layout')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css">

</head>
<body>

<br>
    <div class="container">
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Contact No.</th>
                </tr>
            </thead>
            <tbody>
            @foreach($doc as $d)
                <tr>
                    <td>{{$d->fname}}</td>
                    <td> {{$d->lname}}</td>
                    <td>{{$d->dept}}</td>
                    <td> {{$d->phone}}</td>
                   
                </tr>
                </br>
                @endforeach
                </tbody>
            <tfoot>
                <tr>
                    <th> First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Contact No.</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap.min.js  "></script>

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                responsive: true
            });
        
            new $.fn.dataTable.FixedHeader( table );
         });
    </script>

</body>
</html>
@endsection