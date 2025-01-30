let sentenceEl = document.getElementById("sentence");
let text = "Need a Website That Stands   Out? Kickstart the Design Process   With Us!";

let splittedText = text.split("")

let clutter = ""

splittedText.forEach((elem, i) => {
  if(i === 27 || i === 28){
    clutter += `<span class="sm:!inline-block min-w-3 !hidden">${elem}</span>`;
    return
  }else if(i === 63 || i === 64){
    clutter += `<span class="!inline-block min-w-3 sm:!hidden">${elem}</span>`;
    return
  }else{
    clutter += `<span class="inline-block min-w-3">${elem}</span>`;
  }
})

sentenceEl.innerHTML = clutter

gsap.from("#sentence span", {
  opacity: 0,
  duration: 0.05, // Faster duration for each element
  delay: 0, // Add a small delay before the animation starts
  stagger: 0.05, // Stagger the start of each animation for a smooth flow
  textShadow: "0 0 5px #fff, 0 0 10px #ff69b4, 0 0 15px #ff69b4, 0 0 20px #ff69b4, 0 0 25px #ff69b4", // More subtle text shadow
});


