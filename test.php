<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Pagination Example</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Card Pagination Example</h2>
    <div id="card-container" class="row">
        <?php
        $numbering = 1;
        $result = 0;
        while ($result < 10) {
            echo '<div class="col-md-4 mb-3 card-item">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Name ' . $numbering . '</h5>';
            echo '<p class="card-text">Email ' . $numbering . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            $numbering++;
            $result++;
        }
        ?>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center" id="pagination">
            <li class="page-item disabled" id="prev-page">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <!-- Page numbers will be inserted here by JavaScript -->
            <li class="page-item" id="next-page">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
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
    });
</script>

</body>
</html>
