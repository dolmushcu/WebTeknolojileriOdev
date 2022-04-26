const kullanici = document.getElementById('username');
const sifre = document.getElementById('pass');
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
  sifre.value.trim() != '' ? make_valid(sifre) : make_invalid(sifre);
  check_if_fits(/^[\w\-\.]+@([\w-]+\.)+[\w-]{2,4}$/, kullanici.value.trim()) != '' ? make_valid(kullanici) : make_invalid(kullanici);
}

function check_if_fits(pattern, str) {
  return pattern.test(str);
}

function submit(e) {
  check_all();
  if (valid_count < 2) {
    e.preventDefault();
  }
}

kullanici.addEventListener('keyup', check_all);
sifre.addEventListener('keyup', check_all);
buton.addEventListener('click', submit);