const askButton = document.querySelector('.ask button');
const eliminateButton = document.querySelector('.eliminate button');
const skipButton = document.querySelector('.skip button');

const lineThrough = document.querySelectorAll('.choices li p');

(function ask() {
    let counter = 0;
    let score = document.querySelector('.ask input');

    askButton.addEventListener('click', () => {
        score.value = ++counter;

        if (counter >= 3) {
            score.value = 3;

        }
        localStorage.setItem('ask', score.value);
    })

    let localScore = localStorage.getItem('ask');
    score.value = localScore;
})();

(function ask() {
    let counter = 0;
    let score = document.querySelector('.eliminate input');

    eliminateButton.addEventListener('click', () => {
        score.value = ++counter;

        if (counter >= 3) {
            score.value = 3;
        }
        localStorage.setItem('eliminate', score.value);
    })

    let localScore = localStorage.getItem('eliminate');
    score.value = localScore;
})();

(function ask() {
    let counter = 0;
    let score = document.querySelector('.skip input');

    skipButton.addEventListener('click', () => {
        score.value = ++counter;

        if (counter >= 3) {
            score.value = 3;
        }
        localStorage.setItem('skip', score.value);
    })

    let localScore = localStorage.getItem('skip');
    score.value = localScore;
})();

for (let eliminate of lineThrough) {
    eliminate.addEventListener('click', () => {
        eliminate.classList.toggle('eliminate');
    })
}