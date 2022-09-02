const askButton = document.querySelector('.ask button');
const eliminateButton = document.querySelector('.eliminate button');
const skipButton = document.querySelector('.skip button');

(function ask() {
    let counter = 0;

    askButton.addEventListener('click', () => {
        let score = document.querySelector('.ask input');
        score.value = ++counter;

        if (counter >= 3) {
            score.value = 3;
        }
    })
})();

(function ask() {
    let counter = 0;

    eliminateButton.addEventListener('click', () => {
        let score = document.querySelector('.eliminate input');
        score.value = ++counter;

        if (counter >= 3) {
            score.value = 3;
        }
    })
})();

(function ask() {
    let counter = 0;

    skipButton.addEventListener('click', () => {
        let score = document.querySelector('.skip input');
        score.value = ++counter;

        if (counter >= 3) {
            score.value = 3;
        }
    })
})();