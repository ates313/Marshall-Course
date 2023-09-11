let currentGradientAngle = 0;

window.addEventListener('wheel', function (e) {
    if (e.deltaY < 0) {
        if (!(currentGradientAngle >= 180)) {
            currentGradientAngle += 100;
        }
    } else if (e.deltaY > 0) {
        if (!(currentGradientAngle <= 0))
            currentGradientAngle -= 100;
    }
    document.body.style.setProperty("--scrlbar", "linear-gradient(" + currentGradientAngle + "deg, #06ABF0, white)");
});