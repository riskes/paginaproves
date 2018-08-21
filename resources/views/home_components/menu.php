<style>
body{
    padding: 0px;
    margin: 0px;
}
.content{
    display: flex;
    position: fixed;
    width: 100vw;
    height: 10vh;
    margin-top: 5px;
    justify-content:center;
}
.flexnavmenu{
    display: flex;
    position: fixed;
    width: 80vw;
    height: 10vh;
    justify-content:center;
    border: 1px solid black; 
    border-radius: 25px;    
    background-color: #990000;
}
.botomenu{
    height:100%;
    width:20%;
    font-size:30px;  
    border-left: 1px solid black;  
    border-right: 1px solid black;
    color: white; 
    background-color: #990000;
}
.botomenu:hover{
    height:100%;
    width:20%;
    font-size:50px;  
    border-left: 1px solid black;  
    border-right: 1px solid black; 
    background-color: #b30000;
    cursor: pointer;
}
.centrat{
    display:flex;
    justify-content:center;
    text-align:center;
    flex-direction: column;
}

</style>
<div class='content'>
<div class='flexnavmenu'>

<a class='botomenu centrat' href="{{route('calendar')}}"><div >opció1</div></a>
<a></a><div class='botomenu centrat' href=''>opció2</div>
<a></a><div class='botomenu centrat' href=''>opció3</div>
<a></a><div class='botomenu centrat' href=''>opció4</div>

</div>
</div>