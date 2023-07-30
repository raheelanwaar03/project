
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap4.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bulma.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.foundation.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.foundation.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.jqueryui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.jqueryui.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.semanticui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.semanticui.min.css">
   










  </head>
  <body>
    <div class="container-scroller">

        @include('admin.sidebar')

      <div class="container-fluid page-body-wrapper">

        @include('admin.navbar')
    
        <div class= "container-fluid page-body-wrapper">
            <div >
            <table id="myTable" class="display">
                <thead>
                <tr style="background-color:black">
                <th>Name</th>
                <th>Email</th>
                <th>Referral Code</th>
            </tr>
                </thead>
                <tbody>
            @foreach($data as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->referral_code }}</td>
                </tr>
            @endforeach
        </tbody>
              </table>

          
            </div>

        </div>
    </div>


@include('admin.script')
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>

<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap4.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap4.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap4.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bulma.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bulma.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bulma.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bulma.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.dataTables.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.dataTables.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.foundation.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.foundation.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.foundation.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.foundation.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.jqueryui.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.jqueryui.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.jqueryui.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.semanticui.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.semanticui.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.semanticui.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.semanticui.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.mjs"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/importmap.json"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
</body>
</html>