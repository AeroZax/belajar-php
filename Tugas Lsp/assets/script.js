const totalBtn = document.getElementById("total");
const totalEl = document.querySelector(".total");
const hargaEl = document.querySelector("#harga");
const bayarEl = document.getElementById("bayar");
const pelembutEl = document.getElementById("pelembut");
const kembalianBtn = document.getElementById("kembalian");
const kembalianEl = document.getElementById("kembalians");
const simpanBtn = document.getElementById("simpan");

let total;
totalBtn.addEventListener("mousedown", () => {
  if (pelembutEl.checked) {
    total = parseInt(hargaEl.value) + parseInt(pelembutEl.value);
  } else {
    total = parseInt(hargaEl.value);
  }
  totalEl.value = total;

  return total;
});

kembalianBtn.addEventListener("mousedown", () => {
  kembalianEl.value = parseInt(total) - parseInt(bayarEl.value);
});

simpanBtn.addEventListener("mousedown", () => {
  alert("Transaksi berhasil kembali ke home");
  window.location.href = "index.php";
});
