let [card_curr_img, card_new_img ] = $.makeArray($("#card_curr_img, #card_new_img"))
let [card_curr_header, card_new_header ] = $.makeArray($("#card_curr_header, #card_new_header"))
let [card_curr_description, card_new_description ] = $.makeArray($("#card_curr_description, #card_new_description"))
let toggle_img = card_new_img
let toggle_header = card_new_header
let toggle_description = card_new_description

// setInterval(() => {

//         $.ajax("/get_news/get_random_news.php", {
//             headers: {
//                 Accept: "application/json"
//             },
//             dataType: "json"
//         })
//         .then( post => {

//             toggle_img.src = `/db/add_post/images/${post.img_name}`
//             toggle_header.textContent = post.title
//             toggle_description.textContent = post.description

//             $("#card_curr_img, #card_new_img").toggleClass("toggleOpacity")
//             $("#card_curr_header, #card_new_header").toggleClass("zeroOpacity")
//             $("#card_curr_description, #card_new_description").toggleClass("zeroOpacity")

//             if(toggle_img === card_new_img) {
//                 toggle_img = card_curr_img
//             } else {
//                 toggle_img = card_new_img
//             }


//             if(toggle_header === card_new_header) {
//                 toggle_header = card_curr_header
//             } else {
//                 toggle_header = card_new_header
//             }

//             if(toggle_description === card_new_description) {
//                 toggle_description = card_curr_description
//             } else {
//                 toggle_description = card_new_description
//             }

        
//         })
    
// }, 5000)

$.ajax("/get_news/get_random_news.php", {
    headers: {
        Accept: "application/json",
        credentials: false
    },
    dataType: "json"
}).then( post => {console.log(post)})

// let xml  = new XMLHttpRequest()
// xml.open("POST", "")

