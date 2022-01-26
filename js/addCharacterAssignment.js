const characterbttns = document.getElementsByClassName("character_bttn")
const alreadyAdded = document.getElementById("alreadyAdded");
const notSelected = document.getElementById("notSelected");
const toUpload = [];
const alreadySelected = [];
const remaining_characters = document.getElementById("remaining_characters");
for (let i = 0; i < characterbttns.length; i++) {
    const element = characterbttns[i];
    element.addEventListener("click",(element)=>{
        alreadySelected.push(element.target.name);
        toUpload.push(element.target.id)
        alreadyAdded.innerHTML = alreadySelected;
        const character = document.getElementById(element.target.id)
        character.classList.add("removeFromDisplay");
        remaining_characters.innerHTML = 8 - alreadySelected.length

        if(remaining_characters.innerHTML == 0){
            notSelected.classList.add("removeFromDisplay");
            console.log(alreadySelected)
            console.log(toUpload);
        }
    });
    
}