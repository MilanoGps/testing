$(document).ready(function() {
    $("#umkmTable").DataTable({
        serverSide: true,
        processing: true,
        ajax: "/getUmkm",
        columns: [
            { data: "id", name: "id", visible: false },
            { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
            { data: "umkm", name: "umkm" },
            { data: "description", name: "description" },
            { data: "address", name: "address" },
            { data: "email", name: "email" },
            { data: "telephone_number", name: "telephone_number" },
            { data: "category.name", name: "category.name" },
            { data: "actions", name: "actions", orderable: false, searchable: false },
        ],
        order: [[0, "desc"]],
        lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"],
        ],
    });
});
