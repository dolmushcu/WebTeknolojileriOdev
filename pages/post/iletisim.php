<?php
  if (!empty($_POST['onay']) && !empty($_POST['isim']) && !empty($_POST['email']) && !empty($_POST['konu']) && !empty($_POST['mesaj'])) {
    echo '
    <b>Isim </b>'.$_POST['isim'].'<br>
    <b>Mail </b>'.$_POST['email'].'<br>
    <b>Konu </b>'.$_POST['konu'].'<br>
    <b>Mesaj </b>'.$_POST['mesaj'].'<br>
    ';
  }
  else {
    echo 'Lütfen tüm alanları doldurun.';
    // header('refresh:5;url=wherever.php');
  }