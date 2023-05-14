import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(function () {
    $('#tablaFiltrable').DataTable({
        aoColumnDefs: [
            {"aTargets": [0], "bSortable": true},
            {"aTargets": [2], "asSorting": ["asc"], "bSortable": true},
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    });
});
