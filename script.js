function toggleStatus(id) {
  fetch("toggle.php?id=" + id)
    .then(response => response.text())
    .then(data => {
      document.getElementById("status-" + id).innerText = data == 1 ? "ON" : "OFF";
    });
}
