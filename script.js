$(document).ready(function () {
    $("th:first").hide();
    $("tr").each(function () {
        $("td:first-child").hide();
    });
});