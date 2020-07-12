function playSound(e) {
  const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
  // console.log(audio);

  const key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
  if (!audio) return;
  key.classList.add('playing');
  audio.currentTime = 0;
  audio.play();
  // console.log(key);
}

function removePlayingClass(e) {
    if (e.propertyName !== 'transform') return;
    this.classList.remove('playing');
}

const keys = document.querySelectorAll('.key');
keys.forEach(k => {
  k.addEventListener('transitionend', removePlayingClass);
});

window.addEventListener('keydown', playSound);
