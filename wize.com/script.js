

document.getElementById('registerLink').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('loginBox').style.display = 'none';
    document.getElementById('registerBox').style.display = 'block';
});

document.getElementById('loginLink').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('registerBox').style.display = 'none';
    document.getElementById('loginBox').style.display = 'block';   
});

