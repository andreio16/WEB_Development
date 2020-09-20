<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="css/pictures/earth.png">
    <link rel="stylesheet" href="css/styleLog.css" type="text/css">
    <script src="include/functions.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/efd1118723.js" crossorigin="anonymous"></script>
    <title>Web Club 101</title
  </head>
  <?php include '/include/connect.php' ?>
  <body>
    <div class="page--log">
      <!-- Header -->
      <header class="header--pagelog">
        <div class="header__logo">
          <h1>
            <span>U</span>
            <span>M</span>
            <span>S</span>
            <span>-</span>
            <span>L</span>
            <span>i</span>
            <span>g</span>
            <span>h</span>
            <span>t</span>
            <p>
              <span class="space--left1">
                <i class="fas fa-code"></i>
            </span>
          </p>
          </h1>
        </div>
         <form class="header__info" action="include/login.php" method="post" enctype="multipart/form-data">
          <div class="header__info" >
            <div class="form--log header__user">
              <input type="text" name="email" required autocomplete="off">
              <label for="login" class="label-username">
                <span class="content-username">Email:</span>
              </label>
            </div>
            <div class="form--log header__pass">
              <input type="password" name="password" required autocomplete="off">
              <label for="login" class="label-username">
                <span class="content-username">Password:</span>
              </label>
            </div>
            <div class="header__submit">
              <button class="btn--log " type="submit">Log In</button>
            </div>
          </div>
        </form>
      </header>
      <!-- Section -->
      <section class="section--log">
        <!-- Left Side -->
        <div class="section__left">
          <h1>Inregistrare</h1> <hr> <br>
              <form action="include/register.php" class="form" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="form__field">
                  <label class="form__label" for="prenume">Prenume: </label>
                  <input class="form__input" type="text" name="first_name"  placeholder="Un singur prenume" maxlength="30" required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="nume">Nume: </label>
                  <input class="form__input" type="text" name="last_name"  placeholder="Numele de familie" maxlength="30" required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="email">E-mail: </label>
                  <input class="form__input"  name="email" type="email"  placeholder="e-mail@test.com"  maxlength="40" required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="tel">Telefon: </label>
                  <input class="form__input"  name="phone" type="tel"  placeholder="076 258 9453"  required>
                </div>
                <div class="form__field">
                  <label class="form__label" for="cty">Oras: </label>
                  <input class="form__input"  name="city" type="text"  required>
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
                  <input class="form__input"  name="password" type="password"  required>
                </div>
                <button type="submit" class="form__button btn--log">Trimite</button>
                <button type="reset" class="form__button btn--log">Reseteaza</button>
              </form>
        </div>
        <!-- Right Side -->
        <div class="section__right">
          <div class="section__right--img1">
            <img src="css/pictures/pc1.jpg" alt="">
          </div>
          <div class="section__right--img2">
            <img src="css/pictures/pc2.jpg" alt="">
          </div>
        </div>
      </section>
      <!-- Footer -->
      <footer>
        <?php include '/include/footer.php' ?>
      </footer>
    </div>
  </body>
</html>
