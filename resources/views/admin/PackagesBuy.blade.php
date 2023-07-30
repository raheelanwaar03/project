
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
 
  </head>
  <body>
    <div class="container-scroller">

        @include('admin.sidebar')

        @include('admin.navbar')

        <div class= "page-body-wrapper">
        <div>
          <table id="myTable" class="display">
          <thead>
            <tr style="background-color:black" >
              <th>id</th>
              <th >Email</th>
              <th >Package Name </th>
              <th>Package price</th>
              <th >Package Days</th>
              <th >Daily Income</th>
              <th>Daily Withdrawal</th>
              <th>Total After Package End</th>
            </tr>
            
          </thead>
          <tbody>
            





        
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