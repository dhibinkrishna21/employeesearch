@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #e5e5e5;">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <input type="text" id="searchInput" class="form-control" placeholder="Search name/designation/department">
        </div>
    </div>
    <div class="row">
        <div class="row col-md-6 offset-md-3 mt-3" id="cardContainer"></div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Function to load tiles/cards based on search query
        function loadTiles(searchQuery) {
            $.ajax({
                url: "{{ route('search') }}",
                type: "GET",
                data: {
                    query: searchQuery
                },
                success: function(response) {
                    populateCards(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }

        // Function to populate card elements with data
        function populateCards(data) {
            var cardContainer = $('#cardContainer');
            cardContainer.empty(); // Clear existing cards

            // Iterate over data and create card elements
            data.forEach(function(item) {
                var cardHtml = `
                    <div class="col">
                        <div class="card mb-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">${item.name}</h5>
                                <p class="card-text">${item.designation_name}</p>
                                <p class="card-text">${item.department_name}</p>
                            </div>
                        </div>
                    </div>
                `;
                cardContainer.append(cardHtml);
            });
        }

        // Initial load of tiles/cards when the page loads
        loadTiles('');

        // On input event for search input
        var typingTimer;
        var doneTypingInterval = 500; // milliseconds
        $('#searchInput').on('input', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(function() {
                var searchQuery = $('#searchInput').val();
                loadTiles(searchQuery);
            }, doneTypingInterval);
        });

        // On keyup event for search input (to immediately execute search on each key press)
        $('#searchInput').on('keyup', function() {
            clearTimeout(typingTimer);
            var searchQuery = $('#searchInput').val();
            loadTiles(searchQuery);
        });
    });
</script>
@endsection