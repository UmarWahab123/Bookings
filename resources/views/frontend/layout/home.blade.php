

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.7"/>
<title>International Arrivals – Managed Quarantine in a Hotel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="https://quarantinehotels.ctmportal.co.uk/UploadFiles/cms/favicon_1.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link rel="stylesheet" href="{{ asset('/frontend/css/main.css')}}">

    <!-- <link type="text/css" href="/Themes2000.13.8/Skin-1/wtl-obt-en-us-Hotel4Common.css" rel="Stylesheet"/> -->



</head>
<body>
    <div class="htl-container">
        <div id="header_container" class="htl-header-container">
            <div id="top_nav"><div class="container clearfix"><div id="top_nav_l"><a href="{{url('/')}}"><ul class="clearfix"><li><span class="topic">International Arrivals – Managed Quarantine in a Hotel</span></li></ul></a></div></div></div>


    <div class="banner">
    <img src="https://quarantinehotels.ctmportal.co.uk/UploadFiles/cms/banner_1_2.jpg"/>
    <div class="banner_container">
        <div class="banner-form">
            <h3>
                Managed Quarantine in a hotel
            </h3>
            <div>
                Powered by CTM North
            </div>
        </div>
    </div>
</div>


        </div>
        <div id="main_container" class="htl-main-container">

    <div class="htl-home-bd" id="htl-home-container">




<div id="htl-sch-form-dv" class="dv-htl-search ">
    <div class="htl-sch-form-bd">
        <div class="htl-sch-msg">
            <div class="htl-sch-msg-dv">
                <span class="htl-sch-msg-img"></span>
                <span class="htl-sch-msg-txt">Please Select Airport Hotels</span>
            </div>
        <div class="htl-sch-msg-triangle"></div>
        </div>
        <form id="book" action="{{ url('/search-results') }}" method="GET">

        <input type="hidden" name="child1_age" value="">
        <input type="hidden" name="child2_age" value="">
        <input type="hidden" name="room" value="">
        <input type="hidden" name="child" value="">
        <input type="hidden" name="adult" value="">
        <input type="hidden" name="travel_to" value="" required>
        <input type="hidden" name="travel_from" value="" required>
        <input type="hidden" name="date" value="">
        <input type="hidden" name="selected_date" value="">



        <div class="row clearfix" class="checkIn-from">
            <div class="htl-sch-item sm">
                    <div class="sch-font">Travelling From</div>
                    <div>
                        <select id="HtlSch_travellingFromCode" name="HtlSch_travellingFromCode" class="sel htl-sch-sel" title=""><option value="" selected="selected" >Please Select</option><option value="AF" >Afghanistan</option><option value="AO" >Angola</option><option value="AR" >Argentina</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BO" >Bolivia</option><option value="BW" >Botswana</option><option value="BR" >Brazil</option><option value="BI" >Burundi</option><option value="CV" >Cape Verde</option><option value="CL" >Chile</option><option value="CO" >Colombia</option><option value="CD" >Congo Democratic Republic of the</option><option value="CR" >Costa Rica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="ER" >Eritrea</option><option value="SZ" >Eswatini</option><option value="ET" >Ethiopia</option><option value="GF" >French Guiana</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="IN" >India</option><option value="KE" >Kenya</option><option value="LS" >Lesotho</option><option value="MW" >Malawi</option><option value="MV" >Maldives</option><option value="MN" >Mongolia</option><option value="MZ" >Mozambique</option><option value="NA" >Namibia</option><option value="NP" >Nepal</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PA" >Panama</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="QA" >Qatar</option><option value="RW" >Rwanda</option><option value="SC" >Seychelles</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="LK" >Sri Lanka</option><option value="SD" >Sudan</option><option value="SR" >Suriname</option><option value="TZ" >Tanzania, the United Republic of</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="UG" >Uganda</option><option value="AE" >United Arab Emirates</option><option value="UY" >Uruguay</option><option value="VE" >Venezuela</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option></select>
                        <input type="hidden" id="HtlSch_travellingFromName" value="" />





                    </div>
            </div>
            <div class="htl-sch-item sm first">
                <div class="sch-font">Arrival at</div>
                <select id="Sch_cityCode" name="Sch_cityCode" class="sel htl-sch-sel" title=""><option value="21421" type="1" arrivalport="BQH">Biggin Hill</option><option value="575" type="1" arrivalport="BHX">Birmingham</option><option value="21418" type="1" arrivalport="BRS">Bristol</option><option value="182524" type="1" arrivalport="BZZ">Brize Norton</option><option value="21415" type="1" arrivalport="FAB">Farnborough</option><option value="6053770" type="1" arrivalport="LCY">London City</option><option value="182523" type="1" arrivalport="LGW">London Gatwick</option><option value="21414" selected="selected" type="1" arrivalport="LHR">London Heathrow</option>
                <option>Aberdeen</option>
                <option>Edinburgh</option>
                <option>Glasgow</option>

                </select>

                <input type="hidden" id="HtlSch_cityName" name="HtlSch_cityName" value="" />
                <input type="hidden" id="HtlSch_searchType" value="0" />
                <input type="hidden" id="HtlSch_arrivalPort" value="" />
            </div>
            <div class="htl-sch-item sm">
                <div class="sch-font">Check In</div>
                <div class="htl-sch-txt-bg">
                    <div class="txt-date-show">
                        <span class="htl-date-icon"></span>
                        <span class="txt-format-date"></span>
                        <div class="txt-format-wrap">
                            <span class="txt-format-year"></span>
                            <span class="txt-format-week"></span>
                        </div>
                    </div>
                    <input type="text" id="Htl_CheckIn_Reg" class="txt htl-sch-txt date" readonly="readonly" />
                    <input type="hidden" id="HtlSch_checkin" value="{{date('d/m/Y
                        ')}}" />
                </div>
            </div>
            <div class="htl-sch-item sm hidden">
                <div class="sch-font">Check Out</div>
                <div class="htl-sch-txt-bg">
                    <div class="txt-date-show">
                        <span class="htl-date-icon"></span>
                        <span class="txt-format-date"></span>
                        <div class="txt-format-wrap">
                            <span class="txt-format-year"></span>
                            <span class="txt-format-week"></span>
                        </div>
                    </div>
                    <input type="text" id="Htl_CheckOut_Reg" class="txt htl-sch-txt date" readonly="readonly" />
                    <input type="hidden" id="HtlSch_checkout" value="18/07/2021" />
                </div>
            </div>
            <div class="htl-sch-item smrr hidden">
                <div class="sch-font">Days</div>
                <input type="text" value="0" id="Htl_days" class="txt htl-sch-txt n" readonly="readonly" />
                <input type="hidden" value="0" id="HtlSch_nights" class="txt htl-sch-txt n" />
            </div>

            <div class="htl-sch-item sm">
                <div class="sch-font">Travellers</div>
                <div class="htl-sch-txt-bg">
                    <input readonly="readonly" class="txt htl-sch-txt search_txt_passenger" id="passenger" idx="f_paxClassType" value="1&nbsp;Room (1&nbsp;Adult)" />
                </div>
            </div>

        </form>
        <div class="htl-sch-btn-dv">

            <div class="htl-sch-btn" id="htl-sch-btn">
                <div class="htl-sch-btn-inner"><span class="htl-sch-btn-txt">Search</span><span class="htl-sch-btn-icon"></span></div>
            </div>
        </div>
        <input id="prdc" type="hidden" value="1" />
    </div>
    <div class="pax-class-type-dv" id="pax_class_type_dv">
        <textarea class="hidden" id="adult_child_mapping">{"1":[0,1,2],"2":[0,1,2]}</textarea>
        <div class="new-sum-class clearfix">
            <div class="row clearfix" id="htl_sch_row3">
                <div class="htl-sch-item lg">
                    <div class="sch-font">Adult and children over 12
                        <div class="sch-font-s">Per Room</div>
                    </div>
                    <div>
                        <select id="HtlSch_adultQty" name="HtlSch_adultQty" class="sel htl-sch-sel" title=""><option value="1" >1</option><option value="2" >2</option><option value="3" >3</option><option value="4" >4</option><option value="5" >5</option><option value="6" >6</option><option value="7" >7</option><option value="8" >8</option><option value="9" >9</option><option value="10" >10</option></select>
                    </div>
                </div>
                <div class="htl-sch-item lg">
                    <div class="sch-font">Children (aged 5-11)<div class="sch-font-s">Per Room</div>
                    </div>
                    <div>
                        <select id="HtlSch_childQty" name="HtlSch_childQty" class="sel htl-sch-sel" title=""><option value="0" selected="selected" >0</option><option value="1" >1</option><option value="2" >2</option><option value="3" >3</option><option value="4" >4</option><option value="5" >5</option><option value="6" >6</option><option value="7" >7</option><option value="8" >8</option><option value="9" >9</option><option value="10" >10</option></select>
                    </div>
                </div>
                <div class="htl-sch-item lg hidden" id="div-age">
                    <div class="sch-font">Age</div>
                    <div>
                        <input class="sel htl-sch-sel" id="HtlSch_ages" readonly="readonly" value="" type="text" placeholder="Age(2-12)" onclick="ToggleAgeDetails()">
                        <select id="HtlSch_Age" name="HtlSch_Age" class="sel htl-sch-sel" title=""><option value="0" selected="selected" >0</option><option value="1" >1</option><option value="2" >2</option><option value="3" >3</option><option value="4" >4</option><option value="5" >5</option><option value="6" >6</option><option value="7" >7</option><option value="8" >8</option><option value="9" >9</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option></select>
                    </div>

                </div>
                <div class="htl-sch-item lg">
                    <div class="sch-font">Room</div>
                    <div>
                        <select id="HtlSch_roomQty" name="HtlSch_roomQty" class="sel htl-sch-sel" title=""><option value="1" >1</option></select>
                    </div>
                </div>
            </div>
        </div>
        <div class="dv-age-details clearfix" id="dv-age-details" isshow="1" style="">
<div class="age-title">What is the age of your children?</div>
<div class="dv-age-item"><span class="span-age-title">Child 1</span><span class="span-age-sel"><select id="age_0" name="age_0" class="sel sch-sel-small" title="" required="1"><option value="-1" selected="selected">-?-</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option></select></span></div><div class="dv-age-item"><span class="span-age-title">Child 2</span><span class="span-age-sel"><select id="age_1" name="age_1" class="sel sch-sel-small" title="" required="1"><option value="-1" selected="selected">-?-</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option></select></span></div>

</div>

        <div class="pax-class-type-tips">
             <p>
    We do not charge for children under 5 – you will be able to tell us if there are children aged 0-4 in your party before you finish the booking. <br/><br/>
</p>
<p>
    Anyone under 18 years old must be accompanied in the hotel by an adult aged 18 or over
 <br/><br/>
</p>
<p>
    If you require more than 1 room or if there are more than 2 children <strong>of any age</strong> in your party please email our team on familybookingmqs@travelctm.com
</p>
<p>
    <br/><br/>
</p>
        </div>
        <div class="new-sum-class clearfix">
            <div class="htl-sch-item lg">
                <button id="btn-passenger-confirm" class="add">Confirm</button>
            </div>
        </div>
    </div>

<div id="hotel_date" class="poup_calender" cleardata="0"  lang="en-us">
    <div class="clearboth"></div>
    <div class="calender_caption_header">
        <span class="calender_h_date"></span><span class="calender_title">Flight Date</span><span class="hidden close_poup_calender"></span>
    </div>
    <div class="clearboth"></div>
    <table border="0" cellspacing="0" cellpadding="0" class="cal-table-out">
        <tr>
            <td width="18" class="pd_zero">
                <div class="btn_poup_calender_prev bees-m-hide"><a href="#">prev</a></div>
            </td>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">


            <tr>
                        <td class="pd_zero">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="calender_single" valign="top">
                                        <table border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <div class="dv_calendar_year_month_select">
                                                        <table class="tb_w100">
                                                            <tr>
                                                                <td>
                                                                    <div class="btn_poup_calender_prev d-hide"><a href="#">prev</a></div>
                                                                </td>
                                                                <td>
                                                                    <table class="tb_wauto">
                                                                        <tr>
                                                                            <td>
                                                                                <div class="select_list2 select_list_single_cdate">
                                                                                    <div class="btn_input_select2 btn_input_select_cdate"><a href="#"><span class="single_monthlist_selection"></span></a></div>
                                                                                    <div class="input_select_option_list2 single_monthlist">
                                                                                    </div>
                                                                                    <div class="clearboth"></div>
                                                                                </div>
                                                                                <div class="select_list2 select_list_single_cdate">
                                                                                    <div class="btn_input_select2 btn_input_select_cdate"><a href="#"><span class="single_yearlist_selection"></span></a></div>
                                                                                    <div class="input_select_option_list2 single_yearlist">
                                                                                    </div>
                                                                                    <div class="clearboth"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td>
                                                                    <div class="btn_poup_calender_next d-hide"><a href="#">prev</a></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table border="0" cellspacing="0" cellpadding="0" class="table_calendar table_calendar_start_date">
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="calender-blank-split"></td>
                                    <td class="calender_dual" valign="top">
                                        <table border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                                <td>
                                                   <div class="dv_calendar_year_month_select">
                                                        <table class="tb_wauto">
                                                        	<tr>
                                                        		<td>
                                                        <div class="select_list2  select_list_dual_cdate">
                                                                    <div class="btn_input_select2 btn_input_select_cdate"><a href="#"><span class="dual_monthlist_selection"></span></a></div>
                                                                    <div class="input_select_option_list2 dual_monthlist">
                                                                    </div>
                                                                    <div class="clearboth"></div>
                                                                </div>
                                                        <div class="select_list2 select_list_dual_cdate">
                                                                    <div class="btn_input_select2 btn_input_select_cdate"><a href="#"><span class="dual_yearlist_selection"></span></a></div>
                                                                    <div class="input_select_option_list2 dual_yearlist">
                                                                    </div>
                                                                    <div class="clearboth"></div>
                                                                </div></td>
                                                        	</tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table border="0" cellspacing="0" cellpadding="0" class="table_calendar table_calendar_end_date">
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="calender_single_time">
                            <span>Time</span>
                            <select id="calender_single_time_hour" name="calender_single_time_hour" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option></select>
                            <span class="claender-time-colon">:</span>
                            <select id="calender_single_time_minute" name="calender_single_time_minute" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option><option value="32" >32</option><option value="33" >33</option><option value="34" >34</option><option value="35" >35</option><option value="36" >36</option><option value="37" >37</option><option value="38" >38</option><option value="39" >39</option><option value="40" >40</option><option value="41" >41</option><option value="42" >42</option><option value="43" >43</option><option value="44" >44</option><option value="45" >45</option><option value="46" >46</option><option value="47" >47</option><option value="48" >48</option><option value="49" >49</option><option value="50" >50</option><option value="51" >51</option><option value="52" >52</option><option value="53" >53</option><option value="54" >54</option><option value="55" >55</option><option value="56" >56</option><option value="57" >57</option><option value="58" >58</option><option value="59" >59</option></select>
                            <span class="claender-time-colon">:</span>
                            <select id="calender_single_time_second" name="calender_single_time_second" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option><option value="32" >32</option><option value="33" >33</option><option value="34" >34</option><option value="35" >35</option><option value="36" >36</option><option value="37" >37</option><option value="38" >38</option><option value="39" >39</option><option value="40" >40</option><option value="41" >41</option><option value="42" >42</option><option value="43" >43</option><option value="44" >44</option><option value="45" >45</option><option value="46" >46</option><option value="47" >47</option><option value="48" >48</option><option value="49" >49</option><option value="50" >50</option><option value="51" >51</option><option value="52" >52</option><option value="53" >53</option><option value="54" >54</option><option value="55" >55</option><option value="56" >56</option><option value="57" >57</option><option value="58" >58</option><option value="59" >59</option></select>
                        </td>
                        <td class="calender_time_gap"></td>
                        <td class="calender_dual_time">
                            <span>Time</span>
                            <select id="calender_dual_time_hour" name="calender_dual_time_hour" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option></select>
                            <span class="claender-time-colon">:</span>
                            <select id="calender_dual_time_minute" name="calender_dual_time_minute" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option><option value="32" >32</option><option value="33" >33</option><option value="34" >34</option><option value="35" >35</option><option value="36" >36</option><option value="37" >37</option><option value="38" >38</option><option value="39" >39</option><option value="40" >40</option><option value="41" >41</option><option value="42" >42</option><option value="43" >43</option><option value="44" >44</option><option value="45" >45</option><option value="46" >46</option><option value="47" >47</option><option value="48" >48</option><option value="49" >49</option><option value="50" >50</option><option value="51" >51</option><option value="52" >52</option><option value="53" >53</option><option value="54" >54</option><option value="55" >55</option><option value="56" >56</option><option value="57" >57</option><option value="58" >58</option><option value="59" >59</option></select>
                            <span class="claender-time-colon">:</span>
                            <select id="calender_dual_time_second" name="calender_dual_time_second" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option><option value="32" >32</option><option value="33" >33</option><option value="34" >34</option><option value="35" >35</option><option value="36" >36</option><option value="37" >37</option><option value="38" >38</option><option value="39" >39</option><option value="40" >40</option><option value="41" >41</option><option value="42" >42</option><option value="43" >43</option><option value="44" >44</option><option value="45" >45</option><option value="46" >46</option><option value="47" >47</option><option value="48" >48</option><option value="49" >49</option><option value="50" >50</option><option value="51" >51</option><option value="52" >52</option><option value="53" >53</option><option value="54" >54</option><option value="55" >55</option><option value="56" >56</option><option value="57" >57</option><option value="58" >58</option><option value="59" >59</option></select>
                        </td>
                    </tr>
                </table>
            </td>

            <td width="18" class="pd_zero">
                <div class="btn_poup_calender_next bees-m-hide"><a href="#">prev</a></div>
            </td>
        </tr>
    </table>
    <div class="clearboth"></div>
    <div class="btn_close_poup_calender"><a href="#">Confirm</a></div>
    <div class="calender-reset-dv hidden">
        <div id="total_travel_days" class="calender-total-title">&nbsp;</div>
        <a href="#" class="reset_poup_calender">Reset Calendar</a>
        <span  class="confirm_poup_calender">Confirm</span>
    </div>
    <div class="clearboth"></div>
</div>


<div id="entry_date" class="poup_calender" cleardata="0"  lang="en-us">
    <div class="clearboth"></div>
    <div class="calender_caption_header">
        <span class="calender_h_date"></span><span class="calender_title">Flight Date</span><span class="hidden close_poup_calender"></span>
    </div>
    <div class="clearboth"></div>
    <table border="0" cellspacing="0" cellpadding="0" class="cal-table-out">
        <tr>
            <td width="18" class="pd_zero">
                <div class="btn_poup_calender_prev bees-m-hide"><a href="#">prev</a></div>
            </td>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                    <tr>
                        <td class="pd_zero">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="calender_single" valign="top">
                                        <table border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <div class="dv_calendar_year_month_select">
                                                        <table class="tb_w100">
                                                            <tr>
                                                                <td>
                                                                    <div class="btn_poup_calender_prev d-hide"><a href="#">prev</a></div>
                                                                </td>
                                                                <td>
                                                                    <table class="tb_wauto">
                                                                        <tr>
                                                                            <td>
                                                                                <div class="select_list2 select_list_single_cdate">
                                                                                    <div class="btn_input_select2 btn_input_select_cdate"><a href="#"><span class="single_monthlist_selection"></span></a></div>
                                                                                    <div class="input_select_option_list2 single_monthlist">
                                                                                    </div>
                                                                                    <div class="clearboth"></div>
                                                                                </div>
                                                                                <div class="select_list2 select_list_single_cdate">
                                                                                    <div class="btn_input_select2 btn_input_select_cdate"><a href="#"><span class="single_yearlist_selection"></span></a></div>
                                                                                    <div class="input_select_option_list2 single_yearlist">
                                                                                    </div>
                                                                                    <div class="clearboth"></div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td>
                                                                    <div class="btn_poup_calender_next d-hide"><a href="#">prev</a></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table border="0" cellspacing="0" cellpadding="0" class="table_calendar table_calendar_start_date">
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="calender-blank-split"></td>
                                    <td class="calender_dual" valign="top">
                                        <table border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                                <td>
                                                   <div class="dv_calendar_year_month_select">
                                                        <table class="tb_wauto">
                                                        	<tr>
                                                        		<td>
                                                        <div class="select_list2  select_list_dual_cdate">
                                                                    <div class="btn_input_select2 btn_input_select_cdate"><a href="#"><span class="dual_monthlist_selection"></span></a></div>
                                                                    <div class="input_select_option_list2 dual_monthlist">
                                                                    </div>
                                                                    <div class="clearboth"></div>
                                                                </div>
                                                        <div class="select_list2 select_list_dual_cdate">
                                                                    <div class="btn_input_select2 btn_input_select_cdate"><a href="#"><span class="dual_yearlist_selection"></span></a></div>
                                                                    <div class="input_select_option_list2 dual_yearlist">
                                                                    </div>
                                                                    <div class="clearboth"></div>
                                                                </div></td>
                                                        	</tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table border="0" cellspacing="0" cellpadding="0" class="table_calendar table_calendar_end_date">
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="calender_single_time">
                            <span>Time</span>
                            <select id="calender_single_time_hour" name="calender_single_time_hour" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option></select>
                            <span class="claender-time-colon">:</span>
                            <select id="calender_single_time_minute" name="calender_single_time_minute" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option><option value="32" >32</option><option value="33" >33</option><option value="34" >34</option><option value="35" >35</option><option value="36" >36</option><option value="37" >37</option><option value="38" >38</option><option value="39" >39</option><option value="40" >40</option><option value="41" >41</option><option value="42" >42</option><option value="43" >43</option><option value="44" >44</option><option value="45" >45</option><option value="46" >46</option><option value="47" >47</option><option value="48" >48</option><option value="49" >49</option><option value="50" >50</option><option value="51" >51</option><option value="52" >52</option><option value="53" >53</option><option value="54" >54</option><option value="55" >55</option><option value="56" >56</option><option value="57" >57</option><option value="58" >58</option><option value="59" >59</option></select>
                            <span class="claender-time-colon">:</span>
                            <select id="calender_single_time_second" name="calender_single_time_second" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option><option value="32" >32</option><option value="33" >33</option><option value="34" >34</option><option value="35" >35</option><option value="36" >36</option><option value="37" >37</option><option value="38" >38</option><option value="39" >39</option><option value="40" >40</option><option value="41" >41</option><option value="42" >42</option><option value="43" >43</option><option value="44" >44</option><option value="45" >45</option><option value="46" >46</option><option value="47" >47</option><option value="48" >48</option><option value="49" >49</option><option value="50" >50</option><option value="51" >51</option><option value="52" >52</option><option value="53" >53</option><option value="54" >54</option><option value="55" >55</option><option value="56" >56</option><option value="57" >57</option><option value="58" >58</option><option value="59" >59</option></select>
                        </td>
                        <td class="calender_time_gap"></td>
                        <td class="calender_dual_time">
                            <span>Time</span>
                            <select id="calender_dual_time_hour" name="calender_dual_time_hour" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option></select>
                            <span class="claender-time-colon">:</span>
                            <select id="calender_dual_time_minute" name="calender_dual_time_minute" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option><option value="32" >32</option><option value="33" >33</option><option value="34" >34</option><option value="35" >35</option><option value="36" >36</option><option value="37" >37</option><option value="38" >38</option><option value="39" >39</option><option value="40" >40</option><option value="41" >41</option><option value="42" >42</option><option value="43" >43</option><option value="44" >44</option><option value="45" >45</option><option value="46" >46</option><option value="47" >47</option><option value="48" >48</option><option value="49" >49</option><option value="50" >50</option><option value="51" >51</option><option value="52" >52</option><option value="53" >53</option><option value="54" >54</option><option value="55" >55</option><option value="56" >56</option><option value="57" >57</option><option value="58" >58</option><option value="59" >59</option></select>
                            <span class="claender-time-colon">:</span>
                            <select id="calender_dual_time_second" name="calender_dual_time_second" class="sel" title=""><option value="00" >00</option><option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option><option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option><option value="32" >32</option><option value="33" >33</option><option value="34" >34</option><option value="35" >35</option><option value="36" >36</option><option value="37" >37</option><option value="38" >38</option><option value="39" >39</option><option value="40" >40</option><option value="41" >41</option><option value="42" >42</option><option value="43" >43</option><option value="44" >44</option><option value="45" >45</option><option value="46" >46</option><option value="47" >47</option><option value="48" >48</option><option value="49" >49</option><option value="50" >50</option><option value="51" >51</option><option value="52" >52</option><option value="53" >53</option><option value="54" >54</option><option value="55" >55</option><option value="56" >56</option><option value="57" >57</option><option value="58" >58</option><option value="59" >59</option></select>
                        </td>
                    </tr>
                </table>
            </td>

            <td width="18" class="pd_zero">
                <div class="btn_poup_calender_next bees-m-hide"><a href="#">prev</a></div>
            </td>
        </tr>
    </table>
    <div class="clearboth"></div>
    <div class="btn_close_poup_calender"><a href="#">Confirm</a></div>
    <div class="calender-reset-dv hidden">
        <div id="total_travel_days" class="calender-total-title">&nbsp;</div>
        <a href="#" class="reset_poup_calender">Reset Calendar</a>
        <span  class="confirm_poup_calender">Confirm</span>
    </div>
    <div class="clearboth"></div>
</div>


</div>




    </div>



        </div>
        <div id="footer_container">

<div class="side-pannel noprint" id="dv-back-top">
    <a href="javascript:;;" target="_self" hidefocus="true"><span class="call-survey">&nbsp;</span></a>
</div>
<div id="abovefooter">
    <div class="container mh-medium">
        <div class="row"><div class="container mh-medium"><p><strong><span style="font-size: 24px;">For Enquiries about Managed Hotel Quarantine </span></strong><strong><span style="font-size: 24px;">(for arrivals into the UK from any Red List country)</span></strong><strong><span style="font-size: 24px;"><span style="font-size:15px;font-family:'Calibri',sans-serif"> </span>please contact CTM on:</span></strong></p><p><br/></p><span style="font-size: 14px;"> Phone: +44 (0) 207 429 9732<br/></span><p><span style="font-size: 14px;"> Email: quarantine.hotels@travelctm.com </span></p><p><span style="font-size: 14px;"><br/></span></p><p><strong><span style="font-size: 24px;">For Enquiries about Covid Test Kits </span></strong><strong><span style="font-size: 24px;">(for arrivals into the UK from any Green or Amber list country)</span></strong><strong><span style="font-size: 24px;"><span style="font-size:15px;font-family:'Calibri',sans-serif"> </span>please contact CTM on:</span></strong></p><p><span style="font-size: 14px;"><br/></span></p><p><span style="font-size: 14px;">Phone:+44 (0) 207 429 9983</span></p><p><span style="font-size: 14px;">Email: Covid.testkit@travelctm.com</span></p></div><br/><p><br/></p><p><br/></p><p><br/></p></div>

    </div>
</div>
        </div>
    </div>
    <input id="__RequestVerificationToken" name="__RequestVerificationToken" type="hidden" value="tuS33x9RNHSorlLa/vIcsWoK1lAB6yOIgooWu8M2Y6QpINpna1vGri+lW8GvBzOo" />
</body>
</html>

<!-- <script type="text/javascript" src="./Common/VariablesGlobal.ashx?fv=2000.13.8"></script>
<script src="/js2000.13.8/lang-global-en-us.js"></script>
<script type="text/javascript" src="./Flight/FlightGlobal.ashx?sys=&trans=&prdc="></script>
<script type="text/javascript" src="./Hotel/HotelGlobal.ashx?sys=&trans=&prdc="></script>
<script language="javascript" type="text/javascript" src="/Js2000.13.8/wtl-ota-en-us-Hotel4Common.js"></script> -->
<script>
    var SerUrl = 'https://quarantinehotels.ctmportal.co.uk/';var LangType = 'en-us';var DateNow = '06/07/2021';var RefreshSearchTime = '15';var SerUrlStyle = 'https://quarantinehotels.ctmportal.co.uk/Themes2000.13.8/Skin-1/';var IsDebugMode = false;var FareCurr = 'GBP';
</script>
<script src="{{ asset('/frontend/js/lang-globle.js')}}"></script>
<script type="text/javascript" src="https://quarantinehotels.ctmportal.co.uk/Flight/FlightGlobal.ashx?sys=&trans=&prdc="></script>
<script type="text/javascript" src="https://quarantinehotels.ctmportal.co.uk/Hotel/HotelGlobal.ashx?sys=&trans=&prdc="></script>
<script src="{{ asset('/frontend/js/main.js')}}"></script>
