$(document).ready(function() {
    $("#userTable").DataTable({
        serverSide: true,
        processing: true,
        ajax: "/getUser",
        columns: [
            { data: "id", name: "id", visible: false },
            { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
            { data: "fullName", name: "fullName" },
            { data: "userName", name: "userName" },
            { data: "email", name: "email" },
            { data: "role", name: "role" },
        ],
        order: [[0, "desc"]],
        lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"],
        ],
    });
});
