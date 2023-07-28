@extends('layout.app')

@section('seo')
    <title>Contact</title>
@endsection

@section('content')
    <div id="contact" class="bg-light py-5">    
        <div class="container p-4 bg-white box-shadow">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="contact border p-4">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form">
                            <div class="group-field d-flex">
                                <div class="field w-50">
                                    <input type="text" placeholder="Name">  
                                </div>
                                <div class="field w-50">
                                    <input type="text" placeholder="Email">  
                                </div>
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Phone number">  
                            </div>
                            <div class="field">
                                <textarea name="comment" placeholder="Comment" rows="5"></textarea> 
                            </div>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                    <div class="col-lg-4 mt-3 m-lg-0">
                        <h4>Office</h4>
                        <div>
                            <div class="d-flex align-items-center py-2">
                                <i class="fa-solid fa-phone px-2"></i>
                                <p><span>Hotline: </span>1900.8079</p>
                            </div>
                            <div class="d-flex align-items-center py-2">
                                <i class="fa-solid fa-clock px-2"></i>
                                <p><span>Thời gian mở cửa: </span>8:00 - 19h Thứ 2 - Thứ 7</p>
                            </div>
                            <div class="d-flex align-items-center py-2">
                                <i class="fa-solid fa-location-dot px-2"></i>
                                <p><span>VP Phía Bắc: </span>Tầng 17 tòa nhà Viwaseen, 48 Phố Tố Hữu, Trung Văn, Nam Từ Liêm, Hà Nội.</p>
                            </div>
                            <div class="d-flex align-items-center py-2">
                                <i class="fa-solid fa-location-dot px-2"></i>
                                <p><span>VP Phía Nam: </span>Lô III.25, Đường 19/5A, Nhóm CN III, Khu Công Nghiệp Tân Bình, P. Tây Thạnh, Q. Tân Phú, HCM.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map py-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.5421401281583!2d106.68172527580981!3d11.072913653653416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527e27942656f%3A0x6263703256bee993!2zQ8O0bmcgVHkgVE5ISCBDdW5nIOG7qG5nIE5ow6JuIEzhu7FjIE5ow6JuIEtp4buHdA!5e0!3m2!1svi!2s!4v1689918770356!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="rounded" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection