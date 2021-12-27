const satu = 9.915
const dua = 13.472
const tiga = 874
const empat = 120
const lima = 15.888
const enam = 3.592

const nilai = document.getElementById("nilai");
const valas = document.getElementById("valas");
const us = document.getElementById("us");
const singa = document.getElementById("singa");
const malay = document.getElementById("malay");
const jepang = document.getElementById("jepang");
const euro = document.getElementById("euro");
const arab = document.getElementById("arab");
const rupiah = document.getElementById("rupiah");

us.addEventListener("input", function  (ev) {
    const value = ev.currentTarget.value;
    const valueNilai = value * satu;
    us.value = valueNilai;
});

singa.addEventListener("input", function  (ev) {
    const value = ev.currentTarget.value;
    const valueNilai = value * dua;
    singa.value = valueNilai;
});