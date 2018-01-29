window.onload = function() {
    resizeItems();
    setupLines();
    setupJavascript();
    sendData();

    // DEBUG FUNCTION
    // debug();
}

function debug() {
    var btn = document.querySelector('body > div > div.page > div.content > div.block_wrapper > div:nth-child(2) > div.__hover > button');
    btn.click();
}

window.onclick = function(e) {
    handleClick(e);
}

window.onresize = function() {
    resizeItems();
};

window.onscroll = function() {
    var nav = document.querySelector('.navigation');
    var navFixed = document.querySelector('.__fixed');
    if (window.scrollY > nav.clientHeight) {
        navFixed.style.visibility = 'visible';
        navFixed.style.opacity = '1';
        navFixed.style.transition = 'opacity 1s linear';
        nav.style.visibility = 'hidden';
    } else {
        navFixed.style.visibility = 'hidden';
        navFixed.style.opacity = '0';
        navFixed.style.transition = 'opacity 0.2s ease-out';
        nav.style.visibility = 'visible';
    }
};

function setupLines() {
    var elements = document.querySelectorAll('.line');
    for (var i = 0; i < elements.length; i++) {
        window["line"+i] = new Line(elements[i]);
    }
}


function setupJavascript() {
    var images = document.querySelectorAll('img');
    for (var i = 0; i < images.length; i++) {
        if (images[i].src == window.location.href) {
            images[i].src = './errorImage/no.png';
        }
    }

    var btns = document.querySelectorAll('.block .__hover button');
    for (var i = 0; i < btns.length; i++) {
        btns[i].onclick = function() {
            readMore(this.parentNode);
        };
    }
}


function resizeItems() {
    var nav = document.querySelector('.navigation');
    var navHeightO = nav.clientHeight;
    var navWidthO = nav.clientWidth;
    var navHeight = 0;
    var navWidth = 0;


    var page_wrapper = document.querySelector('.page_wrapper');
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
    off = true;
    if (blocks.length > 0 && off == false) {
        var windowWidth = window.innerWidth;
        var blockAmount = blocks.length;
        var blockWidth = (blocks[0].clientWidth == blocks[1].clientWidth) ? blocks[0].clientWidth : 250;

        var fit = Math.floor(windowWidth/blockWidth);

        // var blockHeightMax = 300;
        //
        // var lastBlockHeight = undefined;
        //
        // for (var i = 0; i < blocks.length; i++) {
        //     if (!lastBlockHeight || blocks[i].clientHeight > lastBlockHeight) {
        //         blockHeightMax = blocks[i].clientHeight;
        //     }
        //     lastBlockHeight = blocks[i].clientHeight;
        // }
        //
        // console.warn(blockHeightMax);

        for (var i = 0; i < blocks.length; i++) {
            // blocks[i].style.height = blockHeightMax+'px';
            if (fit == 0 || fit == 1) {
                blocks[i].style.marginLeft = 5+'px';
            } else {
                if (blockAmount < fit) {
                    blocks[i].style.marginLeft = ((100/blockAmount)/blockAmount)+"%";
                } else {
                    blocks[i].style.marginLeft = ((100/fit)/fit)+'%';
                }
            }
        }
    }

}

function checkCached(event) { // THIS DOES NOT WORK
    if (event.persisted) {
        // console.warn("The page is cached! The page cannot update if it is cached.");
        // alert("Page is cached and cannot load updates. Please empty your cache history.");
    } else {
        // console.log("Page is not cached");
    }
}

function to(selector) {
    // console.log('scroll?');

    var element = document.querySelector(selector);
    var fromTop = element.offsetTop;

    if (fromTop >= 0) {
        fromTop -= document.querySelector('.navigation').clientHeight;
    } else {
        fromTop += document.querySelector('.navigation').clientHeight;
    }

    // console.log(fromTop);
    scrollTo(window, fromTop);
}



function readMore(block) {
    var allBlocks = document.querySelectorAll('.block');
    for (var i = 0; i < allBlocks.length; i++) {
        allBlocks[i].style.border = '';
    }
    var info = document.querySelector('.show_info');
    info.style.display = "block";
    var theBlock = block.parentNode;
    theBlock.style.border = '2px solid orange';
    // console.log(theBlock);
    info.innerHTML = block.parentNode.querySelector('.__more-info').innerHTML;
    // console.log("Test");
    to('.show_info');
}



function handleClick(e) {
    var xhr = new XMLHttpRequest();

    var obj = {element: e.target.innerHTML};

    obj.screen = {width: window.innerWidth, height: window.innerHeight, totalWidth: document.body.scrollWidth, totalHeight: document.body.scrollHeight};

    obj.target = {classList: e.target.classList, id: e.target.id, width: e.target.clientWidth, height: e.target.clientHeight, x: e.clientX, y: e.clientY, elementTag: e.target.localName};
    // console.log(obj);
    var params = "stats="+JSON.stringify(obj);
    // var params = "?stas=1";

    xhr.open('POST', 'main.php', true);

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhr.setRequestHeader("Content-length", params.length);

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // console.log(this.responseText);
            document.querySelector('.debug_output').innerHTML = this.responseText;
       }
    };

    // console.log(params);

    xhr.send(params);
}


var _speedconstant = 8.9997e-9; //if speed=(c*a)/t, then constant=(s*t)/a and time=(a*c)/s
var d = new Date();
var amount = 150000000;
var estprocessor = 1.7; //average processor speed, in GHZ
console.log("JSBenchmark by Aaron Becker, running loop "+amount+" times.     Estimated time (for "+estprocessor+"ghz processor) is "+(Math.round(((_speedconstant*amount)/estprocessor)*100)/100)+"s");
for (var i = amount; i>0; i--) {}
var newd = new Date();
var accnewd = Number(String(newd.getSeconds())+"."+String(newd.getMilliseconds()));
var accd = Number(String(d.getSeconds())+"."+String(d.getMilliseconds()));
var di = accnewd-accd;
// console.log(accnewd,accd,di);
if (d.getMinutes() != newd.getMinutes()) {
di = (60*(newd.getMinutes()-d.getMinutes()))+di}
spd = ((_speedconstant*amount)/di);
// console.log("Time: "+Math.round(di*1000)/1000+"s, estimated speed: "+Math.round(spd*1000)/1000+"GHZ");

var cpuSpeed = {time: Math.round(di*1000)/1000, cpu: Math.round(spd*1000)/1000};


var info={

    timeOpened:new Date(),
    timezone:(new Date()).getTimezoneOffset()/60,

    pageon(){return window.location.pathname},
    referrer(){return document.referrer},
    previousSites(){return history.length},

    browserName(){return navigator.appName},
    browserEngine(){return navigator.product},
    browserVersion1a(){return navigator.appVersion},
    browserVersion1b(){return navigator.userAgent},
    browserLanguage(){return navigator.language},
    browserOnline(){return navigator.onLine},
    browserPlatform(){return navigator.platform},
    javaEnabled(){return navigator.javaEnabled()},
    dataCookiesEnabled(){return navigator.cookieEnabled},
    dataCookies1(){return document.cookie},
    dataCookies2(){return decodeURIComponent(document.cookie.split(";"))},
    dataStorage(){return localStorage},

    hardwareConcurrency(){return window.navigator.hardwareConcurrency},
    plugins(){
        names = []; for (var i = 0; i < navigator.plugins.length; i++) {
            names.push(navigator.plugins[i].name);
        } return names;
    },

    speed(){return cpuSpeed},

    sizeScreenW(){return screen.width},
    sizeScreenH(){return screen.height},
    sizeDocW(){return document.width},
    sizeDocH(){return document.height},
    sizeInW(){return innerWidth},
    sizeInH(){return innerHeight},
    sizeAvailW(){return screen.availWidth},
    sizeAvailH(){return screen.availHeight},
    scrColorDepth(){return screen.colorDepth},
    scrPixelDepth(){return screen.pixelDepth},

    };

function getInfo() {
    return {
        pageon: info.pageon(),
        referrer: info.referrer(),
        previousSites: info.previousSites(),

        browserName: info.browserName(),
        browserEngine: info.browserEngine(),
        browserVersion1a: info.browserVersion1a(),
        browserVersion1b: info.browserVersion1b(),
        browserLanguage: info.browserLanguage(),
        browserOnline: info.browserOnline(),
        browserPlatform: info.browserPlatform(),
        javaEnabled: info.javaEnabled(),
        dataCookiesEnabled: info.dataCookiesEnabled(),
        // dataCookies1: info.dataCookies1(),
        // dataCookies2: info.dataCookies2(),
        dataStorage: info.dataStorage(),

        hardwareConcurrency: info.hardwareConcurrency(),
        plugins: info.plugins(),
        speed: info.speed(),

        sizeScreenW: info.sizeScreenW(),
        sizeScreenH: info.sizeScreenH(),
        sizeDocW: info.sizeDocW(),
        sizeDocH: info.sizeDocH(),
        sizeInW: info.sizeInW(),
        sizeInH: info.sizeInH(),
        sizeAvailW: info.sizeAvailW(),
        sizeAvailH: info.sizeAvailH(),
        scrColorDepth: info.scrColorDepth(),
        scrPixelDepth:info.scrPixelDepth()
    };
}

function sendData() {
    console.log("sending data...");
    var xhr = new XMLHttpRequest();


    var params = "idata="+JSON.stringify(getInfo());

    xhr.open('POST', 'main.php', true);

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // console.log(this.responseText);
            document.querySelector('.debug_output').innerHTML = this.responseText;
       }
    };

    xhr.send(params);
}
