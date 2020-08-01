// refferences

let file = document.querySelector("#file");
let file_label = document.querySelector("#file_label")
let cancel_img = document.querySelector(".cancel_img")
let preview = document.querySelector("form > div:nth-child(2)")
let select_cat_manga = document.querySelector(".select_cat_manga")
let select_cat_anime = document.querySelector(".select_cat_anime")
let select_cat_exclusive = document.querySelector(".select_cat_exclusive")
let cat = document.querySelector("#cat")
let form = document.querySelector("form")
// refferences

// functions

function isValidType(file) {
    let types = [ "jpeg", "png" ]
    for(let i = 0; i < types.length; i++) {
        if(new RegExp(`(${types[i]})$`).test(file.type)) {
            return true
        }
    }
    return false
}

// functions



file.addEventListener("change", function(e) {
    let file = this.files[0]
    if(isValidType(file)) {
        let img = document.createElement("img")
        img.src = URL.createObjectURL(file)
        img.classList.add("selected_img")
       
        if(preview.lastElementChild.tagName == "IMG") {
            preview.lastElementChild.remove()
        }
        preview.appendChild(img)

        file_label.textContent = "Change image"
        cancel_img.style.display = "inline";


    }
})

cancel_img.addEventListener("click", function(e) {
        preview.lastElementChild.remove()
        file_label.textContent = "Add image"
        this.style.display = "none"
        file.value = "";

})

select_cat_anime.addEventListener("click", function(e) {
    this.style.color = "white";
    select_cat_manga.style.color = "black"
    select_cat_exclusive.style.color = "black"
    cat.value = "anime";
})


select_cat_manga.addEventListener("click", function(e) {
    this.style.color = "white";
    select_cat_anime.style.color = "black"
    select_cat_exclusive.style.color = "black"
    cat.value = "manga";
})

select_cat_exclusive.addEventListener("click", function(e) {
    this.style.color = "white";
    select_cat_anime.style.color = "black"
    select_cat_manga.style.color = "black"
    cat.value = "exclusive";
})




preview.querySelector(".title > input").addEventListener("input", function(e) {
    if(this.value.length === 90) alert("The title length can not be more than 90 characters")
})

form.addEventListener("submit", function(e) {
    e.preventDefault()
    if(cat.value.length === 0) {
        alert("Choose category")
    } else {
        this.submit()
    }

})