var app = document.getElementById('app');
console.log(app);

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});

console.log(typewriter);

typewriter
  .pauseFor(2000)
  .typeString('Hello ')
  .typeString('<strong>Friend</strong>')
  .pauseFor(300)

  .deleteChars(6)
  .pauseFor(300)
  .typeString('<strong>Lena</strong>')
  .pauseFor(300)
  .deleteChars(4)
  .pauseFor(300)

  .typeString('<strong>Love</strong>')

  .pauseFor(2000)
  .start();