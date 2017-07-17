<?php
/*
Plugin Name: Length Converter
Plugin URI: http://www.devilhunter.net/
Description: Go to Appearance > Widgets, and drag 'Length Converter' in sidebar or footer or in any widgetized area. This 'Length Converter' PlugIn will automatically match your theme's color. No need to use any short-code or to edit settings.
Version: 1.1
Author: Tawhidur Rahman Dear
Author URI: http://www.facebook.com/tawhidurrahmandear/ 
License: GPLv2 or later 

	Tawhidur Rahman Dear
    Mailing Address: 
	House - 304, Road - 10 Rupnagar Tinshed,
    Pallabi, Mirpur,
    Dhaka - 1216
    BANGLADESH
    tawhidurrahmandear@gmail.com
    +8801716816283, (also in Viber, DUO, WhatsApp, IMO)
    Skype & Google Hangout: tawhidurrahmandear
    Facebook: http://www.facebook.com/tawhidurrahmandear/ 
    Google Plus: http://plus.google.com/+tawhidurrahmandear/about
	Personal Blog: http://tawhidurrahmandear.blogspot.com 
 
 */


namespace dearfifteen\dear\wordpress;

{require_once(__DIR__ . "/pluginfiles/widget.php");}

  class S extends Widget {
    static $widgetTitle = "dearfifteen_lengthconverter";

    public function __construct() {
      parent::__construct(null, "Length Converter");
    }


    public function widgetContent($args, $instance)
    {
      ?>

<body>
<script language="JavaScript" type="text/javascript">

function nofocus()
{
document.convert.InUnit.focus()
}
var cmValue = 1
var mValue = 100
var kmValue = 100000
var inValue = 2.54000843476
var ftValue = 30.4801012183
var ydValue = 91.440275784
var miValue = 160934.708789
function toCM()
{
var i = document.convert.unit.selectedIndex
var thisUnit = document.convert.unit.options[i].value
if (thisUnit == "CM")
 {
document.convert.cm.value = document.convert.InUnit.value
 }
else if(thisUnit == "M")
 {
document.convert.cm.value = document.convert.InUnit.value * mValue
 }
else if(thisUnit == "KM" )
 {
document.convert.cm.value = document.convert.InUnit.value * kmValue
 }
else if(thisUnit == "IN" )
 {
document.convert.cm.value = document.convert.InUnit.value * inValue
 }
else if(thisUnit == "FT" )
 {
document.convert.cm.value = document.convert.InUnit.value * ftValue
 }
else if(thisUnit == "YD" )
 {
document.convert.cm.value = document.convert.InUnit.value * ydValue
 }
else if(thisUnit == "MI" )
 {
document.convert.cm.value = document.convert.InUnit.value * miValue
 }
toAll()
}
function toAll()
{
var m = document.convert.cm.value
document.convert.m.value = m / mValue
document.convert.km.value = m / kmValue
document.convert.inch.value = m / inValue
document.convert.ft.value = m / ftValue
document.convert.yd.value = m / ydValue
document.convert.mi.value = m / miValue
}
//-->
</script>
<div align="center"><h4>Length Converter</h4></div>
<div align="center"><form name="convert">
<table border=0>
<tr><th>Unit</th><th>Number</th></tr>
<tr>
 <td>
<select name="unit">
<option value="CM">Centimetre
<option value="M">Metre
<option value="KM">Kilometre
<option value="IN">Inch
<option value="FT">Foot
<option value="YD">Yard
<option value="MI">Mile
</select>
 </td>
 <td>
<input type="text" name="InUnit" size="20" maxlength="20" value="0">
 </td>
 </tr>
 <tr>
 <td>
Centimetre:   </td>
 <td>
<input type="text" name="cm" size="20" maxlength="20" value="0" onFocus="nofocus()">
 </td>
 </tr>
 <tr>
 <td>
Metre:
</td>
<td>
<input type="text" name="m" size="20" maxlength="20" value="0" onFocus="nofocus()">
</td>
</tr>
<tr>
<td>
Kilometre:   </td>
<td>
<input type="text" name="km" size="20" maxlength="20" value="0" onFocus="nofocus()">
</td>
</tr>
<tr>
<td>
Inch:   </td>
<td>
<input type="text" name="inch" size="20" maxlength="20" value="0" onFocus="nofocus()">
</td>
</tr>
<tr>
<td>
Foot:   </td>
<td>
<input type="text" name="ft" size="20" maxlength="20" value="0" onFocus="nofocus()">  </td>
</tr>
<tr>
<td>
Yard:   </td>
<td>
<input type="text" name="yd" size="20" maxlength="20" value="0" onFocus="nofocus()">
</td>
</tr>
<tr>
<td>
Mile:   </td>
<td>
<input type="text" name="mi" size="20" maxlength="20" value="0" onFocus="nofocus()">
</td>
</tr>
<tr>
<td align="center">
<input type="Reset" value="Start Over">
</td>
<td align="center">
<input type="button" value="Convert" onClick="toCM()">
</td>
</tr>
</table>
</form>
</div>
</body>

      <?php
    
    }
  }

  S::register("dearfifteen_lengthconverter");


