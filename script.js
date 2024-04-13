function generateResponse() {
  var text = document.getElementById("text").value;
  var image = document.getElementById("image").files[0];

  var formData = new FormData();
  formData.append("text", text);
  formData.append("image", image);

  fetch("response.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.text())
    .then((res) => {
      document.getElementById("response").innerHTML = res;
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}


