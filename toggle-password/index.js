let icon = document.getElementById('icon')
let input = document.querySelector('input')

icon.addEventListener('click', () => {

    if(icon.getAttribute("class") == "bi-eye-slash-fill"){
        icon.setAttribute("class", "bi-eye")
        input.setAttribute("type", "text")    
    }
    else{
        icon.setAttribute("class", "bi-eye-slash-fill")
        input.setAttribute("type", "password")    
    } 
})
