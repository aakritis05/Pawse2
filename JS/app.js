function search() {
    let input = document.querySelector("#searchBar");
    window.location.replace('./searchresult.php?search=' + input.value);
}

// let call = document.querySelector(".arrow");
// call.addEventListener('click', function () {
//     call.src = "./Images/down-arrow.png";
// })

function showMap(location){
    var map=document.querySelector(".searchRight");
    alert("location");
}

console.log("Girrafe");
