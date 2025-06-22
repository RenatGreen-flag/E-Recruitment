let soalList = [];
let timer = 15 * 60;
let interval;
let jawabanUser = {};

window.onload = function () {
  fetch('soal.php')
    .then(res => res.json())
    .then(data => {
      soalList = data;
      tampilkanSoal();
      mulaiTimer();
    });

  document.getElementById('formSoal').addEventListener('submit', function (e) {
    e.preventDefault();
    clearInterval(interval);
    periksaJawaban();
  });
};

function tampilkanSoal() {
  const container = document.getElementById("kontainer-soal");
  container.innerHTML = "";
  soalList.forEach((soal, index) => {
    container.innerHTML += `
      <div class="mb-4 border-b pb-2">
        <p class="font-semibold">${index + 1}. ${soal.pertanyaan}</p>
        ${["a","b","c","d"].map(pil => `
          <label class="block">
            <input type="radio" name="jawaban_${soal.id}" value="${pil}" class="jawaban" data-id="${soal.id}" />
            ${soal["pilihan_" + pil]}
          </label>
        `).join('')}
      </div>
    `;
  });
}

function mulaiTimer() {
  interval = setInterval(() => {
    if (--timer <= 0) {
      clearInterval(interval);
      alert("Waktu habis!");
      periksaJawaban();
    }
    const menit = Math.floor(timer / 60);
    const detik = timer % 60;
    document.getElementById("timer").innerText = `Waktu: ${menit}:${detik.toString().padStart(2, '0')}`;
  }, 1000);
}

function periksaJawaban() {
  let benar = 0;
  let total = soalList.length;
  let waktuDigunakan = 900 - timer;

  soalList.forEach(soal => {
    let radios = document.getElementsByName("jawaban_" + soal.id);
    let jawaban = "";
    for (let r of radios) {
      if (r.checked) {
        jawaban = r.value;
        if (jawaban === soal.jawaban_benar) {
          r.parentElement.classList.add("text-green-600");
          benar++;
        } else {
          r.parentElement.classList.add("text-red-600");
        }
      }
    }
  });

  // Kirim hasil
  fetch("submit.php", {
    method: "POST",
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify({skor: benar, waktu: waktuDigunakan})
  }).then(() => {
    setTimeout(() => window.location.href = "hasil.php", 1000);
  });
}
