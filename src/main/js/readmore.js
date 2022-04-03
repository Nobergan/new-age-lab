const toggleBtnRef = document.querySelector(".third__toggle");
const articleTextRef = document.querySelector(".third__list");

toggleBtnRef.addEventListener("click", onBtnToggle);

function onBtnToggle() {
  articleTextRef.classList.toggle("open-text");

  if (articleTextRef.classList.contains("open-text")) {
    toggleBtnRef.textContent = "LESS";
  } else {
    toggleBtnRef.textContent = "MORE";
  }
}
