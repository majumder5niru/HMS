
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li><a href = "{!! action('PatientsController@index') !!}">Home</a></li>
      	<li><a href = "{!! action('PatientsController@create_patient') !!}">Outdoor Patient </a></li>
        <li><a href = "{!! action('PatientsController@show_all_report') !!}">Outdoor Patient List </a></li>
        <li><a href = "{!! action('IpatientsController@create_indoor_patient') !!}">Indoor Patient </a></li>
        <li><a href = "{!! action('IpatientsController@show_all_report') !!}""#">Indoor Patient List </a></li>
        <li><a href = "{!! action('DoctorsController@create_doctor') !!}">Add Doctor </a></li>
        <li><a href = "{!! action('DoctorsController@show_all_dr') !!}">Doctor's List </a></li>
        <li><a href = "{!! action('ReportsController@search_form') !!}"> Bill Report </a></li>
      </ul> 
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Log Out </a></li>
      </ul>
    </div>
  </div>
</nav>