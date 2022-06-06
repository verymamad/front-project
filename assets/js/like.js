let likeButton = document.querySelectorAll(".like ");

likeButton.addEventListener("click", function () {
  likeButton.className =
    likeButton.className === "fa-regular fa-heart"
      ? "fa-solid fa-heart"
      : "fa-regular fa-heart";
});
//<i class="fa-solid fa-heart"></i>
