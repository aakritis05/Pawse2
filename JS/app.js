function search() {
    let input = document.querySelector("#searchBar");
    window.location.replace('./searchresult.php?search=' + input.value);
}
function colapse () {
    let call = document.quesrySelector(".his");
    let i ;
    for(i=0;i<call.length;i++){
        call[i].addEventListner("click", function(){
            this.classList.toggle("active");
            let content = this.nextElementSibling;
            if(content.style.display=="flex"){
                content.style.display= "none";
            } else{
                content.style.display= "flex"
            }
        })
    }
}