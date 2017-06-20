(function () {
    document.getElementById('show').style.display = 'none';
})();
function show() {
    var x = document.getElementById('show');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}