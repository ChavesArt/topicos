document.addEventListener('DOMContentLoaded', function() {
    // Inicializa a sidenav
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {
        edge: 'left'});

    // Configura a largura da sidenav
    var sidenav = document.querySelector('.sidenav');
    sidenav.style.width = '250px'; // Ajuste a largura conforme necessário
});