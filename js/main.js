// JavaScript Document

//preloader
rotate = 1;
function hide_preloader() { //DOM
rotate = 0;
$("#preloader").fadeOut(1000);
}



// Window Load
$(window).load(function() {
	$("#prjct_bx_w,#nav_box,#bnr").css({opacity:0});

	$("#nav_box").delay(200).animate({"right":"70px",opacity:1},500);
	$("#bnr").delay(350).animate({"right":"111px",opacity:1},500);
	$("#prjct_bx_w").delay(550).animate({"right":"264px",opacity:1},500);
	$("#projects_page").delay(250).animate({"right":"5%",opacity:1},500);
	$("#about_page").delay(250).animate({"right":"5%",opacity:1},500);
	$("#news_page").delay(250).animate({"right":"8%",opacity:1},500);
    
});




// Document Ready
$(document).ready(function() {
    
});
