<script>
// Mendapatkan elemen HTML yang ingin diubah
var trickContainer = document.querySelector(".trick__container");

// Melakukan permintaan fetch ke API
fetch("http://localhost:3000/produk")
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        var produkData = data.data;

        // Membuat elemen HTML untuk setiap data yang diterima
        produkData.forEach(function(produk) {
            var trickContent = document.createElement("div");
            trickContent.classList.add("trick__content");

            var imgElement = document.createElement("img");
            imgElement.src = "../Toko-Buah-Admin/pages/uploads/" + produk.Gambar;
            imgElement.alt = "";

            var canvas = document.createElement("canvas");
            var ctx = canvas.getContext("2d");
            canvas.width = 500;
            canvas.height = 500;
            ctx.drawImage(imgElement, 0, 0, canvas.width, canvas.height);

            var resizedImgSrc = canvas
                .toDataURL(); // Mengambil data gambar dalam format baru (dalam kasus ini, PNG)


            var titleElement = document.createElement("h3");
            titleElement.classList.add("trick__title");
            titleElement.innerHTML = produk.Nama;

            var subtitleElement = document.createElement("span");
            subtitleElement.classList.add("trick__subtitle");
            subtitleElement.innerHTML = produk.Deskripsi;

            var priceElement = document.createElement("span");
            priceElement.classList.add("trick__price");
            priceElement.innerHTML = produk.Harga;

            var buttonElement = document.createElement("button");
            buttonElement.classList.add("button", "trick__button");
            var iconElement = document.createElement("i");
            iconElement.classList.add("bx", "bx-cart-alt", "trick__icon");
            buttonElement.appendChild(iconElement);

            trickContent.appendChild(imgElement);
            trickContent.appendChild(titleElement);
            trickContent.appendChild(subtitleElement);
            trickContent.appendChild(priceElement);
            trickContent.appendChild(buttonElement);

            trickContainer.appendChild(trickContent);
        });
    })
    .catch(function(error) {
        console.log(error);
    });
</script>