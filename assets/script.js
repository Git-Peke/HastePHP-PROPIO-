
    object = document.getElementById('utility');

    function show(text,text2){
        object.className = '';
            object.innerHTML = `<b>${text}</b> <br> ${text2}`;
    }
    function ashow(){
        object.className = 'hidden';
    }

    var url = '/document'; var text = document.getElementById('textareas');

document.getElementById('save').addEventListener("click", ()=>{click()});
function click(){
console.log('sadsads');
var data = {'text': text.value};

fetch(url, {
  method: 'POST', // or 'PUT'
  body: JSON.stringify(data), // data can be `string` or {object}!
  headers:{
    'Content-Type': 'application/json'
  }
}).then(res => res.json())
.catch(error => console.error('Error:', error))
.then((response)=> {
    if(response.status == 'OK'){
        window.location.pathname = response.message;
    }
    else{
        alert('error');
    }
});

}
/*
var data = {'text': text.value};

fetch(url, {
  method: 'POST', // or 'PUT'
  body: JSON.stringify(data), // data can be `string` or {object}!
  headers:{
    'Content-Type': 'application/json'
  }
}).then(res => res.json())
.catch(error => console.error('Error:', error))
.then((response)=> {
    if(response.status == 'OK'){
        window.location.pathname = response.message;
    }
    else{
        alert('error');
    }
});


*/