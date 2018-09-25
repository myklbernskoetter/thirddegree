const $body = $('body');
var hexToHsl = require('hex-to-hsl');

function colorToHex(color) {
    if (color.substr(0, 1) === '#') {
        return color;
    }
    var digits = /(.*?)rgb\((\d+), (\d+), (\d+)\)/.exec(color);

    var red = parseInt(digits[2]);
    var green = parseInt(digits[3]);
    var blue = parseInt(digits[4]);

    var rgb = blue | (green << 8) | (red << 16);
    return digits[1] + '#' + rgb.toString(16).padStart(6, '0');
}

function colorSet() {
  let $pagePrimary = $('.hero-section').css('backgroundColor');
  $pagePrimary = colorToHex($pagePrimary);
  $pagePrimary = hexToHsl($pagePrimary);
  const secondary = "hsl("+($pagePrimary[0] + 120)+","+$pagePrimary[1]+"%,"+$pagePrimary[2]+"%)";
  const tertiary = "hsl("+($pagePrimary[0] - 120)+","+$pagePrimary[1]+"%,"+$pagePrimary[2]+"%)";
  let color = '#000';
  console.log($pagePrimary);
  if($pagePrimary[0] < 180 || $pagePrimary[1] == 100) {
    color = '#fff';
  }

  if($pagePrimary[2] == 100) {
    color = '#000';
  }
  $('.hero-section').css({
    "border-color": tertiary,
  });

  $('.hero-title').css({
    "background-color": secondary,
    "color": color,
  });

  $('.load-hidden').removeClass('load-hidden');
}

function openFaqItem(event) {
  const $target = $(event.target);
  const $faqItem = $target.closest('.faq-item');

  $faqItem.toggleClass('active');
}

function contentPosition() {
  const height = $('.nav-primary .nav').outerHeight();

  $('.main').css('padding-top', height);
}

export default {
  init() {
    // JavaScript to be fired on all pages
    $(document).on('ready', colorSet);
    $body.on('click', '.faq-button' , openFaqItem);
    $(document).on('ready', contentPosition);
    $(window).on('resize', contentPosition);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
