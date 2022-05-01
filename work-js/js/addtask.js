"use strict"
let tasks =[];
let currentDate = new Date();

let pText = document.querySelector(".successtask");

let m=0;
let userName = document.querySelector("button");
userName.addEventListener('click', function() {
    // event.preventDefault();
    m = m+1;
    if (m<=3) {
    let inputUser1 = document.createElement("input");
    inputUser1.placeholder="Введите имя участника";
    inputUser1.name=`user`;
    let labelUser1 = document.createElement("button");
    labelUser1.innerText="X";
    labelUser1.className="closeUser";
    this.after(inputUser1,labelUser1);
    } 
    if (m>0) {
        let buttonsDelete = document.querySelectorAll(".closeUser")
        for (let buttonDelete of buttonsDelete) {
            buttonDelete.addEventListener('click', function(event) {
                if (buttonDelete.previousSibling) buttonDelete.previousSibling.remove();
                // console.log(buttonDelete.previousSibling);
                event.target.remove();
                m = m - 1;
            })
        }
    }
});

const registrationForm = document.forms[0];
function setSuccess (elem) {
    elem.nextElementSibling.innerText = `Поле заполнено верно`;
    elem.nextElementSibling.className = 'message success active';
}
function setError (elem, key) {
    let messages = {
        valueMissing: "Поле должно быть заполнено",
        tooShort: `Минимальное количество символов ${elem.minLength}`,
        tooLong: `Максимальное количество символов ${elem.maxLength}`,
        rangeUnderFlow: `Дата не может быть в прошлом`
    }
    elem.nextElementSibling.innerText = messages[key];
    elem.nextElementSibling.className = 'message error active';
}
registrationForm.task.addEventListener('input', function() {
    if (this.validity.valueMissing) setError(this, 'valueMissing');
    else if (this.validity.tooShort) setError(this, 'tooShort');
    else if (this.validity.tooLong) setError(this, 'tooLong');
    else setSuccess(this);
});
registrationForm.elements.date.addEventListener('input', function() {
    let formDate = new Date(this.value);
    console.log(formDate.getTime());
    if (this.validity.valueMissing) setError(this, 'valueMissing');
    else if (currentDate.getTime()>=formDate.getTime()) setError(this, 'rangeUnderFlow');
    else setSuccess(this);
    this.validity.valid
});

document.forms[0].addEventListener('submit', setTask);
function setTask (event) {
    event.preventDefault();
    let task = {
        title: this.elements.task.value,
        description: this.elements.texttask.value,
        date: this.elements.date.value,
        users: []
    };
    if (m>0) {
        let arrUsers = this.elements.user;
        // console.log(arrUsers);
        if (m===1) {
            task.users.push(arrUsers.value);
        } else {
            for (let user of arrUsers) {
            task.users.push(user.value);
            }
        }
    }
    tasks.push(task);
    pText.style.transition = "visibility 5s linear";
    pText.style.visibility  = "visible";
    setTimeout(()=>pText.style.visibility  = "hidden", 3000);
    console.log(tasks);
    localStorage.setItem("taskStorage", JSON.stringify(tasks));
    this.reset();
}

