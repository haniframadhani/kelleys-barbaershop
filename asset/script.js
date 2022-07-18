const datePicker = document.getElementById("time");
const tanggal = new Date();
const hari = (tanggal.getDate() < 10 ? "0" : "") + tanggal.getDate();
const bulan = (tanggal.getMonth() + 1 < 10 ? "0" : "") + (tanggal.getMonth() + 1);
const tahun = tanggal.getFullYear();
const jam = (tanggal.getHours() < 10 ? "0" : "") + tanggal.getHours();
const menit = (tanggal.getMinutes() < 10 ? "0" : "") + tanggal.getMinutes();
let tanggalBaru = [tahun, bulan, hari, jam, menit];
const separator = ["-", "-", "T", ":"];
tanggalBaru = tanggalBaru.reduce((output, elem, index) => {
    output += elem;
    if (index < tanggalBaru.length - 1) output += separator[index];
    return output;
}, '');
datePicker.setAttribute("min", tanggalBaru);
datePicker.setAttribute("value", tanggalBaru);