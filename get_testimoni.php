<script>
fetch("http://localhost:3000/public/testimoni")
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        var testimoniData = data.data;

        var carouselInner = document.getElementById("carouselInner");

        // Membuat elemen carousel item untuk setiap testimoni
        testimoniData.forEach(function(testimoni, index) {
            var carouselItem = document.createElement("div");
            carouselItem.classList.add("carousel-item");
            if (index === 0) {
                carouselItem.classList.add("active");
            }

            // Membuat elemen paragraf untuk deskripsi testimoni
            var testimonialText = document.createElement("p");
            testimonialText.classList.add("text-light", "lead", "font-italic", "mx-4", "mx-md-5");
            testimonialText.textContent = testimoni.Deskripsi;

            // Membuat elemen gambar testimoni
            var testimonialImage = document.createElement("img");
            testimonialImage.classList.add("rounded-circle", "img-fluid", "shadow-1-strong");
            testimonialImage.alt = "Sample Image";
            testimonialImage.width = 150;
            testimonialImage.height = 150;
            testimonialImage.src = "../Toko-Buah-Admin/pages/uploads/testimoni/" + testimoni.Gambar;

            // Menambahkan margin pada elemen gambar
            testimonialImage.style.marginBottom = "10px"; // Ubah nilai margin sesuai kebutuhan

            // Membuat elemen paragraf untuk nama testimoni
            var testimonialName = document.createElement("p");
            testimonialName.classList.add("text-light", "mb-2");
            testimonialName.textContent = "- " + testimoni.Nama;

            // Menambahkan elemen deskripsi, gambar, dan nama ke dalam carousel item
            carouselItem.appendChild(testimonialText);
            carouselItem.appendChild(testimonialImage);
            carouselItem.appendChild(testimonialName);

            // Menambahkan carousel item ke dalam carousel inner
            carouselInner.appendChild(carouselItem);
        });
    })
    .catch(function(error) {
        console.log(error);
    });
</script>