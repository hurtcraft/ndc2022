var allowedKeys = {
    ArrowUp: 'up',
    ArrowDown: 'down',
    ArrowLeft: 'left',
    ArrowRight: 'right',
    a: 'a',
    b: 'b'
};

var konamiCode = ['up', 'up', 'down', 'down', 'left', 'right', 'left', 'right', 'b', 'a'];
var konamiCodePosition = 0

document.addEventListener('keydown', e => {

    var key = allowedKeys[e.key]
    var requiredKey = konamiCode[konamiCodePosition]

    if (key === requiredKey) {
        konamiCodePosition++
        afficher(key)
        const manette = document.getElementById("manette");
        manette.dataset.selected = e.key;

        document.addEventListener("keyup", (e) => {
            const manette = document.getElementById("manette");
            manette.dataset.selected = undefined;
            document.getElementById('arrowUp').style.display = "none";
            document.getElementById('arrowLeft').style.display = "none";
            document.getElementById('arrowRight').style.display = "none";
            document.getElementById('arrowDown').style.display = "none";
            document.getElementById('a').style.display = "none";
            document.getElementById('b').style.display = "none";

        })

        if (konamiCodePosition === konamiCode.length) {
            cheatCode()
            konamiCodePosition = 0
        }
    }
    else { konamiCodePosition = 0 }
})


function cheatCode() {
    document.getElementById('autoplay').style.display = "block";
    document.getElementById('manette').style.display="none";
    document.getElementById('nes0').style.display="none";
    document.getElementById('autoplay').play();
    setTimeout('RedirectionJavascript()', 25000)
}

function afficher(key) {
    if (key === "up") {
        document.getElementById('arrowUp').style.display = "block";
    }
    else if (key === "down")
    {
        document.getElementById('arrowDown').style.display = "block";
    }
    else if (key === "left")
    {
        document.getElementById('arrowLeft').style.display = "block";
    }
    else if (key === "right")
    {
        document.getElementById('arrowRight').style.display = "block";
    }
    else if (key === "a")
    {
        document.getElementById('a').style.display = "block";
    }
    else if (key === "b")
    {
        document.getElementById('b').style.display = "block";
    }
}

function RedirectionJavascript()
{
  document.location.href="https://www.youtube.com/watch?v=BBJa32lCaaY";
}

