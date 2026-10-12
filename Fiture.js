function scrollSlider(direction) {
    // Mencari elemen slider-content yang berada dekat dengan tombol yang diklik
    const gantiSlide = document.querySelector('.Swipe-cover');
    const scrollAmount = gantiSlide.clientWidth; // Sesuaikan dengan lebar gambar kamu
    
    if (direction === 1) {
        gantiSlide.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    } else {
        gantiSlide.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    }
  }