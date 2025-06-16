let sentenceEl = document.getElementById("sentence");
let text = "Need a Logo That Stands Out? Kickstart the Design Process With Us!";

let splittedText = text.split("")
console.log(splittedText);

let clutter = ""

splittedText.forEach(elem => {
  clutter += `<span class="inline-block min-w-3">${elem}</span>`;
})

sentenceEl.innerHTML = clutter

gsap.from("#sentence span", {
  opacity: 0,
  duration: 0.1,
  delay: 0,
  stagger: 0.1,
  textShadow: "0 0 10px #fff, 0 0 20px #fff, 0 0 30px #ff69b4, 0 0 40px #ff69b4, 0 0 50px #ff69b4, 0 0 75px #ff69b4",
})

