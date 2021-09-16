//HTML

{/* <div>
X <input type =texte id='imp1'/>
<br>
<br>
Y <input type =texte id='imp2'/>
</div> */}

//JS

function WhereMouse(event) {

    let Mouse_X = event.pageX;
    let Mouse_Y = event.pageY;

    document.getElementById('imp1').value = Mouse_X
    document.getElementById('imp2').value = Mouse_Y
}

document.addEventListener('click', WhereMouse, false);
