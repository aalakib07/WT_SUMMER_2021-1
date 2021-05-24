window.addEventListener('load', () => {
  const emojiArr = ['🚶‍♂️', '🏃‍♂️'];
  const emojiH1 = document.querySelector('.aligner-inside h1');
  emojiH1.textContent = emojiArr[0];
  const emojiFunc = () => {
    if (emojiH1.textContent === emojiArr[0]) {
      emojiH1.textContent = emojiArr[1];
    } else if (emojiH1.textContent === emojiArr[1]) {
      emojiH1.textContent = emojiArr[0];
    }
  };

  setInterval(() => {
    emojiFunc();
  }, 1000);
});
