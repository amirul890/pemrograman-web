// function konversi(){
//     let a = Number(document.getElementById("dollar").value);
//     let b = a * 14.650
//     let c = document.getElementById("rupiah").value=b;
// }

const factor = 14.650;

const dollar = document.getElementById("dollar");
const rupiah = document.getElementById("rupiah");

dollar.addEventListener("input", function(ev) {
    const value = ev.currentTarget.value;
    const valueRupiah = value * factor;
    rupiah.value = valueRupiah
});

rupiah.addEventListener("input", function(ev) {
    const value = ev.currentTarget.value;
    const valueDollar = value / factor;
    dollar.value = valueDollar;
});