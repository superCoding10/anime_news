let first = "first first first first first"
let second = "second second second second second"
let third = "third third third third"
let forth = "forth forth forth forth"
let arr = [first, second, third, forth]
let index = 0
let x = true

setInterval(() => {

    let ajax = new XMLHttpRequest()
    ajax.open("POST", "/get_news/get_random_news.php")
    ajax.setRequestHeader("Content-type", "aplication/x-www-form-urlencoded")
    ajax.onload = function() {
        $rand_news = ajax.response.split("|");
        card_new_header.textContent = $rand_news[0]
        card_curr_header.style.opacity = 0
        card_new_header.style.opacity = 1

        card_new_img.src = "/model/add_post/images/" + $rand_news[2]
        card_curr_img.style.opacity = 0
        card_new_img.style.opacity = 1

        if(x) {
            card_new_header.id = "card_curr_header"
            card_curr_header.id = "card_new_header"

            card_new_img.id = "card_curr_img"
            card_curr_img.id = "card_new_img"

        } else {


            card_curr_header.id = "card_new_header"
            card_new_header.id = "card_curr_header"

            card_curr_img.id = "card_new_img"
            card_new_img.id = "card_curr_img"
        }
        x = !x
        
        }
        ajax.send()



    // img.style.opacity = "1"
    
    
}, 3000)


