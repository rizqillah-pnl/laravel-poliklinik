$(document).ready(function() {
    $('#myTable').DataTable( {
        // "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        "scrollX": true,
        "language": {
            "search": "",
            "searchPlaceholder": "Search...",
            "decimal": ",",
            "thousands": "."
        },
    } );

    $('#tableBtnPDF').DataTable( {
        // "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        "scrollX": true,
        "language": {
            "search": "",
            "searchPlaceholder": "Search...",
            "decimal": ",",
            "thousands": "."
        },
        dom: "Bfrtip",
        buttons: [
            {
                extend: "pdfHtml5",
                download: "open",
            },
        ]
    } );

    $(document).ready(function () {
        $('.dataTables_filter input[type="search"]').css( {
            "marginBottom": "10px"
        } );
    } );
} );
