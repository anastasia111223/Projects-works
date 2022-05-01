"use strict"
let tasksFromStorage = localStorage.getItem("taskStorage");
tasksFromStorage = JSON.parse(tasksFromStorage);
let taskDelete = [];

console.log(tasksFromStorage);
let spisokTask = document.querySelector("h2");
if (tasksFromStorage==null) {
    let notask = document.createElement("span");
    notask.innerText="Нет задач";
    spisokTask.after(notask);
} else {
if (tasksFromStorage.length===0) {
    let notask = document.createElement("span");
    notask.innerText="Нет задач";
    spisokTask.after(notask);
}
if (tasksFromStorage.length>0) {
    let alltasks = document.createElement("div");
    for (let m=0; m<tasksFromStorage.length; m++) {
        let userTaskView = document.createElement("div");
        userTaskView.className="taskview";
        let taskName = document.createElement("h3");
        taskName.className="taskname";
        taskName.innerText = tasksFromStorage[m].title;
        taskName.style.textTransform="uppercase";
        let taskAbout = document.createElement("p");
        taskAbout.innerText=tasksFromStorage[m].description;
        let timeTo = document.createElement("p");
        timeTo.innerText = `Выполнить до ${tasksFromStorage[m].date}`;
        let userview = document.createElement("p");
        userview.innerText = `Участники: ${tasksFromStorage[m].users}`;
        userTaskView.append(taskName,taskAbout,timeTo,userview);
        alltasks.append(userTaskView);
        spisokTask.after(alltasks);
        userTaskView.addEventListener('click', function() {
            userTaskView.classList.toggle("choice");
        })
    };
    let deleteTasks = document.createElement("button");
    deleteTasks.innerText = "Удалить задания";
    alltasks.after(deleteTasks);
    let taskForDelete = document.querySelectorAll(".taskname");
    console.log(taskForDelete);
    deleteTasks.addEventListener('click', function() {
        localStorage.removeItem("taskStorage");
        for (let taskD  of taskForDelete) {
            for (let m=tasksFromStorage.length-1; m>=0; m--) {
                if (tasksFromStorage[m].title.toLowerCase()===taskD.innerText.toLowerCase() && taskD.closest('.choice')) {                 
                    tasksFromStorage.splice(m,1);
                    alltasks.removeChild(taskD.closest('.choice'));
                    }
                }
            }
        localStorage.setItem("taskStorage", JSON.stringify(tasksFromStorage));    
    });
}
}
