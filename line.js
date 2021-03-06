function Line(lineElement) {
    this.element = lineElement;
    this.gradient = this.element.getAttribute('data-gradient') ? this.element.getAttribute('data-gradient') : null;
    this.size = this.element.getAttribute('data-px') ? this.element.getAttribute('data-px') : 10;
    this.color = this.element.getAttribute('data-color') ? this.element.getAttribute('data-color') : 'black';
    this.animate = this.element.getAttribute('data-animate') ? this.element.getAttribute('data-animate') : false;
    this.height = this.element.getAttribute('data-height') ? this.element.getAttribute('data-height') : '1px';

    this.changeSize = function(size) {
        this.size = size;
        this.element.style.width = this.size+'px';
    };

    // Create the line
    if (Boolean(this.animate) == true) {
        // console.log("animating", this);
        // this.element.style.cssText = "@keyframes _line_anm {0% {background-position: 0% 50%;} 50% {background-position: 100% 50%;} 100% {background-position: 0% 50%;}}";
        var keyframesStyle = document.querySelector('#keyframesStyle');
        if (!keyframesStyle) {
            var s = document.createElement('style');
            s.innerHTML = "@keyframes lineanm {0% {background-position: 0% 50%;} 50% {background-position: 100% 50%;} 100% {background-position: 0% 50%;}}";
            s.id = "keyframesStyle";
            document.head.appendChild(s);
        }
        var randomTime = Math.floor((Math.random()*15)+5);
        this.element.style.animation = "lineanm "+randomTime+"s ease infinite";
    }

    if (this.gradient !== null) {
        this.element.style.background = this.gradient;
        this.element.style.backgroundSize = "400% 400%";
    } else {
        this.element.style.backgroundColor = this.color;
    }

    this.element.style.display = 'inline-block';
    this.element.style.height = this.height;
    this.element.style.width = this.size;
    this.element.style.marginBottom = '8px';


    // End creating line
}
