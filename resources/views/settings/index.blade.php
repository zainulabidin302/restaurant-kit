@extends('layouts.app', ['title' => 'Settings'])

@section('content')

<div class="row form-container">
    <div class="col-md-4 col-xs-12">

<form action="/settings" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Timezone</label>
    <select name="timezone" class="form-control">
    
    <option value="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" diff="-12">(GMT-12:00) International Date Line West</option>
    <option value="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" diff="-11">(GMT-11:00) Midway Island, Samoa</option>
    <option value="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" diff="-10">(GMT-10:00) Hawaii</option>
    <option value="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" diff="-9">(GMT-09:00) Alaska</option>
    <option value="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" diff="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
    <option value="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" diff="-8">(GMT-08:00) Tijuana, Baja California</option>
    <option value="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" diff="-7">(GMT-07:00) Arizona</option>
    <option value="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" diff="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
    <option value="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" diff="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
    <option value="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" diff="-6">(GMT-06:00) Central America</option>
    <option value="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" diff="-6">(GMT-06:00) Central Time (US & Canada)</option>
    <option value="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" diff="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
    <option value="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" diff="-6">(GMT-06:00) Saskatchewan</option>
    <option value="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" diff="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
    <option value="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" diff="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
    <option value="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" diff="-5">(GMT-05:00) Indiana (East)</option>
    <option value="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" diff="-4">(GMT-04:00) Atlantic Time (Canada)</option>
    <option value="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" diff="-4">(GMT-04:00) Caracas, La Paz</option>
    <option value="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" diff="-4">(GMT-04:00) Manaus</option>
    <option value="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" diff="-4">(GMT-04:00) Santiago</option>
    <option value="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" diff="-3.5">(GMT-03:30) Newfoundland</option>
    <option value="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" diff="-3">(GMT-03:00) Brasilia</option>
    <option value="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" diff="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
    <option value="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" diff="-3">(GMT-03:00) Greenland</option>
    <option value="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" diff="-3">(GMT-03:00) Montevideo</option>
    <option value="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" diff="-2">(GMT-02:00) Mid-Atlantic</option>
    <option value="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" diff="-1">(GMT-01:00) Cape Verde Is.</option>
    <option value="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" diff="-1">(GMT-01:00) Azores</option>
    <option value="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" diff="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
    <option value="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" diff="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
    <option value="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" diff="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
    <option value="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" diff="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
    <option value="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" diff="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
    <option value="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" diff="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
    <option value="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" diff="1">(GMT+01:00) West Central Africa</option>
    <option value="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" diff="2">(GMT+02:00) Amman</option>
    <option value="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" diff="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
    <option value="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" diff="2">(GMT+02:00) Beirut</option>
    <option value="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" diff="2">(GMT+02:00) Cairo</option>
    <option value="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" diff="2">(GMT+02:00) Harare, Pretoria</option>
    <option value="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" diff="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
    <option value="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" diff="2">(GMT+02:00) Jerusalem</option>
    <option value="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" diff="2">(GMT+02:00) Minsk</option>
    <option value="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" diff="2">(GMT+02:00) Windhoek</option>
    <option value="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" diff="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
    <option value="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" diff="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
    <option value="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" diff="3">(GMT+03:00) Nairobi</option>
    <option value="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" diff="3">(GMT+03:00) Tbilisi</option>
    <option value="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" diff="3.5">(GMT+03:30) Tehran</option>
    <option value="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" diff="4">(GMT+04:00) Abu Dhabi, Muscat</option>
    <option value="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" diff="4">(GMT+04:00) Baku</option>
    <option value="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" diff="4">(GMT+04:00) Yerevan</option>
    <option value="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" diff="4.5">(GMT+04:30) Kabul</option>
    <option value="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" diff="5">(GMT+05:00) Yekaterinburg</option>
    <option value="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" diff="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
    <option value="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" diff="5.5">(GMT+05:30) Sri Jayawardenapura</option>
    <option value="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" diff="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
    <option value="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" diff="5.75">(GMT+05:45) Kathmandu</option>
    <option value="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" diff="6">(GMT+06:00) Almaty, Novosibirsk</option>
    <option value="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" diff="6">(GMT+06:00) Astana, Dhaka</option>
    <option value="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" diff="6.5">(GMT+06:30) Yangon (Rangoon)</option>
    <option value="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" diff="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
    <option value="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" diff="7">(GMT+07:00) Krasnoyarsk</option>
    <option value="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" diff="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
    <option value="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" diff="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
    <option value="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" diff="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
    <option value="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" diff="8">(GMT+08:00) Perth</option>
    <option value="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" diff="8">(GMT+08:00) Taipei</option>
    <option value="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" diff="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
    <option value="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" diff="9">(GMT+09:00) Seoul</option>
    <option value="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" diff="9">(GMT+09:00) Yakutsk</option>
    <option value="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" diff="9.5">(GMT+09:30) Adelaide</option>
    <option value="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" diff="9.5">(GMT+09:30) Darwin</option>
    <option value="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" diff="10">(GMT+10:00) Brisbane</option>
    <option value="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" diff="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
    <option value="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" diff="10">(GMT+10:00) Hobart</option>
    <option value="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" diff="10">(GMT+10:00) Guam, Port Moresby</option>
    <option value="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" diff="10">(GMT+10:00) Vladivostok</option>
    <option value="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" diff="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
    <option value="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" diff="12">(GMT+12:00) Auckland, Wellington</option>
    <option value="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" diff="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
    <option value="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" diff="13">(GMT+13:00) Nuku'alofa</option>

</select>


  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Tables</label>
    <input type="text" class="form-control" name="tables" 
    value="{{ $data['tables'] }}" id="numberOfTables" placeholder="Number of tables">
  </div>



  <div class="checkbox">
    <label>
      <input type="checkbox" name="status" checked="{{ $data['status'] == 'on' }}" > Disable Restaurant 
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>

</form>
        
    </div>
</div>



@endsection

@section('footer')
    <script>
    $('select[name=timezone]').val({{ $data['timezone'] }})
</script>
@endsection