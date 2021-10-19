

let lastScrollTop = 0;
// Detect the scroll.
window.addEventListener(
    "scroll",
    function () {
        let st = window.pageYOffset || document.documentElement.scrollTop;
        // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
        if (st > lastScrollTop) {
            // Downscroll code
            // console.log("\n\ngoing down V\n\n");
            document.querySelector(".header_nav").classList.add("active");
        } else {
            // Upscroll code
            // console.log("\n\ngoing up ^\n\n");
            document.querySelector(".header_nav").classList.remove("active");
        }
        lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
    },
    false
);

//Version Jquery
$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 1 ) {
            $('.header_nav').addClass('active');
        } else {
            $('.header_nav').removeClass('active');
        }
    });
});