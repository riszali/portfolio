import './bootstrap';

// Mengimpor Alpine.js untuk state UI (seperti menu mobile & efek scroll)
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';

// Mengimpor Lucide untuk ikon modern
import { createIcons, icons } from 'lucide';

// Inisialisasi Alpine
window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.start();

// Inisialisasi Ikon secara global
createIcons({ icons });