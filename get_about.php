<script>
// Mendapatkan elemen-elemen HTML yang ingin diubah
var aboutTitleElement = document.querySelector(".about__title");
var aboutDescriptionElement = document.querySelector(".about__description");

// Melakukan permintaan fetch ke API
fetch("http://localhost:3000/public/about")
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        var aboutData = data.data[0];
        var title = aboutData.Judul;
        var description = aboutData.Deskripsi;

        // Memperbarui konten elemen HTML dengan data yang diterima
        aboutTitleElement.innerHTML = title;
        aboutDescriptionElement.innerHTML = description;
    })
    .catch(function(error) {
        console.log(error);
    });
</script>