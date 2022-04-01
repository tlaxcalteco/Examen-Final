<style >
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-size: 62.5%;

}
body{
    background: #d3d3d3;
}
.row{
    height: max-content;
}
.container{
    display: grid;
    place-items: center;
}
#header{
    margin-top: 20%;
    font-size: 7rem;
    color: #023e8a;
    z-index: 1;
}
#instruction{
    margin-top: 20%;
    font-size: 3rem;
    font-weight: bold;
}
#box{
    display: grid;
}
input[type=text]{
    height: 2.8rem;
    margin-top: 4%;
    font-size: 2rem;
}
button{
    height: 2.8rem;
    border-radius: 2rem;
    background: #32cd32;
    background: linear-gradient(342deg, rgba(242,79,241,1) 0%, rgba(0,237,255,1) 70%);

}
button:hover{
    transform: scale(1.1);
    transition-duration: 0.5s;
    transition-timing-function: linear;
}
button p{
    font-size: 2rem;
}
#output{
    display: none;
    font-size: 2rem;
    z-index: 1;
}
</style >
<body>
    <div class="container">
        <div class="row">
            <div id="header">
                <h1>IDENTIFICAR EDAD</h1>
            </div>
            <div id="instruction">
                <p> INGRESE SU NOMRE</p>
            </div>
            <div id="box">
                <input type="text"  id="nameInput"><br><br>
                <button id="btn"> <p>GENERAR</p> </button>
            </div><br>
            <div id="output">

            </div>
            <br><br>
        </div>
    </div>
    <script>
        var output = document.getElementById('output')
document.getElementById('btn').addEventListener('click',predictName);
let name = document.getElementById('nameInput');
document.getElementById('nameInput').addEventListener('change',checkName)
function predictName(){
         let name = nameInput.value;

         fetch('https://api.agify.io?name='+name,{ method:'GET'})
         .then(function(response){return response.json();})
         .then(data => {
             if (name != '') {
                output.innerHTML = "I guess &#129300 your age is " + data.age;
                output.style.display = 'block';
                 console.log(data.age);
             }else{
                output.style.display = 'none'; 
             }


         })
         .catch(err => console.log(err));
     }

 function checkName(){
     let name = nameInput.value;
     if (name == '') {
        output.style.display = 'none'; 
     }
}
    </script>

</body>
</html>