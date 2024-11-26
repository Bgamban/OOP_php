$(".search-button").on("click", function () {
  $.ajax({
    url: "postman" + $(".input-keyword").val(),
    success: (results) => {
      const movies = results.Search;
      let cards = "";
      movies.forEach((m) => {
        cards += showCards(m);
      });
      $(".movie-container").html(cards);
      // ketika tombol detail diklik
      $(".modal-detail-button").on("click", function () {
        $.ajax({
          url: "postman" + $(this).data("imdbid"),
          success: (m) => {
            const movieDetail = showMovieDetail(m);
            $(".modal-body").html(movieDetail);
          },
          error: (e) => {
            console.log(e.responseText);
          },
        });
      });
    },
    error: () => {
      // Jika Error
      console.log(e.responseText);
    },
  });
});

function showCards(m) {
  return `<div class="col-md-4 my-5">
            <div class="card">
              <img src="${m.Poster}" alt="" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title">${m.Title}</h5>
                <h6 class="card-subtitle mb-2 text-muted">${m.Year}</h6>
                <a href="" class="btn btn-primary modal-detail-button" data-toggle="modal" data-target="#movieDetailModal" data-imdbid="${m.imdbID}">Show Details</a>
              </div>
            </div>
          </div>`;
}
function showMovieDetail(m) {
  return `<div class="container-fluid"> <!-- fluid agar responsive -->
    <div class="row"> <!-- row adalah baris -->
        <div class="col-md-3">
            <img src="${m.Poster}" class="img-fluid" alt="">
        </div>
        <div class="col-md">
            <ul class="list-group">
                <li class="list-group-item"><h4>${m.Title}(${m.Year})</h4></li>
                <li class="list-group-item">Director : <strong>${m.Director}</strong></li>
                <li class="list-group-item"><strong>${m.Actors}</strong></li>
                <li class="list-group-item"><strong>${m.Writer}</strong></li>
                <li class="list-group-item"><strong>${m.Plot}</strong></li>
            </ul>
        </div>
    </div>
</div>`;
}
