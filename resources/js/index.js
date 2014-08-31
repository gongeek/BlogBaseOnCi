//向上滚动
window.addEventListener("load", function () {
    var topBtn = document.getElementById("top"),
        timer = null,
        speed = -15,
        arrive = false;


    document.addEventListener('scroll', function () {
        var sy = document.body.scrollTop;

        if (sy > 0) {
            topBtn.style.display = "block";
        } else {
            topBtn.style.display = "none";
        }


    }, false);

    document.addEventListener('mousewheel', function () {
        if (typeof timer === "number") {
            clearTimeout(timer);
        }
    }, false);
    topBtn.addEventListener('click', function () {
        setTimeout(
            function draw() {
                timer = setTimeout(draw);
                if (document.body.scrollTop !== 0) {
                    document.body.scrollTop += speed;
                } else {
                    topBtn.style.display = "none";
                    arrive = true;
                    clearTimeout(timer);
                }
            }
            , 30);

    }, false);
}, false);