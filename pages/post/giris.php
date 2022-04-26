<?php

if (!empty($_POST['kullanici']) && !empty($_POST['sifre'])) {
  $pattern = "/^([\w\-\.]+)@([\w-]+\.)+[\w-]{2,4}$/i";
  
  preg_match($pattern, $_POST['kullanici'], $matches);
  $username = $matches[1];
  
  if ($_POST['sifre'] == $username) {
      echo 'Hoşgeldiniz "'.$username.'"!';
    }
    else {
      echo 'Şifreniz yanlış! Giriş sayfasına yönlendiriliyorsunuz...';
      header('refresh:3;url=../giris.html');
    }
  }
  else {
    echo 'Lütfen tüm alanları doldurun.';
  }