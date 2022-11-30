const background = document.getElementById("background");

const getRandomNumber = (limit) => {
  return Math.floor(Math.random() * limit);
};

const getRandomColor = () => {
  const h = getRandomNumber(139);
  const s = getRandomNumber(50);
  const l = getRandomNumber(50);

  return `hsl(${h}deg, ${s}%, ${l}%)`;
};

const setBackgroundColor = () => {
  const randomColor = getRandomColor();
  background.style.backgroundColor = randomColor;
  background.style.color = randomColor;
};

setBackgroundColor();

setInterval(() => {
  setBackgroundColor();
}, 1500);