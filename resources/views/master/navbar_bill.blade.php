<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li><a href = "{!! action('PatientsController@index') !!}">Home</a></li>
      	<li><a href = "{!! action('PatientsController@show_all_report') !!}">Outdoor Patient List </a></li>
      	<li><a href = "{!! action('IpatientsController@show_all_report') !!}">Indoor Patient List </a></li>
      	<li><a href = "{!! action('DoctorsController@show_all_dr') !!}">Doctor's List </a></li>
        <li><a href = "{!! action('ReportsController@yearly_report') !!}">Yearly Report(Both) </a></li>
        <li><a href = "{!! action('ReportsController@total_bill_in_range') !!}">Total Bill(Range) </a></li>
        <li><a href = "{!! action('ReportsController@monthly_outdoor_test_report') !!}">Outdoor Test Report(Monthly) </a></li>
        <li><a href = "{!! action('ReportsController@monthly_indoor_test_report') !!}">Indoor Test Report(Monthly) </a></li>
        <li><a href = "{!! action('ReportsController@outdoor_test_report_range') !!}">Outdoor Test Report(Range) </a></li>
        <li><a href = "{!! action('ReportsController@indoor_test_report_range') !!}">Indoor Test Report(Range) </a></li>
        <li><a href = "{!! action('ReportsController@yearly_outdoor_test_report') !!}">Outdoor Test Report(Yearly) </a></li>
        <li><a href = "{!! action('ReportsController@yearly_indoor_test_report') !!}">Indoor Test Report(Yearly) </a></li>
         <li><a href="#">Log Out </a></li>
      </ul>
    </div>
  </div>
</nav>