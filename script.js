const form = document.getElementById("contact-form");

form.addEventListener("submit", (event) => {
  event.preventDefault(); // Prevent page from reloading
  const formData = new FormData(form); // Create a new FormData object
  const xhr = new XMLHttpRequest(); // Create a new XMLHttpRequest object
  xhr.open("POST", form.getAttribute("action")); // Set the form action URL and HTTP method
  xhr.onload = () => {
    if (xhr.status === 200) {
      // Check if the server returned a successful response
      alert("Thanks for your message! We will get back to you shortly."); // Display a success message
      form.reset(); // Reset the form fields
    } else {
      alert(
        "There was a problem submitting your message. Please try again later."
      ); // Display an error message
    }
  };
  xhr.send(formData); // Send the form data to the server
});
