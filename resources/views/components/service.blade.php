<div class="py-5">
  <div class="text-center">
    <h2>Layanan Kami Yang Lain</h2>

    <p class="mb-0">Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords</p>
  </div>

  <div class="d-flex justify-content-center mt-5">
    @foreach ($service_datas as $data)
    <div class="card shadow-lg mx-2" style="width: 20rem;">
      <div class="card-body d-flex flex-column justify-content-between">
        <div class="d-flex align-items-center">
          <img src="{{ $data['image'] }}" alt="service">
          
          <h4 class="card-title mb-0 fw-bold ms-2">{{ $data["title"] }}</h4>
        </div>

        <p class="my-3">{{ $data["desc"] }}</p>
        
        <p class="m-0">Mulai dari</p>
        
        <div class="mb-3 d-flex align-items-center">
          <h4 class="fs-3 m-0 text-primary fw-bold">Rp {{ $data["price"] }}</h4>
          
          <span class="ms-2">{{ $data["price_range"] }}</span>
        </div>
        
        <a href="#" class="btn btn-primary rounded-pill w-100">Pesan Sekarang</a>
      </div>
    </div>
    @endforeach
  </div>
</div>