const isim = document.getElementById('name');
const mail = document.getElementById('email');
const tel = document.getElementById('phone');
const konu = document.getElementById('subject');
const mesaj = document.getElementById('message');
const onay = document.getElementById('approve');
const buton = document.getElementById('submit');

let valid_count = 0;

function make_valid(elem) {
  elem.classList.remove('is-invalid');
  elem.classList.add('is-valid');
  valid_count++;
}

function make_invalid(elem) {
  elem.classList.remove('is-valid');
  elem.classList.add('is-invalid');
  valid_count--;
}

function check_all() {
  isim.value.trim() != '' ? make_valid(isim) : make_invalid(isim);
  mesaj.value.trim() != '' ? make_valid(mesaj) : make_invalid(mesaj);
  konu.value.trim() != '' ? make_valid(konu) : make_invalid(konu);
  onay.checked ? make_valid(onay) : make_invalid(onay);
  check_if_fits(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/, mail.value.trim()) != '' ? make_valid(mail) : make_invalid(mail);
  check_if_fits(/^(\+9)?0?[^0]\d{9}$/, tel.value.trim()) != '' ? make_valid(tel) : make_invalid(tel);
}

function check_if_fits(pattern, str) {
  return pattern.test(str);
}

function submit(e) {
  check_all();
  if (valid_count < 6) {
    e.preventDefault();
  }
}

isim.addEventListener('keyup', check_all);
mesaj.addEventListener('keyup', check_all);
konu.addEventListener('change', check_all);
onay.addEventListener('change', check_all);
mail.addEventListener('keyup', check_all);
tel.addEventListener('keyup', check_all);
buton.addEventListener('click', submit);