const btnClose = document.getElementById("btnClose");
const btnCloseE = document.getElementById("btnCloseE");

btnClose.addEventListener("click", () => {
  modal_container.classList.remove("show");
});

btnCloseE.addEventListener("click", () => {
  modal_containerE.classList.remove("show");
});

