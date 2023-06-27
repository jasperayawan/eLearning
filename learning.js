
//-----------------------search courses---------------------//

function search(){
    let inputSearch = document.getElementById('inputSearch').value.toUpperCase();
    let course = document.querySelectorAll('.course');
    let h = document.getElementsByTagName('h3');

    for(let i = 0; i < h.length; i++){
    let a = course[i].getElementsByTagName('h3')[0];

    let value = a.innerHTML || a.innerText || a.textContent;

    if(value.toUpperCase().indexOf(inputSearch) > -1){
        course[i].style.display = "";
    }
    else{
        course[i].style.display = "none";
    }
    }
}
