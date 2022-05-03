const containerAudio = document.getElementById("song");
const audio = document.getElementById("song-file");
const play = document.getElementById("play-btn");
const duration = audio.duration;
//console.log(duration);
function playAudio() {
  play.className =
    play.getAttribute("class") === "fa-solid fa-pause play"
      ? "fa-solid fa-play play"
      : "fa-solid fa-pause play";
  containerAudio.className =
    containerAudio.getAttribute("class") === "pause" ? "play" : "pause";
  if (containerAudio.className === "pause") {
    audio.play();
  } else {
    audio.pause();
  }
}
play.addEventListener("click", playAudio);

if (duration - audio.currentTime === 0) {
  containerAudio.className = "pause";
  play.className = "fa-solid fa-play play";
}
