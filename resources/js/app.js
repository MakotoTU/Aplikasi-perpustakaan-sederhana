import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import $ from 'jquery';
import select2 from 'select2';

// Manually initialize Select2 with the jQuery instance
select2($);

window.$ = window.jQuery = $;

import 'select2/dist/css/select2.min.css';
import 'select2-bootstrap-5-theme/dist/select2-bootstrap-5-theme.min.css';

// Import Flatpickr
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";

$(document).ready(function() {
    if ($('#select-anggota').length > 0) {
        $('#select-anggota').select2({
            theme: 'bootstrap-5',
            placeholder: "-- Pilih Anggota --",
            allowClear: true,
            width: '100%'
        });
    }

    // Initialize Select2 for 'Pilih Buku' dropdown
    if ($('#select-buku').length > 0) {
        $('#select-buku').select2({
            theme: 'bootstrap-5',
            placeholder: "-- Pilih Buku --",
            allowClear: true,
            width: '100%'
        });
    }

    // Initialize Flatpickr for date inputs
    flatpickr(".flatpickr-date", {
        dateFormat: "Y-m-d", // Format data yang dikirim ke server
        altInput: true,      // Menggunakan input alternatif untuk tampilan
        altFormat: "d/m/Y",  // Format tanggal yang ditampilkan ke user
        allowInput: true
    });
});
