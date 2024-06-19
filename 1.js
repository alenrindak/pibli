

var sekarang = new Date().getTime();


var waktu = new Date('Mar 29 2024 00:00:01').getTime();
var endwaktu = new Date('Mar 31 2024 23:59:59').getTime();

var waktu2 = new Date('Apr 08 2024 00:00:01').getTime();
var endwaktu2 = new Date('Apr 15 2024 23:59:59').getTime();


var waktu3 = new Date('May 01 2024 00:00:01').getTime();
var endwaktu3 = new Date('May 01 2024 23:59:59').getTime();


var waktu4 = new Date('May 09 2024 00:00:01').getTime();
var endwaktu4 = new Date('May 10 2024 23:59:59').getTime();


var waktu5 = new Date('May 23 2024 00:00:01').getTime();
var endwaktu5 = new Date('May 24 2024 23:59:59').getTime();


var waktu6 = new Date('Jun 01 2024 00:00:01').getTime();
var endwaktu6 = new Date('Jun 01 2024 23:59:59').getTime();


var waktu7 = new Date('Jun 17 2024 00:00:01').getTime();
var endwaktu7 = new Date('Jun 18 2024 23:59:59').getTime();


var waktu8 = new Date('Jul 07 2024 00:00:01').getTime();
var endwaktu8 = new Date('Jul 07 2024 23:59:59').getTime();


var waktu9 = new Date('Aug 01 2024 00:00:01').getTime();
var endwaktu9 = new Date('Aug 31 2024 23:59:59').getTime();


var waktu10 = new Date('Sep 16 2024 00:00:01').getTime();
var endwaktu10 = new Date('Sep 16 2024 23:59:59').getTime();


var waktu11 = new Date('Dec 24 2024 00:00:01').getTime();
var endwaktu11 = new Date('Dec 31 2024 23:59:59').getTime();


var waktu12 = new Date('Jan 01 2025 00:00:01').getTime();
var endwaktu12 = new Date('Jan 05 2025 23:59:59').getTime();


function ubah() {

  if (sekarang >= waktu && sekarang <= endwaktu) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/new.gif)";
  }
  else if (sekarang >= endwaktu && sekarang >= waktu2 && sekarang <= endwaktu2) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/idul.png)";
  }
  else if (sekarang >= endwaktu2 && sekarang >= waktu3 && sekarang <= endwaktu3) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/buruh.png)";
  }
  else if (sekarang >= endwaktu3 && sekarang >= waktu4 && sekarang <= endwaktu4) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/kenaikan.png)";
  }
  else if (sekarang >= endwaktu4 && sekarang >= waktu5 && sekarang <= endwaktu5) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/waisak.png)";
  }
  else if (sekarang >= endwaktu5 && sekarang >= waktu6 && sekarang <= endwaktu6) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/pancasila.png)";
  }
  else if (sekarang >= endwaktu6 && sekarang >= waktu7 && sekarang <= endwaktu7) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/adha.png)";
  }
  else if (sekarang >= endwaktu7 && sekarang >= waktu8 && sekarang <= endwaktu8) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/muharam.png)";
  }
  else if (sekarang >= endwaktu8 && sekarang >= waktu9 && sekarang <= endwaktu9) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/bendera.gif)";
  }
  else if (sekarang >= endwaktu9 && sekarang >= waktu10 && sekarang <= endwaktu10) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/maulid.png)";
  }
  else if (sekarang >= endwaktu10 && sekarang >= waktu11 && sekarang <= endwaktu11) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/natal.png)";
  }
  else if (sekarang >= endwaktu11 && sekarang >= waktu12 && sekarang <= endwaktu12) {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/new.gif)";
  }
  else {
    document.getElementById("background-div").style.backgroundImage = "url(https://www.piblisuperapp.my.id/gbr/assets/tip.png)";
  }
}
setInterval(function () {
  ubah();
}, 1000);

