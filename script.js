const form = document.getElementById("myForm");
const message = document.getElementById("message");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const formData = new FormData(form);

  fetch("submit.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        message.innerHTML = "Form submitted successfully!";
        form.reset();
      } else {
        message.innerHTML = "Error: " + data.message;
      }
    })
    .catch((error) => {
      message.innerHTML = "Error: " + error.message;
    });
});
