<style>
    .has-success .form-control, .form-control.valid{
        color: #FFF !important;
    }
    .wizard-card{
        background-color: transparent !important;
    }
    .wizard-header{
        padding-top: 0 !important;
    }
    .wizard-title{
        color: white !important;
    }
    .form-control{
        background-color: transparent !important;
        border-radius: 25px;
    }
    .form-control::-moz-placeholder {
        color: white;
    }

    .form-control:-moz-placeholder {
        color: white;
    }

    .form-control::-webkit-input-placeholder {
        color: white;
    }

    .form-control:-ms-input-placeholder {
        color: white;
    }
    select option {
        color: #fff;
        background-color: #111;
    }
</style>
<!--      Wizard container        -->
<div class="row wizard-container m-auto">
    <div class="col-md-6 col-md-offset-3">
        <div class="card wizard-card text-white" data-color="red" id="wizardProfile">
            <form method="post" action="{{ route('members.store') }}">
                @csrf
                <div class="wizard-header text-center">
                    <h3 class="wizard-title">Create your profile</h3>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="firstName" type="text" class="form-control" placeholder="My name is">
                    </div>
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <select class="form-control" name="sex" id="sex">
                            <option value="" selected>I am a</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="couple">Couple</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <select class="form-control" name="matchSex" id="matchSex">
                            <option value="" selected>Looking For</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="couple">Couple</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="date" name="birthDate" class="form-control" placeholder="242">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control" name="country" id="str_country">
                                    <option value="AD">Andorra</option><option value="AE">United Arab Emirates</option><option value="AF">Afghanistan</option><option value="AG">Antigua And Barbuda</option><option value="AI">Anguilla</option><option value="AL">Albania</option><option value="AM">Armenia</option><option value="AN">Netherlands Antilles</option><option value="AO">Angola</option><option value="AQ">Antarctica</option><option value="AR">Argentina</option><option value="AS">American Samoa</option><option value="AT">Austria</option><option value="AU">Australia</option><option value="AW">Aruba</option><option value="AX">Aland Islands</option><option value="AZ">Azerbaijan</option><option value="BA">Bosnia And Herzegovina</option><option value="BB">Barbados</option><option value="BD">Bangladesh</option><option value="BE">Belgium</option><option value="BF">Burkina Faso</option><option value="BG">Bulgaria</option><option value="BH">Bahrain</option><option value="BI">Burundi</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BN">Brunei</option><option value="BO">Bolivia</option><option value="BR">Brazil</option><option value="BS">Bahamas</option><option value="BT">Bhutan</option><option value="BV">Bouvet Island</option><option value="BW">Botswana</option><option value="BY">Belarus</option><option value="BZ">Belize</option><option value="CA">Canada</option><option value="CC">Cocos (Keeling) Islands</option><option value="CD">Democratic Republic Of Congo (Zaire)</option><option value="CF">Central African Republic</option><option value="CG">Congo</option><option value="CH">Switzerland</option><option value="CI">Cote D'Ivorie (Ivory Coast)</option><option value="CK">Cook Islands</option><option value="CL">Chile</option><option value="CM">Cameroon</option><option value="CN">China</option><option value="CO">Columbia</option><option value="CR">Costa Rica</option><option value="CU">Cuba</option><option value="CV">Cape Verde</option><option value="CX">Christmas Island</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DE">Germany</option><option value="DJ">Djibouti</option><option value="DK">Denmark</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="DZ">Algeria</option><option value="EC">Ecuador</option><option value="EE">Estonia</option><option value="EG">Egypt</option><option value="EH">Western Sahara</option><option value="ER">Eritrea</option><option value="ES">Spain</option><option value="ET">Ethiopia</option><option value="FI">Finland</option><option value="FJ">Fiji</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FM">Micronesia</option><option value="FO">Faroe Islands</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GA">Gabon</option><option value="GD">Grenada</option><option value="GE">Georgia</option><option value="GF">French Guinea</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GL">Greenland</option><option value="GM">Gambia</option><option value="GN">Guinea</option><option value="GP">Guadeloupe</option><option value="GQ">Equatorial Guinea</option><option value="GR">Greece</option><option value="GS">South Georgia And South Sandwich Islands</option><option value="GT">Guatemala</option><option value="GU">Guam</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HK">Hong Kong</option><option value="HM">Heard And McDonald Islands</option><option value="HN">Honduras</option><option value="HR">Croatia</option><option value="HT">Haiti</option><option value="HU">Hungary</option><option value="ID">Indonesia</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IN">India</option><option value="IO">British Indian Ocean Territory</option><option value="IQ">Iraq</option><option value="IR">Iran</option><option value="IS">Iceland</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JO">Jordan</option><option value="JP">Japan</option><option value="KE">Kenya</option><option value="KG">Kyrgyzstan</option><option value="KH">Cambodia</option><option value="KI">Kiribati</option><option value="KM">Comoros</option><option value="KN">Saint Kitts And Nevis</option><option value="KP">North Korea</option><option value="KR">South Korea</option><option value="KW">Kuwait</option><option value="KY">Cayman Islands</option><option value="KZ">Kazakhstan</option><option value="LA">Laos</option><option value="LB">Lebanon</option><option value="LC">Saint Lucia</option><option value="LI">Liechtenstein</option><option value="LK">Sri Lanka</option><option value="LR">Liberia</option><option value="LS">Lesotho</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="LV">Latvia</option><option value="LY">Libya</option><option value="MA">Morocco</option><option value="MC">Monaco</option><option value="MD">Moldova</option><option value="ME">Montenegro</option><option value="MG">Madagascar</option><option value="MH">Marshall Islands</option><option value="MK">North Macedonia</option><option value="ML">Mali</option><option value="MM">Myanmar (Burma)</option><option value="MN">Mongolia</option><option value="MO">Macau</option><option value="MP">Northern Mariana Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MS">Montserrat</option><option value="MT">Malta</option><option value="MU">Mauritius</option><option value="MV">Maldives</option><option value="MW">Malawi</option><option value="MX">Mexico</option><option value="MY">Malaysia</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NC">New Caledonia</option><option value="NE">Niger</option><option value="NF">Norfolk Island</option><option value="NG">Nigeria</option><option value="NI">Nicaragua</option><option value="NL">Netherlands</option><option value="NO">Norway</option><option value="NP">Nepal</option><option value="NR">Nauru</option><option value="NU">Niue</option><option value="NZ">New Zealand</option><option value="OM">Oman</option><option value="PA">Panama</option><option value="PE">Peru</option><option value="PF">French Polynesia</option><option value="PG">Papua New Guinea</option><option value="PH">Philippines</option><option value="PK">Pakistan</option><option value="PL">Poland</option><option value="PM">Saint Pierre And Miquelon</option><option value="PN">Pitcairn</option><option value="PR">Puerto Rico</option><option value="PT">Portugal</option><option value="PW">Palau</option><option value="PY">Paraguay</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RS">Serbia</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="SA">Saudi Arabia</option><option value="SB">Solomon Islands</option><option value="SC">Seychelles</option><option value="SD">Sudan</option><option value="SE">Sweden</option><option value="SG">Singapore</option><option value="SH">Saint Helena</option><option value="SI">Slovenia</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SK">Slovak Republic</option><option value="SL">Sierra Leone</option><option value="SM">San Marino</option><option value="SN">Senegal</option><option value="SO">Somalia</option><option value="SR">Suriname</option><option value="ST">Sao Tome And Principe</option><option value="SV">El Salvador</option><option value="SY">Syria</option><option value="SZ">Swaziland</option><option value="TC">Turks And Caicos Islands</option><option value="TD">Chad</option><option value="TF">French Southern Territories</option><option value="TG">Togo</option><option value="TH">Thailand</option><option value="TJ">Tajikistan</option><option value="TK">Tokelau</option><option value="TM">Turkmenistan</option><option value="TN">Tunisia</option><option value="TO">Tonga</option><option value="TP">East Timor</option><option value="TR">Turkey</option><option value="TT">Trinidad And Tobago</option><option value="TV">Tuvalu</option><option value="TW">Taiwan</option><option value="TZ">Tanzania</option><option value="UA">Ukraine</option><option value="UG">Uganda</option><option value="UK">United Kingdom</option><option value="US">United States</option><option value="US" selected="selected">United States</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VA">Vatican City (Holy See)</option><option value="VC">Saint Vincent And The Grenadines</option><option value="VE">Venezuela</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option value="VN">Vietnam</option><option value="VU">Vanuatu</option><option value="WF">Wallis And Futuna Islands</option><option value="WS">Western Samoa</option><option value="XK">Kosovo</option><option value="YE">Yemen</option><option value="YT">Mayotte</option><option value="ZA">South Africa</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="city" class="form-control" placeholder="New York">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="zipCode" class="form-control" placeholder="55407">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <textarea type="text" name="description" class="form-control" placeholder="Describe about yourself..."></textarea>
                    </div>
                </div>
                <div class="terms mb-2 col-sm-12" style="color: white;"> By clicking "Finish", you acknowledge that you have read the <a href="https://hushcupid.com/pages/details/?page=2" target="_blank">Privacy Policy</a> and agree to the <a href="https://hushcupid.com/terms" target="_blank">Terms of Service</a>.
                </div>
                <div class="wizard-footer">
                    <div class="pull-right">
                        <input type='button' class='btn btn-next btn-fill btn-info btn-wd' name='next' value='Next' />
                        <input type='submit' class='btn btn-finish btn-fill btn-info btn-wd' name='finish' value='Finish' />
                    </div>

                    <div class="pull-left">
                        <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div> <!-- wizard container -->