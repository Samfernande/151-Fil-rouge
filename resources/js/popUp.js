document.getElementById('popup').classList.add("show");

// Masquer le pop-up après 3 secondes
setTimeout(() => {
  document.getElementById('popup').classList.add("hide");
}, 1000);