function addNewWEField(){
  let newNode = document.createElement("textarea")
  newNode.classList.add("form-control");
  newNode.classList.add("weField");
  newNode.classList.add("mt-2");
  newNode.setAttribute("rows", 3);
  newNode.classList.add("placeholder", "Enter here");

  let weOb = document.getElementById("we");
  let weAddButtonOb = document.getElementById("weAddButton");

  weOb.insertBefore(newNode, weAddButtonOb);

}

function addNewAQField(){
  let newNode = document.createElement("textarea")
  newNode.classList.add("form-control");
  newNode.classList.add("eqField");
  newNode.classList.add("mt-2");
  newNode.setAttribute("rows", 3);
  newNode.classList.add("placeholder", "Enter here");

  let weOb = document.getElementById("aq");
  let weAddButtonOb = document.getElementById("aqAddbutton");

  aqOb.insertBefore(newNode, aqAddButtonOb);
}


function generateResume() {
  //console.log("generating CV");
 let nameField = document.getElementById("nameField").value;

 let nameT1 = document.getElementById("nameT1");

 nameT1.innerHTML = nameField;



document.getElementById("nameT2").innerHTML = nameField;
document.getElementById("addressT").innerHTML = document.getElementById("addressField").value;
document.getElementById("contactT").innerHTML = document.getElementById("contactField").value;
document.getElementById("mailT").innerHTML = document.getElementById("mailField").value;
document.getElementById("nameT2").innerHTML = document.getElementById("nameField").value;


document.getElementById("objectiveT").innerHTML = document.getElementById("mailField").value;


let wes= document.getElementByClassName("weField");
let str= " ";
for (let e of wes){
  str=str + <li> ${e.value} </li>;
}
document.getElementById("weT").innerHTML = str;

let aqs= document.getElementsByClassName("eqField");
let str1= " ";
for (let e of aqs){
  str=str + <li> ${e.value} </li>;
}
document.getElementById("aqT").innerHTML = str1;








}
