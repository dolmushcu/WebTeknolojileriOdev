<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ismail E.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="../style/general.css">
</head>

<body>
  <div class="super">
    <header class="navbar navbar-expand-md constrain-container mx-auto p-4">
      <div class="container-fluid p-0">
        <a href="../" class="navbar-brand logo">İsmail E.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list"></i>
        </button>
        <nav class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav gap-2">
            <li class="nav-item p-3">
              <a href="./ozgecmis.html" class="link">CV</a>
            </li>
            <li class="nav-item dropdown p-3">
              <a href="#" class="link dropdown-toggle" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">Şehir</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./sehir.html">Şehir</a></li>
                <li><a class="dropdown-item" href="./sehir/miras.html">Mirasımız</a></li>
              </ul>
            </li>
            <li class="nav-item p-3">
              <a href="./ilgialani.php" class="link">İlgi Alanları</a>
            </li>
            <li class="nav-item p-3">
              <a href="./iletisim.html" class="link">İletişim</a>
            </li>
            <li class="nav-item p-3">
              <a href="./giris.html" class="link">Giriş</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="container-fluid content-container">
      <article class="row">
        <header class="col-md-8">
          <h1 class="text-break">Sevdigim Bazı Diziler</h1>
        </header>
      </article>
      <hr>
      <div class="row g-4 justify-content-center">
        <?php
          $curl = curl_init();

          $show_ids = ['tt0098904', 'tt0386676', 'tt1442437', 'tt1266020'];
          foreach ($show_ids as $id) {
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'http://www.omdbapi.com/?apikey=696bff1f&i='.$id,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
            ));
          
            $response = json_decode(curl_exec($curl));
            $poster = $response->Poster;
            $title = $response->Title;
            $rating = $response->imdbRating;
            $year = $response->Year;

            echo '
            <div class="col-md-6 poster-container">
              <img src="'.$poster.'" alt="'.$title.'" class="">
              <div class="poster-details-container">
                <div class="">
                  <strong>İsim</strong>
                  <span>'.$title.'</span>
                </div>
                <div class="">
                  <strong>Puan</strong>
                  <span>'.$rating.'/10</span>
                </div>
                <div class="">
                  <strong>Yıl</strong>
                  <span>'.$year.'</span>
                </div>
              </div>
            </div>
            ';
          }
          
          curl_close($curl);
        ?>
      </div>
    </main>

    <footer class="footer">
      <a class="logo" href="https://www.linkedin.com/in/ismail-ensar-gulsen/">
        <i class="bi bi-linkedin px-3"></i>
      </a>
      <a class="logo" href="https://github.com/dolmushcu">
        <i class="bi bi-github px-3"></i>
      </a>
      <a class="logo" href="mailto:ismailensarg@gmail.com">
        <i class="bi bi-envelope-fill px-3"></i>
      </a>
    </footer>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>