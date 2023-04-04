// Get the modal
const modal = document.getElementById("modal");

// Get the button that opens the modal
const modalBtns = document.querySelectorAll(".modal-btn");

// Get the <span> element that closes the modal
const closeBtn = document.querySelector(".close-btn");

// When the user clicks on the button, open the modal
modalBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    modal.style.display = "block";
  });
});

// When the user clicks on <span> (x), close the modal
closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", (event) => {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});











// Handle forgot password link
const forgotPasswordLink = document.querySelector(".forgot-password");
forgotPasswordLink.addEventListener("click", () => {
  alert("Sorry, this feature is not available yet.");
});





