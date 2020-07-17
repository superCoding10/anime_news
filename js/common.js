let slide_menu_btn = document.querySelector(".slide_menu_btn");
let slide_menu = document.querySelector(".slide_menu");
if(slide_menu_btn) {
    slide_menu_btn.addEventListener('click', function(e) {
        slide_menu.classList.toggle("left_0")
    })
}


document.addEventListener("click", function(e) {
    if(!e.target.classList.contains("slide_menu") && !e.target.classList.contains("slide_menu_ul") && !e.target.classList.contains("slide_menu_ul_li") && !e.target.classList.contains("slide_menu_btn"))
    slide_menu.classList.remove("left_0")
})