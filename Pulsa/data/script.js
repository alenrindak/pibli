// Data dari array pilNamaKateIndosat2
let pilNamaKateIndosat1 = [];

// Mengambil elemen output dengan ID "outputDiv"
let outputDiv = document.getElementById("outputDiv");

// Membuat elemen <ul> (unordered list) untuk menampilkan data
let ul = document.createElement("ul");

// Meloopi array pilNamaKateIndosat2 dan membuat elemen <li> (list item) untuk setiap data
for (let i = 0; i < pilNamaKateIndosat1.length; i++) {
  let li = document.createElement("li");
  li.textContent = pilNamaKateIndosat1[i];
  ul.appendChild(li);
}

// Menambahkan elemen <ul> ke dalam elemen outputDiv

outputDiv.appendChild(ul);