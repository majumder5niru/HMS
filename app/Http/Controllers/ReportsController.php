<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Report;
use App\Http\Requests\ReportFormRequest;
use App\User;
use DB;
use Auth;


class ReportsController extends Controller
{
    /*public function __construct(){

        $this->middleware('admin');
    }*/
    //Total bill Report for individual month 
    public function search_form(){
    	return view('Report.search_form');
    }
    
    public function store_data(ReportFormRequest $request){
    	$report = new Report(array(
	        'month' => $request->get('month'),
	    	'year' => $request->get('year'),      
	    ));
	    $report->save();
		return redirect(action('ReportsController@search_option',$report->id))->with('status', 'Your Information has been inserted!');	
    }
    public function search_option($id){
    	$report = Report::whereId($id)->firstOrFail();
    	$year = $report->year;
    	$month = $report->month;
    	$start_date = "$year-$month-01";
    	$end_date = "$year-$month-31";
    	$total_outdoor = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('total');
        $total_indoor = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('total');
        $discount_outdoor = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('discount');
        $discount_indoor = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('discount');
    	return view('Report.report', compact('total_outdoor','total_indoor','year','month','discount_outdoor','discount_indoor'));
    }
    //Total bill in a range of days
    public function total_bill_in_range(){
        return view('Report.total_bill_in_range');
    }
    public function store_date_range(ReportFormRequest $request){
        $report = new Report(array(
            'starting_date'=> $request->get('starting_date'),
            'ending_date'=> $request->get('ending_date'),       
        ));
        $report->save();
        return redirect(action('ReportsController@total_bill_range_report',$report->id))->with('status', 'Your Information has been inserted!');
    }
    public function total_bill_range_report($id){
        $report = Report::whereId($id)->firstOrFail();
        $starting_date = $report->starting_date;
        $ending_date = $report->ending_date;
        $out_amnt = DB::table('patients')->whereBetween('admission_date', array($starting_date, $ending_date))->sum('total');
        $out_discount = DB::table('patients')->whereBetween('admission_date', array($starting_date, $ending_date))->sum('discount');
        $in_amnt = DB::table('indoor_patients')->whereBetween('arrival_date', array($starting_date, $ending_date))->sum('total');
        $in_discount = DB::table('indoor_patients')->whereBetween('arrival_date', array($starting_date, $ending_date))->sum('discount');
        return view('Report.total_bill_range_report', compact('year','month','out_discount','in_discount','out_amnt','in_amnt','starting_date','ending_date'));
    }
    // Total bill for both in year
    public function yearly_report(){
        return view('Report.yearly_report_form');
    }
     public function store_year(ReportFormRequest $request){
        $report = new Report(array(
            'year' => $request->get('year'),   
        ));
        $report->save();
        return redirect(action('ReportsController@summary_year',$report->id))->with('status', 'Your Information has been inserted!');
        
    }
    public function summary_year($id){
        $outdoors = array();
        $indoors = array();
        $months = array();
        $out_discounts = array();
        $in_discounts = array();
        $report = Report::whereId($id)->firstOrFail();
        $year = $report->year;
        for($i=0;$i<12;$i++){
           $month = $i+1;
           if($month<="09"){
                $start_date = "$year-0$month-01";
                $end_date = "$year-0$month-31";
           }else{
                $start_date = "$year-$month-01";
                $end_date = "$year-$month-31";
           }
            $outdoor_bill = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('total');
            $outdoors[] = $outdoor_bill; 
            $indoor_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('total');
            $indoors[] = $indoor_bill;
            $months[] = $month;
            $out_discount = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('discount');
            $out_discounts[] = $out_discount;
            $in_discount = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('discount');
            $in_discounts[] = $in_discount;
        }
       //print_r($arr)."<br>";
        return view('Report.year_summary', compact('month','year','outdoors','indoors','months','out_discounts','in_discounts'));
        
    }
    //monthly outdoor test report
    public function monthly_outdoor_test_report(){
        return view('Report.monthly_outdoor_test_form');
    }
    public function store_outdoor_test_month(ReportFormRequest $request){
      $report = new Report(array(
            'month' => $request->get('month'),
            'year' => $request->get('year'),
        ));
        $report->save();
        return redirect(action('ReportsController@monthly_outdoor_test',$report->id))->with('status', 'Your Information has been inserted!');  
    }
    public function monthly_outdoor_test($id){
        $report = Report::whereId($id)->firstOrFail();
        $year = $report->year;
        $month = $report->month;
        $start_date = "$year-$month-01";
        $end_date = "$year-$month-31";
        $xray = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('digital_xray');
        $ultrasonogram = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('ultrasonogram');
        $ecg = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('ecg');
        $digital_ecg = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('digital_ecg');
        $endoscopy = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('endoscopy');
        $blood_grouping = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('blood_grouping');
        $blood_cs = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('blood_cs');
        $blood_cbc = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('blood_cbc');
        $urine = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('urine');
        $hbs_normal = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('hbs_normal');
        $ct_scan = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('ct_scan');
        $stool = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('stool');
        return view('Report.monthly_outdoor_test_balance', compact('month','year','xray','ultrasonogram','ecg','digital_ecg','endoscopy','blood_grouping','blood_cs','blood_cbc','urine','hbs_normal','ct_scan','stool'));
    }
    //monthly outdoor test report
    public function monthly_indoor_test_report(){
        return view('Report.monthly_indoor_test_form');
    }
    //store month and year for balance of test of particular month
    public function store_indoor_test_month(ReportFormRequest $request){
        $report = new Report(array(
            'month' => $request->get('month'),
            'year' => $request->get('year'),
        ));
        $report->save();
        return redirect(action('ReportsController@monthly_indoor_test',$report->id))->with('status', 'Your Information has been inserted!'); 
    }
    public function monthly_indoor_test($id){
        $report = Report::whereId($id)->firstOrFail();
        $year = $report->year;
        $month = $report->month;
        $start_date = "$year-$month-01";
        $end_date = "$year-$month-31";
        $xray = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('digital_xray');
        $ultrasonogram = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('ultrasonogram');
        $ecg = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('ecg');
        $digital_ecg = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('digital_ecg');
        $endoscopy = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('endoscopy');
        $blood_grouping = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('blood_grouping');
        $blood_cs = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('blood_cs');
        $blood_cbc = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('blood_cbc');
        $urine = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('urine');
        $hbs_normal = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('hbs_normal');
        $ct_scan = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('ct_scan');
        $stool = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('stool');
        $operation_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('operation_bill');
        $dr_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('dr_bill');
        $service_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('service_bill');
        $medicine_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('medicine_bill');
        $cabin_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('cabin_bill');
        $others_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('others_bill');
        return view('Report.monthly_indoor_test_balance', compact('month','year','xray','ultrasonogram','ecg','digital_ecg','endoscopy','blood_grouping','blood_cs','blood_cbc','urine','hbs_normal','ct_scan','stool','operation_bill','dr_bill','service_bill','medicine_bill','cabin_bill','others_bill'));
    }
    //outdoor test balance of days of range
    public function outdoor_test_report_range(){
     return view('Report.outdoor_test_report_range_form');   
    }
    public function store_outdoor_range_date(ReportFormRequest $request){
        $report = new Report(array(
            'starting_date'=> $request->get('starting_date'),
            'ending_date'=> $request->get('ending_date'),       
        ));
        $report->save();
        return redirect(action('ReportsController@outdoor_test_summary_range',$report->id))->with('status', 'Your Information has been inserted!');   
    }
    public function outdoor_test_summary_range($id){
        $report = Report::whereId($id)->firstOrFail();
        $start_date = $report->starting_date;
        $end_date = $report->ending_date;
        $xray = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('digital_xray');
        $ultrasonogram = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('ultrasonogram');
        $ecg = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('ecg');
        $digital_ecg = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('digital_ecg');
        $endoscopy = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('endoscopy');
        $blood_grouping = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('blood_grouping');
        $blood_cs = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('blood_cs');
        $blood_cbc = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('blood_cbc');
        $urine = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('urine');
        $hbs_normal = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('hbs_normal');
        $ct_scan = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('ct_scan');
        $stool = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('stool');
        return view('Report.range_outdoor_test_balance', compact('start_date','end_date','xray','ultrasonogram','ecg','digital_ecg','endoscopy','blood_grouping','blood_cs','blood_cbc','urine','hbs_normal','ct_scan','stool'));
    }
    //Indoor test balance of days of range
    public function indoor_test_report_range(){
        return view('Report.indoor_test_report_range_form');
    }
    public function store_indoor_range_date(ReportFormRequest $request){
        $report = new Report(array(
            'starting_date'=> $request->get('starting_date'),
            'ending_date'=> $request->get('ending_date'),       
        ));
        $report->save();
        return redirect(action('ReportsController@indoor_test_summary_range',$report->id))->with('status', 'Your Information has been inserted!'); 
    }
    public function indoor_test_summary_range($id){
        $report = Report::whereId($id)->firstOrFail();
        $start_date = $report->starting_date;
        $end_date = $report->ending_date;
        $xray = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('digital_xray');
        $ultrasonogram = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('ultrasonogram');
        $ecg = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('ecg');
        $digital_ecg = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('digital_ecg');
        $endoscopy = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('endoscopy');
        $blood_grouping = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('blood_grouping');
        $blood_cs = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('blood_cs');
        $blood_cbc = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('blood_cbc');
        $urine = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('urine');
        $hbs_normal = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('hbs_normal');
        $ct_scan = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('ct_scan');
        $stool = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('stool');
        $operation_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('operation_bill');
        $dr_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('dr_bill');
        $service_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('service_bill');
        $medicine_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('medicine_bill');
        $cabin_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('cabin_bill');
        $others_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('others_bill');
        return view('Report.range_indoor_test_balance', compact('start_date','end_date','xray','ultrasonogram','ecg','digital_ecg','endoscopy','blood_grouping','blood_cs','blood_cbc','urine','hbs_normal','ct_scan','stool','operation_bill','dr_bill','service_bill','medicine_bill','cabin_bill','others_bill'));
    }
    //Yearly outdoor report for several test
    public function yearly_outdoor_test_report(){
        return view('Report.yearly_outdoor_test_report_form');
    }
    public function store_year_outdoor_yearly(ReportFormRequest $request){
        $report = new Report(array(
            'year' => $request->get('year'),   
        ));
        $report->save();
        return redirect(action('ReportsController@summary_outdoor_report_yearly',$report->id))->with('status', 'Your Information has been inserted!');
    }
    public function summary_outdoor_report_yearly($id){
        $months = array();
        $xrays = array();
        $ultras = array();
        $ecgs = array();
        $digital_ecgs = array();
        $endos = array();
        $blood_groups = array();
        $blood_css = array();
        $blood_cbcs = array();
        $urines = array();
        $hbs_ags = array();
        $cts = array();
        $stools = array();
        $report = Report::whereId($id)->firstOrFail();
        $year = $report->year;
        for($i=0;$i<12;$i++){
           $month = $i+1;
           if($month<="09"){
                $start_date = "$year-0$month-01";
                $end_date = "$year-0$month-31";
           }else{
                $start_date = "$year-$month-01";
                $end_date = "$year-$month-31";
           }
            $xray = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('digital_xray');
            $xrays[] = $xray;
            $ultrasonogram = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('ultrasonogram');
            $ultras[] = $ultrasonogram;
            $ecg = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('ecg');
            $ecgs[] = $ecg;
            $digital_ecg = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('digital_ecg');
            $digital_ecgs[] = $digital_ecg;
            $endoscopy = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('endoscopy');
            $endos[] = $endoscopy;
            $blood_grouping = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('blood_grouping');
            $blood_groups[] = $blood_grouping;
            $blood_cs = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('blood_cs');
            $blood_css[] = $blood_cs;
            $blood_cbc = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('blood_cbc');
            $blood_cbcs[] = $blood_cbc;
            $urine = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('urine');
            $urines[] = $urine;
            $hbs_normal = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('hbs_normal');
            $hbs_ags[] = $hbs_normal;
            $ct_scan = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('ct_scan');
            $cts[] = $ct_scan;
            $stool = DB::table('patients')->whereBetween('admission_date', array($start_date, $end_date))->sum('stool');
            $stools[] = $stool;
            $months[] = $month;
        }
       //print_r($months)."<br>";
        return view('Report.outdoor_report_yearly_summary', compact('year','months','xrays','ultras','ecgs','digital_ecgs','endos','blood_groups','blood_css','blood_cbcs','urines','hbs_ags','cts','stools'));
    }
    //Indoor test bill yearly
    public function yearly_indoor_test_report(){
        return view('Report.yearly_indoor_test_report_form');
    }
    public function store_year_indoor_yearly(ReportFormRequest $request){
       $report = new Report(array(
            'year' => $request->get('year'),   
        ));
        $report->save();
        return redirect(action('ReportsController@summary_indoor_report_yearly',$report->id))->with('status', 'Your Information has been inserted!'); 
    }
    public function summary_indoor_report_yearly($id){
        $months = array();
        $xrays = array();
        $ultras = array();
        $ecgs = array();
        $digital_ecgs = array();
        $endos = array();
        $blood_groups = array();
        $blood_css = array();
        $blood_cbcs = array();
        $urines = array();
        $hbs_ags = array();
        $cts = array();
        $stools = array();
        $operations = array();
        $drs = array();
        $services = array();
        $medicines = array();
        $cabins = array();
        $others = array();
        $report = Report::whereId($id)->firstOrFail();
        $year = $report->year;
        for($i=0;$i<12;$i++){
           $month = $i+1;
           if($month<="09"){
                $start_date = "$year-0$month-01";
                $end_date = "$year-0$month-31";
           }else{
                $start_date = "$year-$month-01";
                $end_date = "$year-$month-31";
           }
            $xray = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('digital_xray');
            $xrays[] = $xray;
            $ultrasonogram = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('ultrasonogram');
            $ultras[] = $ultrasonogram;
            $ecg = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('ecg');
            $ecgs[] = $ecg;
            $digital_ecg = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('digital_ecg');
            $digital_ecgs[] = $digital_ecg;
            $endoscopy = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('endoscopy');
            $endos[] = $endoscopy;
            $blood_grouping = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('blood_grouping');
            $blood_groups[] = $blood_grouping;
            $blood_cs = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('blood_cs');
            $blood_css[] = $blood_cs;
            $blood_cbc = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('blood_cbc');
            $blood_cbcs[] = $blood_cbc;
            $urine = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('urine');
            $urines[] = $urine;
            $hbs_normal = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('hbs_normal');
            $hbs_ags[] = $hbs_normal;
            $ct_scan = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('ct_scan');
            $cts[] = $ct_scan;
            $stool = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('stool');
            $stools[] = $stool;
            $operation_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('operation_bill');
            $operations[] = $operation_bill;
            $dr_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('dr_bill');
            $drs[] = $dr_bill;
            $service_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('service_bill');
            $services[] = $service_bill;
            $medicine_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('medicine_bill');
            $medicines[] = $medicine_bill;
            $cabin_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('cabin_bill');
            $cabins[] = $cabin_bill;
            $others_bill = DB::table('indoor_patients')->whereBetween('arrival_date', array($start_date, $end_date))->sum('others_bill');
            $others[] = $others_bill;
            $months[] = $month;
        }
        return view('Report.indoor_report_yearly_summary', compact('year','months','xrays','ultras','ecgs','digital_ecgs','endos','blood_groups','blood_css','blood_cbcs','urines','hbs_ags','cts','stools','operations','drs','services','medicines','cabins','others'));

    }
}
