const date = new Date();

let day = date.getDate();
let month = date.getMonth() + 1;
let year = date.getFullYear();

let currentDate = `${day}-${month}-${year}`;
document.getElementById("tgl").innerHTML = currentDate;



// dari view performance
document.getElementById('previewFoto').addEventListener('click', function() {
    const modalPreviewFoto = document.getElementById('modalPreviewFoto');
    const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
    // Mengatur pratinjau di dalam modal sesuai dengan gambar pratinjau yang terlihat
    modalPreviewFoto.setAttribute('src', document.getElementById('previewFoto').getAttribute('src'));
    // Menampilkan modal
    previewModal.show();
});



// dari tambah performance
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


// dari edit performance 
// document.addEventListener('DOMContentLoaded', function() {
//     const inputFoto = document.getElementById('inputFoto');
//     const modalPreviewFoto = document.getElementById('modalPreviewFoto');
//     const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));

//     // Set nilai atribut src saat halaman dimuat
//     document.getElementById('previewFoto').setAttribute('src', 'dataBaseFoto/<?php echo ($foto) ?>');

//     inputFoto.addEventListener('change', function(event) {
//         const file = event.target.files[0];
//         if (file) {
//             const reader = new FileReader();
//             reader.onload = function(e) {
//                 const imageUrl = e.target.result;
//                 document.getElementById('previewFoto').setAttribute('src', imageUrl);
//                 modalPreviewFoto.setAttribute('src', imageUrl); // Set pratinjau di dalam modal
//             };
//             reader.readAsDataURL(file);
//         } else {
//             document.getElementById('previewFoto').setAttribute('src', 'dataBaseFoto/<?php echo ($foto) ?>');
//             modalPreviewFoto.setAttribute('src', ''); // Menghapus pratinjau di dalam modal
//         }
//     });

//     // Menampilkan modal saat pratinjau ditekan
//     document.getElementById('previewFoto').addEventListener('click', function() {
//         modalPreviewFoto.setAttribute('src', document.getElementById('previewFoto').getAttribute('src'));
//         // Menampilkan modal
//         previewModal.show();
//     });
// });