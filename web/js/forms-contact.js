const contact = document.querySelector("#contact");
const devis = document.querySelector("#devis");
const devisForm = document.querySelector("#devisForm");
const contactForm = document.querySelector("#contactForm");
const close = document.querySelector("#close");

contact.addEventListener("click", () => {
  contactForm.style.display = "block";
  devisForm.style.display = "none";
});

devis.addEventListener("click", () => {
  devisForm.style.display = "block";
  contactForm.style.display = "none";
});
close.addEventListener("click", () => {
  contactForm.style.display = "none";
  devisForm.style.display = "none";
});
