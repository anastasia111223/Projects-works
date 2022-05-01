import '../css/main.css';

document.forms.search.addEventListener('submit', function(e){
    e.preventDefault();
    let form = e.target;
    fetch('/search', {
        method:'post',
        body: new FormData(this)
    }).then(response => response.json())
        .then(answer => {
            let cakes = answer; 
            let search =  document.createElement("div");
            form.after(search);   
            cakes.forEach(cake => {
                let info = document.createElement("div");
                info.className = "cake";
                info.innerHTML = `
                <h2>${cake.name_cake}</h2>
                <p>Стоимость:${cake.price}</p>
                `; 
                search.after(info);
            }); 
            })
            // else console.log('');
            // если бы мы получали массив с данными, можно было бы указать причину почему не добавлен
})