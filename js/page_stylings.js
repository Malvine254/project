$(document).ready(function() {

    /*
=============================================================================================================================================
This marks the start of paging
=============================================================================================================================================
*/    

    var itemsPerPage = 3;
    var currentPage = 1;

    function showPage(page) {
        $('.card-item').hide();
        $('.card-item').each(function(n) {
            if (n >= (page - 1) * itemsPerPage && n < page * itemsPerPage)
                $(this).show();
        });
    }

    function createPagination(totalPages) {
        $('#pagination li').not('#prev-page, #next-page').remove();
        for (var i = 1; i <= totalPages; i++) {
            $('<li class="page-item"><a class="page-link" href="#">' + i + '</a></li>').insertBefore('#next-page').on('click', function(e) {
                e.preventDefault();
                currentPage = parseInt($(this).text());
                showPage(currentPage);
                updatePagination();
            });
        }
    }

    function updatePagination() {
        var totalPages = Math.ceil($('.card-item').length / itemsPerPage);

        $('#pagination li').removeClass('active');
        $('#pagination li').eq(currentPage).addClass('active');

        if (currentPage === 1) {
            $('#prev-page').addClass('disabled');
        } else {
            $('#prev-page').removeClass('disabled');
        }

        if (currentPage === totalPages) {
            $('#next-page').addClass('disabled');
        } else {
            $('#next-page').removeClass('disabled');
        }
    }

    var totalPages = Math.ceil($('.card-item').length / itemsPerPage);
    createPagination(totalPages);
    showPage(currentPage);
    updatePagination();

    $('#next-page a').on('click', function(e) {
        e.preventDefault();
        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
            updatePagination();
        }
    });

    $('#prev-page a').on('click', function(e) {
        e.preventDefault();
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
            updatePagination();
        }
    });
/*
=============================================================================================================================================
This marks the end of paging
=============================================================================================================================================
*/    






});