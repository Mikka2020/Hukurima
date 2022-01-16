const tab1 = document.getElementsByClassName("tab1")[0];
const sortTabs = document.getElementsByClassName("sort-tabs")[0];
const modalBg = document.getElementsByClassName("modal-bg")[0];
tab1.addEventListener("click", () => {
  sortTabs.style.display = "block";
  modalBg.style.display = "block";
});

modalBg.addEventListener("click", () => {
  modalBg.style.display = "none";
  sortTabs.style.display = "none";
});
