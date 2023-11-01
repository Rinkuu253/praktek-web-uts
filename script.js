const date = new Date();

let day = date.getDate();
let month = date.getMonth() + 1;
let year = date.getFullYear();

let currentDate = `${day}-${month}-${year}`;
document.getElementById("tgl").innerHTML = currentDate;

// dari tambah n edit performance
document.addEventListener('DOMContentLoaded', function() {
    const inputFoto = document.getElementById('inputFoto');
    const modalPreviewFoto = document.getElementById('modalPreviewFoto');
    const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));

    inputFoto.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imageUrl = e.target.result;
                document.getElementById('previewFoto').setAttribute('src', imageUrl);
                modalPreviewFoto.setAttribute('src', imageUrl); // Set pratinjau di dalam modal
            };
            reader.readAsDataURL(file);
        } else {
            document.getElementById('previewFoto').setAttribute('src', '');
            modalPreviewFoto.setAttribute('src', ''); // Menghapus pratinjau di dalam modal
        }
    });

    // Menampilkan modal saat pratinjau ditekan
    document.getElementById('previewFoto').addEventListener('click', function() {
        previewModal.show();
    });
});