let img = document.querySelector('img')
let timerEl = document.getElementById('timer')
let remaining = 5

function changeColor() {
    if (img.getAttribute("src") == "feux-feurouge.jpg") {
        img.setAttribute("src", "feux-feuorange.jpg")
    }
    else if (img.getAttribute("src") == "feux-feuorange.jpg") {
        img.setAttribute("src", "feux-feuvert.jpg")
    }
    else if (img.getAttribute("src") == "feux-feuvert.jpg") {
        img.setAttribute("src", "feux-feurouge.jpg")
    }

    remaining = 5
}

function showTime() {
    remaining--
    if (remaining <= 0) {
        changeColor()
    }
    timerEl.textContent = remaining
}

setInterval(showTime, 1000)
