
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="photos/icoSite.png">
    <title>Drone-X- Shop</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="stylesheet" href="css/form.css" type="text/css">
  </head>
  <?php include '/include/public_update.php'; ?>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      if (isset($_POST['login'])) { //user logging in ???

          require 'contulmeu.php';

      }

      elseif (isset($_POST['register'])) { //user registering

          require 'inregistrare.php';

      }
  }
  ?>

  <body>
    <div class="page">
      <?php include '/include/header_general.php'; ?>
      <main class="clearfix divC">
        <?php include '/include/aside_general.php'; ?>
        <section class="style-1">
          <article>
            <h1>Drone-X Shop | Magazinul de drone</h1><br>
            <p>Distractie maxima, acrobatii trasnite si filme HD !!!</p>
            <p>
              Inregistreaza-te pentru a putea fi la curent cu noile inovatii !!!<br>
              <span class="red">Devino azi membru Drone-X !!!</span>
             </p>
             <div class="acasa-container">
               <?php foreach ($products as $product) { ?>
               <div class="acasa-item">
                 <div class="acasa-item-pic">
                   <a href="index.php#CM"><img src="<?php echo $product['images'][0]; ?>" alt="<?php echo $product['title']; ?>"></a>
                 </div>
                 <div class="acasa-item-text">
                   <strong><?php echo $product['title']; ?></strong> <br> <br>
                   <p>
                   <small> <small>
                     <?php echo $product['description']; ?>
                     <span class="red"> <strong>Pret: <?php echo $product['price']; ?> lei</strong> </span>
                   </small> </small>
                   </p>
                 </div>
               </div>
             <?php } ?>
             </div>
             </article>
            <article id="DN">
              <h1>Despre Noi</h1> <hr> <br>
              <p> Vino si descopera cea mai variata gama de produse din  segmentele  de top ale producatorilor
                  in domeniu. Iti oferim cele mai noi produse reprezentative pentru fiecare segment de piata la
                  cel mai avantajos pret.
              </p> <br>
              <p> Daca esti pasionat de drone si doresti filmari la calitate 4k, noi te putem ajuta sa alegi
                  produsul dorit , la un pret avantajos si cu livrare direct din stoc.
              </p> <br>
              <p> Suntem distribuitor autorizat pentru toata gama de produse Drone-X, companie care a adus o
                  revolutie tehnologica in ceea ce priveste dronele profesionale si cele de agrement. Poti
                  opta intre o drona hobby, cum este Dji Spark si, Dji Mavic Pro, o drona avansata din punct
                  de vedere al controlului, camerei video si tehnologiilor inglobate. Daca doresti sa treci
                  granitele inregistrarilor video la calitate  4k, atunci Phantom 4 PRO este este
                  drona de care ai nevoie. Pentru profesionisti alegerea optima poate fi reprezentata de Inspire 2.
              </p> <br>
              <p> Livrarea se face imediat prin intermediul curieratului rapid. Timpul de procesare al comenzilor este de maxim 12 ore iar livrarea produselor care se afla in stoc  se va face in 24 ore.
                  Garantam pe deplin calitatea produselor noastre.
              </p> <br> <br>
            </article>
            <article id="C">
              <h1>Contact</h1> <hr> <br>
              <h2><small>Drone-X Sediul Central</small></h2> <br> <br>
              <p><strong>Adresa:</strong> Strada Hermann Oberth, nr. 247-251, sect. 3, cod 039937, Sibiu</p>
              <p><strong>Tel:</strong> 021.419.75.52 / 021.369.05.83</p>
              <p><strong>Fax:</strong> 021977.63.47</p>
              <p><strong>Email:</strong> office@dronix.ro</p> <br> <br>
              <iframe src="https://www.google.com/maps/d/embed?mid=1GbDuZd_Y_UWml1OZkM9zl0kEHdRyBHID"></iframe>
            </article>
            <article  id="I">
              <h1>Inregistrare</h1> <hr> <br>
              <form action="register.php" class="form" method="post" enctype="multipart/form-data" autocomplete="on">
                <div class="form__field">
                  <label class="form__label" for="prenume">Prenume: </label>
                  <input class="form__input" type="text" name="first_name" id="prenume" placeholder="Un singur prenume" maxlength="30" required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="nume">Nume: </label>
                  <input class="form__input" type="text" name="last_name" id="nume" placeholder="Numele de familie" maxlength="30" required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="email">E-mail: </label>
                  <input class="form__input"  name="email" type="email" id="email" placeholder="e-mail@test.com"  maxlength="40" required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="tel">Telefon: </label>
                  <input class="form__input"  name="phone" type="tel" id="tel" placeholder="076 258 9453"  required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="adr">Adresa: </label>
                  <input class="form__input"  name="address" type="text" id="adr"  required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="cty">Oras: </label>
                  <input class="form__input"  name="city" type="text" id="cty"  required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="cp">Cod Postal: </label>
                  <input class="form__input"  name="zip" type="text" id="cp"  >
                </div>
                <div class="form__field">
                  <label class="form__label" for="judet">Judet: </label>
                  <select class="form__select" name="zone_id" id="judet">
                    <option value=""> --- Selectaţi --- </option>
                    <option value="Alba">Alba</option>
                    <option value="Arad">Arad</option>
                    <option value="Arges">Arges</option>
                    <option value="Bacau">Bacau</option>
                    <option value="Bihor">Bihor</option>
                    <option value="Bistrita-Nasaud">Bistrita-Nasaud</option>
                    <option value="Botosani">Botosani</option>
                    <option value="Braila">Braila</option>
                    <option value="Brasov">Brasov</option>
                    <option value="Bucuresti">Bucuresti</option>
                    <option value="Buzau">Buzau</option>
                    <option value="Calarasi">Calarasi</option>
                    <option value="Caras-Severin">Caras-Severin</option>
                    <option value="Cluj">Cluj</option>
                    <option value="Constanta">Constanta</option>
                    <option value="Covasna">Covasna</option>
                    <option value="Dimbovita">Dimbovita</option>
                    <option value="Dolj">Dolj</option>
                    <option value="Galati">Galati</option>
                    <option value="Giurgiu">Giurgiu</option>
                    <option value="Gorj">Gorj</option>
                    <option value="Harghita">Harghita</option>
                    <option value="Hunedoara">Hunedoara</option>
                    <option value="Ialomita">Ialomita</option>
                    <option value="Iasi">Iasi</option>
                    <option value="Ilfov">Ilfov</option>
                    <option value="Maramures">Maramures</option>
                    <option value="Mehedinti">Mehedinti</option>
                    <option value="Mures">Mures</option>
                    <option value="Neamt">Neamt</option>
                    <option value="Olt">Olt</option>
                    <option value="Prahova">Prahova</option>
                    <option value="Salaj">Salaj</option>
                    <option value="Satu-Mare">Satu-Mare</option>
                    <option value="Sibiu">Sibiu</option>
                    <option value="Suceava">Suceava</option>
                    <option value="Teleorman">Teleorman</option>
                    <option value="Timis">Timis</option>
                    <option value="Tulcea">Tulcea</option>
                    <option value="Valcea">Valcea</option>
                    <option value="Vaslui">Vaslui</option>
                    <option value="Vrancea">Vrancea</option>
                  </select>
                </div>
                <div class="form__field">
                  <label class="form__label" for="pass">Parola: </label>
                  <input class="form__input"  name="password" type="password" id="pass" required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="tara">Tara: </label>
                  <select class="form__select" name="country" id="tara" required>
                    <option value="" disabled selected>---Selectati---</option>
                      <option value="2">Albania</option>
                      <option value="244">Aaland Islands</option>
                      <option value="1">Afghanistan</option>
                      <option value="3">Algeria</option>
                      <option value="4">American Samoa</option>
                      <option value="5">Andorra</option>
                      <option value="6">Angola</option>
                      <option value="7">Anguilla</option>
                      <option value="8">Antarctica</option>
                      <option value="9">Antigua and Barbuda</option>
                      <option value="10">Argentina</option>
                      <option value="11">Armenia</option>
                      <option value="12">Aruba</option>
                      <option value="13">Australia</option>
                      <option value="14">Austria</option>
                      <option value="15">Azerbaijan</option>
                      <option value="16">Bahamas</option>
                      <option value="17">Bahrain</option>
                      <option value="18">Bangladesh</option>
                      <option value="19">Barbados</option>
                      <option value="20">Belarus</option>
                      <option value="21">Belgium</option>
                      <option value="22">Belize</option>
                      <option value="23">Benin</option>
                      <option value="24">Bermuda</option>
                      <option value="25">Bhutan</option>
                      <option value="26">Bolivia</option>
                      <option value="245">Bonaire, Sint Eustatius and Saba</option>
                      <option value="27">Bosnia and Herzegovina</option>
                      <option value="28">Botswana</option>
                      <option value="29">Bouvet Island</option>
                      <option value="30">Brazil</option>
                      <option value="31">British Indian Ocean Territory</option>
                      <option value="32">Brunei Darussalam</option>
                      <option value="33">Bulgaria</option>
                      <option value="34">Burkina Faso</option>
                      <option value="35">Burundi</option>
                      <option value="36">Cambodia</option>
                      <option value="37">Cameroon</option>
                      <option value="38">Canada</option>
                      <option value="251">Canary Islands</option>
                      <option value="39">Cape Verde</option>
                      <option value="40">Cayman Islands</option>
                      <option value="41">Central African Republic</option>
                      <option value="42">Chad</option>
                      <option value="43">Chile</option>
                      <option value="44">China</option>
                      <option value="45">Christmas Island</option>
                      <option value="46">Cocos (Keeling) Islands</option>
                      <option value="47">Colombia</option>
                      <option value="48">Comoros</option>
                      <option value="49">Congo</option>
                      <option value="50">Cook Islands</option>
                      <option value="51">Costa Rica</option>
                      <option value="52">Cote D'Ivoire</option>
                      <option value="53">Croatia</option>
                      <option value="54">Cuba</option>
                      <option value="246">Curacao</option>
                      <option value="55">Cyprus</option>
                      <option value="56">Czech Republic</option>
                      <option value="237">Democratic Republic of Congo</option>
                      <option value="57">Denmark</option>
                      <option value="58">Djibouti</option>
                      <option value="59">Dominica</option>
                      <option value="60">Dominican Republic</option>
                      <option value="61">East Timor</option>
                      <option value="62">Ecuador</option>
                      <option value="63">Egypt</option>
                      <option value="64">El Salvador</option>
                      <option value="65">Equatorial Guinea</option>
                      <option value="66">Eritrea</option>
                      <option value="67">Estonia</option>
                      <option value="68">Ethiopia</option>
                      <option value="69">Falkland Islands (Malvinas)</option>
                      <option value="70">Faroe Islands</option>
                      <option value="71">Fiji</option>
                      <option value="72">Finland</option>
                      <option value="74">France, Metropolitan</option>
                      <option value="75">French Guiana</option>
                      <option value="76">French Polynesia</option>
                      <option value="77">French Southern Territories</option>
                      <option value="126">FYROM</option>
                      <option value="78">Gabon</option>
                      <option value="79">Gambia</option>
                      <option value="80">Georgia</option>
                      <option value="81">Germany</option>
                      <option value="82">Ghana</option>
                      <option value="83">Gibraltar</option>
                      <option value="84">Greece</option>
                      <option value="85">Greenland</option>
                      <option value="86">Grenada</option>
                      <option value="87">Guadeloupe</option>
                      <option value="88">Guam</option>
                      <option value="89">Guatemala</option>
                      <option value="241">Guernsey</option>
                      <option value="90">Guinea</option>
                      <option value="91">Guinea-Bissau</option>
                      <option value="92">Guyana</option>
                      <option value="93">Haiti</option>
                      <option value="94">Heard and Mc Donald Islands</option>
                      <option value="95">Honduras</option>
                      <option value="96">Hong Kong</option>
                      <option value="97">Hungary</option>
                      <option value="98">Iceland</option>
                      <option value="99">India</option>
                      <option value="100">Indonesia</option>
                      <option value="101">Iran (Islamic Republic of)</option>
                      <option value="102">Iraq</option>
                      <option value="103">Ireland</option>
                      <option value="104">Israel</option>
                      <option value="105">Italy</option>
                      <option value="106">Jamaica</option>
                      <option value="107">Japan</option>
                      <option value="240">Jersey</option>
                      <option value="108">Jordan</option>
                      <option value="109">Kazakhstan</option>
                      <option value="110">Kenya</option>
                      <option value="111">Kiribati</option>
                      <option value="113">Korea, Republic of</option>
                      <option value="114">Kuwait</option>
                      <option value="115">Kyrgyzstan</option>
                      <option value="116">Lao People's Democratic Republic</option>
                      <option value="117">Latvia</option>
                      <option value="118">Lebanon</option>
                      <option value="119">Lesotho</option>
                      <option value="120">Liberia</option>
                      <option value="121">Libyan Arab Jamahiriya</option>
                      <option value="122">Liechtenstein</option>
                      <option value="123">Lithuania</option>
                      <option value="124">Luxembourg</option>
                      <option value="125">Macau</option>
                      <option value="127">Madagascar</option>
                      <option value="128">Malawi</option>
                      <option value="129">Malaysia</option>
                      <option value="130">Maldives</option>
                      <option value="131">Mali</option>
                      <option value="132">Malta</option>
                      <option value="133">Marshall Islands</option>
                      <option value="134">Martinique</option>
                      <option value="135">Mauritania</option>
                      <option value="136">Mauritius</option>
                      <option value="137">Mayotte</option>
                      <option value="138">Mexico</option>
                      <option value="139">Micronesia, Federated States of</option>
                      <option value="140">Moldova, Republic of</option>
                      <option value="141">Monaco</option>
                      <option value="142">Mongolia</option>
                      <option value="242">Montenegro</option>
                      <option value="143">Montserrat</option>
                      <option value="144">Morocco</option>
                      <option value="145">Mozambique</option>
                      <option value="146">Myanmar</option>
                      <option value="147">Namibia</option>
                      <option value="148">Nauru</option>
                      <option value="149">Nepal</option>
                      <option value="150">Netherlands</option>
                      <option value="151">Netherlands Antilles</option>
                      <option value="152">New Caledonia</option>
                      <option value="153">New Zealand</option>
                      <option value="154">Nicaragua</option>
                      <option value="155">Niger</option>
                      <option value="156">Nigeria</option>
                      <option value="157">Niue</option>
                      <option value="158">Norfolk Island</option>
                      <option value="112">North Korea</option>
                      <option value="159">Northern Mariana Islands</option>
                      <option value="160">Norway</option>
                      <option value="161">Oman</option>
                      <option value="162">Pakistan</option>
                      <option value="163">Palau</option>
                      <option value="247">Palestinian Territory, Occupied</option>
                      <option value="164">Panama</option>
                      <option value="165">Papua New Guinea</option>
                      <option value="166">Paraguay</option>
                      <option value="167">Peru</option>
                      <option value="168">Philippines</option>
                      <option value="169">Pitcairn</option>
                      <option value="170">Poland</option>
                      <option value="171">Portugal</option>
                      <option value="172">Puerto Rico</option>
                      <option value="173">Qatar</option>
                      <option value="174">Reunion</option>
                      <option value="175" selected="selected">Romania</option>
                      <option value="176">Russian Federation</option>
                      <option value="177">Rwanda</option>
                      <option value="178">Saint Kitts and Nevis</option>
                      <option value="179">Saint Lucia</option>
                      <option value="180">Saint Vincent and the Grenadines</option>
                      <option value="181">Samoa</option>
                      <option value="182">San Marino</option>
                      <option value="183">Sao Tome and Principe</option>
                      <option value="184">Saudi Arabia</option>
                      <option value="185">Senegal</option>
                      <option value="243">Serbia</option>
                      <option value="186">Seychelles</option>
                      <option value="187">Sierra Leone</option>
                      <option value="188">Singapore</option>
                      <option value="189">Slovak Republic</option>
                      <option value="190">Slovenia</option>
                      <option value="191">Solomon Islands</option>
                      <option value="192">Somalia</option>
                      <option value="193">South Africa</option>
                      <option value="194">South Georgia &amp; South Sandwich Islands</option>
                      <option value="248">South Sudan</option>
                      <option value="195">Spain</option>
                      <option value="196">Sri Lanka</option>
                      <option value="249">St. Barthelemy</option>
                      <option value="197">St. Helena</option>
                      <option value="250">St. Martin (French part)</option>
                      <option value="198">St. Pierre and Miquelon</option>
                      <option value="199">Sudan</option>
                      <option value="200">Suriname</option>
                      <option value="201">Svalbard and Jan Mayen Islands</option>
                      <option value="202">Swaziland</option>
                      <option value="203">Sweden</option>
                      <option value="204">Switzerland</option>
                      <option value="205">Syrian Arab Republic</option>
                      <option value="206">Taiwan</option>
                      <option value="207">Tajikistan</option>
                      <option value="208">Tanzania, United Republic of</option>
                      <option value="209">Thailand</option>
                      <option value="210">Togo</option>
                      <option value="211">Tokelau</option>
                      <option value="212">Tonga</option>
                      <option value="213">Trinidad and Tobago</option>
                      <option value="214">Tunisia</option>
                      <option value="215">Turkey</option>
                      <option value="216">Turkmenistan</option>
                      <option value="217">Turks and Caicos Islands</option>
                      <option value="218">Tuvalu</option>
                      <option value="219">Uganda</option>
                      <option value="220">Ukraine</option>
                      <option value="221">United Arab Emirates</option>
                      <option value="222">United Kingdom</option>
                      <option value="223">United States</option>
                      <option value="224">United States Minor Outlying Islands</option>
                      <option value="225">Uruguay</option>
                      <option value="226">Uzbekistan</option>
                      <option value="227">Vanuatu</option>
                      <option value="228">Vatican City State (Holy See)</option>
                      <option value="229">Venezuela</option>
                      <option value="230">Viet Nam</option>
                      <option value="231">Virgin Islands (British)</option>
                      <option value="232">Virgin Islands (U.S.)</option>
                      <option value="233">Wallis and Futuna Islands</option>
                      <option value="234">Western Sahara</option>
                      <option value="235">Yemen</option>
                      <option value="238">Zambia</option>
                      <option value="239">Zimbabwe</option>
                </select>
                </div>
                <button type="submit" class="form__button">Trimite</button>
                <button type="reset" class="form__button">Reseteaza</button>
              </form>
            </article>
            <article id="CM">
              <br>
              <h1>Contul Meu</h1><hr> <br>
              <p>Nu ai cont? <a href="index.php#I">Inregistreaza-te  aici...</a> </p> <br>
              <form action="login.php" class="form" method="post" enctype="multipart/form-data">
                <div class="form__field">
                  <label class="form__label" for="email">E-mail: </label>
                  <input class="form__input"  name="email" type="text" id="email"  maxlength="40" required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="pass">Parola: </label>
                  <input class="form__input"  name="password" type="password" id="pass" required>
                </div>
                <button type="submit" class="form__button">Conectare</button>
              </form>
              <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
            </article>
        </section>
  <!--  </div> -->
    </main>
    <?php include '/include/footer.php'; ?>
    </div>
  </body>
</html>
