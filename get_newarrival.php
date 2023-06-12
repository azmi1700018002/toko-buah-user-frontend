<script>
// Mendapatkan elemen HTML yang ingin diubah
var newContainer = document.querySelector('.new__container');

// Melakukan permintaan fetch ke API
fetch("http://localhost:3000/public/newarrival")
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        var newarrivalData = data.data;

        // Membuat elemen HTML untuk setiap data yang diterima
        newarrivalData.forEach(function(newarrival) {
            const newContent = document.createElement('div');
            newContent.className = 'new__content swiper-slide';

            const newTag = document.createElement('div');
            newTag.className = 'new__tag';
            newTag.textContent = 'New';

            const img = document.createElement('img');
            img.src = "../Toko-Buah-Admin/pages/uploads/newarrival/" + newarrival.Gambar;
            img.alt = '';

            const title = document.createElement('h3');
            title.className = 'new__title';
            title.textContent = newarrival.Nama;

            const subtitle = document.createElement('span');
            subtitle.className = 'new__subtitle text-light';
            subtitle.textContent = newarrival.Deskripsi;

            const prices = document.createElement('div');
            prices.className = 'new__prices';

            const price = document.createElement('span');
            price.className = 'new__price';
            price.textContent = 'Rp.' + newarrival.HargaPromo + ',00';

            const discount = document.createElement('span');
            discount.className = 'new__discount';
            discount.textContent = 'Rp.' + newarrival.HargaAwal + ',00';

            const button = document.createElement('button');
            button.className = 'button new__button';

            const icon = document.createElement('i');
            icon.className = 'bx bx-cart-alt new__icon';

            // Menyusun elemen-elemen HTML
            prices.appendChild(price);
            prices.appendChild(discount);

            button.appendChild(icon);

            newContent.appendChild(newTag);
            newContent.appendChild(img);
            newContent.appendChild(title);
            newContent.appendChild(subtitle);
            newContent.appendChild(prices);
            newContent.appendChild(button);

            newContainer.querySelector('.swiper-wrapper').appendChild(newContent);
        });

        // Inisialisasi Swiper setelah konten ditambahkan
        var swiper = new Swiper('.new-swiper', {
            // Konfigurasi Swiper
            centeredSlides: true,
            slidesPerView: "4",
            loop: "false",
            spaceBetween: 16,
        });
    })
    .catch(function(error) {
        console.log(error);
    });
</script>