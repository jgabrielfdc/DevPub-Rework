$(document).ready(function() {
    function TxtType(element, texts, period) {
        this.texts = texts;
        this.el = element;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = "";
        this.isDeleting = false;
        this.tick();
    }

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.texts.length;
        var fullTxt = this.texts[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        $(this.el).html('<span class="wrap">' + this.txt + '</span>');

        var that = this;
        var delta = 140 - Math.random() * 90;

        if (this.isDeleting) delta /= 2.1;

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    $(".typewrite").each(function() {
        var toRotate = $(this).attr("data-type");
        var period = $(this).attr("data-period");
        if (toRotate) {
            new TxtType(this, JSON.parse(toRotate), period);
        }
    });
});