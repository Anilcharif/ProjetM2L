document.addEventListener("DOMContentLoaded", () => {
  const imgTop = document.querySelector("img.top");

  imgTop.addEventListener('click', () => {
    const userId = 11
    if (userId) {
      window.location.href = `user.php?id=${userId}`;
    }
  });

  document.querySelectorAll("section[data-uid]").forEach(e => {
    e.addEventListener("click", ev => {
      let uid = e.getAttribute("data-uid");
      window.location.href = `user.php?id=${uid}`;
    });
  });
});
