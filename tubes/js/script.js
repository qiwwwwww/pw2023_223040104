const keyword = document.getElementById("keyword");
const tombolCari = document.getElementById("tombol-cari");
const container = document.getElementById("container");

keyword.onkeyup = function () {
  fetch("ajax.php?keyword=" + keyword.value)
    .then((response) => response.text())
    .then((text) => (container.innerHTML = text));
};
