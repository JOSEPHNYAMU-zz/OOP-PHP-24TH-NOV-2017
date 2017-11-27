<?php

class Menu
{
    function __construct()
    {
        echo '<fieldset><legend><div class="menu">
<span id="item" class="init" style="background-color: #000000;">Home</span>
<span id="item">About Us</span>
<span id="item">Our Services</span>
<span id="item" class="last">Contact Us</span>
</div></legend>
<br/>
<form method="POST" action="">
<input type="text" name="names" class="input" required style="width:99%;height:30px;border-radius:3px;border:solid 2px #cccccc;" placeholder="&nbsp;&nbsp;Full Name"/>
<br/><br/>
<select name="location" style="width:100%;height:40px;border-radius:3px;border:solid 2px #cccccc;">
<option hidden="hidden" value="">Select Location</option>
<option value="Nairobi">Nairobi</option>
<option value="Thika">Thika</option>
<option value="Mombasa">Mombasa</option>
<option value="Kigali">Kigali</option>
</select>
<br/><br/>
<select name="bank" style="width:100%;height:40px;border-radius:3px;border:solid 2px #cccccc;">
<option hidden="hidden" value="">Select Bank</option>
<option value="KCB">KCB</option>
<option value="Equity">Equity</option>
<option value="Standard Chartered">Standard Chartered</option>
<option value="Co-Operative Bank">Co-Operative Bank</option>
</select>
<br/><br/>
<input type="text" name="amount" class="input" required style="width:99%;height:30px;border-radius:3px;border:solid 2px #cccccc;" placeholder="&nbsp;&nbsp;Principal"/>
<br/><br/>
<select name="times" style="width:100%;height:40px;border-radius:3px;border:solid 2px #cccccc;">
<option hidden="hidden" value="">Select Time</option>
<option value="0.5">6 Months</option>
<option value="1">1 Year</option>
<option value="2">2 Years</option>
<option value="3">3 Years</option>
</select>
<br/><br/>
<input name="show" style="cursor:pointer;float:right;background-color:green;padding:15px;color:#ffffff;" type="submit" value="CALCULATE"/>
</form>
</fieldset>' . '<br/>';
    }
}