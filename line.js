function Line(lineElement) {
    this.element = lineElement;
    this.gradient = this.element.getAttribute('data-gradient') ? this.element.getAttribute('data-gradient') : null;
    this.size = this.element.getAttribute('data-px') ? this.element.getAttribute('data-px') : 10;
    this.color = this.element.getAttribute('data-color') ? this.element.getAttribute('data-color') : 'black';

    this.changeSize = function(size) {
        this.size = size;
        this.element.style.width = this.size+'px';
    };

    // Create the line
    if (this.gradient !== null) {
        this.element.style.backgroundImage = this.gradient;
    } else {
        this.element.style.backgroundColor = this.color;
    }

    this.element.style.display = 'inline-block';
    this.element.style.height = 1+'px';
    this.element.style.width = this.size;
    this.element.style.marginBottom = '8px';


    // End creating line
}
