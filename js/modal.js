let btn_delet = document.querySelector(".btn-delet");
btn_delet.addEventListener('click', () => {
    modal.classList.remove("hidden");
});














document.addEventListener("DOMContentLoaded", () => {
  const imgTop = document.querySelector("img.top");

  imgTop.addEventListener('click', () => {
    const userSession = "<?php echo isset($_SESSION['mail']) ? $_SESSION['mail'] : '' ?>";
    if (userSession) {
      window.location.href = `user.php?id=${encodeURIComponent(userSession)}`;
    }
  });

  document.querySelectorAll("section[data-uid]").forEach(e => {
    e.addEventListener("click", ev => {
      let uid = e.getAttribute("data-uid");
      window.location.href = `user.php?id=${uid}`;
    });
  });
});
