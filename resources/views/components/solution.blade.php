<div class="py-5" style="
background: rgb(255,109,11);
background: linear-gradient(360deg, rgba(255,109,11,1) 0%, rgba(255,201,165,1) 25%, rgba(255,255,255,1) 50%);
">
  <div class="container">
    <div class="text-center">
      <h2 class="fw-bold">Solusi Paket Hosting Terbaik dari Kami</h2>
      
      <p class="mb-0">Kami menawarkan solusi paket hosting terbaik untuk segala kebutuhan website dan sistem Anda. Mulai dari blog hingga website bisnis dan perusahaan</p>
    </div>
    
    <div class="d-flex justify-content-center mt-5 flex-wrap">
      @foreach ($solution_datas as $data)
      <div class="card m-2 position-relative text-light border-none" style="width: 20rem; background-color: #ff6d0b;">
        <div class="card-body d-flex flex-column justify-content-between position-absolute">
          <h4 class="card-title mb-0 fw-bold ms-2">{{ $data["title"] }}</h4>
          
          <p class="my-3">{{ $data["desc"] }}</p>
        </div>
        
        <img src="{{ $data['image'] }}" alt="solution">
      </div>
      @endforeach
    </div>
  </div>
</div>