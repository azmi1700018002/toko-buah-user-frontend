<script>
// Mendapatkan elemen-elemen HTML yang ingin diubah
var subtitleElement = document.querySelector(".home__subtitle");
var titleElement = document.querySelector(".home__title");
var descriptionElement = document.querySelector(".home__description");

// Melakukan permintaan fetch ke API
fetch("http://localhost:3000/public/home")
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        var homeData = data.data[0];
        var subtitle = homeData.Subtitle;
        var title = homeData.Title;
        var deskripsi = homeData.Deskripsi;

        // Memperbarui konten elemen HTML dengan data yang diterima
        subtitleElement.innerHTML = subtitle;
        titleElement.innerHTML = title;
        descriptionElement.innerHTML = deskripsi;
    })
    .catch(function(error) {
        console.log(error);
    });
</script>