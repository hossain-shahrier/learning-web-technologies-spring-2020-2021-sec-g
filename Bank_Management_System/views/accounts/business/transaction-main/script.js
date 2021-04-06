// function search(){
//     const data = document.getElementById('search').value;
//     const xhttp = new XMLHttpRequest();
//     xhttp.open('POST','result.php',true);
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

//     xhttp.onreadystatechange = function(){
//         if(this.readyState == 4 && this.status == 200){
//             document.getElementById('result').innerHTML = this.responseText;
//         }
//         else{
//             document.getElementById('result').innerHTML = "Error...";
//         }
//     }
//     xhttp.send('search_input=' + data);
// }