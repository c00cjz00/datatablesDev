<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SQL</title>

<link rel="stylesheet" type="text/css" href="https://fiddle.jshell.net/css/result-light.css">



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/mark.js/8.6.0/jquery.mark.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/datatables.mark.js/2.0.0/datatables.mark.min.js"></script>

<style id="compiled-css" type="text/css">
/*** Styles for datatables.mark.js*/

mark {
  padding: 0;
  background: #f1c40f;
}
</style>



<script type="text/javascript" class="init">


 $(document).ready(function() {
  // Setup - add a text input to each footer cell
  $('#example tfoot th').each( function () {
   var title = $(this).text();
   $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
  } );

  // DataTable
  var table = $('#example').DataTable({
   // Enable mark.js search term highlighting
   mark: true
  });
 
  
  // Apply the search
  table.columns().every( function () {
   var that = this;

   $( 'input', this.footer() ).on( 'keyup change', function () {
    if ( that.search() !== this.value ) {
     that
      .search( this.value )
      .draw();
    }
   } );
  } );
 } );
</script>
</head>

<body>

<table id="example" class="display" style="width:100%">

 <thead>
  <tr>
   <th>Name</th>
   <th>Position</th>
   <th>Office</th>
   <th>Age</th>
   <th>Start date</th>
   <th>Salary</th>
  </tr>
 </thead>
 <tbody>
  <tr>
   <td>簡 Nixon</td>
   <td>System Architect</td>
   <td>Edinburgh</td>
   <td>61</td>
   <td>2011/04/25</td>
   <td>$320,800</td>
  </tr>
  <tr>
   <td>简Garrett Winters</td>
   <td>Accountant</td>
   <td>Tokyo</td>
   <td>63</td>
   <td>2011/07/25</td>
   <td>$170,750</td>
  </tr>
  <tr>
   <td>Ashton Cox</td>
   <td>Junior Technical Author</td>
   <td>San Francisco</td>
   <td>66</td>
   <td>2009/01/12</td>
   <td>$86,000</td>
  </tr>
  <tr>
   <td>Cedric Kelly</td>
   <td>Senior Javascript Developer</td>
   <td>Edinburgh</td>
   <td>22</td>
   <td>2012/03/29</td>
   <td>$433,060</td>
  </tr>
  <tr>
   <td>Airi Satou</td>
   <td>Accountant</td>
   <td>Tokyo</td>
   <td>33</td>
   <td>2008/11/28</td>
   <td>$162,700</td>
  </tr>
 </tbody>
 <tfoot>
  <tr>
   <th>Name</th>
   <th>Position</th>
   <th>Office</th>
   <th>Age</th>
   <th>Start date</th>
   <th>Salary</th>
  </tr>
 </tfoot>
</table>

</body>
</html>
