<div class="bg-cartoon">
    <span class="badge text-bg-primary rounded-0 px-4 py-2">
        <h3>CURRENT SERIES</h3>
    </span>
</div>
<div>
    <div class="wrap bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 p-5 d-flex flex-wrap justify-content-center">
                    @foreach ($comics as $comic)
                        <div class="col-6 col-md-4 col-lg-2 mb-4 d-flex">
                            <div class="card border-0 bg-transparent w-100 mx-3">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"
                                    class="card-img-top img-fluid">
                                <div>
                                    <h5 class="text-white text-center pt-2">{{ $comic['series'] }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div>
                        <button class="btn btn-primary rounded-0 px-5">LOAD MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
