
@include('header')
{{-- product card  --}}

<div class="container">
    <div class="row justify-content-center align-items-center height">
        <div class="card p-3" style="width: 350px;">
            <div class="row justify-content-between align-items-center">
                <div class="col mt-2">
                    <h4 class="text-uppercase">Ikea</h4>
                    <div class="mt-5">
                        <h5 class="text-uppercase mb-0">Blanda Matt</h5>
                        <h1 class="main-heading mt-0">VASE</h1>
                        <div class="d-flex flex-row user-ratings">
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h6 class="text-muted ml-1">4/5</h6>
                        </div>
                    </div>
                </div>
                <div class="col image">
                    <img src="https://th.bing.com/th/id/OIP.JFXIvrH9SRNxKWurKzIcrgHaHh?pid=ImgDet&w=178&h=180&c=7&dpr=1.5" width="200">
                </div>
            </div>

            <div class="row justify-content-between align-items-center mt-2 mb-2">
                <span>Available colors</span>
                <div class="colors">
                    <span class="color-circle bg-red"></span>
                    <span class="color-circle bg-blue"></span>
                    <span class="color-circle bg-yellow"></span>
                    <span class="color-circle bg-purple"></span>
                </div>
            </div>

            <p>A great option whether you are at the office or at home.</p>
            <button class="btn btn-danger">Add to cart</button>
        </div>
    </div>
</div>