<section id="gallery" class="pb-5 bg-primary">
    <div class="container">
        <h1 class="text-center py-5 text-white fw-bold">Our Photo Gallery</h1>
        <div class="row">
            @foreach($images as $image)
            <div class="col-xs-3 col-sm-3 col-md-3 mb-4">
                <a href="@asset($image)" data-fancybox="images">
                    <img class="img-fluid h-100 rounded shadow-sm" style="object-fit: cover; -o-object-fit: cover;" src="@asset($image)">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>