(()=>{"use strict";document.forms.search.addEventListener("submit",(function(e){e.preventDefault();let t=e.target;fetch("/search",{method:"post",body:new FormData(this)}).then((e=>e.json())).then((e=>{let n=e,a=document.createElement("div");t.after(a),n.forEach((e=>{let t=document.createElement("div");t.className="cake",t.innerHTML=`\n                <h2>${e.name_cake}</h2>\n                <p>Стоимость:${e.price}</p>\n                `,a.after(t)}))}))}))})();