<script>
// Mendapatkan elemen HTML yang ingin diubah
var bestsellerContainer = document.querySelector(".category__container");

// Melakukan permintaan fetch ke API
fetch("http://localhost:3000/public/bestseller")
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        var bestsellerData = data.data;

        // Membuat elemen HTML untuk setiap data yang diterima
        bestsellerData.forEach(function(bestseller) {
            var bestsellerContent = document.createElement("div");
            bestsellerContent.classList.add("category__data");

            var imgElement = document.createElement("img");
            imgElement.src = "../Toko-Buah-Admin/pages/uploads/bestseller/" + bestseller.Gambar;
            imgElement.className = "category__img";
            imgElement.alt = "";

            var canvas = document.createElement("canvas");
            var ctx = canvas.getContext("2d");
            canvas.width = 500;
            canvas.height = 500;
            ctx.drawImage(imgElement, 0, 0, canvas.width, canvas.height);

            var resizedImgSrc = canvas
                .toDataURL(); // Mengambil data gambar dalam format baru (dalam kasus ini, PNG)


            var titleElement = document.createElement("h3");
            titleElement.classList.add("category__title");
            titleElement.innerHTML = bestseller.Nama;

            var subtitleElement = document.createElement("p");
            subtitleElement.classList.add("category__description", "text-light");
            subtitleElement.innerHTML = bestseller.Deskripsi;



            bestsellerContent.appendChild(imgElement);
            bestsellerContent.appendChild(titleElement);
            bestsellerContent.appendChild(subtitleElement);

            bestsellerContainer.appendChild(bestsellerContent);
        });
    })
    .catch(function(error) {
        console.log(error);
    });
</script>