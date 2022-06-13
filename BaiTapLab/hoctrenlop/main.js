const questions = [];

questions['1+1'] = '2';
questions['2+2'] = '4';
questions['3+3'] = '6';
questions['4+4'] = '8';

let answer = [];

// const buttons = document.getElementsByTagName('button');
// for (let i = 0; i < buttons.length; i++) {
//   buttons[i].onclick = () => {
//     if (buttons[i].classList.length == 0) {
//       buttons[i].classList.add('pressing');
//       if (answer.length < 2) answer.push(buttons[i].innerText);
//     } else {
//       buttons[i].classList.remove('pressing');
//       answer = answer.filter((curr) => {
//         return curr != buttons[i].innerText;
//       });
//     }
//   };
// }

// while (questions.length > 0) {
//   if (answer.length == 2) {
//     if (questions[answer[0]] == undefined) {
//     }
//   }
// }

var count = 0;
var btn = '';

var score = 0;
function handleClick(button) {
  count++;
  if (count == 1) {
    button.classList.add('pressing');
    btn = button.id;
  }

  if (count == 2) {
    button.classList.add('pressing');
    var btn0 = document.getElementById(btn);
    if (
      questions[button.innerText] == btn0.innerText ||
      button.innerText == questions[btn0.innerText]
    ) {
      button.style.visibility = 'hidden';
      btn0.style.visibility = 'hidden';
      score++;
    } else {
      button.classList.remove('pressing');
      btn0.classList.remove('pressing');
      if (score > 0) score--;
    }
    count = 0;
    document.getElementById('score').innerText = 'Score: ' + score;
  }
}

console.log(answer);
