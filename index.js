// Плавная прокрутка скролла начало

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

// Плавная прокрутка скролла конец


// Асинхронный метод отправки формы

async function sendForm(form) {
  let response = await fetch("send.php", {
    method: "POST",
    body: new FormData(form),
  });
  let result = await response.text();
  if (result == "ok") {
    alert("Вы успешно отправили заявку");
  } else if (result == "wrong") {
    alert("Что-то пошло не так");
  }
}
