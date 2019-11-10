let navHeight = 280;

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > navHeight || document.documentElement.scrollTop > navHeight) {
        document.getElementById("vip-navbar").style.padding = "12px 10px";
        document.getElementById("vip-navbar").style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
    } else {
        document.getElementById("vip-navbar").style.padding = "40px 10px";
        document.getElementById("vip-navbar").style.backgroundColor = 'rgba(0, 0, 0, 0.0)';
    }
}