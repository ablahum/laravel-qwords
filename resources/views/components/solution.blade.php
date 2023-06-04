<div class="py-5 container">
  <div class="text-center">
    <h2>Solusi Paket Hosting Terbaik dari Kami</h2>

    <p class="mb-0">Kami menawarkan solusi paket hosting terbaik untuk segala kebutuhan website dan sistem Anda. Mulai dari blog hingga website bisnis dan perusahaan</p>
  </div>

  <div class="d-flex justify-content-center mt-5 flex-wrap">
    @foreach ($solution_datas as $data)
    <div class="card m-2 position-relative bg-primary text-light" style="width: 20rem;">
      <div class="card-body d-flex flex-column justify-content-between position-absolute">
        <h4 class="card-title mb-0 fw-bold ms-2">{{ $data["title"] }}</h4>

        <p class="my-3">{{ $data["desc"] }}</p>
      </div>

      <img src="{{ $data['image'] }}" alt="solution">
    </div>
    @endforeach
  </div>
</div>