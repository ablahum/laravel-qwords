<div class="py-5 container">
  <div class="text-center">
    <h2>Cloud Hosting Indonesia <span class="text-danger">Diskon Hingga 50%</span></h2>

    <p class="mb-0">Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda</p>
  </div>

  <div class="d-flex mt-5">
    @foreach ($hosting_datas as $data)
    <div class="card shadow-lg mx-2" style="width: 18rem;">
      <div class="card-body">
        <p class="mb-2">{{ $data["spec"] }}</p>
        
        <h4 class="card-title mb-3 fw-bold">{{ $data["title"] }}</h4>

        <s class="text-muted">Rp {{ $data["price_before"] }}</s>
        
        <h4 class="fs-3 m-0 text-primary fw-bold">Rp {{ $data["price_after"] }}</h4>

        <div class="my-4">      
          @foreach ($data["desc"] as $d)
          <div class="d-flex align-items-center mb-3">
            <img src="{{ asset('assets/disk.webp') }}" alt="logo" width="40">

            <div class="ms-3 d-flex flex-column">
              <span>Disk</span>
              
              <p class="fw-bold m-0">{{ $d }}</p>
            </div>
          </div>
          @endforeach
        </div>
        
        <a href="#" class="btn btn-primary rounded-pill w-100">Pesan Sekarang</a>
      </div>
    </div>
    @endforeach
  </div>
</div>