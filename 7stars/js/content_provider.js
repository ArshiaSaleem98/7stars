let products = [];
let menButton = document.getElementById('men-button');
let womenButton = document.getElementById('women-button');


let url = new URLSearchParams(window.location.search);
let gender = url.get('gender');

function test() {
    loadProductsDB().then(data => console.log(data));
}

async function loadProductsDB() {
    let formData = new FormData();
    if(gender) {
        formData.append('gender', gender);
    }

    let response = await fetch("controllers/main_page.php",
        {method: 'post',
            body: formData});
    let jsonData = await response.json();
    return jsonData;
}

