<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.7"/>
<title>International Arrivals – Managed Quarantine in a Hotel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/public/frontend/images/favicon_1.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link rel="stylesheet" href="{{ asset('/frontend/css/main.css')}}">
    <!-- <link type="text/css" href="/Themes2000.13.8/Skin-1/wtl-obt-en-us-Hotel4Common.css" rel="Stylesheet"/> -->
</head>
<body class="pkg-sch-page" lang="en-us">
    <div class="pkg-sch-page-container">
        <div id="header_container" class="header_container">
            <div id="top_nav"><div class="container clearfix"><div id="top_nav_l"><a href="{{url('/')}}"><ul class="clearfix"><li><span class="topic">International Arrivals – Managed Quarantine in a Hotel</span></li></ul></a></div></div></div>
        </div>
        <div id="main_container" class="htl-sch-container htl-sch-container-single " >
    <div class="htl-sch-page-sub" id="htl-bkg-container">
<div class="m-hide">
    <div class="htl-bkg-bpb-container">
        <span onclick="window.location='../';" class="flight-home htl-home-bpb fl">&nbsp;</span>
         <span class="fl pointer" onclick="window.location='/';">/ Hotel</span>
    </div>
    <div class="clear"></div>
    <div class="process-bar clearfix">
        <ul>
            <li id="step-1">
                <b class="step-icon"></b>
                <div class="margin-left-s1">Search</div>
                <p class="bar">
                    <b>1</b>
                     <span class="step-done">&nbsp;</span>
                </p>
            </li>
            <li class="active"  id="step-2">
                <b class="step-icon"></b>
                <div class="margin-left-s2">Reservation Details</div>
                <p class="bar">
                    <b>2</b>
                     <span class="step-active">&nbsp;</span>
                </p>
            </li>
            <li class="pedding" id="step-3">
                <b class="step-icon"></b>
                <div class="margin-left-s3">Confirmation</div>
                <p class="bar">
                    <b>3</b>
                     <span class="step-pedding">&nbsp;</span>
                </p>
            </li>
          <li class="pedding width_50px" id="step-4">
              <b class="step-icon"></b>
                <div class="margin-left-s4">Complete</div>
                <p class="bar width_20px">
                    <b>4</b>
                </p>
            </li>
        </ul>
    </div>
</div>
<div class="clear"></div>
        <div class="htl-booking-dv clearfix">
            <div>
                <div class="htl-b-title">Your Reservation Information</div>
<div class="htl-b-content clearfix">
    <div class="htl-b-htl-name" title="Jurys Inn Swindon">Managed Quarantine Hotel package</div>
    <div class="htl-b-info-dv">
        <div class="htl-b-info-title clearfix">
            <span class="m-row">
                <div class="col1">Check In Date</div>
            </span>
            <span class="m-row">
                <div class="col4">Number Of Rooms</div>
                <div class="col5">Stay In Summary</div>
            </span>
        </div>
        <div class="htl-b-info-content clearfix">
            <span class="m-row">
                <div class="col1">
                    <div>{{$data['selected_date']}}</div>
                </div>
            </span>
            <div class="htl-b-m-title">
                <span class="m-row">
                    <div class="col4">Number Of Rooms</div>
                    <div class="col5">Stay In Summary</div>
                </span>
            </div>
            <span class="m-row">
                <div class="col4">1 X 10 full days (11 nights)
The package includes food and beverages, transfers, security and two Covid tests
</div>
                <div class="col5">
                    {{$data['adult']}} X Adult
                    @if($data['child'] > 0)
                    <p>{{$data['child']}} X Child</p>
                    @endif
                </div>
            </span>
        </div>
    </div>
    <div class="htl-b-price-dv">
        <div class="htl-b-price-title clearfix">
            <div class="col1">Rates Include Hotel Taxes And Service Charges</div>
            <div class="col2">
                £{{number_format($data['price'])}} X 1 Room = £{{number_format($data['price'])}}
                <input type="hidden" value="1750" id="sel-room-price" />
            </div>
        </div>
        <div class="htl-b-total-dv clearfix">
            <input id="p_total" type="hidden" value="{{$data['price']}}" />
            <div id="total-price-show" class="routing-total-price">£{{number_format($data['price'])}}</div>
            <div class="price-square">Total</div>
        </div>
    </div>
</div>
<input type="hidden" id="b_total_price" value="1750" />
<input type="hidden" id="b_total_merchant_fee" value="0" />
<div id="htl-booking-info-dv">
                @php
                if($data['child']==0){
                    $passenger = "1 Room(" . $data['adult'] . " Adults)";
                }else{
                    $passenger = "1 Room(" . $data['adult'] ." Adults,".$data['child']." Children)";
                }
                @endphp
<form action="{{url('/storeinfo')}}" method="post">
                <input type="hidden" name="booking[child1_age]" value="{{$data['child1_age']}}">
                <input type="hidden" name="booking[child2_age]" value="{{$data['child2_age']}}">
                <input type="hidden" name="booking[room]" value="{{$data['room']}}">
                <input type="hidden" name="booking[children]" value="{{$data['child']}}">
                <input type="hidden" name="booking[adult]" value="{{$data['adult']}}">
                <input type="hidden" name="booking[arrivel_at]" value="{{$data['travel_to']}}">
                <input type="hidden" name="booking[traveling_from]" value="{{$data['travel_from']}}">
                <input type="hidden" name="booking[check_in]" value="{{$data['date']}}">
                <input type="hidden" name="booking[total_price]" value="{{$data['price']}}">
                <input type="hidden" name="booking[travellers]" value="{{$passenger}}">
               {{csrf_field()}}
        <div class="htl-b-contact-dv clearfix">
            <div class="htl-b-contact-title">
                Contact<span class="hide"> Information</span>
            </div>
            <div class="htl-b-contact-content">
                <div>
                    <label class="full">
                        <div>Address</div>
                        <input name="contact[address1]" type="text" value="" id="b_c_billingAddress1" required="required" class="htl-b-txt" placeholder="Enter Address1" autocorrect="off" maxlength="63" />
                        <input name="contact[address2]" type="text" value="" id="b_c_billingAddress2" required="required" class="htl-b-txt" placeholder="Enter Address2" autocorrect="off" maxlength="63" />
                        <input name="contact[city]" type="text" value="" id="b_c_billingTownAndCity" required="required" class="htl-b-txt" placeholder="Enter Town And City" autocorrect="off" maxlength="63" />
                        <input name="contact[postal_code]" type="text" value="" id="b_c_billingPostalCode" required="required" class="htl-b-txt sm" placeholder="Enter Postal Code" autocorrect="off" maxlength="20"/>
                    </label>
                </div>
                <div>
                    <label>
                        <div>
                            Email
                        </div>
                        <input name="contact[email]" type="text" value="" id="b_c_email" required="required" class="htl-b-txt" placeholder="Enter Email Address" onkeyup="this.value=this.value.toLowerCase()" autocorrect="off" maxlength="50" />
                    </label>
                    <label>
                        <div>
                            Reconfirm email
                        </div>
                        <input type="text" value="" id="re_c_email" required="required" class="htl-b-txt" placeholder="Enter Email Address" onkeyup="this.value=this.value.toLowerCase()" autocorrect="off" maxlength="50" />
                    </label>
                    <label>
                        <div>
                            <div>
                                Phone
                            </div>
                            <input name="country_code" placeholder="Area" id="area_%20210706121354977%" class="htl-b-txt htl-phone-area" value="+44" autocorrect="off" maxlength="20" withRandom="1" />
                            <textarea class="hidden">[["+93","Afghanistan(+93)"],["+355","Albania(+355)"],["+213","Algeria(+213)"],["+376","Andorra(+376)"],["+1264","Anguilla(+1264)"],["+1268","Antigua and Barbuda(+1268)"],["+54","Argentina(+54)"],["+374","Armenia(+374)"],["+61","Australia(+61)"],["+43","Austria(+43)"],["+994","Azerbaijan(+994)"],["+1242","Bahamas(+1242)"],["+973","Bahrain(+973)"],["+880","Bangladesh(+880)"],["+1246","Barbados(+1246)"],["+375","Belarus(+375)"],["+32","Belgium(+32)"],["+501","Belize(+501)"],["+229","Benin(+229)"],["+1441","Bermuda(+1441)"],["+591","Bolivia(+591)"],["+267","Botswana(+267)"],["+55","Brazil(+55)"],["+673","Brunei Darussalam(+673)"],["+359","Bulgaria(+359)"],["+226","Burkina Faso(+226)"],["+257","Burundi(+257)"],["+855","Cambodia(+855)"],["+237","Cameroon(+237)"],["+1","Canada(+1)"],["+236","Central African Republic(+236)"],["+235","Chad(+235)"],["+56","Chile(+56)"],["+86","China(+86)"],["+57","Colombia(+57)"],["+242","Congo(+242)"],["+682","Cook Islands(+682)"],["+506","Costa Rica(+506)"],["+53","Cuba(+53)"],["+357","Cyprus(+357)"],["+420","Czech Republic(+420)"],["+45","Denmark(+45)"],["+253","Djibouti(+253)"],["+1890","Dominican Republic(+1890)"],["+593","Ecuador(+593)"],["+20","Egypt(+20)"],["+503","El Salvador(+503)"],["+372","Estonia(+372)"],["+268","Eswatini(+268)"],["+251","Ethiopia(+251)"],["+679","Fiji(+679)"],["+358","Finland(+358)"],["+33","France(+33)"],["+594","French Guiana(+594)"],["+689","French Polynesia(+689)"],["+241","Gabon(+241)"],["+220","Gambia(+220)"],["+995","Georgia(+995)"],["+49","Germany(+49)"],["+233","Ghana(+233)"],["+350","Gibraltar(+350)"],["+30","Greece(+30)"],["+1809","Grenada(+1809)"],["+1671","Guam(+1671)"],["+502","Guatemala(+502)"],["+224","Guinea(+224)"],["+592","Guyana(+592)"],["+509","Haiti(+509)"],["+504","Honduras(+504)"],["+852","Hong Kong(+852)"],["+36","Hungary(+36)"],["+354","Iceland(+354)"],["+91","India(+91)"],["+62","Indonesia(+62)"],["+98","Iran-Islamic Republic of(+98)"],["+964","Iraq(+964)"],["+972","Israel(+972)"],["+39","Italy(+39)"],["+1876","Jamaica(+1876)"],["+81","Japan(+81)"],["+962","Jordan(+962)"],["+327","Kazakhstan(+327)"],["+254","Kenya(+254)"],["+850","Korea Democratic People's Republic of(+850)"],["+965","Kuwait(+965)"],["+331","Kyrgyzstan(+331)"],["+856","Lao People's Democratic Republic(+856)"],["+371","Latvia(+371)"],["+961","Lebanon(+961)"],["+266","Lesotho(+266)"],["+231","Liberia(+231)"],["+218","Libya(+218)"],["+423","Liechtenstein(+423)"],["+370","Lithuania(+370)"],["+352","Luxembourg(+352)"],["+853","Macao(+853)"],["+261","Madagascar(+261)"],["+265","Malawi(+265)"],["+60","Malaysia(+60)"],["+960","Maldives(+960)"],["+223","Mali(+223)"],["+356","Malta(+356)"],["+230","Mauritius(+230)"],["+52","Mexico(+52)"],["+373","Moldova Republic of(+373)"],["+377","Monaco(+377)"],["+976","Mongolia(+976)"],["+1664","Montserrat(+1664)"],["+212","Morocco(+212)"],["+258","Mozambique(+258)"],["+95","Myanmar(+95)"],["+264","Namibia(+264)"],["+674","Nauru(+674)"],["+977","Nepal(+977)"],["+31","Netherlands(+31)"],["+64","New Zealand(+64)"],["+505","Nicaragua(+505)"],["+227","Niger(+227)"],["+234","Nigeria(+234)"],["+47","Norway(+47)"],["+968","Oman(+968)"],["+92","Pakistan(+92)"],["+507","Panama(+507)"],["+675","Papua New Guinea(+675)"],["+595","Paraguay(+595)"],["+51","Peru(+51)"],["+63","Philippines(+63)"],["+48","Poland(+48)"],["+351","Portugal including the Azores(+351)"],["+1787","Puerto Rico(+1787)"],["+974","Qatar(+974)"],["+40","Romania(+40)"],["+7","Russia(+7)"],["+1758","Saint Lucia(+1758)"],["+1784","Saint Vincent and the Grenadines(+1784)"],["+378","San Marino(+378)"],["+239","Sao Tome and Principe(+239)"],["+966","Saudi Arabia(+966)"],["+221","Senegal(+221)"],["+248","Seychelles(+248)"],["+232","Sierra Leone(+232)"],["+65","Singapore(+65)"],["+421","Slovakia(+421)"],["+386","Slovenia(+386)"],["+677","Solomon Islands(+677)"],["+252","Somalia(+252)"],["+27","South Africa(+27)"],["+82","South Korea(+82)"],["+34","Spain including the Canary Islands(+34)"],["+94","Sri Lanka(+94)"],["+249","Sudan(+249)"],["+597","Suriname(+597)"],["+46","Sweden(+46)"],["+41","Switzerland(+41)"],["+963","Syrian Arab Republic(+963)"],["+886","Taiwan(+886)"],["+992","Tajikistan(+992)"],["+255","Tanzania, the United Republic of(+255)"],["+66","Thailand(+66)"],["+228","Togo(+228)"],["+676","Tonga(+676)"],["+1809","Trinidad and Tobago(+1809)"],["+216","Tunisia(+216)"],["+90","Turkey(+90)"],["+993","Turkmenistan(+993)"],["+256","Uganda(+256)"],["+380","Ukraine(+380)"],["+971","United Arab Emirates(+971)"],["+44","United Kingdom of Great Britain and Northern Ireland(+44)"],["+1","United States of America(+1)"],["+598","Uruguay(+598)"],["+233","Uzbekistan(+233)"],["+58","Venezuela(+58)"],["+84","Vietnam(+84)"],["+967","Yemen(+967)"],["+260","Zambia(+260)"],["+263","Zimbabwe(+263)"]]</textarea>
                            <input  name="contact[phone]"  type="text" value="" id="phone" required="required" class="htl-b-txt htl-phone" placeholder="Enter Phone Number" onkeypress="onlyNumber(this,event)" autocorrect="off" maxlength="20"  />
                        </div>
                    </label>
                </div>
                <div class="htl-b-contact-input">
                    <label>
                        <div>
                            Title
                        </div>
                        <select id="b_c_title" class="sel htl-b-sel" required="required">
                            <option value="">Title</option>
                            <option value="MR">Mr.</option>
                            <option value="MS">Ms.</option>
                            <option value="MRS">Mrs.</option>
                            <option value="DR">Dr.</option>
                            <option value="PROF">Prof.</option>
                        </select>
                    </label>
                    <label>
                        <div>First Name</div>
                        <input name="contact[first_name]"  type="text" id="b_c_firstName" required="required" class="htl-b-txt" placeholder="Enter First Name" value="" autocorrect="off" onkeyup="ToUpperCase(this);" maxlength="30" />
                    </label>
                    <label>
                        <div>Last Name</div>
                        <input name="contact[last_name] type="text" id="b_c_lastName" required="required" class="htl-b-txt" placeholder="Enter Last Name" autocorrect="off" onkeyup="ToUpperCase(this);" maxlength="30" />
                    </label>
                </div>
            </div>
        </div>
        <div class="htl-b-traveler clearfix" id="htl-b-traveler">
            <div class="htl-b-title">
                Guest
            </div>
            @php
            $total=$data['adult']+$data['child'];
            @endphp
             @for ($i = 1; $i <= $total; $i++)

             @php
             $title="Adult";
             if($i > $data['adult']){
                $title="Child";
             }
             @endphp
            <div class="htl-b-travel-content clearfix">
                <div class="htl-bkg-pax-dv">
                    <div id="contain-dv-room1">
                        <input type="hidden" value="1" id="ba_room1_Num" />
                        <div id="contain-dv-room1-item-1" class="b-travel-item">
                            <input id="ba_room1_1_room_code" type="hidden" value="C1KCWN#CWN#1A0C####ISO" />
                            <label>
                                <div>Title({{$title}})</div>
                                 <input name="guest[{{$i}}][type]" type="hidden" class="htl-b-txt" value="{{$title}}"  required="required"/>

                                <select name="guest[{{$i}}][title]" class="sel htl-b-sel" required="required" id="ba_room1_1_adult_title">
                                    <option value="">Title</option>
                                    <option value="MR">Mr.</option>
                                    <option value="MS">Ms.</option>
                                    <option value="MRS">Mrs.</option>
                                    <option value="DR">Dr.</option>
                                    <option value="PROF">Prof.</option>
                                </select>
                            </label>
                            <label>
                                <div>First Name</div>
                                <input name="guest[{{$i}}][first_name]" id="ba_room1_1_adult_firstName" type="text" class="htl-b-txt" value="" onkeyup='ToUpperCase(this);' placeholder="Enter First Name" required="required" maxlength="30"/>
                            </label>
                            <label>
                                <div>Last Name</div>
                                <input name="guest[{{$i}}][last_name]" id="ba_room1_1_adult_lastName" type="text" class="htl-b-txt" value="" onkeyup='ToUpperCase(this);' placeholder="Enter Last Name" required="required" maxlength="30"/>
                            </label>
                            <label>
                                <div>Passport Number</div>
                                <input name="guest[{{$i}}][passport_number]" id="ba_room1_1_adult_passport" type="text" class="htl-b-txt" value="" placeholder="Enter Passport Number" required="required" maxlength="20" oninput="strictPassportInput(this,event)"/>
                            </label>
                            @if($i > $data['adult'])
                            @php
                            if($data['adult']==1 && $i==2){
                                $age=$data['child1_age'];
                            }
                            else if($data['adult']==1 && $i==3){
                                $age=$data['child2_age'];
                            }
                            else if($data['adult']==2 && $i==3){
                                $age=$data['child1_age'];
                            }
                             else if($data['adult']==2 && $i==4){
                                $age=$data['child2_age'];
                            }

                            @endphp
                             <label>
                                <div>Age</div>
                                <input name="guest[{{$i}}][age]" readonly id="ba_room1_1_adult_passport" type="text" class="htl-b-txt" value="{{$age}}" readonly placeholder="Enter Age" required="required"/>
                            </label>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
              @endfor
              <p>Surcharge applies for children aged between 5 and 11</p>
        </div>
                            <div id="booking-remarks" class="booking-remarks">
                                <div class="htl-b-title">Booking Remarks</div>
                                <div class="booking-remarks-content clearfix">
                                    <div class="clearfix">
                                        <div class="col">
                                            <div>Flight or Eurostar or Ferry number</div>
                                            <input name="remarks[flight_number]" required="1" class="htl-b-txt" placeholder="Enter Flight or Eurostar or Ferry number" id="b_flightNumber" value="" type="text" required="1" maxlength="30" />
                                            <div class="tips">UK flight arrival number (e.g. VS299) for Hotel transfers</div>
                                        </div>
                                        <div class="col">
                                            <div>Terminal Number</div>
                                            <input name="remarks[terminal_number]" required="1" class="htl-b-txt" placeholder="Enter Terminal Number" id="b_terminalNumber" value="" type="text" required="1" maxlength="20" />
                                        </div>
                                        <div class="col">
                                            <div>Arrival in UK</div>
                                            <div class="booking-remarks-content-date">
                                                <div class="txt-date-show">
                                                    <span id="Htl_entryCountryDate_show"></span>
                                                </div>
                                                <input  type="text" id="Htl_entryCountryDate_Reg" class="htl-b-txt" />
                                                <input name="remarks[arrival_date]" value="{{$data['date']}}" type="hidden" id="b_entryCountryTime"/>
                                                <input type="hidden" id="HtlSch_checkin" value="{{$data['date']}}" required="1"/>
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
                                             </div>
                                          </td>
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
                                        <div class="col">
                                            <div>Arrival Time</div>
                                            <input name="remarks[arrival_time]" required="1" class="htl-b-txt" maxlength="5" size="6" placeholder="00:00" id="b_entryCountrySpecificTime" value="" type="text" required="1" />
                                            <div class="tips">The Time of Arrival needs to be a 24 hour clock format</div>
                                        </div>
                                    </div>
                                    <div class="terms">
                                        <div>Please provide the arrival flight number on your journey into the UK to assist with hotel transfers. If you are travelling on connecting flights to reach the UK, this will be the last flight number on the journey.<strong> Please also ensure that the Arrival Date and Time is the local time of arrival into the UK</strong></div>
                                    </div>
                                </div>
                            </div>
                            <div id="bkg-credit-card-dv" class="bkg-credit-card-dv">
                                <div class="htl-b-title">Payment</div>
                                <div class="htl-b-credit-card-content clearfix">
                                    <div class="col">
                                        <div>Card No.</div>
                                        <input name="payment[card_number]" required="1" class="htl-b-txt" placeholder="Enter Card No." id="cc_cardNo" value="" type="text" maxlength="20" />
                                    </div>
                                    <div class="col">
                                        <span class="cc-types__img cc-types__img--AX" title="Amex" data-value="AX"></span>
                                        <span class="cc-types__img cc-types__img--VI" title="VISA" data-value="VI"></span>
                                        <span class="cc-types__img cc-types__img--CA" title="Master Card" data-value="CA"></span>
                                    </div>
                                    <div class="col">
                                        <div>Expiry Date (MM / YY)</div>
                                        <div class="clearfix">
                                            <div class="sub-col">
                                                <select id="cc_expiryMonth" name="payment_month" class="sel htl-b-sel" title="" required="1"><option value="" selected="selected" >——</option><option value="1" >Jan</option><option value="2" >Feb</option><option value="3" >Mar</option><option value="4" >Apr</option><option value="5" >May</option><option value="6" >Jun</option><option value="7" >Jul</option><option value="8" >Aug</option><option value="9" >Sep</option><option value="10" >Oct</option><option value="11" >Nov</option><option value="12" >Dec</option></select>
                                            </div>
                                            <div class="sub-col">
                                                <select id="cc_expiryYear" name="card_year" class="sel htl-b-sel" title="" required="1"><option value="" selected="selected" >Please Select</option><option value="21" >2021</option><option value="22" >2022</option><option value="23" >2023</option><option value="24" >2024</option><option value="25" >2025</option><option value="26" >2026</option><option value="27" >2027</option><option value="28" >2028</option><option value="29" >2029</option></select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>First Name</div>
                                        <input name="payment[first_name]" required="1" class="htl-b-txt" onkeyup="ToUpperCase(this);" placeholder="Enter First Name" id="cc_givenName" value="" type="text" maxlength="30" />
                                    </div>
                                    <div class="col">
                                        <div>Last Name</div>
                                        <input name="payment[last_name]" required="1" class="htl-b-txt" onkeyup="ToUpperCase(this);" placeholder="Enter Last Name" id="cc_surname" value="" type="text" maxlength="30" />
                                    </div>
                                </div>
                            </div>
                            <div id="bkg-special-rq-out-dv">
        <div class="htl-b-special-dv clearfix">
            <div class="htl-b-title">Additional Information</div>
            <div class="htl-b-special-content clearfix">
                <div id="htl-booking-info-remark">
                    <div>If you are travelling with any children aged 0-4. Please provide details here.</div>
                    <textarea name="additional[details]" id="b_special_requirement" placeholder="Please fill in remarks in English:" class="htl-b-special-remark" maxlength=60></textarea>
                    <div>Any additional requirements or information. <b>Please leave blank if you do not have any Additional Requirements or information. Do not use N/A.</b></div>
                    <textarea name="additional[additional_req]" id="b_special_remark" placeholder="Please fill in remarks in English:" class="htl-b-special-remark" maxlength=60></textarea>
                    <div>Dietary Requirements</div>
                    <textarea name="additional[dietary_req]" id="b_meal_request" placeholder="Please fill in remarks in English:" class="htl-b-special-remark" maxlength=60></textarea>
                </div>
                        <div>
                    <div class="htl-b-special-titel" ><p>
            Please insert details here that you or any member of your party may have, for example, ground floor accessible rooms.
        </p></div>
                    <div class="htl-b-special-titel">All special requirements are on request basis and subject to hotel availability.</div>
                    <div class="htl-b-special-item hidden" id="htl-b-special-item">
                <div class='row'><div class='col1'><label> <input type='checkbox' value='RqNonSmokingFloor' />Non-Smoking Floors</label></div><div class='col2'><label> <input type='checkbox' value='RqDblBed' />Double Bed</label></div><div class='col3'><label> <input type='checkbox' value='RQEarlyCheckin' />Early Check In</label></div></div><div class='row'><div class='col1'><label> <input type='checkbox' value='RQLateCheckout' />Late Check Out</label></div><div class='col2'><label> <input type='checkbox' value='RqAdjoinningRoom' />Adjacent Room</label></div><div class='col3'><label> <input type='checkbox' value='RqConnectingRoom' />Connect Room</label></div></div><div class='row'><div class='col1'><label> <input type='checkbox' value='RqHighFloor' />High Floor Room</label></div><div class='col2'><label> <input type='checkbox' value='RQTwin' />Two Beds</label></div></div>
                </div>
                </div>
            </div>
        </div>
 </div>
<div id="bkg-terms-out-dv">
<div class="htl-b-terms item-list clearfix">
    <div class="title">Terms & Conditions</div>
    <div class="clearfix items-content bmr-terms-content">
        <p style="background: white"><span style=";color: black;font-size: 13px">· </span><span style=";font-family: ">Managed Quarantine Hotel Package – includes accommodation, breakfast, lunch, evening meal and hot and cold drinks, 2 Covid tests and transfer from the port of arrival to and from the hotel at the end of your quarantine. </span></p><p style="background: white"><span style=";font-family: ">· The payment will be processed using the card provided at the time of booking for Managed Hotel Quarantine Package. Any additional charges incurred during the stay must be settled directly by the guest to the hotel on departure. If the card details provided are not accepted, you will be advised by email and will be required to rebook. </span></p><p style="background: white"><span style=";font-family: ">· Please review the booking request carefully and ensure all the details are accurate and correct. Any changes once confirmed, may incur additional charges. Any changes or cancellations made by the travellers themselves with the booked hotels will be deemed invalid and will not be recognised by our company. </span></p><p style="background: white"><span style=";font-family: ">· Please provide the arrival flight number of your journey into the UK to assist with hotel transfers. Please make sure you provide accurate flight details to avoid any delays with your transfer to your accommodation on arrival. If you are travelling on connecting flights to reach the UK, this will be the last flight number on the journey. </span></p><p style="background: white"><span style=";font-family: ">· If for any reason you need to cancel or amend your reservation, please contact us by telephone or email us 48 hours before arrival and we will cancel your booking in full. If you contact us after that time, a cancellation charge of £200 will be applicable. The remaining amount paid will be refunded to you. If you need to change your booking, please contact us to discuss the changes and we will do all we can to assist you. </span></p><p style="background: white"><span style=";font-family: ">· Unless otherwise specified, all other expenses shall be regarded as personal consumption and  Alpine Travel  Ltd will not be liable for any charges incurred on your behalf. </span></p><p style="background: white"><span style=";font-family: ">· You are required by law to complete the full quarantine at the hotel. </span></p><p style="background: white"><span style=";font-family: ">· When you book a room it means that you have accepted the full terms and conditions of booking. </span></p><p style="background: white"><span style=";font-family: ">· Please keep your booking confirmation and invoice (which contains your booking reference) as proof of booking and purchase. </span></p><p style="background: white"><span style=";font-family: ">· If you do not receive your confirmed booking/invoice  please check your spam or junk email before contacting the Alpine team </span></p><p style="background: white"><span style=";font-family: ">· You must have a confirmed booking/invoice prior to travel to England, Northern Ireland and Scotland.</span></p><p style="background: white"><span style=";font-family: "><br/></span></p><p style="background: white">  <strong>Anyone aged under 18 years old must be accompanied by an adult aged 18 years or over during their entire hotel quarantine stay.</strong> </p><p> <a href="https://www.gov.uk/guidance/booking-and-staying-in-a-quarantine-hotel-when-you-arrive-in-england" _src="https://www.gov.uk/guidance/booking-and-staying-in-a-quarantine-hotel-when-you-arrive-in-england">https://www.gov.uk/guidance/booking-and-staying-in-a-quarantine-hotel-when-you-arrive-in-england</a> </p><p><br/></p><p style="background: white"><span style=";font-family: "> <br/> 1) An email confirming that your booking request has been received and to let you know that it is being processed. This confirmation number is <strong>NOT</strong> the number you use on the PLF which will be emailed to you from:</span><span style="font-size: 16px;"><a><span style="color: rgb(0, 0, 255); font-family: Calibri; text-decoration: underline;">North.hotels@alpinetravels.co.uk</span></a><span style="color: black;"> </span></span><span style=";color: black;font-size: 13px"><br/> <br/> 2</span><span style=";font-family: ">) Final Confirmation / Invoice – to let you know your booking has been accepted. You will receive your invoice once payment has been confirmed. If payment is not accepted you will be advised by email and you will need to rebook. The numerical digit number on the final confirmation/ invoice is the <strong><em>invoice number</em></strong> that <strong><em>you must use when completing your PLF form. </em></strong>If you do not have this final confirmation/ invoice you will <strong>NOT </strong>be able to complete the PLF. The Final Confirmation/Invoice will be sent to you from the following address</span><span style=";color: black;font-size: 13px">: </span><span style="font-size: 16px;"><a><span style="color: rgb(0, 0, 255); font-family: Calibri; font-size: 16px; text-decoration: underline;">donotreply@alpinetravels.co.uk</span></a></span> </p><p style="background: white"><br/></p><p align="left" style="background: white; margin: 0px; text-align: left;"><span style="margin: 0px; font-family: ">Passenger Locator Form (PLF) -You <strong>must </strong>complete this
form online before you arrive in the UK</span><span style="margin: 0px; color: black; font-size: 10pt;">. </span><span style="margin: 0px;"><span style="margin: 0px; color: red; font-size: 10pt;"><span style="margin: 0px; color: red;"><a href="https://www.gov.uk/provide-journey-contact-details-before-travel-uk" _src="https://www.gov.uk/provide-journey-contact-details-before-travel-uk">https://www.gov.uk/provide-journey-contact-details-before-travel-uk</a></span></span></span></p><p align="left" style="background: white; margin: 0px; text-align: left;"><span style="margin: 0px;"><span style="margin: 0px; color: red; font-size: 10pt;"><span style="margin: 0px; color: red;"> </span></span></span></p><p><br/></p>
    </div>
</div>
                    </div>
                    <input type="hidden" id="b_deadline" value="" />
                </div>
            </div>
       <div id="bkg-verify-dv" class="htl-b-btn-dv clearfix">
                <div class="bmr-booking-btns width_100p">
                    <div class="booking-rules-dv fl"><div><input id="ck-recipient-promotion" type="checkbox" required="true" />
                        <span class="color-red" style="margin-left: 0px;">*</span>We will only contact the customer in connection with this booking and not for marketing purposes or promotions</div><div class="margin_t_5px"><input type="checkbox" id="bkg-rules1" required="true"/><span class="color-red" style="margin-left:4px;">*</span>I confirm that I have read and accepted the <a class="color-red" target="_blank" href="https://quarantinehotel.ctmportal.co.uk/Content/View.aspx?category=Terms&key=general-terms-htl">booking terms</a>, website terms and disclaimer and <a class="color-red" target="_blank" href="https://investor.travelctm.com.au/privacy/">privacy policies</a>.</div></div>
                    <div class="booking-dv">
                        <input id="htl-bkg-btn" type="submit" value="Reserve" class="htl-b-book-btn" />
                        
                    </div>
                </div>
                <div class="clearfix fl">
                    <button id="btn-confirm-booking-back" class="htl-b-sch-btn margin_l_5px hidden">Back</button>
                </div>
            </div>
            <div id="bkg-confirm-dv" class="htl-b-btn-dv clearfix">
               <!--  <div class="htl-b-book-btn-dv">
                    <input type="submit" value="Reserve" class="htl-b-book-btn-next btn-booking"/>
                </div> -->
                <a href="{{url('/')}}"  class="htl-b-sch-btn history_back_mark text-center">Back<a/>
            </div>

</form>
            <div id="bkgA-verify-dv" class="htl-b-btn-dv clearfix hidden">
                <div class="bmr-booking-btns width_100p">
                    <div class="booking-rules-dv fl"><div class="terms-box"><label><input id="ck-recipient-promotion" type="checkbox"/><label for="ck-recipient-promotion"> <span class="color-red">*</span></label>We will only contact the customer in connection with this booking and not for marketing purposes or promotions</label></div><div class="terms-box margin_t_5px"><label><input type="checkbox" id="bkg-rules1"/><label for="bkg-rules1"></label> <span class="color-red">*</span>I confirm that I have read and accepted the <a class="color-red" target="_blank" href="https://quarantinehotels.ctmportal.co.uk/Content/View.aspx?category=Terms&key=general-terms-htl">booking terms</a>, website terms and disclaimer and <a class="color-red" target="_blank" href="https://investor.travelctm.com.au/privacy/">privacy policies</a>.</label></div></div>
                    <div class="booking-dv">
                        <input id="htl-bkg-btn" type="button" value="Reserve" class="htl-b-book-btn" />
                    </div>
                </div>
                <div class="clearfix fl">
                    <!-- <button id="btn-confirm-booking-back" class="htl-b-sch-btn margin_l_5px">Back</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="customize-msg-box">
        <div>Sorry, your room has been sold out. Please choose another room type or other hotel.</div>
        <div class="customize-msg-box-link">
            <a href="javascript:void(0);" class="history_back_mark">[Choose another room type]
            </a>
            <a href="/Hotel/Home.aspx">[Choose another hotel]
            </a>
        </div>
    </div>
    <input type="hidden" id="hd_roomQty" value="1" />
        </div>
        <div id="footer_container">
<div class="side-pannel noprint" id="dv-back-top">
    <a href="javascript:;;" target="_self" hidefocus="true"><span class="call-survey">&nbsp;</span></a>
</div>
<div id="abovefooter">
    <div class="container mh-medium">
        <div class="row"><div class="container mh-medium"><p><strong><span style="font-size: 24px;">For Enquiries about Managed Hotel Quarantine </span></strong><strong><span style="font-size: 24px;">(for arrivals into the UK from any Red List country)</span></strong><strong><span style="font-size: 24px;"><span style="font-size:15px;font-family:'Calibri',sans-serif"> </span>please contact Alpine on:</span></strong></p><p><br/></p><span style="font-size: 14px;"> Phone: +44 (0) 333 0064633<br/></span><p><span style="font-size: 14px;"> Email: quarantine.hotels@alpinetravels.co.uk </span></p><p><span style="font-size: 14px;"><br/></span></p><p><strong><span style="font-size: 24px;">For Enquiries about Covid Test Kits </span></strong><strong><span style="font-size: 24px;">(for arrivals into the UK from any Green or Amber list country)</span></strong><strong><span style="font-size: 24px;"><span style="font-size:15px;font-family:'Calibri',sans-serif"> </span>please contact Alpine on:</span></strong></p><p><span style="font-size: 14px;"><br/></span></p><p><span style="font-size: 14px;">Phone:+44 (0) 333 0064633</span></p><p><span style="font-size: 14px;">Email: covid.testkits@alpinetravels.co.uk</span></p></div><br/><p><br/></p><p><br/></p><p><br/></p></div>
    </div>
</div>
        </div>
    </div>
    <input id="__RequestVerificationToken" name="__RequestVerificationToken" type="hidden" value="tuS33x9RNHSorlLa/vIcsWoK1lAB6yOIgooWu8M2Y6TrKcQpw0u4xzlFvnmC/lcT" />
</body>
</html>
<!--
<script type="text/javascript" src="../Common/VariablesGlobal.ashx?fv=2000.13.8"></script>
<script src="/js2000.13.8/lang-global-en-us.js"></script>
<script type="text/javascript" src="../Flight/FlightGlobal.ashx?sys=&trans=20210706120603447&prdc=1"></script>
<script type="text/javascript" src="../Hotel/HotelGlobal.ashx?sys=&trans=20210706120603447&prdc=1"></script>
<script language="javascript" type="text/javascript" src="/Js2000.13.8/wtl-ota-en-us-Hotel4Common.js"></script> -->
<script>
    var SerUrl = 'https://quarantinehotelsalpineportal.co.uk/';var LangType = 'en-us';var DateNow = '06/07/2021';var RefreshSearchTime = '15';var SerUrlStyle = 'https://quarantinehotelsalpineportal.co.uk/Themes2000.13.8/Skin-1/';var IsDebugMode = false;var FareCurr = 'GBP';
</script>
<script src="{{ asset('/frontend/js/lang-globle.js')}}"></script>
<script type="text/javascript" src="{{ asset('/frontend/js/FlightGlobal.ashx')}}"></script>
<script type="text/javascript" src="{{ asset('/frontend/js/HotelGlobal.ashx')}}"></script>
<script src="{{ asset('/frontend/js/main.js')}}"></script>