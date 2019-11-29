var colors = ["rgb(33, 44, 66)",
    "rgb(255, 255, 255)",
    "rgb(55, 66, 77)",
    "rgb(66, 77, 88)",
    "rgb(77, 88, 99)",
    "rgb(88, 99, 100)"];

var squares = Array.from(document.querySelectorAll(".square"));
var rgb = document.querySelector("#rgb");
var playAgain = document.querySelector("#playAgain");
var easy = document.querySelector("#easy");
var hard = document.querySelector("#hard");
var gameOver = false;
//  HERE ADD A GAMEOVER FEATURE I.E NO EVENT SHOULD BE TRIGGERED!
var pickedColor = colors[2];
rgb.textContent = pickedColor;
setGame();
var level = "hard";
if (level === "hard") {
    hard.classList.add("focus");
    hard.style.color = "white";
}

for (var i = 0; i < squares.length; i++) {
    squares[i].addEventListener("click", function () {
        if (!gameOver) {
            if (colors[squares.indexOf(this)] === pickedColor) {

                document.querySelector("#hint").textContent = "Correct!!";
                document.querySelector("#hint").style.opacity = 1;
                setTimeout(() => {
                    document.querySelector("#hint").style.opacity = 1;
                    document.querySelector("#hint").textContent = "You Win , Play Again!"

                }, 600);
                for (var i = 0; i < squares.length; i++) {
                    squares[i].style.backgroundColor = pickedColor;
                }
                gameOver = true;
            } else {
                document.querySelector("#hint").textContent = "Try Again!!";
                document.querySelector("#hint").style.opacity = 1;
                setTimeout(() => {
                    document.querySelector("#hint").style.opacity = 0;


                }, 600);
                fadeOut(this);
            }
        }

    });
}

playAgain.addEventListener("click", () => {

    setGame();
});

playAgain.onmouseover = () => {

    playAgain.style.textDecoration = "underline";
}

playAgain.onmouseout = () => {
    playAgain.style.textDecoration = "none";


}

easy.onclick = () => {
    if (level !== "easy") {
        easy.classList.add("focus");
        easy.style.color = "white";
        hard.classList.remove("focus");
        hard.style.color = "rgb(66, 112, 177)";
        var arr = squares.splice(3, 3);
        arr.forEach(function (i) {
            i.style.display = "none";


        })
        setGame();
        level = "easy";
    }
}

hard.onclick = () => {
    if (level !== "hard") {
        hard.classList.add("focus");
        hard.style.color = "white";
        easy.classList.remove("focus");
        easy.style.color = "rgb(66, 112, 177)";
        squares = Array.from(document.querySelectorAll(".square"));
        squares.forEach(function (i) {
            i.style.display = "inline";

        })
        setGame();
        level = "hard";
    }
}

function setGame() {
    var r, g, b;
    var f = true;
    var str = "";
    var newColors = [];
    gameOver = false;
    document.querySelector("#hint").style.opacity = 0;
    for (var i = 0; i < squares.length; i++) {
        while (f) {
            r = Math.floor(Math.random() * 255);
            g = Math.floor(Math.random() * 255);
            b = Math.floor(Math.random() * 255);
            str = "rgb(" + r + ", " + g + ", " + b + ")";
            f = newColors.includes(str);
        }
        newColors.push(str);
        f = true;

    }
    colors = newColors;
    pickedColor = newColors[Math.floor(Math.random() * (squares.length))];
    rgb.textContent = pickedColor + " ?";

    for (var i = 0; i < squares.length; i++) {
        squares[i].style.backgroundColor = newColors[i];
        squares[i].style.opacity = 1;
    }
}

function fadeOut(element) {
    var op = 1;
    var timer = setInterval(() => {
        if (op <= 0.1) {
            clearInterval(timer);
            element.style.opacity = 0;
        }
        element.style.opacity = op;
        op -= 0.1;

    }, 50);
}