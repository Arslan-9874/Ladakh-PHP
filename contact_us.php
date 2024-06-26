<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Adventure Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index/style.css">
    <link rel="stylesheet" href="css/contact/style.css">
</head>


<body class="bg-light">
    <?php
    require "partials/_header.php";

    if (isset($_GET['query']) and $_GET['query'] == 'success') {
        echo '<div class="alert alert-success alert-dismissible fade show mx-5" role="alert">
        <strong>Success.</strong> Your query has been submitted successfully.
        <a href="contact_us.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
      </div>';
    }
    if (isset($_GET['query']) and $_GET['query'] == 'failed') {
        echo '<div class="alert alert-danger alert-dismissible fade show mx-5" role="alert">
        <strong>Error.</strong> Your query was not submitted successfully.
        <a href="contact_us.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
      </div>';
    }
    if (isset($_GET['query']) and $_GET['query'] == 'wrong') {
        echo '<div class="alert alert-warning alert-dismissible fade show mx-5" role="alert">
        <strong>Error!</strong> Something Went Wrong, please try again later.
        <a href="contact_us.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
      </div>';
    }
    ?>

    <div class="container rounded-4 my-4 shadow py-5">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-center fw-bold py-4 bg-dark rounded-4 text-light" style="width: 80%;">CONTACT US</h2>
            <div class="d-flex justify-content-center text-center" id="C-cards" style="width: 80%;">
                <div
                    class="shadow rounded-4 p-4 px-5 mx-2 mt-3 d-flex flex-column align-items-center justify-content-center">
                    <p class="p-0 m-0 fs-3">Phone: </p>
                    <p class="p-0 m-0 fs-5">xxxxxxxxxx</p>
                </div>
                <div
                    class="shadow rounded-4 p-4 px-5 mx-2 mt-3 d-flex flex-column align-items-center justify-content-center">
                    <p class="p-0 m-0  fs-3">Email: </p>
                    <p class="p-0 m-0 fs-5">xxxxx@gmail.com</p>
                </div>
                <div
                    class="shadow rounded-4 p-4 px-5 mx-2 mt-3 d-flex flex-column align-items-center justify-content-center">
                    <p class="p-0 m-0  fs-3">instagram: </p>
                    <p class="p-0 m-0 fs-5">@xxxxxx</p>
                </div>
                <div class="shadow rounded-4 p-4 px-5 mx-2 mt-3 d-flex flex-column align-items-center justify-content-center"
                    id="add-Card">
                    <p class="p-0 m-0  fs-3">Address: </p>
                    <p class="p-0 m-0 fs-5">xxxxx, India</p>
                </div>
            </div>

            <p class="mt-5 mb-0 fs-4 fw-semibold">- CALL US FOR PRICING -</p>
        </div>
    </div>
    <div id="mainContainer" class="container rounded-4 my-4 shadow">
        <form action="partials/_handleContactForm.php" method="post"
            class="d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-center fw-bold py-4 mt-5 bg-dark rounded-4 text-light" style="width: 80%;">REGISTRATION FORM
            </h2>
            <div class="inputCard p-3 rounded-4 shadow-sm mt-2">
                <label class="d-block fs-5 ps-1" for="name">Full Name:</label>
                <input type="text" class="d-block fs-4" name="name" id="name" placeholder="Enter your name"
                    style="width: 100%" required>
            </div>
            <div class="inputCard p-3 rounded-4 shadow-sm mt-4">
                <label class="d-block fs-5 ps-1" for="phone">Phone Number:</label>
                <input type="tel" class="d-block fs-4" pattern="[0-9]{10}" maxlength="10" name="phone" id="phone"
                    style="width: 100%" placeholder="Enter your phone number" required>
            </div>
            <div class="inputCard p-3 rounded-4 shadow-sm mt-4">
                <label class="d-block fs-5 ps-1" for="email">Email:</label>
                <input type="email" class="d-block fs-4" name="email" id="email" placeholder="Enter your Email"
                    style="width: 100%" required>
            </div>
            <div class="d-flex justify-content-around" style="width: 80%" id="rowContainer">
                <div class="inputCard p-3 rounded-4 shadow-sm mt-4 me-4 pe-4">
                    <div>
                        <span class="d-block fs-6 ps-1">Gender: </span>
                    </div>
                    <div class="fs-5 ps-1 d-flex justify-content-between" id="genderSelect">
                        <div class="form-check mt-2 me-3">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                                style="outline: 1px solid grey" required>
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check mt-2 me-3">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                                style="outline: 1px solid grey" required>
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other"
                                style="outline: 1px solid grey" required>
                            <label class="form-check-label" for="other">
                                Other
                            </label>
                        </div>
                    </div>
                </div>
                <div class="inputCard p-3 rounded-4 shadow-sm mt-4">
                    <label class="d-block fs-6 ps-1" for="coutnrySelect">Country:</label>
                    <div id="country">
                        <select class="form-select fs-5 text-secondary mt-2" name="country" id="coutnrySelect" required>
                            <option disabled selected value> - Select Your Country - </option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The
                            </option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic
                                of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
                                Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                                Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                            </option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="inputCard p-3 rounded-4 shadow-sm mt-4">
                <label class="d-block fs-5 ps-1" for="bike">Bike:</label>
                <div id="bike">
                    <select class="form-select fs-5 text-secondary mt-2" name="bike" id="bike" required>
                        <option disabled selected value> - Select Your Prefered Bike - </option>
                        <option value="Royal Enfield Himalayan">Royal Enfield Himalayan</option>
                        <option value="Royal Enfield Classic 350">Royal Enfield Classic 350</option>
                        <option value="Hero XPulse 200 4V">Hero XPulse 200 4V</option>
                        <option value="KTM Adventure 390">KTM Adventure 390</option>
                        <option value="BMW G310 GS">BMW G310 GS</option>
                        <option value="TVS NTORQ 125">TVS NTORQ 125</option>
                    </select>
                </div>
            </div>


            <button type="submit" class="btn btn-primary my-4 fs-4 px-5">Submit</button>
        </form>
    </div>

    <?php
    require "partials/_footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>