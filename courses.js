function search(){
    let isSearch = document.getElementById('isSearch').value.toUpperCase();
    let course = document.querySelectorAll('.course');
    let htag = document.getElementsByTagName('h3');

    for(let i = 0; i < htag.length; i++){
        let a = course[i].getElementsByTagName('h3')[0];

        let value = a.innerHTML || a.innerText || a.textContent;

        if(value.toUpperCase().indexOf(isSearch) > -1){
            course[i].style.display = "";
        }
        else{
            course[i].style.display = "none";   
        }
    }
}