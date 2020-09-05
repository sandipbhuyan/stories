const axios = require('axios');
function setCurrentView() {
    let id = document.getElementById("storyId").value;
    axios.get('/api/currentViews/' + id)
        .then(data => {
            document.getElementById("currentViews").innerText = data.data;
        }).catch(err => console.log(err))
}

setCurrentView();

const interval = setInterval(setCurrentView, 5000);


window.onbeforeunload = function(){
    let id = document.getElementById("storyId").value;
    axios.get('/api/decreaseCurrentViews/' + id)
        .then(data => {
            clearImmediate(interval);
        }).catch(err => console.log(err))
}


function increaseView() {
    let id = document.getElementById("storyId").value;
    axios.get('/api/increaseCurrentViews/' + id)
        .then(data => {
            console.log("increased")
        }).catch(err => console.log(err))
}

increaseView();
