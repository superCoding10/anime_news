// const TITLE = 0;
// const DESCRIPTION = 1
// const IMG_NAME = 2

// let first = "first first first first first"
// let second = "second second second second second"
// let third = "third third third third"
// let forth = "forth forth forth forth"
// let arr = [first, second, third, forth]
// let index = 0
// let x = true
// let hystory_news = []
// let current_news = -1;
// function get_another_news() {
//     let ajax = new XMLHttpRequest()
//     ajax.open("POST", "/get_news/get_random_news.php")
//     ajax.setRequestHeader("Content-type", "aplication/x-www-form-urlencoded")
//     ajax.onload = function() {
//         let rand_news = ajax.response.split("|");
//         hystory_news.push(rand_news)
//         current_news++
//         // console.log(current_news)
//         // console.log(hystory_news)
//         changeHtmlInsideTheCardNews(rand_news)
//         x = !x
        
//         }
//         ajax.send()
// }

// function changeHtmlInsideTheCardNews(rand_news) {
//     card_new_header.textContent = rand_news[TITLE]
//     card_curr_header.style.opacity = 0
//     card_new_header.style.opacity = 1

//     card_new_img.src = "/model/add_post/images/" + rand_news[IMG_NAME]
//     card_curr_img.style.opacity = 0
//     card_new_img.style.opacity = 1

//     if(x) {
//         card_new_header.id = "card_curr_header"
//         card_curr_header.id = "card_new_header"

//         card_new_img.id = "card_curr_img"
//         card_curr_img.id = "card_new_img"

//     } else {


//         card_curr_header.id = "card_new_header"
//         card_new_header.id = "card_curr_header"

//         card_curr_img.id = "card_new_img"
//         card_new_img.id = "card_curr_img"
//     }
// }

// let intrv = setInterval(() => {
// get_another_news()
// }, 5000)


// let random_news_card = document.querySelector(".random_news_card")
// let prev_news_arrow = document.querySelector(".prev_news_arrow")
// let next_news_arrow = document.querySelector(".next_news_arrow")

// random_news_card.addEventListener("mouseenter", function(e) {
//     prev_news_arrow.classList.add("display_block")
//     next_news_arrow.classList.add("display_block")
// })

// random_news_card.addEventListener("mouseleave", function(e) {
//     prev_news_arrow.classList.remove("display_block")
//     next_news_arrow.classList.remove("display_block")
// })

// next_news_arrow.addEventListener("click", function(e) {
//     clearInterval(intrv)
//     get_another_news()
// })

// prev_news_arrow.addEventListener("click", function(e) {
//     clearInterval(intrv)
//     if(current_news !== -1)
//     changeHtmlInsideTheCardNews(hystory_news[current_news])
//     --current_news
// })



$.ajax({
    method: "POST",
    url: "/get_news/get_random_news.php",
    success: function(data){
        // console.log(data)
        // console.log(JSON.parse("[" + data + "]"))
    },
    accepts: {
        json: "aplication/json"
    }
})
