window.onload = function() {
    resizeItems();
    setupLines();
}

document.onreadystatechange = function() {
    setupJavascript();
};

window.onresize = function() {
    resizeItems();
}

function setupLines() {
    var elements = document.querySelectorAll('.line');
    for (var i = 0; i < elements.length; i++) {
        window["line"+i] = new Line(elements[i]);
        console.log(window["line"+i]);
    }
}


function setupJavascript() {
    var images = document.querySelectorAll('img');
    for (var i = 0; i < images.length; i++) {
        images[i].onerror = function(e) {
            this.onerror = null;
            // console.log("Error", e);
            this.src = './errorImage/no.png';
        };
        // console.log(images[i]);
    }
}



function resizeItems() {
    var nav = document.querySelector('.navigation');
    var navHeightO = nav.clientHeight;
    var navWidthO = nav.clientWidth;
    var navHeight = 0;
    var navWidth = 0;


    // var page_wrapper = document.querySelector('.page_wrapper');
    // var page = document.querySelector('.page');
    var background = document.querySelector('.background');
    var bg_overlay = document.querySelector('.bg_overlay');

    // page_wrapper.style.width = window.innerWidth+'px';
    // page_wrapper.style.height = window.innerHeight+'px';

    // page.style.width = window.innerWidth+'px';
    // page.style.height = (window.innerHeight-navHeight)+'px';

    background.style.width = (window.innerWidth-17)+'px';
    background.style.height = (window.innerHeight-navHeight)+'px';

    background.style.marginTop = -navHeightO+'px';

    bg_overlay.style.width = (window.innerWidth-17)+'px';
    bg_overlay.style.height = (window.innerHeight-navHeight)+'px';


    var blocks = document.querySelectorAll('.block');

    if (blocks.length > 0) {
        var windowWidth = window.innerWidth;
        var blockAmount = blocks.length;
        var blockWidth = (blocks[0].clientWidth == blocks[1].clientWidth) ? blocks[0].clientWidth : 250;

        var fit = Math.floor(windowWidth/blockWidth);
        console.log(windowWidth, blockWidth, blocks.length);
        console.log(fit);


        for (var i = 0; i < blocks.length; i++) {
            if (fit == 0 || fit == 1) {
                blocks[i].style.marginLeft = 5+'px';
            } else {
                blocks[i].style.marginLeft = ((100/fit)/fit)+'%';
            }
        }
    }

}

function checkCached(event) {
    if (event.persisted) {
        alert("Page is cached and cannot load updates. Please empty your cache history.");
    } else {
        console.log("Page is not cached");
    }
}
