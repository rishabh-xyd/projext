document.addEventListener("DOMContentLoaded",requestCategoreies);

function requestCategoreies(){
    fetch("http://localhost:8081/user/backend/menu.php",{
        method:"GET",
        // mode:"no-cors"
    })
    .then((res)=>res.json())
    .then(data=>{
        console.log(data)
    })
    .catch(err=>console.log(err));


}